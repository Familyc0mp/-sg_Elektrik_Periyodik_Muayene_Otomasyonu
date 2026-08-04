<?php
require_once 'includes/db.php';
require_once 'includes/functions.php';
require_once 'includes/auth.php';

requireLogin();

$editMode = false;
$kurum = null;
$existing_panolar = [];

// Edit Modu Kontrolü
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM pano_yurtlar WHERE id = ? AND silindi = 0");
    $stmt->execute([$id]);
    $kurum = $stmt->fetch();
    if ($kurum) {
        $editMode = true;
        // Panoları getir
        $pStmt = $pdo->prepare("SELECT * FROM panolar WHERE pano_kurum_id = ? ORDER BY sira ASC");
        $pStmt->execute([$id]);
        $existing_panolar = $pStmt->fetchAll();
        
        foreach ($existing_panolar as &$p) {
            $fStmt = $pdo->prepare("SELECT * FROM pano_fotograflar WHERE pano_id = ? ORDER BY id ASC");
            $fStmt->execute([$p['id']]);
            $p['fotograflar'] = $fStmt->fetchAll();
        }
        unset($p);
    }
}

// POST Kaydetme İşlemi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sn = cleanInput($_POST['sn']);
    $mintika = cleanInput($_POST['mintika']);
    $yurt_adi = cleanInput($_POST['yurt_adi']);
    $resmi_kurum_adi = cleanInput($_POST['resmi_kurum_adi']);
    $kapasite = cleanInput($_POST['kapasite']);
    $yurt_muduru = cleanInput($_POST['yurt_muduru']);
    $yurt_tel_no = cleanInput($_POST['yurt_tel_no']);
    $dernek_adi = cleanInput($_POST['dernek_adi']);
    $yurt_adresi = cleanInput($_POST['yurt_adresi']);
    $ada_no = cleanInput($_POST['ada_no']);
    $pafta_no = cleanInput($_POST['pafta_no']);
    $parsel_no = cleanInput($_POST['parsel_no']);

    $iskan_foto = $editMode ? $kurum['iskan_foto'] : null;
    $yangin_paneli_foto = $editMode ? $kurum['yangin_paneli_foto'] : null;

    // Klasörleri oluştur
    if (!file_exists('uploads/iskan')) mkdir('uploads/iskan', 0777, true);
    if (!file_exists('uploads/yangin')) mkdir('uploads/yangin', 0777, true);
    if (!file_exists('uploads/pano')) mkdir('uploads/pano', 0777, true);

    // İskan Belgesi Yükleme
    if (isset($_FILES['iskan_foto']) && $_FILES['iskan_foto']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['iskan_foto']['name'], PATHINFO_EXTENSION);
        $newFilename = 'iskan_' . uniqid() . '_' . time() . '.' . $ext;
        move_uploaded_file($_FILES['iskan_foto']['tmp_name'], 'uploads/iskan/' . $newFilename);
        $iskan_foto = 'uploads/iskan/' . $newFilename;
    }

    // Yangın Paneli Yükleme
    if (isset($_FILES['yangin_paneli_foto']) && $_FILES['yangin_paneli_foto']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['yangin_paneli_foto']['name'], PATHINFO_EXTENSION);
        $newFilename = 'yangin_' . uniqid() . '_' . time() . '.' . $ext;
        move_uploaded_file($_FILES['yangin_paneli_foto']['tmp_name'], 'uploads/yangin/' . $newFilename);
        $yangin_paneli_foto = 'uploads/yangin/' . $newFilename;
    }

    if ($editMode) {
        $kurum_id = $kurum['id'];
        $stmt = $pdo->prepare("UPDATE pano_yurtlar SET 
            sn = ?, mintika = ?, yurt_adi = ?, resmi_kurum_adi = ?, kapasite = ?, yurt_muduru = ?, yurt_tel_no = ?, dernek_adi = ?, yurt_adresi = ?, ada_no = ?, pafta_no = ?, parsel_no = ?, iskan_foto = ?, yangin_paneli_foto = ? 
            WHERE id = ?");
        $stmt->execute([$sn, $mintika, $yurt_adi, $resmi_kurum_adi, $kapasite, $yurt_muduru, $yurt_tel_no, $dernek_adi, $yurt_adresi, $ada_no, $pafta_no, $parsel_no, $iskan_foto, $yangin_paneli_foto, $kurum_id]);
    } else {
        $stmt = $pdo->prepare("INSERT INTO pano_yurtlar 
            (sn, mintika, yurt_adi, resmi_kurum_adi, kapasite, yurt_muduru, yurt_tel_no, dernek_adi, yurt_adresi, ada_no, pafta_no, parsel_no, iskan_foto, yangin_paneli_foto) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->execute([$sn, $mintika, $yurt_adi, $resmi_kurum_adi, $kapasite, $yurt_muduru, $yurt_tel_no, $dernek_adi, $yurt_adresi, $ada_no, $pafta_no, $parsel_no, $iskan_foto, $yangin_paneli_foto]);
        $kurum_id = $pdo->lastInsertId();
    }

    // Panolar ve Fotoğraflar Kaydı
    $existing_pano_ids = isset($_POST['existing_pano_id']) ? $_POST['existing_pano_id'] : [];
    $pano_keys = isset($_POST['pano_key']) ? $_POST['pano_key'] : [];
    $pano_names = isset($_POST['pano_adi']) ? $_POST['pano_adi'] : [];

    // Silinen panoları temizle
    $valid_db_ids = array_filter(array_map('intval', $existing_pano_ids));
    if ($editMode) {
        if (!empty($valid_db_ids)) {
            $inClause = implode(',', $valid_db_ids);
            $pdo->exec("DELETE FROM panolar WHERE pano_kurum_id = $kurum_id AND id NOT IN ($inClause)");
        } else {
            $pdo->exec("DELETE FROM panolar WHERE pano_kurum_id = $kurum_id");
        }
    }

    // Panoları kaydet/güncelle
    foreach ($pano_keys as $idx => $key) {
        $db_pano_id = (int)($existing_pano_ids[$idx] ?? 0);
        $name = $pano_names[$idx] ?? '';
        
        if ($db_pano_id > 0) {
            $stmt = $pdo->prepare("UPDATE panolar SET pano_adi = ?, sira = ? WHERE id = ?");
            $stmt->execute([$name, $idx, $db_pano_id]);
            $panel_id = $db_pano_id;
        } else {
            $stmt = $pdo->prepare("INSERT INTO panolar (pano_kurum_id, pano_adi, sira) VALUES (?, ?, ?)");
            $stmt->execute([$kurum_id, $name, $idx]);
            $panel_id = $pdo->lastInsertId();
        }

        // Mevcut fotoğraflardan silinenleri temizle
        $existing_photo_inputs = $_POST["existing_foto_id_{$key}"] ?? [];
        $valid_photo_db_ids = array_filter(array_map('intval', $existing_photo_inputs));
        if ($db_pano_id > 0) {
            if (!empty($valid_photo_db_ids)) {
                $inClause = implode(',', $valid_photo_db_ids);
                $pdo->exec("DELETE FROM pano_fotograflar WHERE pano_id = $panel_id AND id NOT IN ($inClause)");
            } else {
                $pdo->exec("DELETE FROM pano_fotograflar WHERE pano_id = $panel_id");
            }
        }

        // Yeni Normal Fotoğrafları Yükle
        if (isset($_FILES["pano_photos_normal_{$key}"])) {
            $files = $_FILES["pano_photos_normal_{$key}"];
            foreach ($files['tmp_name'] as $fIdx => $tmpName) {
                if ($files['error'][$fIdx] === UPLOAD_ERR_OK) {
                    $ext = pathinfo($files['name'][$fIdx], PATHINFO_EXTENSION);
                    $newFilename = 'normal_' . uniqid() . '_' . time() . '.' . $ext;
                    move_uploaded_file($tmpName, 'uploads/pano/' . $newFilename);
                    $db_path = 'uploads/pano/' . $newFilename;
                    
                    $stmt = $pdo->prepare("INSERT INTO pano_fotograflar (pano_id, foto_tipi, foto_yolu) VALUES (?, 'normal', ?)");
                    $stmt->execute([$panel_id, $db_path]);
                }
            }
        }

        // Yeni Termal Fotoğrafları Yükle
        if (isset($_FILES["pano_photos_termal_{$key}"])) {
            $files = $_FILES["pano_photos_termal_{$key}"];
            foreach ($files['tmp_name'] as $fIdx => $tmpName) {
                if ($files['error'][$fIdx] === UPLOAD_ERR_OK) {
                    $ext = pathinfo($files['name'][$fIdx], PATHINFO_EXTENSION);
                    $newFilename = 'termal_' . uniqid() . '_' . time() . '.' . $ext;
                    move_uploaded_file($tmpName, 'uploads/pano/' . $newFilename);
                    $db_path = 'uploads/pano/' . $newFilename;
                    
                    $stmt = $pdo->prepare("INSERT INTO pano_fotograflar (pano_id, foto_tipi, foto_yolu) VALUES (?, 'termal', ?)");
                    $stmt->execute([$panel_id, $db_path]);
                }
            }
        }
    }

    header("Location: pano_index.php");
    exit;
}

include 'includes/header.php';

// 1. Sistem Kurumlarını Getir (Miras Alma İçin)
$sistem1_kurumlar = $pdo->query("SELECT * FROM institutions ORDER BY firma_adi ASC")->fetchAll();
$plate_to_city = [
    '01' => 'Adana', '02' => 'Adıyaman', '03' => 'Afyon', '04' => 'Ağrı', '05' => 'Amasya', '06' => 'Ankara',
    '07' => 'Antalya', '08' => 'Artvin', '09' => 'Aydın', '10' => 'Balıkesir', '11' => 'Bilecik', '12' => 'Bingöl',
    '13' => 'Bitlis', '14' => 'Bolu', '15' => 'Burdur', '16' => 'Bursa', '17' => 'Çanakkale', '18' => 'Çankırı',
    '19' => 'Çorum', '20' => 'Denizli', '21' => 'Diyarbakır', '22' => 'Edirne', '23' => 'Elazığ', '24' => 'Erzincan',
    '25' => 'Erzurum', '26' => 'Eskişehir', '27' => 'Gaziantep', '28' => 'Giresun', '29' => 'Gümüşhane', '30' => 'Hakkari',
    '31' => 'Hatay', '32' => 'Isparta', '33' => 'Mersin', '34' => 'İstanbul', '35' => 'İzmir', '36' => 'Kars',
    '37' => 'Kastamonu', '38' => 'Kayseri', '39' => 'Kırklareli', '40' => 'Kırşehir', '41' => 'Kocaeli', '42' => 'Konya',
    '43' => 'Kütahya', '44' => 'Malatya', '45' => 'Manisa', '46' => 'Kahramanmaraş', '47' => 'Mardin', '48' => 'Muğla',
    '49' => 'Muş', '50' => 'Nevşehir', '51' => 'Niğde', '52' => 'Ordu', '53' => 'Rize', '54' => 'Sakarya',
    '55' => 'Samsun', '56' => 'Siirt', '57' => 'Sinop', '58' => 'Sivas', '59' => 'Tekirdağ', '60' => 'Tokat',
    '61' => 'Trabzon', '62' => 'Tunceli', '63' => 'Şanlıurfa', '64' => 'Uşak', '65' => 'Van', '66' => 'Yozgat',
    '67' => 'Zonguldak', '68' => 'Aksaray', '69' => 'Bayburt', '70' => 'Karaman', '71' => 'Kırıkkale', '72' => 'Batman',
    '73' => 'Şırnak', '74' => 'Bartın', '75' => 'Ardahan', '76' => 'Iğdır', '77' => 'Yalova', '78' => 'Karabük',
    '79' => 'Kilis', '80' => 'Osmaniye', '81' => 'Düzce'
];
$sistem1KurumlarMap = [];
foreach ($sistem1_kurumlar as $k) {
    $sistem1KurumlarMap[$k['id']] = [
        'id' => $k['id'],
        'sn' => '',
        'mintika' => $plate_to_city[$k['il_kodu']] ?? $k['il_kodu'],
        'yurt_adi' => $k['firma_adi'],
        'resmi_kurum_adi' => $k['firma_adi'],
        'kapasite' => '',
        'yurt_muduru' => '',
        'yurt_tel_no' => '',
        'dernek_adi' => '',
        'yurt_adresi' => $k['adresi'],
        'ada_no' => '',
        'pafta_no' => '',
        'parsel_no' => ''
    ];
}
?>

<style>
    .form-section {
        background: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        margin-bottom: 24px;
        border: 1px solid #e2e8f0;
    }
    .form-section-header {
        display: flex;
        align-items: center;
        gap: 12px;
        border-bottom: 1px solid #e2e8f0;
        padding-bottom: 12px;
        margin-bottom: 20px;
    }
    .section-icon {
        width: 36px;
        height: 36px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.1rem;
    }
    .section-icon.blue { background-color: #0d6efd; }
    .section-icon.green { background-color: #198754; }
    .section-icon.red { background-color: #dc3545; }
    .section-icon.amber { background-color: #ffc107; color: #000; }
    .section-title {
        font-size: 1.1rem;
        font-weight: 700;
        color: #1e293b;
    }
    .photo-preview-box {
        width: 100%;
        height: 180px;
        border: 2px dashed #cbd5e1;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f8fafc;
        overflow: hidden;
        position: relative;
        margin-top: 0.5rem;
    }
    .photo-preview-box img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .photo-preview-placeholder {
        text-align: center;
        color: #94a3b8;
        font-size: 0.85rem;
    }
    .photo-preview-placeholder i {
        font-size: 2rem;
        margin-bottom: 0.5rem;
        display: block;
    }
    .pano-list-card {
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        overflow: hidden;
        background: #ffffff;
    }
    .pano-list-header {
        background: #0d6efd;
        color: #ffffff;
        font-weight: 700;
        font-size: 1rem;
        padding: 10px 15px;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .pano-list-item {
        cursor: pointer;
        transition: all 0.15s ease;
        border-bottom: 1px solid #e2e8f0;
        padding: 10px 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #ffffff;
        border-left: 4px solid transparent;
    }
    .pano-list-item:hover {
        background-color: #f8fafc;
    }
    .pano-list-item.active {
        background-color: #eff6ff;
        border-left-color: #0d6efd;
    }
    .pano-name {
        font-weight: 600;
        color: #1e293b;
        font-size: 0.9rem;
    }
    .pano-btn-icon {
        width: 26px;
        height: 26px;
        border-radius: 4px;
        border: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 0.8rem;
        cursor: pointer;
        transition: background-color 0.15s ease;
    }
    .pano-btn-edit { background: #e2e8f0; color: #475569; }
    .pano-btn-edit:hover { background: #cbd5e1; }
    .pano-btn-delete { background: #fee2e2; color: #ef4444; }
    .pano-btn-delete:hover { background: #fecaca; }
    .photo-grid-card {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
        background: #fff;
    }
    .photo-grid-img-wrapper {
        position: relative;
        height: 140px;
        background: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .photo-grid-img-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
</style>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fas fa-edit text-primary me-2"></i> <?php echo $editMode ? 'Pano & Belge Kaydını Düzenle' : 'Yeni Pano & Belge Kaydı'; ?></h1>
</div>

<form method="POST" enctype="multipart/form-data" id="panoForm">
    <!-- ================= BÖLÜM 0: KURUMLAR (MİRAS ALMA) ================= -->
    <?php if (!$editMode): ?>
        <div class="form-section">
            <div class="form-section-header">
                <div class="section-icon blue"><i class="fas fa-file-import"></i></div>
                <div class="section-title">0. Kurum Bilgilerini Miras Al</div>
            </div>
            <div class="row align-items-end">
                <div class="col-md-9 mb-3">
                    <label class="form-label fw-bold">1. Sistemdeki Kurumu Seçin:</label>
                    <select id="selectSistem1Kurum" class="form-select border-primary">
                        <option value="">-- Seçiniz --</option>
                        <?php foreach ($sistem1_kurumlar as $k): ?>
                            <option value="<?php echo $k['id']; ?>"><?php echo htmlspecialchars($k['firma_adi']); ?> (<?php echo htmlspecialchars($plate_to_city[$k['il_kodu']] ?? $k['il_kodu']); ?>)</option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <button type="button" class="btn btn-primary w-100 fw-bold" onclick="mirasAlSistem1()">
                        <i class="fas fa-arrow-down-long me-1"></i> Bilgileri Aktar
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <!-- ================= BÖLÜM 1: GENEL BİLGİLER ================= -->
    <div class="form-section" id="sec0">
        <div class="form-section-header">
            <div class="section-icon blue"><i class="fas fa-building"></i></div>
            <div class="section-title">1. Kurum / Yurt Bilgileri</div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <label class="form-label">S.N</label>
                <input type="text" name="sn" class="form-control" value="<?php echo htmlspecialchars($kurum['sn'] ?? ''); ?>">
            </div>
            <div class="col-md-4 mb-3">
                <label class="form-label">Mıntıka</label>
                <input type="text" name="mintika" class="form-control" value="<?php echo htmlspecialchars($kurum['mintika'] ?? ''); ?>">
            </div>
            <div class="col-md-5 mb-3">
                <label class="form-label fw-bold">Yurt/Kurum Adı</label>
                <input type="text" name="yurt_adi" class="form-control" required value="<?php echo htmlspecialchars($kurum['yurt_adi'] ?? ''); ?>">
            </div>
            
            <div class="col-md-6 mb-3">
                <label class="form-label">Resmi Kurum Adı</label>
                <input type="text" name="resmi_kurum_adi" class="form-control" value="<?php echo htmlspecialchars($kurum['resmi_kurum_adi'] ?? ''); ?>">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Kapasite</label>
                <input type="text" name="kapasite" class="form-control" value="<?php echo htmlspecialchars($kurum['kapasite'] ?? ''); ?>">
            </div>
            <div class="col-md-3 mb-3">
                <label class="form-label">Yurt Müdürü</label>
                <input type="text" name="yurt_muduru" class="form-control" value="<?php echo htmlspecialchars($kurum['yurt_muduru'] ?? ''); ?>">
            </div>

            <div class="col-md-3 mb-3">
                <label class="form-label">Yurt Tel No</label>
                <input type="text" name="yurt_tel_no" class="form-control" value="<?php echo htmlspecialchars($kurum['yurt_tel_no'] ?? ''); ?>">
            </div>
            <div class="col-md-5 mb-3">
                <label class="form-label">Dernek Adı</label>
                <input type="text" name="dernek_adi" class="form-control" value="<?php echo htmlspecialchars($kurum['dernek_adi'] ?? ''); ?>">
            </div>
            <div class="col-md-4 mb-3">
                <div class="row">
                    <div class="col-4">
                        <label class="form-label">Ada</label>
                        <input type="text" name="ada_no" class="form-control" value="<?php echo htmlspecialchars($kurum['ada_no'] ?? ''); ?>">
                    </div>
                    <div class="col-4">
                        <label class="form-label">Pafta</label>
                        <input type="text" name="pafta_no" class="form-control" value="<?php echo htmlspecialchars($kurum['pafta_no'] ?? ''); ?>">
                    </div>
                    <div class="col-4">
                        <label class="form-label">Parsel</label>
                        <input type="text" name="parsel_no" class="form-control" value="<?php echo htmlspecialchars($kurum['parsel_no'] ?? ''); ?>">
                    </div>
                </div>
            </div>

            <div class="col-12 mb-3">
                <label class="form-label">Yurt Adresi</label>
                <textarea name="yurt_adresi" class="form-control" rows="2"><?php echo htmlspecialchars($kurum['yurt_adresi'] ?? ''); ?></textarea>
            </div>
        </div>
    </div>

    <!-- ================= BÖLÜM 2: BELGELER ================= -->
    <div class="form-section">
        <div class="form-section-header">
            <div class="section-icon green"><i class="fas fa-file-shield"></i></div>
            <div class="section-title">2. Temel Belgeler (İskan & Yangın)</div>
        </div>
        <div class="row">
            <!-- İSKAN BELGESİ -->
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">İskan Belgesi (Görsel veya PDF)</label>
                <input type="file" name="iskan_foto" class="form-control form-control-sm" accept="image/*,application/pdf" onchange="previewFile(this, 'iskanPreview')">
                <div class="photo-preview-box" id="iskanPreview">
                    <?php if (!empty($kurum['iskan_foto'])): ?>
                        <?php if (strtolower(pathinfo($kurum['iskan_foto'], PATHINFO_EXTENSION)) === 'pdf'): ?>
                            <div class="text-center py-4"><i class="fas fa-file-pdf text-danger fa-3x mb-2"></i><br>PDF Belgesi Yüklü</div>
                        <?php else: ?>
                            <img src="<?php echo $kurum['iskan_foto']; ?>" alt="İskan Belgesi">
                        <?php endif; ?>
                    <?php else: ?>
                        <div class="photo-preview-placeholder">
                            <i class="fas fa-file-contract"></i>
                            <span>Önizleme bulunmuyor.</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- YANGIN PANELİ -->
            <div class="col-md-6 mb-3">
                <label class="form-label fw-bold">Yangın Paneli Fotoğrafı</label>
                <input type="file" name="yangin_paneli_foto" class="form-control form-control-sm" accept="image/*" onchange="previewImage(this, 'yanginPreview')">
                <div class="photo-preview-box" id="yanginPreview">
                    <?php if (!empty($kurum['yangin_paneli_foto'])): ?>
                        <img src="<?php echo $kurum['yangin_paneli_foto']; ?>" alt="Yangın Paneli">
                    <?php else: ?>
                        <div class="photo-preview-placeholder">
                            <i class="fas fa-fire-extinguisher"></i>
                            <span>Önizleme bulunmuyor.</span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- ================= BÖLÜM 3: ELEKTRİK PANOLARI ================= -->
    <div class="form-section">
        <div class="form-section-header">
            <div class="section-icon amber"><i class="fas fa-bolt"></i></div>
            <div class="section-title">3. Elektrik Panoları ve Fotoğrafları</div>
        </div>
        
        <div class="row">
            <!-- SOL LİSTE -->
            <div class="col-lg-4 col-md-5 mb-3">
                <div class="pano-list-card">
                    <div class="pano-list-header">
                        <i class="fas fa-list-check fs-5"></i>
                        <span>Panolar</span>
                        <span class="badge bg-white text-primary ms-auto" id="panoCountBadge">0</span>
                    </div>
                    <div style="max-height: 400px; overflow-y: auto;">
                        <div id="panoListGroup">
                            <!-- Dinamik panolar JS ile eklenecek -->
                        </div>
                    </div>
                    <div class="p-2 border-top bg-light">
                        <div class="input-group">
                            <input type="text" id="newPanoInput" class="form-control form-control-sm" placeholder="Pano adı..." onkeypress="if(event.key==='Enter'){event.preventDefault(); addPanoFromInput();}">
                            <button type="button" class="btn btn-success btn-sm px-3" onclick="addPanoFromInput()">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SAĞ ALAN -->
            <div class="col-lg-8 col-md-7 mb-3">
                <div id="activePanoWorkspace" class="card shadow-sm border rounded h-100" style="display: none;">
                    <div class="card-header bg-white border-bottom d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-warning text-dark"><i class="fas fa-bolt"></i> Seçili Pano</span>
                            <h6 class="m-0 fw-bold text-dark" id="activePanoTitleDisplay">Pano Adı</h6>
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm py-1 px-2 text-xs" onclick="renameActivePano()">
                            <i class="fas fa-edit me-1"></i> İsmi Düzenle
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2 mb-3 p-2 bg-light rounded border align-items-center">
                            <button type="button" class="btn btn-primary btn-sm py-1" onclick="triggerNormalMultiSelect()">
                                <i class="fas fa-camera me-1"></i> + Normal Ekle
                            </button>
                            <button type="button" class="btn btn-danger btn-sm py-1" onclick="triggerTermalMultiSelect()">
                                <i class="fas fa-fire me-1"></i> + Termal Ekle
                            </button>
                            <span class="text-muted small ms-auto text-xs"><i class="fas fa-info-circle"></i> Birden fazla seçebilirsiniz.</span>
                        </div>

                        <h6 class="fw-bold text-dark border-bottom pb-1 mb-2 text-xs">
                            <i class="fas fa-images text-primary me-2"></i> Pano Fotoğrafları (<span id="activePhotoCount">0</span>)
                        </h6>

                        <div class="row g-2" id="activePanoPhotoGrid">
                            <!-- Fotoğraf kartları JS ile yüklenecek -->
                        </div>
                    </div>
                </div>

                <div id="noPanoSelectedWorkspace" class="card shadow-sm border rounded h-100 d-flex align-items-center justify-content-center p-5 text-center bg-light">
                    <div class="text-muted">
                        <i class="fas fa-hand-pointer fs-1 mb-2 text-primary opacity-50"></i>
                        <h6>Pano Seçiniz veya Yeni Pano Ekleyiniz</h6>
                        <p class="small mb-0 text-xs">Sol listeden bir panoya tıklayarak normal/termal fotoğraf yükleyebilirsiniz.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- POST Verisi İçin Gizli Alanlar -->
        <div id="panolarHiddenData" style="display: none;"></div>
    </div>

    <!-- SUBMIT ACTIONS -->
    <div class="d-flex align-items-center justify-content-end gap-3 mt-4">
        <a href="pano_index.php" class="btn btn-outline-secondary">İptal</a>
        <button type="submit" class="btn btn-success fw-bold px-4">
            <i class="fas fa-save me-1"></i> Pano & Belge Kaydını Tamamla
        </button>
    </div>
</form>

<script>
let panoCounter = 0;
let activePanoId = null;
const panoState = {};
const existingPanolar = <?php echo json_encode($existing_panolar); ?>;
const sistem1KurumlarMap = <?php echo json_encode($sistem1KurumlarMap); ?>;

document.addEventListener('DOMContentLoaded', function() {
    if (existingPanolar && existingPanolar.length > 0) {
        existingPanolar.forEach(p => {
            addPanoItem(p.pano_adi, p.id, p.fotograflar || []);
        });
    } else {
        // Default stubs
        addPanoItem('Sayaç Panosu');
        addPanoItem('Ana Dağıtım Panosu');
    }

    const firstPano = document.querySelector('.pano-list-item');
    if (firstPano) {
        const firstId = parseInt(firstPano.dataset.panoId);
        selectPano(firstId);
    }
});

function mirasAlSistem1() {
    const sel = document.getElementById('selectSistem1Kurum');
    const val = sel.value;
    if (!val || !sistem1KurumlarMap[val]) {
        alert('Lütfen bir kurum seçiniz.');
        return;
    }
    
    const k = sistem1KurumlarMap[val];
    if (confirm('"' + k.yurt_adi + '" kurumuna ait veriler aktarılacaktır. Onaylıyor musunuz?')) {
        const fields = ['sn', 'mintika', 'yurt_adi', 'resmi_kurum_adi', 'kapasite', 'yurt_muduru', 'yurt_tel_no', 'dernek_adi', 'ada_no', 'pafta_no', 'parsel_no'];
        fields.forEach(f => {
            const el = document.querySelector(`input[name="${f}"]`);
            if (el) el.value = k[f] || '';
        });
        const addr = document.querySelector(`textarea[name="yurt_adresi"]`);
        if (addr) addr.value = k.yurt_adresi || '';
        
        // Highlight section
        const sec = document.getElementById('sec0');
        sec.style.backgroundColor = '#dbeafe';
        setTimeout(() => { sec.style.backgroundColor = ''; }, 1000);
    }
}

function addPanoFromInput() {
    const input = document.getElementById('newPanoInput');
    const name = input.value.trim();
    if (!name) {
        alert('Lütfen pano adı giriniz.');
        return;
    }
    const id = addPanoItem(name);
    input.value = '';
    selectPano(id);
}

function addPanoItem(name, dbId = 0, initialFotos = []) {
    panoCounter++;
    const id = panoCounter;

    panoState[id] = {
        id: id,
        dbId: dbId,
        name: name,
        existingPhotos: [...initialFotos],
        stagedNormalFiles: [],
        stagedTermalFiles: []
    };

    const hiddenContainer = document.getElementById('panolarHiddenData');
    const wrapper = document.createElement('div');
    wrapper.id = `pano_hidden_wrapper_${id}`;
    wrapper.innerHTML = `
        <input type="hidden" name="existing_pano_id[]" value="${dbId}">
        <input type="hidden" name="pano_key[]" value="${id}">
        <input type="hidden" name="pano_adi[]" id="input_name_${id}" value="${escapeHtml(name)}">
        <div id="existing_photos_inputs_${id}"></div>
        <input type="file" name="pano_photos_normal_${id}[]" id="file_input_normal_${id}" accept="image/*" multiple style="display:none;" onchange="onNormalFilesSelected(${id}, this)">
        <input type="file" name="pano_photos_termal_${id}[]" id="file_input_termal_${id}" accept="image/*" multiple style="display:none;" onchange="onTermalFilesSelected(${id}, this)">
    `;
    hiddenContainer.appendChild(wrapper);

    syncExistingPhotosInputs(id);

    const listGroup = document.getElementById('panoListGroup');
    const item = document.createElement('div');
    item.className = 'pano-list-item';
    item.id = `pano_item_${id}`;
    item.dataset.panoId = id;
    item.onclick = function() { selectPano(id); };

    item.innerHTML = `
        <div class="d-flex align-items-center gap-2 me-2 overflow-hidden">
            <i class="fas fa-bolt text-warning"></i>
            <span class="pano-name" id="pano_label_${id}">${escapeHtml(name)}</span>
        </div>
        <div class="d-flex align-items-center gap-1">
            <span class="badge bg-light text-dark border me-1 text-xs px-1" id="pano_count_badge_${id}">0 foto</span>
            <button type="button" class="pano-btn-icon pano-btn-edit" title="İsmi Düzenle" onclick="event.stopPropagation(); renamePano(${id})">
                <i class="fas fa-pen"></i>
            </button>
            <button type="button" class="pano-btn-icon pano-btn-delete" title="Panoyu Sil" onclick="event.stopPropagation(); deletePano(${id})">
                <i class="fas fa-trash-can"></i>
            </button>
        </div>
    `;

    listGroup.appendChild(item);
    updatePanoListItemCount(id);
    updatePanoCount();

    return id;
}

function syncExistingPhotosInputs(id) {
    const container = document.getElementById(`existing_photos_inputs_${id}`);
    if (!container || !panoState[id]) return;

    let html = '';
    panoState[id].existingPhotos.forEach(p => {
        if (p.id > 0) {
            html += `<input type="hidden" name="existing_foto_id_${id}[]" value="${p.id}">`;
        }
    });
    container.innerHTML = html;
}

function selectPano(id) {
    activePanoId = id;

    document.querySelectorAll('.pano-list-item').forEach(el => el.classList.remove('active'));
    const activeItem = document.getElementById(`pano_item_${id}`);
    if (activeItem) activeItem.classList.add('active');

    document.getElementById('noPanoSelectedWorkspace').style.display = 'none';
    document.getElementById('activePanoWorkspace').style.display = 'flex';

    const st = panoState[id];
    document.getElementById('activePanoTitleDisplay').innerText = st ? st.name : '';

    renderActivePanoPhotoGrid();
}

function renderActivePanoPhotoGrid() {
    if (!activePanoId || !panoState[activePanoId]) return;
    const st = panoState[activePanoId];
    const grid = document.getElementById('activePanoPhotoGrid');
    grid.innerHTML = '';

    let totalCount = 0;

    // 1. Existing DB Photos
    st.existingPhotos.forEach((p, idx) => {
        totalCount++;
        const col = document.createElement('div');
        col.className = 'col-sm-6 col-md-4';
        const isTermal = (p.foto_tipi === 'termal');
        
        col.innerHTML = `
            <div class="photo-grid-card">
                <div class="photo-grid-img-wrapper">
                    <span class="photo-type-badge ${isTermal ? 'badge-type-termal' : 'badge-type-normal'}">
                        ${isTermal ? '<i class="fas fa-fire me-1"></i>Termal' : '<i class="fas fa-camera me-1"></i>Normal'}
                    </span>
                    <img src="${p.foto_yolu}" alt="Fotoğraf">
                </div>
                <div class="photo-card-actions">
                    <a href="${p.foto_yolu}" download class="btn btn-outline-success btn-xs w-100 py-1" title="İndir">
                        <i class="fas fa-download me-1"></i> İndir
                    </a>
                    <button type="button" class="btn btn-outline-danger btn-xs px-2 py-1" title="Fotoğrafı Sil" onclick="deleteExistingPhoto(${activePanoId}, ${idx})">
                        <i class="fas fa-trash-can"></i>
                    </button>
                </div>
            </div>
        `;
        grid.appendChild(col);
    });

    // 2. Staged Normal Photos
    st.stagedNormalFiles.forEach((file, idx) => {
        totalCount++;
        const col = document.createElement('div');
        col.className = 'col-sm-6 col-md-4';
        const objectUrl = URL.createObjectURL(file);

        col.innerHTML = `
            <div class="photo-grid-card">
                <div class="photo-grid-img-wrapper">
                    <span class="photo-type-badge badge-type-normal">
                        <i class="fas fa-camera me-1"></i>Yeni Normal
                     </span>
                    <img src="${objectUrl}" alt="Normal Fotoğraf">
                </div>
                <div class="photo-card-actions">
                    <button type="button" class="btn btn-outline-danger btn-xs w-100 py-1" onclick="deleteStagedNormalFile(${activePanoId}, ${idx})">
                        <i class="fas fa-trash-can me-1"></i> Kaldır
                    </button>
                </div>
            </div>
        `;
        grid.appendChild(col);
    });

    // 3. Staged Termal Photos
    st.stagedTermalFiles.forEach((file, idx) => {
        totalCount++;
        const col = document.createElement('div');
        col.className = 'col-sm-6 col-md-4';
        const objectUrl = URL.createObjectURL(file);

        col.innerHTML = `
            <div class="photo-grid-card">
                <div class="photo-grid-img-wrapper">
                    <span class="photo-type-badge badge-type-termal">
                        <i class="fas fa-fire me-1"></i>Yeni Termal
                    </span>
                    <img src="${objectUrl}" alt="Termal Fotoğraf">
                </div>
                <div class="photo-card-actions">
                    <button type="button" class="btn btn-outline-danger btn-xs w-100 py-1" onclick="deleteStagedTermalFile(${activePanoId}, ${idx})">
                        <i class="fas fa-trash-can me-1"></i> Kaldır
                    </button>
                </div>
            </div>
        `;
        grid.appendChild(col);
    });

    if (totalCount === 0) {
        grid.innerHTML = `
            <div class="col-12">
                <div class="p-3 text-center text-muted bg-light rounded border border-dashed text-xs">
                    <i class="fas fa-images fs-3 mb-1 opacity-50"></i>
                    <p class="mb-0">Henüz fotoğraf eklenmemiş.</p>
                </div>
            </div>
        `;
    }

    document.getElementById('activePhotoCount').innerText = totalCount;
    updatePanoListItemCount(activePanoId);
}

function triggerNormalMultiSelect() {
    if (activePanoId) document.getElementById(`file_input_normal_${activePanoId}`).click();
}

function triggerTermalMultiSelect() {
    if (activePanoId) document.getElementById(`file_input_termal_${activePanoId}`).click();
}

function onNormalFilesSelected(id, input) {
    if (!input.files || input.files.length === 0) return;
    const st = panoState[id];
    for (let i = 0; i < input.files.length; i++) {
        st.stagedNormalFiles.push(input.files[i]);
    }
    if (id === activePanoId) renderActivePanoPhotoGrid();
}

function onTermalFilesSelected(id, input) {
    if (!input.files || input.files.length === 0) return;
    const st = panoState[id];
    for (let i = 0; i < input.files.length; i++) {
        st.stagedTermalFiles.push(input.files[i]);
    }
    if (id === activePanoId) renderActivePanoPhotoGrid();
}

function deleteExistingPhoto(panoId, index) {
    if (!confirm('Bu fotoğrafı silmek istediğinizden emin misiniz?')) return;
    const st = panoState[panoId];
    if (st && st.existingPhotos[index]) {
        st.existingPhotos.splice(index, 1);
        syncExistingPhotosInputs(panoId);
        if (panoId === activePanoId) renderActivePanoPhotoGrid();
    }
}

function deleteStagedNormalFile(panoId, index) {
    const st = panoState[panoId];
    if (st && st.stagedNormalFiles[index]) {
        st.stagedNormalFiles.splice(index, 1);
        if (panoId === activePanoId) renderActivePanoPhotoGrid();
    }
}

function deleteStagedTermalFile(panoId, index) {
    const st = panoState[panoId];
    if (st && st.stagedTermalFiles[index]) {
        st.stagedTermalFiles.splice(index, 1);
        if (panoId === activePanoId) renderActivePanoPhotoGrid();
    }
}

function renamePano(id) {
    const st = panoState[id];
    if (!st) return;
    const newName = prompt('Pano ismi girin:', st.name);
    if (newName !== null && newName.trim() !== '') {
        st.name = newName.trim();
        const input = document.getElementById(`input_name_${id}`);
        if (input) input.value = st.name;
        const label = document.getElementById(`pano_label_${id}`);
        if (label) label.innerText = st.name;
        if (id === activePanoId) {
            document.getElementById('activePanoTitleDisplay').innerText = st.name;
        }
    }
}

function renameActivePano() {
    if (activePanoId) renamePano(activePanoId);
}

function deletePano(id) {
    if (!confirm('Bu panoyu silmek istediğinizden emin misiniz?')) return;

    delete panoState[id];
    const item = document.getElementById(`pano_item_${id}`);
    const wrapper = document.getElementById(`pano_hidden_wrapper_${id}`);

    if (item) item.remove();
    if (wrapper) wrapper.remove();

    updatePanoCount();

    if (activePanoId === id) {
        const remaining = document.querySelector('.pano-list-item');
        if (remaining) {
            selectPano(parseInt(remaining.dataset.panoId));
        } else {
            activePanoId = null;
            document.getElementById('activePanoWorkspace').style.display = 'none';
            document.getElementById('noPanoSelectedWorkspace').style.display = 'flex';
        }
    }
}

function updatePanoListItemCount(id) {
    const badge = document.getElementById(`pano_count_badge_${id}`);
    const st = panoState[id];
    if (!badge || !st) return;

    const count = st.existingPhotos.length + st.stagedNormalFiles.length + st.stagedTermalFiles.length;
    badge.innerText = `${count} foto`;
}

function updatePanoCount() {
    const count = document.querySelectorAll('.pano-list-item').length;
    const badge = document.getElementById('panoCountBadge');
    if (badge) badge.innerText = count;
}

function previewFile(input, previewId) {
    const previewBox = document.getElementById(previewId);
    if (input.files && input.files[0]) {
        const file = input.files[0];
        if (file.type === "application/pdf") {
            previewBox.innerHTML = `<div class="text-center py-4"><i class="fas fa-file-pdf text-danger fa-3x mb-2"></i><br>PDF Seçildi</div>`;
        } else {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewBox.innerHTML = `<img src="${e.target.result}" alt="Önizleme">`;
            }
            reader.readAsDataURL(file);
        }
    }
}

function previewImage(input, previewId) {
    const previewBox = document.getElementById(previewId);
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            previewBox.innerHTML = `<img src="${e.target.result}" alt="Önizleme">`;
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function escapeHtml(str) {
    if (!str) return '';
    return str.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
}
</script>

<?php include 'includes/footer.php'; ?>
