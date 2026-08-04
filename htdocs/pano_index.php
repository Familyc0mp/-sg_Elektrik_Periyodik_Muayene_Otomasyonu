<?php
require_once 'includes/db.php';
require_once 'includes/functions.php';
require_once 'includes/auth.php';

requireLogin();

// Silme İşlemi
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sil_id'])) {
    $sil_id = (int)$_POST['sil_id'];
    $stmt = $pdo->prepare("UPDATE pano_yurtlar SET silindi = 1 WHERE id = ?");
    $stmt->execute([$sil_id]);
    header("Location: pano_index.php");
    exit;
}

// Süre Uzatma İşlemi
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['sure_uzat_id'])) {
    $sure_uzat_id = (int)$_POST['sure_uzat_id'];
    $sure_uzatildi_at = date('Y-m-d H:i:s');
    $stmt = $pdo->prepare("UPDATE pano_yurtlar SET sure_uzatildi_at = ? WHERE id = ?");
    $stmt->execute([$sure_uzatildi_at, $sure_uzat_id]);
    header("Location: pano_index.php");
    exit;
}

include 'includes/header.php';

// Verileri Getir
$stmt = $pdo->query("SELECT y.*, (SELECT COUNT(*) FROM panolar WHERE pano_kurum_id = y.id) as pano_sayisi FROM pano_yurtlar y WHERE y.silindi = 0 ORDER BY y.id DESC");
$yurtlar = $stmt->fetchAll();

foreach ($yurtlar as &$y) {
    $pStmt = $pdo->prepare("SELECT p.* FROM panolar p WHERE p.pano_kurum_id = ? ORDER BY p.sira ASC");
    $pStmt->execute([$y['id']]);
    $y['panolar'] = $pStmt->fetchAll();
    
    foreach ($y['panolar'] as &$p) {
        $fStmt = $pdo->prepare("SELECT * FROM pano_fotograflar WHERE pano_id = ? ORDER BY id ASC");
        $fStmt->execute([$p['id']]);
        $p['fotograflar'] = $fStmt->fetchAll();
    }
}
unset($y);
unset($p);
?>

<style>
    .badge-custom {
        font-size: 0.85rem;
        padding: 5px 10px;
        border-radius: 20px;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    .badge-has-file {
        background-color: #d1e7dd;
        color: #0f5132;
    }
    .badge-no-file {
        background-color: #f8d7da;
        color: #842029;
    }
    .badge-locked {
        background-color: #e2e8f0;
        color: #475569;
    }
    .gallery-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 15px;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    }
    .gallery-img-box {
        width: 100%;
        height: 250px;
        border-radius: 6px;
        overflow: hidden;
        cursor: pointer;
        background-color: #f1f5f9;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #cbd5e1;
        transition: border-color 0.15s ease;
    }
    .gallery-img-box:hover {
        border-color: #0d6efd;
    }
    .gallery-img-box img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .photo-grid-card {
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        overflow: hidden;
        background: #fff;
    }
    .photo-grid-img-wrapper {
        position: relative;
        height: 180px;
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
    .photo-type-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        font-size: 0.75rem;
        padding: 3px 8px;
        border-radius: 4px;
        font-weight: bold;
    }
    .badge-type-normal {
        background-color: #0d6efd;
        color: #fff;
    }
    .badge-type-termal {
        background-color: #dc3545;
        color: #fff;
    }
    .photo-card-actions {
        display: flex;
        padding: 8px;
        gap: 5px;
        background: #f8fafc;
        border-top: 1px solid #e2e8f0;
    }
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1050;
    }
    .modal-box {
        background: #fff;
        padding: 24px;
        border-radius: 12px;
        width: 100%;
        max-width: 500px;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><i class="fas fa-file-image text-primary me-2"></i> Pano ve Belge Listesi (2. Sistem)</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="pano_form.php" class="btn btn-primary btn-sm fw-bold shadow-sm">
            <i class="fas fa-plus me-1"></i> Yeni Pano & Belge Kaydı
        </a>
    </div>
</div>

<div class="card shadow-sm border-0 mb-4">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-light">
                    <tr>
                        <th style="width: 50px;">S.N</th>
                        <th>Mıntıka</th>
                        <th>Kurum Adı</th>
                        <th>İskan Belgesi</th>
                        <th>Yangın Paneli</th>
                        <th>Elektrik Panoları</th>
                        <th>Durum</th>
                        <th style="width: 180px;" class="text-end pe-4">İşlemler</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($yurtlar)): ?>
                        <tr>
                            <td colspan="8" class="text-center py-4 text-muted">
                                <i class="fas fa-info-circle me-1"></i> Henüz kayıt eklenmemiş.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php $sn = 1; foreach ($yurtlar as $row): ?>
                            <?php
                            // Check lock status (editable for 24h after creation, or if sure_uzatildi_at is within 24h)
                            $created_time = strtotime($row['created_at']);
                            $uzatildi_time = $row['sure_uzatildi_at'] ? strtotime($row['sure_uzatildi_at']) : 0;
                            $active_time = max($created_time, $uzatildi_time);
                            $is_locked = (time() - $active_time) > 86400; // 24 hours
                            ?>
                            <tr>
                                <td><?php echo $sn++; ?></td>
                                <td><?php echo htmlspecialchars($row['mintika']); ?></td>
                                <td class="fw-semibold"><?php echo htmlspecialchars($row['yurt_adi']); ?></td>
                                <td>
                                    <?php if ($row['iskan_foto']): ?>
                                        <span class="badge-custom badge-has-file"><i class="fas fa-check"></i> Yüklendi</span>
                                    <?php else: ?>
                                        <span class="badge-custom badge-no-file"><i class="fas fa-times"></i> Yüklenmedi</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if ($row['yangin_paneli_foto']): ?>
                                        <span class="badge-custom badge-has-file"><i class="fas fa-check"></i> Yüklendi</span>
                                    <?php else: ?>
                                        <span class="badge-custom badge-no-file"><i class="fas fa-times"></i> Yüklenmedi</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <span class="badge bg-dark fw-normal px-2 py-1">
                                        <i class="fas fa-bolt text-warning me-1"></i> <?php echo $row['pano_sayisi']; ?> Pano
                                    </span>
                                </td>
                                <td>
                                    <?php if ($is_locked): ?>
                                        <span class="badge-custom badge-locked"><i class="fas fa-lock"></i> Kilitli</span>
                                    <?php else: ?>
                                        <span class="badge-custom badge-has-file"><i class="fas fa-lock-open"></i> Düzenlenebilir</span>
                                    <?php endif; ?>
                                </td>
                                <td class="text-end pe-4">
                                    <div class="d-flex justify-content-end gap-1">
                                        <button type="button" class="btn btn-outline-primary btn-sm" onclick='detayGoster(<?php echo json_encode($row, JSON_HEX_APOS | JSON_HEX_QUOT | JSON_UNESCAPED_UNICODE); ?>)'>
                                            <i class="fas fa-images"></i> Fotoğraflar
                                        </button>
                                        
                                        <div class="dropdown">
                                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-1">
                                                <li><a class="dropdown-item py-2" href="pano_form.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit me-2 text-muted"></i> Düzenle</a></li>
                                                <li><a class="dropdown-item py-2 text-success" href="javascript:void(0)" onclick="sureUzatOnay(<?php echo $row['id']; ?>, '<?php echo addslashes($row['yurt_adi']); ?>')"><i class="fas fa-clock me-2 text-success"></i> Süre Uzat (24s)</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item py-2 text-danger" href="javascript:void(0)" onclick="silOnay(<?php echo $row['id']; ?>, '<?php echo addslashes($row['yurt_adi']); ?>')"><i class="fas fa-trash-can me-2"></i> Sil</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- FOTOĞRAF GALERİSİ MODALI -->
<div class="modal fade" id="detayModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title" id="detayModalBaslik"><i class="fas fa-images me-2"></i> Kurum Fotoğraf & Belge Detayları</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Kapat"></button>
            </div>
            <div class="modal-body p-4" id="detayModalIcerik">
                <!-- JS ile Doldurulacak -->
            </div>
        </div>
    </div>
</div>

<!-- SİLME MODALI -->
<div class="modal-overlay" id="silModal" style="display: none;">
    <div class="modal-box">
        <h3><i class="fas fa-exclamation-triangle text-danger"></i> Silme Onayı</h3>
        <p id="silModalMesaj">Bu kaydı silmek istediğinizden emin misiniz?</p>
        <form method="POST" id="silForm">
            <input type="hidden" name="sil_id" id="silIdInput" value="">
            <div class="d-flex justify-content-end gap-2 mt-4">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="silModalKapat()"><i class="fas fa-times"></i> İptal</button>
                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-can"></i> Evet, Sil</button>
            </div>
        </form>
    </div>
</div>

<!-- SÜRE UZATMA MODALI -->
<div class="modal-overlay" id="sureUzatModal" style="display: none;">
    <div class="modal-box">
        <h3><i class="fas fa-hourglass-half text-success"></i> Düzenleme Süresini Uzat</h3>
        <p id="sureUzatModalMesaj">Bu kayıt için düzenleme süresini uzatmak istiyor musunuz?</p>
        <form method="POST" id="sureUzatForm">
            <input type="hidden" name="sure_uzat_id" id="sureUzatIdInput" value="">
            <div class="d-flex justify-content-end gap-2 mt-4">
                <button type="button" class="btn btn-outline-secondary btn-sm" onclick="sureUzatModalKapat()"><i class="fas fa-times"></i> İptal</button>
                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-clock"></i> Evet, 24 Saat Uzat</button>
            </div>
        </form>
    </div>
</div>

<script>
function detayGoster(kurum) {
    document.getElementById('detayModalBaslik').innerHTML = `<i class="fas fa-building text-warning me-2"></i> ${escapeHtml(kurum.yurt_adi)} — Fotoğraf & Pano Galerisi`;
    
    let html = `
        <div class="mb-4 p-3 bg-light rounded border">
            <div class="row">
                <div class="col-md-3"><strong>Mıntıka:</strong> ${escapeHtml(kurum.mintika || '—')}</div>
                <div class="col-md-3"><strong>Müdür:</strong> ${escapeHtml(kurum.yurt_muduru || '—')}</div>
                <div class="col-md-3"><strong>Dernek:</strong> ${escapeHtml(kurum.dernek_adi || '—')}</div>
                <div class="col-md-3"><strong>Kapasite:</strong> ${escapeHtml(kurum.kapasite || '—')}</div>
            </div>
        </div>

        <h5 class="fw-bold mb-3 border-bottom pb-2 text-primary"><i class="fas fa-file-shield me-2"></i> 1 & 2. Temel Belgeler ve Panolar</h5>
        <div class="row mb-4">
            <!-- İSKAN BELGESİ -->
            <div class="col-md-6 mb-3">
                <div class="gallery-card">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="fw-bold m-0"><i class="fas fa-file-contract text-primary me-2"></i> İskan Belgesi</h6>
                        ${kurum.iskan_foto ? `<a href="${kurum.iskan_foto}" download class="btn btn-outline-success btn-sm"><i class="fas fa-download me-1"></i> İndir</a>` : ''}
                    </div>
                    ${kurum.iskan_foto ? `
                        <div class="gallery-img-box" onclick="imgOpen('${kurum.iskan_foto}')">
                            ${kurum.iskan_foto.toLowerCase().endsWith('.pdf') ? 
                                `<div class="text-center py-4"><i class="fas fa-file-pdf text-danger fa-4x mb-2"></i><br>PDF Belgesi (Tıklayarak Açın)</div>` : 
                                `<img src="${kurum.iskan_foto}" alt="İskan Belgesi">`
                            }
                        </div>
                    ` : '<div class="alert alert-secondary text-center my-2 mb-0">İskan belgesi yüklenmemiş.</div>'}
                </div>
            </div>

            <!-- YANGIN PANELİ -->
            <div class="col-md-6 mb-3">
                <div class="gallery-card">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="fw-bold m-0"><i class="fas fa-fire-extinguisher text-danger me-2"></i> Yangın Paneli Fotoğrafı</h6>
                        ${kurum.yangin_paneli_foto ? `<a href="${kurum.yangin_paneli_foto}" download class="btn btn-outline-success btn-sm"><i class="fas fa-download me-1"></i> İndir</a>` : ''}
                    </div>
                    ${kurum.yangin_paneli_foto ? `
                        <div class="gallery-img-box" onclick="imgOpen('${kurum.yangin_paneli_foto}')">
                            <img src="${kurum.yangin_paneli_foto}" alt="Yangın Paneli">
                        </div>
                    ` : '<div class="alert alert-secondary text-center my-2 mb-0">Yangın paneli fotoğrafı yüklenmemiş.</div>'}
                </div>
            </div>
        </div>

        <h5 class="fw-bold mb-3 border-bottom pb-2 text-warning"><i class="fas fa-bolt me-2"></i> 3. Elektrik Panoları (${kurum.panolar ? kurum.panolar.length : 0} Adet)</h5>
    `;

    if (kurum.panolar && kurum.panolar.length > 0) {
        html += `<div class="row">`;
        kurum.panolar.forEach((p, idx) => {
            const fotos = p.fotograflar || [];
            if (fotos.length === 0) {
                if (p.normal_foto) fotos.push({ foto_tipi: 'normal', foto_yolu: p.normal_foto });
                if (p.termal_foto) fotos.push({ foto_tipi: 'termal', foto_yolu: p.termal_foto });
            }

            html += `
                <div class="col-12 mb-3">
                    <div class="card border">
                        <div class="card-header bg-dark text-white fw-bold d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-bolt text-warning me-2"></i> Pano #${idx+1}: ${escapeHtml(p.pano_adi)}</span>
                            <span class="badge bg-secondary font-monospace">${fotos.length} Fotoğraf</span>
                        </div>
                        <div class="card-body py-3">
                            ${fotos.length > 0 ? `
                                <div class="row g-3">
                                    ${fotos.map(f => {
                                        const isTermal = f.foto_tipi === 'termal';
                                        return `
                                            <div class="col-sm-6 col-md-4">
                                                <div class="gallery-card p-2 mb-0">
                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                        <span class="badge ${isTermal ? 'bg-danger' : 'bg-primary'}">
                                                            ${isTermal ? '<i class="fas fa-fire me-1"></i>Termal' : '<i class="fas fa-camera me-1"></i>Normal'}
                                                        </span>
                                                        <a href="${f.foto_yolu}" download class="btn btn-outline-success btn-sm py-0 px-2 fs-7" title="Fotoğrafı İndir">
                                                            <i class="fas fa-download"></i> İndir
                                                        </a>
                                                    </div>
                                                    <div class="gallery-img-box" style="height: 150px;" onclick="imgOpen('${f.foto_yolu}')">
                                                        <img src="${f.foto_yolu}" alt="Pano Fotoğrafı">
                                                    </div>
                                                </div>
                                            </div>
                                        `;
                                    }).join('')}
                                </div>
                            ` : '<div class="alert alert-secondary text-center mb-0">Bu panoya ait fotoğraf bulunmuyor.</div>'}
                        </div>
                    </div>
                </div>
            `;
        });
        html += `</div>`;
    } else {
        html += `<div class="alert alert-warning text-center">Bu kuruma tanımlı elektrik panosu bulunmuyor.</div>`;
    }

    document.getElementById('detayModalIcerik').innerHTML = html;
    const modal = new bootstrap.Modal(document.getElementById('detayModal'));
    modal.show();
}

function imgOpen(url) {
    window.open(url, '_blank');
}

function silOnay(id, name) {
    document.getElementById('silIdInput').value = id;
    document.getElementById('silModalMesaj').innerHTML = `<strong>${name}</strong> kaydını silmek istediğinizden emin misiniz?`;
    document.getElementById('silModal').style.display = 'flex';
}

function silModalKapat() {
    document.getElementById('silModal').style.display = 'none';
}

function sureUzatOnay(id, name) {
    document.getElementById('sureUzatIdInput').value = id;
    document.getElementById('sureUzatModalMesaj').innerHTML = `<strong>${name}</strong> kaydının düzenleme süresi <strong>24 saat uzatılacaktır</strong>.<br><small class="text-muted">Kullanıcılar 24 saat boyunca bu kaydı tekrar düzenleyebilecektir.</small>`;
    document.getElementById('sureUzatModal').style.display = 'flex';
}

function sureUzatModalKapat() {
    document.getElementById('sureUzatModal').style.display = 'none';
}

function escapeHtml(str) {
    if (!str) return '';
    return str.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#039;");
}
</script>

<?php include 'includes/footer.php'; ?>
