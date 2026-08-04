<?php
/**
 * DİKKAT: Güvenlik nedeniyle, bu dosyayı sunucuda çalıştırdıktan ve sonuçları
 * kontrol ettikten sonra sunucunuzdan MUTLAKA siliniz!
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
set_time_limit(300); // 5 minutes execution time limit

require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/functions.php';
require_once __DIR__ . '/../includes/auth.php';
requireLogin();

$rawData = array (
  0 => 
  array (
    'id' => 20,
    'sn' => '',
    'mintika' => 'Ordu',
    'yurt_adi' => 'Fatih yükseköğrenim erkek öğrenci yurdu',
    'resmi_kurum_adi' => 'Özel Fatih yükseköğrenim erkek öğrenci yurdu',
    'kapasite' => '104',
    'yurt_muduru' => 'Murat Demirci',
    'yurt_tel_no' => '-',
    'dernek_adi' => 'Ordu eğitim çağındaki öğrencilere yardım derneği',
    'yurt_adresi' => 'Akyazı mah. 830.sk.no.9 Altınordu/Ordu',
    'ada_no' => '2299',
    'pafta_no' => '',
    'parsel_no' => '11',
    'iskan_foto' => 'uploads/iskan/iskan_6a6b0c60ecca6_1785400416.pdf',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a6b0c60ecee8_1785400416.jpg',
    'created_at' => '2026-07-30 01:33:36',
    'updated_at' => '2026-07-30 01:33:36',
    'silindi' => 0,
    'pano_sayisi' => 2,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 128,
        'pano_kurum_id' => 20,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-30 01:33:36',
      ),
      1 => 
      array (
        'id' => 129,
        'pano_kurum_id' => 20,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-30 01:33:36',
      ),
    ),
  ),
  1 => 
  array (
    'id' => 19,
    'sn' => 'ANK-11',
    'mintika' => 'ANKARA-DEMET',
    'yurt_adi' => 'OSTİM FERAH',
    'resmi_kurum_adi' => 'ÖZEL OSTİM FERAH YÜKSEKÖĞRETİM ERKEK ÖĞRENCİ YURDU',
    'kapasite' => '54',
    'yurt_muduru' => 'CİHANGİR ÜREN',
    'yurt_tel_no' => '03123862699',
    'dernek_adi' => 'ÖRNEK SANAYİ KURS VE OKUL TALEBELERİNE YARDIM DERNEĞİ',
    'yurt_adresi' => 'OSTİM OSB MAHALLESİ 1268 SOKAK NO:1/1 YENİMAHALLE/ANKARA',
    'ada_no' => '42738',
    'pafta_no' => '',
    'parsel_no' => '1',
    'iskan_foto' => 'uploads/iskan/iskan_6a685e08ef91f_1785224712.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a685e08eff41_1785224712.jpg',
    'created_at' => '2026-07-28 00:45:12',
    'updated_at' => '2026-07-28 00:45:12',
    'silindi' => 0,
    'pano_sayisi' => 5,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 123,
        'pano_kurum_id' => 19,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-28 00:45:12',
      ),
      1 => 
      array (
        'id' => 124,
        'pano_kurum_id' => 19,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-28 00:45:12',
      ),
      2 => 
      array (
        'id' => 125,
        'pano_kurum_id' => 19,
        'pano_adi' => 'ZEMİN',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-28 00:45:12',
      ),
      3 => 
      array (
        'id' => 126,
        'pano_kurum_id' => 19,
        'pano_adi' => '1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-28 00:45:12',
      ),
      4 => 
      array (
        'id' => 127,
        'pano_kurum_id' => 19,
        'pano_adi' => '2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-28 00:45:12',
      ),
    ),
  ),
  2 => 
  array (
    'id' => 18,
    'sn' => 'ANK-10',
    'mintika' => 'ANKARA-SÜLEYMANİYE',
    'yurt_adi' => 'MEHMET SAYGILI',
    'resmi_kurum_adi' => 'ÖZEL MEHMET SAYGILI YÜKSEKÖĞRENİM ERKEK ÖĞRENCİ YURDU',
    'kapasite' => '72',
    'yurt_muduru' => 'HÜSEYİN CEYHAN',
    'yurt_tel_no' => '05010793350',
    'dernek_adi' => 'SARAY KURS VE OKUL TALEBELERİNE YARDIM DERNEĞİ',
    'yurt_adresi' => 'SARAY CUMHURİYET MAHALLESİ ÖZAL BULVARI NO:211 PURSAKLAR/ANKARA',
    'ada_no' => '141',
    'pafta_no' => '',
    'parsel_no' => '5',
    'iskan_foto' => 'uploads/iskan/iskan_6a67814e0c055_1785168206.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a67814e0c82f_1785168206.jpg',
    'created_at' => '2026-07-27 09:03:25',
    'updated_at' => '2026-07-27 09:03:25',
    'silindi' => 0,
    'pano_sayisi' => 8,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 115,
        'pano_kurum_id' => 18,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-27 09:03:25',
      ),
      1 => 
      array (
        'id' => 116,
        'pano_kurum_id' => 18,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-27 09:03:25',
      ),
      2 => 
      array (
        'id' => 117,
        'pano_kurum_id' => 18,
        'pano_adi' => '-1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-27 09:03:25',
      ),
      3 => 
      array (
        'id' => 118,
        'pano_kurum_id' => 18,
        'pano_adi' => 'ZEMİN',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-27 09:03:25',
      ),
      4 => 
      array (
        'id' => 119,
        'pano_kurum_id' => 18,
        'pano_adi' => '1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-27 09:03:25',
      ),
      5 => 
      array (
        'id' => 120,
        'pano_kurum_id' => 18,
        'pano_adi' => '2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 5,
        'created_at' => '2026-07-27 09:03:25',
      ),
      6 => 
      array (
        'id' => 121,
        'pano_kurum_id' => 18,
        'pano_adi' => '3',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 6,
        'created_at' => '2026-07-27 09:03:25',
      ),
      7 => 
      array (
        'id' => 122,
        'pano_kurum_id' => 18,
        'pano_adi' => '4',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 7,
        'created_at' => '2026-07-27 09:03:25',
      ),
    ),
  ),
  3 => 
  array (
    'id' => 17,
    'sn' => 'ANK-8',
    'mintika' => 'ANKARA-DEMET',
    'yurt_adi' => 'VEFA',
    'resmi_kurum_adi' => 'ÖZEL HAS VEFA YÜKSEKÖĞRETİM ERKEK ÖĞRENCİ YURDU',
    'kapasite' => '36',
    'yurt_muduru' => 'ÖMER FARUK AKÇAOĞLU',
    'yurt_tel_no' => '-',
    'dernek_adi' => 'EMİRGAZİ EĞİTİM VE KÜLTÜRE HİZMET DERNEĞİ',
    'yurt_adresi' => 'EMNİYET MAHALLESİ YUKARI SOKAK NO:5 YENİMAHALLE/ANKARA',
    'ada_no' => '5921',
    'pafta_no' => '',
    'parsel_no' => '20',
    'iskan_foto' => 'uploads/iskan/iskan_6a676e224397c_1785163298.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a676e2243ba5_1785163298.jpg',
    'created_at' => '2026-07-27 07:41:38',
    'updated_at' => '2026-07-27 07:41:56',
    'silindi' => 0,
    'pano_sayisi' => 8,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 107,
        'pano_kurum_id' => 17,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-27 07:41:38',
      ),
      1 => 
      array (
        'id' => 108,
        'pano_kurum_id' => 17,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-27 07:41:38',
      ),
      2 => 
      array (
        'id' => 109,
        'pano_kurum_id' => 17,
        'pano_adi' => '-2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-27 07:41:38',
      ),
      3 => 
      array (
        'id' => 110,
        'pano_kurum_id' => 17,
        'pano_adi' => '-1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-27 07:41:38',
      ),
      4 => 
      array (
        'id' => 111,
        'pano_kurum_id' => 17,
        'pano_adi' => 'ZEMİN',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-27 07:41:38',
      ),
      5 => 
      array (
        'id' => 112,
        'pano_kurum_id' => 17,
        'pano_adi' => '1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 5,
        'created_at' => '2026-07-27 07:41:38',
      ),
      6 => 
      array (
        'id' => 113,
        'pano_kurum_id' => 17,
        'pano_adi' => '2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 6,
        'created_at' => '2026-07-27 07:41:38',
      ),
      7 => 
      array (
        'id' => 114,
        'pano_kurum_id' => 17,
        'pano_adi' => '3',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 7,
        'created_at' => '2026-07-27 07:41:38',
      ),
    ),
  ),
  4 => 
  array (
    'id' => 16,
    'sn' => 'ANK-7',
    'mintika' => 'ANKARA-ÇAMLICA',
    'yurt_adi' => 'GÖLBAŞI',
    'resmi_kurum_adi' => 'ÖZEL GÖLBAŞI YÜKSEKÖĞRENİM ERKEK ÖĞRENCİ YURDU',
    'kapasite' => '59',
    'yurt_muduru' => 'BERAT YÜKSEL',
    'yurt_tel_no' => '-',
    'dernek_adi' => 'GÖLBAŞI KURS VE OKUL TALEBELERİNE YARDIM DERNEĞİ',
    'yurt_adresi' => 'BAHÇELİEVLER MAHALLESİ 323/1 SOKAK NO:4 GÖLBAŞI/ANKARA',
    'ada_no' => '118849',
    'pafta_no' => '',
    'parsel_no' => '2',
    'iskan_foto' => 'uploads/iskan/iskan_6a675f175e6ce_1785159447.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a675f175e901_1785159447.jpg',
    'created_at' => '2026-07-27 06:37:27',
    'updated_at' => '2026-07-27 06:37:27',
    'silindi' => 0,
    'pano_sayisi' => 7,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 100,
        'pano_kurum_id' => 16,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-27 06:37:27',
      ),
      1 => 
      array (
        'id' => 101,
        'pano_kurum_id' => 16,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-27 06:37:27',
      ),
      2 => 
      array (
        'id' => 102,
        'pano_kurum_id' => 16,
        'pano_adi' => '-1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-27 06:37:27',
      ),
      3 => 
      array (
        'id' => 103,
        'pano_kurum_id' => 16,
        'pano_adi' => 'ZEMİN',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-27 06:37:27',
      ),
      4 => 
      array (
        'id' => 104,
        'pano_kurum_id' => 16,
        'pano_adi' => '1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-27 06:37:27',
      ),
      5 => 
      array (
        'id' => 105,
        'pano_kurum_id' => 16,
        'pano_adi' => '2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 5,
        'created_at' => '2026-07-27 06:37:27',
      ),
      6 => 
      array (
        'id' => 106,
        'pano_kurum_id' => 16,
        'pano_adi' => '3',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 6,
        'created_at' => '2026-07-27 06:37:27',
      ),
    ),
  ),
  5 => 
  array (
    'id' => 15,
    'sn' => 'ANK-9',
    'mintika' => 'ANKARA-ULUBEY',
    'yurt_adi' => 'VALİDE SULTAN',
    'resmi_kurum_adi' => 'ÖZEL VALİDE SULTAN YÜKSEKÖĞRETİM ERKEK ÖĞRENCİ YURDU',
    'kapasite' => '46',
    'yurt_muduru' => 'BEDİRHAN KILIÇ',
    'yurt_tel_no' => '-',
    'dernek_adi' => 'KEÇİÖREN EĞİTİM VE KÜLTÜR DERNEĞİ',
    'yurt_adresi' => 'HACI BAYRAM MAHALLESİ RÜZGARLI CADDESİ NO:10 ALTINDAĞ/ANKARA',
    'ada_no' => '2720',
    'pafta_no' => '',
    'parsel_no' => '48',
    'iskan_foto' => 'uploads/iskan/iskan_6a674f3254d92_1785155378.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a674f3254fcc_1785155378.jpg',
    'created_at' => '2026-07-27 05:29:38',
    'updated_at' => '2026-07-27 07:42:20',
    'silindi' => 0,
    'pano_sayisi' => 8,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 92,
        'pano_kurum_id' => 15,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-27 05:29:38',
      ),
      1 => 
      array (
        'id' => 93,
        'pano_kurum_id' => 15,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-27 05:29:38',
      ),
      2 => 
      array (
        'id' => 94,
        'pano_kurum_id' => 15,
        'pano_adi' => '1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-27 05:29:38',
      ),
      3 => 
      array (
        'id' => 95,
        'pano_kurum_id' => 15,
        'pano_adi' => '2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-27 05:29:38',
      ),
      4 => 
      array (
        'id' => 96,
        'pano_kurum_id' => 15,
        'pano_adi' => '3',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-27 05:29:38',
      ),
      5 => 
      array (
        'id' => 97,
        'pano_kurum_id' => 15,
        'pano_adi' => '4',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 5,
        'created_at' => '2026-07-27 05:29:38',
      ),
      6 => 
      array (
        'id' => 98,
        'pano_kurum_id' => 15,
        'pano_adi' => '5',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 6,
        'created_at' => '2026-07-27 05:29:38',
      ),
      7 => 
      array (
        'id' => 99,
        'pano_kurum_id' => 15,
        'pano_adi' => '6',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 7,
        'created_at' => '2026-07-27 05:29:38',
      ),
    ),
  ),
  6 => 
  array (
    'id' => 14,
    'sn' => 'ANK-6',
    'mintika' => 'ANKARA-ULUBEY',
    'yurt_adi' => 'RÜZGARLI',
    'resmi_kurum_adi' => 'ÖZEL RÜZGARLI YÜKSEKÖĞRETİM ERKEK ÖĞRENCİ YURDU',
    'kapasite' => '68',
    'yurt_muduru' => 'ABDULHAMİT TURĞUT',
    'yurt_tel_no' => '05401233313',
    'dernek_adi' => 'Rüzgarlı İlim Ve Kültür Derneği',
    'yurt_adresi' => 'HACIBAYRAM MAHALLESİ HAMİT KAPLAN SOKAK NO:5 ALTINDAĞ/ANKARA',
    'ada_no' => '9317',
    'pafta_no' => '',
    'parsel_no' => '1',
    'iskan_foto' => 'uploads/iskan/iskan_6a674633b46ab_1785153075.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a674633b48c4_1785153075.jpg',
    'created_at' => '2026-07-27 04:51:15',
    'updated_at' => '2026-07-27 04:51:15',
    'silindi' => 0,
    'pano_sayisi' => 8,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 84,
        'pano_kurum_id' => 14,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-27 04:51:15',
      ),
      1 => 
      array (
        'id' => 85,
        'pano_kurum_id' => 14,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-27 04:51:15',
      ),
      2 => 
      array (
        'id' => 86,
        'pano_kurum_id' => 14,
        'pano_adi' => 'GİRİŞ',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-27 04:51:15',
      ),
      3 => 
      array (
        'id' => 87,
        'pano_kurum_id' => 14,
        'pano_adi' => '2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-27 04:51:15',
      ),
      4 => 
      array (
        'id' => 88,
        'pano_kurum_id' => 14,
        'pano_adi' => '3',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-27 04:51:15',
      ),
      5 => 
      array (
        'id' => 89,
        'pano_kurum_id' => 14,
        'pano_adi' => '4',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 5,
        'created_at' => '2026-07-27 04:51:15',
      ),
      6 => 
      array (
        'id' => 90,
        'pano_kurum_id' => 14,
        'pano_adi' => '5',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 6,
        'created_at' => '2026-07-27 04:51:15',
      ),
      7 => 
      array (
        'id' => 91,
        'pano_kurum_id' => 14,
        'pano_adi' => '6',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 7,
        'created_at' => '2026-07-27 04:51:15',
      ),
    ),
  ),
  7 => 
  array (
    'id' => 13,
    'sn' => 'ANK-5',
    'mintika' => 'ANKARA-ULUBEY',
    'yurt_adi' => 'ZİRAAT',
    'resmi_kurum_adi' => 'ÖZEL İBRAHİM KESER YÜKSEKÖĞRENİM ERKEK ÖĞRENCİ YURDU',
    'kapasite' => '30',
    'yurt_muduru' => 'FATİH YAZICI',
    'yurt_tel_no' => '03123172736',
    'dernek_adi' => 'TEPEBAŞI KURS VE OKUL TALEBELERİNE YARDIM DERNEĞİ',
    'yurt_adresi' => 'ZİRAAT MAHALLESİ ŞEHİT ÖMER HALİSDEMİR SOKAK NO:48 ALTINDAĞ/ANKARA',
    'ada_no' => '5888',
    'pafta_no' => '',
    'parsel_no' => '10',
    'iskan_foto' => 'uploads/iskan/iskan_6a673cdb031c0_1785150683.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a673cdb034ef_1785150683.jpg',
    'created_at' => '2026-07-27 04:11:22',
    'updated_at' => '2026-07-27 04:11:22',
    'silindi' => 0,
    'pano_sayisi' => 8,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 76,
        'pano_kurum_id' => 13,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-27 04:11:22',
      ),
      1 => 
      array (
        'id' => 77,
        'pano_kurum_id' => 13,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-27 04:11:22',
      ),
      2 => 
      array (
        'id' => 78,
        'pano_kurum_id' => 13,
        'pano_adi' => '-1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-27 04:11:22',
      ),
      3 => 
      array (
        'id' => 79,
        'pano_kurum_id' => 13,
        'pano_adi' => 'ZEMİN',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-27 04:11:22',
      ),
      4 => 
      array (
        'id' => 80,
        'pano_kurum_id' => 13,
        'pano_adi' => '1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-27 04:11:22',
      ),
      5 => 
      array (
        'id' => 81,
        'pano_kurum_id' => 13,
        'pano_adi' => '2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 5,
        'created_at' => '2026-07-27 04:11:22',
      ),
      6 => 
      array (
        'id' => 82,
        'pano_kurum_id' => 13,
        'pano_adi' => '3',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 6,
        'created_at' => '2026-07-27 04:11:22',
      ),
      7 => 
      array (
        'id' => 83,
        'pano_kurum_id' => 13,
        'pano_adi' => '4',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 7,
        'created_at' => '2026-07-27 04:11:22',
      ),
    ),
  ),
  8 => 
  array (
    'id' => 12,
    'sn' => 'ANK-4',
    'mintika' => 'ANKARA-ULUBEY',
    'yurt_adi' => 'HİSAR',
    'resmi_kurum_adi' => 'ÖZEL HİSAR YÜKSEKÖĞRETİM ERKEK ÖĞRENCİ YURDU',
    'kapasite' => '90',
    'yurt_muduru' => 'OSMAN KILINÇ',
    'yurt_tel_no' => '',
    'dernek_adi' => 'HİSAR KURS VE OKUL TALEBELERİNE YARDIM DERNEĞİ',
    'yurt_adresi' => 'KALE MAHALLESİ ÇANTACILAR SOKAK NO:4 ALTINDAĞ/ANKARA',
    'ada_no' => '844',
    'pafta_no' => '',
    'parsel_no' => '7',
    'iskan_foto' => 'uploads/iskan/iskan_6a67338273194_1785148290.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a673382733de_1785148290.jpg',
    'created_at' => '2026-07-27 03:31:29',
    'updated_at' => '2026-07-27 03:31:29',
    'silindi' => 0,
    'pano_sayisi' => 16,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 60,
        'pano_kurum_id' => 12,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-27 03:31:29',
      ),
      1 => 
      array (
        'id' => 61,
        'pano_kurum_id' => 12,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-27 03:31:29',
      ),
      2 => 
      array (
        'id' => 62,
        'pano_kurum_id' => 12,
        'pano_adi' => 'A BLOK ZEMİN',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-27 03:31:29',
      ),
      3 => 
      array (
        'id' => 63,
        'pano_kurum_id' => 12,
        'pano_adi' => 'A BLOK 1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-27 03:31:29',
      ),
      4 => 
      array (
        'id' => 64,
        'pano_kurum_id' => 12,
        'pano_adi' => 'A BLOK 2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-27 03:31:29',
      ),
      5 => 
      array (
        'id' => 65,
        'pano_kurum_id' => 12,
        'pano_adi' => 'A BLOK 3',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 5,
        'created_at' => '2026-07-27 03:31:29',
      ),
      6 => 
      array (
        'id' => 66,
        'pano_kurum_id' => 12,
        'pano_adi' => 'A BLOK 4',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 6,
        'created_at' => '2026-07-27 03:31:29',
      ),
      7 => 
      array (
        'id' => 67,
        'pano_kurum_id' => 12,
        'pano_adi' => 'A BLOK 5',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 7,
        'created_at' => '2026-07-27 03:31:29',
      ),
      8 => 
      array (
        'id' => 68,
        'pano_kurum_id' => 12,
        'pano_adi' => 'A BLOK ÇATI',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 8,
        'created_at' => '2026-07-27 03:31:29',
      ),
      9 => 
      array (
        'id' => 69,
        'pano_kurum_id' => 12,
        'pano_adi' => 'B BLOK -2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 9,
        'created_at' => '2026-07-27 03:31:29',
      ),
      10 => 
      array (
        'id' => 70,
        'pano_kurum_id' => 12,
        'pano_adi' => 'B BLOK -1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 10,
        'created_at' => '2026-07-27 03:31:29',
      ),
      11 => 
      array (
        'id' => 71,
        'pano_kurum_id' => 12,
        'pano_adi' => 'B BLOK ZEMİN',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 11,
        'created_at' => '2026-07-27 03:31:29',
      ),
      12 => 
      array (
        'id' => 72,
        'pano_kurum_id' => 12,
        'pano_adi' => 'B BLOK 1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 12,
        'created_at' => '2026-07-27 03:31:29',
      ),
      13 => 
      array (
        'id' => 73,
        'pano_kurum_id' => 12,
        'pano_adi' => 'B BLOK 2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 13,
        'created_at' => '2026-07-27 03:31:29',
      ),
      14 => 
      array (
        'id' => 74,
        'pano_kurum_id' => 12,
        'pano_adi' => 'B BLOK 3',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 14,
        'created_at' => '2026-07-27 03:31:29',
      ),
      15 => 
      array (
        'id' => 75,
        'pano_kurum_id' => 12,
        'pano_adi' => 'B BLOK 4',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 15,
        'created_at' => '2026-07-27 03:31:29',
      ),
    ),
  ),
  9 => 
  array (
    'id' => 11,
    'sn' => 'ANK-3',
    'mintika' => 'ANKARA-ULUBEY',
    'yurt_adi' => 'HACI BAYRAM',
    'resmi_kurum_adi' => 'ÖZEL HACI BAYRAM-I VELİ SOSYAL HİZMETLER VE KÜLTÜR VAKFI YÜKSEKÖĞRETİM ERKEK ÖĞRENCİ PANSİYONU',
    'kapasite' => '30',
    'yurt_muduru' => 'CENGİZ UYSAL',
    'yurt_tel_no' => '03123121110',
    'dernek_adi' => 'HACI BAYRAM-I VELİ SOSYAL HİZMETLER VE KÜLTÜR VAKFI',
    'yurt_adresi' => 'HACIBAYRAM MAHALLESİ GÜVERCİN SOKAK NO:39 ALTINDAĞ/ANKARA',
    'ada_no' => '19983',
    'pafta_no' => '',
    'parsel_no' => '1/2/3',
    'iskan_foto' => 'uploads/iskan/iskan_6a6726cd1ecf5_1785145037.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a6726cd1ef6d_1785145037.jpg',
    'created_at' => '2026-07-27 02:37:17',
    'updated_at' => '2026-07-27 02:37:17',
    'silindi' => 0,
    'pano_sayisi' => 5,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 55,
        'pano_kurum_id' => 11,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-27 02:37:17',
      ),
      1 => 
      array (
        'id' => 56,
        'pano_kurum_id' => 11,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-27 02:37:17',
      ),
      2 => 
      array (
        'id' => 57,
        'pano_kurum_id' => 11,
        'pano_adi' => '-2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-27 02:37:17',
      ),
      3 => 
      array (
        'id' => 58,
        'pano_kurum_id' => 11,
        'pano_adi' => '-1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-27 02:37:17',
      ),
      4 => 
      array (
        'id' => 59,
        'pano_kurum_id' => 11,
        'pano_adi' => 'ZEMİN',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-27 02:37:17',
      ),
    ),
  ),
  10 => 
  array (
    'id' => 10,
    'sn' => 'ANK-2',
    'mintika' => 'ANKARA-ÇAMLICA',
    'yurt_adi' => 'KIZILAY MERKEZ',
    'resmi_kurum_adi' => 'ÖZEL MERKEZ YÜKSEKÖĞRETİM ERKEK ÖĞRENCİ YURDU',
    'kapasite' => '48',
    'yurt_muduru' => 'HÜSEYİN CAN KÖKTÜRK',
    'yurt_tel_no' => '03124314242',
    'dernek_adi' => 'YOKSULLARA YARDIM DERNEĞİ',
    'yurt_adresi' => 'KÜLTÜR MAHALLESİ MİTHATPAŞA CADDESİ NO:63 ÇANKAYA/ANKARA',
    'ada_no' => '1078',
    'pafta_no' => '',
    'parsel_no' => '6',
    'iskan_foto' => NULL,
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a6718f8492a6_1785141496.jpg',
    'created_at' => '2026-07-27 01:38:16',
    'updated_at' => '2026-07-27 01:38:16',
    'silindi' => 0,
    'pano_sayisi' => 12,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 36,
        'pano_kurum_id' => 10,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-27 01:38:16',
      ),
      1 => 
      array (
        'id' => 44,
        'pano_kurum_id' => 10,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-27 01:44:53',
      ),
      2 => 
      array (
        'id' => 45,
        'pano_kurum_id' => 10,
        'pano_adi' => 'ZEMİN',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-27 01:44:53',
      ),
      3 => 
      array (
        'id' => 46,
        'pano_kurum_id' => 10,
        'pano_adi' => '1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-27 01:44:53',
      ),
      4 => 
      array (
        'id' => 47,
        'pano_kurum_id' => 10,
        'pano_adi' => '2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-27 01:44:53',
      ),
      5 => 
      array (
        'id' => 48,
        'pano_kurum_id' => 10,
        'pano_adi' => '3',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 5,
        'created_at' => '2026-07-27 01:44:53',
      ),
      6 => 
      array (
        'id' => 49,
        'pano_kurum_id' => 10,
        'pano_adi' => '4',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 6,
        'created_at' => '2026-07-27 01:44:53',
      ),
      7 => 
      array (
        'id' => 50,
        'pano_kurum_id' => 10,
        'pano_adi' => '5',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 7,
        'created_at' => '2026-07-27 01:44:53',
      ),
      8 => 
      array (
        'id' => 51,
        'pano_kurum_id' => 10,
        'pano_adi' => '6',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 8,
        'created_at' => '2026-07-27 01:44:53',
      ),
      9 => 
      array (
        'id' => 52,
        'pano_kurum_id' => 10,
        'pano_adi' => '7',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 9,
        'created_at' => '2026-07-27 01:44:53',
      ),
      10 => 
      array (
        'id' => 53,
        'pano_kurum_id' => 10,
        'pano_adi' => '8',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 10,
        'created_at' => '2026-07-27 01:44:53',
      ),
      11 => 
      array (
        'id' => 54,
        'pano_kurum_id' => 10,
        'pano_adi' => '8 ASMA KAT',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 11,
        'created_at' => '2026-07-27 01:44:53',
      ),
    ),
  ),
  11 => 
  array (
    'id' => 9,
    'sn' => 'ANK-1',
    'mintika' => 'ANKARA-ÇAMLICA',
    'yurt_adi' => 'AYRANCI',
    'resmi_kurum_adi' => 'ÖZEL AYRANCI YÜKSEKÖĞRENİM ERKEK ÖĞRENCİ YURDU',
    'kapasite' => '78',
    'yurt_muduru' => 'İSMAİL KİRKİT',
    'yurt_tel_no' => '03124284738',
    'dernek_adi' => 'AYRANCI KURS VE OKUL TELBELERİNE YARDIM DERNEĞİ',
    'yurt_adresi' => 'GÜVENEVLER MAHALLESİ MENEVİŞ SOKAK NO:43 ÇANKAYA/ANKARA',
    'ada_no' => '2860',
    'pafta_no' => '191',
    'parsel_no' => '12',
    'iskan_foto' => 'uploads/iskan/iskan_6a670a9147e95_1785137809.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a670a9148363_1785137809.jpg',
    'created_at' => '2026-07-27 00:36:49',
    'updated_at' => '2026-07-27 00:36:49',
    'silindi' => 0,
    'pano_sayisi' => 9,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 33,
        'pano_kurum_id' => 9,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-27 00:36:49',
      ),
      1 => 
      array (
        'id' => 34,
        'pano_kurum_id' => 9,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-27 00:36:49',
      ),
      2 => 
      array (
        'id' => 37,
        'pano_kurum_id' => 9,
        'pano_adi' => '-1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-27 01:42:15',
      ),
      3 => 
      array (
        'id' => 38,
        'pano_kurum_id' => 9,
        'pano_adi' => 'ZEMİN',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-27 01:42:15',
      ),
      4 => 
      array (
        'id' => 39,
        'pano_kurum_id' => 9,
        'pano_adi' => '1',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-27 01:42:15',
      ),
      5 => 
      array (
        'id' => 40,
        'pano_kurum_id' => 9,
        'pano_adi' => '2',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 5,
        'created_at' => '2026-07-27 01:42:15',
      ),
      6 => 
      array (
        'id' => 41,
        'pano_kurum_id' => 9,
        'pano_adi' => '3',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 6,
        'created_at' => '2026-07-27 01:42:15',
      ),
      7 => 
      array (
        'id' => 42,
        'pano_kurum_id' => 9,
        'pano_adi' => '4',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 7,
        'created_at' => '2026-07-27 01:42:15',
      ),
      8 => 
      array (
        'id' => 43,
        'pano_kurum_id' => 9,
        'pano_adi' => '5',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 8,
        'created_at' => '2026-07-27 01:42:15',
      ),
    ),
  ),
  12 => 
  array (
    'id' => 8,
    'sn' => '',
    'mintika' => 'Ankara-Çamlıca',
    'yurt_adi' => 'Ayrancı',
    'resmi_kurum_adi' => 'Özel Ayrancı Yükseköğrenim Erkek Öğrenci Yurdu',
    'kapasite' => '78',
    'yurt_muduru' => 'İsmail Kirkit',
    'yurt_tel_no' => '',
    'dernek_adi' => 'Ayrancı kurs ve okul talebelerine yardım derneği',
    'yurt_adresi' => 'Güven meneviş Sokak no 43 Çankaya Ankara',
    'ada_no' => '2869',
    'pafta_no' => '191',
    'parsel_no' => '12',
    'iskan_foto' => NULL,
    'yangin_paneli_foto' => NULL,
    'created_at' => '2026-07-23 06:29:49',
    'updated_at' => '2026-07-23 06:29:49',
    'silindi' => 0,
    'pano_sayisi' => 2,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 31,
        'pano_kurum_id' => 8,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-23 06:29:49',
      ),
      1 => 
      array (
        'id' => 32,
        'pano_kurum_id' => 8,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-23 06:29:49',
      ),
    ),
  ),
  13 => 
  array (
    'id' => 7,
    'sn' => '',
    'mintika' => 'Beyşehir',
    'yurt_adi' => 'Kurucuova',
    'resmi_kurum_adi' => 'ÖZEL KURUCUOVA YÜKSEK ÖĞRETİM ERKEK ÖĞRENCİ YURDU',
    'kapasite' => '30',
    'yurt_muduru' => 'Mehmet DEMİREL',
    'yurt_tel_no' => '05534952571',
    'dernek_adi' => 'Kurucuova Anamas İlim ve Öğrencilere Hizmet Derneği',
    'yurt_adresi' => 'Kurucuova mahallesi 43864 sokak no:45 Beyşehir KONYA',
    'ada_no' => '',
    'pafta_no' => '',
    'parsel_no' => '',
    'iskan_foto' => 'uploads/iskan/iskan_6a61e173211d6_1784799603.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a61e1732157b_1784799603.jpg',
    'created_at' => '2026-07-23 02:40:03',
    'updated_at' => '2026-07-23 02:40:03',
    'silindi' => 0,
    'pano_sayisi' => 5,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 26,
        'pano_kurum_id' => 7,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-23 02:40:03',
      ),
      1 => 
      array (
        'id' => 27,
        'pano_kurum_id' => 7,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-23 02:40:03',
      ),
      2 => 
      array (
        'id' => 28,
        'pano_kurum_id' => 7,
        'pano_adi' => '1.kat',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-23 02:52:02',
      ),
      3 => 
      array (
        'id' => 29,
        'pano_kurum_id' => 7,
        'pano_adi' => 'Zemin',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-23 02:52:02',
      ),
      4 => 
      array (
        'id' => 30,
        'pano_kurum_id' => 7,
        'pano_adi' => '2. Kat',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-23 02:52:02',
      ),
    ),
  ),
  14 => 
  array (
    'id' => 6,
    'sn' => '1',
    'mintika' => 'Aksaray',
    'yurt_adi' => 'Acarlar',
    'resmi_kurum_adi' => 'Özel Acarlar Yükseköğrenim Erkek Öğrenci Yurdu',
    'kapasite' => '144',
    'yurt_muduru' => 'İbrahim Özata',
    'yurt_tel_no' => '382 215 7997',
    'dernek_adi' => 'Hamidiye Öğrencileri Koruma Derneği',
    'yurt_adresi' => 'Tacin Mah. 1906 Sk. No.3 Merkez / AKSARAY',
    'ada_no' => '4637',
    'pafta_no' => '19j4',
    'parsel_no' => '1',
    'iskan_foto' => 'uploads/iskan/iskan_6a6107242f8e7_1784743716.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a6107242fca9_1784743716.jpg',
    'created_at' => '2026-07-22 04:26:24',
    'updated_at' => '2026-07-22 11:08:36',
    'silindi' => 0,
    'pano_sayisi' => 2,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 11,
        'pano_kurum_id' => 6,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-22 04:26:24',
      ),
      1 => 
      array (
        'id' => 12,
        'pano_kurum_id' => 6,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-22 04:26:24',
      ),
    ),
  ),
  15 => 
  array (
    'id' => 5,
    'sn' => '',
    'mintika' => 'Karaman',
    'yurt_adi' => 'Şelale',
    'resmi_kurum_adi' => 'Özel Şelale Yükseköğretim Öğrenci Yurdu',
    'kapasite' => '96',
    'yurt_muduru' => 'Ziyafettin Yavuz',
    'yurt_tel_no' => '03382174200',
    'dernek_adi' => 'Şelale İlim ve Kültüre Hizmet Derneği',
    'yurt_adresi' => 'Taptuk Emre Mah. 1623. Sk. No:2 Merkez/KARAMAN',
    'ada_no' => '2337',
    'pafta_no' => '19n4',
    'parsel_no' => '1',
    'iskan_foto' => NULL,
    'yangin_paneli_foto' => NULL,
    'created_at' => '2026-07-23 02:35:01',
    'updated_at' => '2026-07-23 02:35:01',
    'silindi' => 0,
    'pano_sayisi' => 2,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 9,
        'pano_kurum_id' => 5,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-22 04:24:33',
      ),
      1 => 
      array (
        'id' => 10,
        'pano_kurum_id' => 5,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-22 04:24:33',
      ),
    ),
  ),
  16 => 
  array (
    'id' => 3,
    'sn' => '1',
    'mintika' => 'Niğde',
    'yurt_adi' => 'Pınar',
    'resmi_kurum_adi' => 'Özel Pınar Yükseköğrenim Erkek Öğrenci Yurdu',
    'kapasite' => '138',
    'yurt_muduru' => 'Semih Duruel',
    'yurt_tel_no' => '3882211680',
    'dernek_adi' => 'Niğde Eğitim Derneği',
    'yurt_adresi' => 'Aşağı Kayabaşı (Kayaardı) Mah. Gazeteci İsmet SAYIN Cad. No 44 Merkez/NİĞDE',
    'ada_no' => '122',
    'pafta_no' => '109',
    'parsel_no' => '19',
    'iskan_foto' => 'uploads/iskan/iskan_6a61b8328eebc_1784789042.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a61b8328f54a_1784789042.png',
    'created_at' => '2026-07-22 04:19:53',
    'updated_at' => '2026-07-22 23:44:02',
    'silindi' => 0,
    'pano_sayisi' => 8,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 18,
        'pano_kurum_id' => 3,
        'pano_adi' => 'Ana dağıtım (zemin kat)',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-22 23:44:02',
      ),
      1 => 
      array (
        'id' => 19,
        'pano_kurum_id' => 3,
        'pano_adi' => 'Ana dağıtım',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-22 23:44:02',
      ),
      2 => 
      array (
        'id' => 20,
        'pano_kurum_id' => 3,
        'pano_adi' => 'Zemin kat',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-22 23:44:02',
      ),
      3 => 
      array (
        'id' => 21,
        'pano_kurum_id' => 3,
        'pano_adi' => '1.kat',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-22 23:44:02',
      ),
      4 => 
      array (
        'id' => 22,
        'pano_kurum_id' => 3,
        'pano_adi' => '2.kat',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-22 23:44:02',
      ),
      5 => 
      array (
        'id' => 23,
        'pano_kurum_id' => 3,
        'pano_adi' => '3.kat',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 5,
        'created_at' => '2026-07-22 23:44:02',
      ),
      6 => 
      array (
        'id' => 24,
        'pano_kurum_id' => 3,
        'pano_adi' => '4.kat',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 6,
        'created_at' => '2026-07-22 23:44:02',
      ),
      7 => 
      array (
        'id' => 25,
        'pano_kurum_id' => 3,
        'pano_adi' => 'Kat pana dış',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 7,
        'created_at' => '2026-07-22 23:44:02',
      ),
    ),
  ),
  17 => 
  array (
    'id' => 2,
    'sn' => '',
    'mintika' => 'SEYDİŞEHİR',
    'yurt_adi' => 'DÖRTYOL',
    'resmi_kurum_adi' => 'Özel Dörtyol Yükseköğrenim Erkek Öğrenci Yurdu',
    'kapasite' => '32',
    'yurt_muduru' => 'Avni Baş',
    'yurt_tel_no' => '(332) 582-3094',
    'dernek_adi' => 'Seydişehir Dörtyol İlme Hizmet ve Talebelere Yardım Derneği',
    'yurt_adresi' => 'Alaylarbir Mah. Enis Şanlıoğlu Cd. 152182. Sk. No:1 Seydişehir/Konya',
    'ada_no' => '865',
    'pafta_no' => 'N27-B-07-B-4-C,N27-B-07-C-1-B',
    'parsel_no' => '8',
    'iskan_foto' => 'uploads/iskan/iskan_6a60b9e88712d_1784723944.jpg',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a60b9e8875df_1784723944.jpg',
    'created_at' => '2026-07-22 03:27:57',
    'updated_at' => '2026-07-22 05:39:04',
    'silindi' => 0,
    'pano_sayisi' => 6,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 3,
        'pano_kurum_id' => 2,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-22 03:27:57',
      ),
      1 => 
      array (
        'id' => 4,
        'pano_kurum_id' => 2,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-22 03:27:57',
      ),
      2 => 
      array (
        'id' => 14,
        'pano_kurum_id' => 2,
        'pano_adi' => '1.Kat Pano',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-22 05:39:04',
      ),
      3 => 
      array (
        'id' => 15,
        'pano_kurum_id' => 2,
        'pano_adi' => '2.Kat Pano',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 3,
        'created_at' => '2026-07-22 05:39:04',
      ),
      4 => 
      array (
        'id' => 16,
        'pano_kurum_id' => 2,
        'pano_adi' => '3.Kat Pano',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 4,
        'created_at' => '2026-07-22 05:39:04',
      ),
      5 => 
      array (
        'id' => 17,
        'pano_kurum_id' => 2,
        'pano_adi' => '4.Kat Pano',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 5,
        'created_at' => '2026-07-22 05:39:04',
      ),
    ),
  ),
  18 => 
  array (
    'id' => 1,
    'sn' => 'NUMUNE-01',
    'mintika' => 'Mıntıka',
    'yurt_adi' => 'Valide Sultan',
    'resmi_kurum_adi' => 'Örnek Özel Yükseköğrenim ErkekÖğrenci Yurdu',
    'kapasite' => '150',
    'yurt_muduru' => 'Ahmet Yılmaz',
    'yurt_tel_no' => '0555 123 45 67',
    'dernek_adi' => 'Örnek Eğitim Derneği',
    'yurt_adresi' => 'Merkez Mah. Örnek Cad. No:123 Selçuklu / KONYA',
    'ada_no' => '1024',
    'pafta_no' => '12',
    'parsel_no' => '45',
    'iskan_foto' => 'uploads/iskan/iskan_6a609a413f563_1784715841.png',
    'yangin_paneli_foto' => 'uploads/yangin/yangin_6a609a74c56f8_1784715892.png',
    'created_at' => '2026-07-22 03:21:38',
    'updated_at' => '2026-07-22 03:24:52',
    'silindi' => 0,
    'pano_sayisi' => 3,
    'panolar' => 
    array (
      0 => 
      array (
        'id' => 1,
        'pano_kurum_id' => 1,
        'pano_adi' => 'Sayaç Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 0,
        'created_at' => '2026-07-22 03:21:38',
      ),
      1 => 
      array (
        'id' => 2,
        'pano_kurum_id' => 1,
        'pano_adi' => 'Ana Dağıtım Panosu',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 1,
        'created_at' => '2026-07-22 03:21:38',
      ),
      2 => 
      array (
        'id' => 13,
        'pano_kurum_id' => 1,
        'pano_adi' => '1.Kat Pano',
        'normal_foto' => NULL,
        'termal_foto' => NULL,
        'sira' => 2,
        'created_at' => '2026-07-22 04:28:22',
      ),
    ),
  ),
);

// Function to download files from remote bypassing anti-bot check
function downloadRemoteFile($path) {
    $url = "https://bilgiler.gt.tc/" . $path;
    $ua = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36";
    
    // Step 1: Request without cookie to get challenge parameters
    $opts1 = [
        'http' => [
            'header' => "User-Agent: $ua\r\n",
            'timeout' => 10
        ]
    ];
    $context1 = stream_context_create($opts1);
    $html = @file_get_contents($url, false, $context1);
    if ($html === false) {
        return false;
    }
    
    // Check if it is the challenge page
    if (preg_match('/toNumbers\("([0-9a-f]+)"\).*?toNumbers\("([0-9a-f]+)"\).*?toNumbers\("([0-9a-f]+)"\)/s', $html, $m)) {
        $key = hex2bin($m[1]);
        $iv = hex2bin($m[2]);
        $ct = hex2bin($m[3]);
        
        $decrypted = openssl_decrypt($ct, 'AES-128-CBC', $key, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING, $iv);
        if ($decrypted === false) {
            return false;
        }
        $cookie_val = bin2hex($decrypted);
        
        // Step 2: Request with decrypted cookie
        $opts2 = [
            'http' => [
                'header' => "Cookie: __test=$cookie_val\r\nUser-Agent: $ua\r\n",
                'timeout' => 15
            ]
        ];
        $context2 = stream_context_create($opts2);
        // Free hosts require redirecting with ?i=1 or similar query param
        $raw = @file_get_contents($url . "?i=1", false, $context2);
        return $raw;
    }
    
    // If not challenge page, return raw content directly
    return $html;
}

// Function to find matching institution ID in 1. Sistem
function findMatchingInstitution($pdo, $yurt_adi, $resmi_kurum_adi) {
    if (!empty($resmi_kurum_adi)) {
        $stmt = $pdo->prepare("SELECT id FROM institutions WHERE firma_adi = ?");
        $stmt->execute([$resmi_kurum_adi]);
        if ($row = $stmt->fetch()) return $row['id'];
    }
    if (!empty($yurt_adi)) {
        $stmt = $pdo->prepare("SELECT id FROM institutions WHERE firma_adi = ?");
        $stmt->execute([$yurt_adi]);
        if ($row = $stmt->fetch()) return $row['id'];
    }
    
    $search = !empty($resmi_kurum_adi) ? $resmi_kurum_adi : $yurt_adi;
    $search_clean = preg_replace('/^(özel|ornek)\s+/iu', '', $search);
    $search_words = explode(' ', $search_clean);
    if (!empty($search_words)) {
        $word1 = $search_words[0];
        $word2 = isset($search_words[1]) ? $search_words[1] : '';
        if (strlen($word1) > 2) {
            $sql = "SELECT id FROM institutions WHERE firma_adi LIKE ?";
            $params = ["%$word1%"];
            if (!empty($word2) && strlen($word2) > 2) {
                $sql .= " AND firma_adi LIKE ?";
                $params[] = "%$word2%";
            }
            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);
            if ($row = $stmt->fetch()) return $row['id'];
        }
    }
    return null;
}

// Automatically create the tables if they don't exist
try {
    $pdo->exec("CREATE TABLE IF NOT EXISTS `pano_yurtlar` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `sn` VARCHAR(50) DEFAULT NULL,
        `mintika` VARCHAR(255) DEFAULT NULL,
        `yurt_adi` VARCHAR(255) DEFAULT NULL,
        `resmi_kurum_adi` VARCHAR(255) DEFAULT NULL,
        `kapasite` VARCHAR(50) DEFAULT NULL,
        `yurt_muduru` VARCHAR(255) DEFAULT NULL,
        `yurt_tel_no` VARCHAR(50) DEFAULT NULL,
        `dernek_adi` VARCHAR(255) DEFAULT NULL,
        `yurt_adresi` TEXT DEFAULT NULL,
        `ada_no` VARCHAR(50) DEFAULT NULL,
        `pafta_no` VARCHAR(50) DEFAULT NULL,
        `parsel_no` VARCHAR(50) DEFAULT NULL,
        `iskan_foto` VARCHAR(500) DEFAULT NULL,
        `yangin_paneli_foto` VARCHAR(500) DEFAULT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        `silindi` TINYINT(1) DEFAULT 0,
        `sure_uzatildi_at` DATETIME DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

    $pdo->exec("CREATE TABLE IF NOT EXISTS `panolar` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `pano_kurum_id` INT,
        `pano_adi` VARCHAR(255) DEFAULT NULL,
        `normal_foto` VARCHAR(500) DEFAULT NULL,
        `termal_foto` VARCHAR(500) DEFAULT NULL,
        `sira` INT DEFAULT 0,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (`pano_kurum_id`) REFERENCES `pano_yurtlar` (`id`) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

    $pdo->exec("CREATE TABLE IF NOT EXISTS `pano_fotograflar` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `pano_id` INT,
        `foto_tipi` ENUM('normal', 'termal') NOT NULL,
        `foto_yolu` VARCHAR(500) NOT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (`pano_id`) REFERENCES `panolar` (`id`) ON DELETE CASCADE
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
} catch (PDOException $e) {
    echo "Warning/Error during table creation: " . $e->getMessage() . "\n";
}

$user_id = $_SESSION['user_id'] ?? 1;

// Resolving a default authorized person
$stmt_ap = $pdo->query("SELECT id FROM authorized_persons LIMIT 1");
$ap = $stmt_ap->fetch();
$authorized_person_id = $ap ? $ap['id'] : 1;

$yurtlar_inserted = 0;
$yurtlar_updated = 0;
$panolar_inserted = 0;
$files_downloaded = 0;
$files_failed = 0;
$sys1_fire_inserted = 0;
$sys1_panels_inserted = 0;

// Ensure base uploads directories exist on the server
$iskan_dir = __DIR__ . '/../uploads/iskan';
$yangin_dir = __DIR__ . '/../uploads/yangin';
$pano_dir = __DIR__ . '/../uploads/pano';
if (!file_exists($iskan_dir)) {
    mkdir($iskan_dir, 0777, true);
}
if (!file_exists($yangin_dir)) {
    mkdir($yangin_dir, 0777, true);
}
if (!file_exists($pano_dir)) {
    mkdir($pano_dir, 0777, true);
}

echo "=== STARTING PANO & BELGE MIGRATION ===\n\n";

foreach ($rawData as $item) {
    $remote_id = $item['id'];
    $yurt_adi = $item['yurt_adi'] ?? '';
    $resmi_kurum_adi = $item['resmi_kurum_adi'] ?? '';
    
    echo "Processing Kurum: " . ($yurt_adi ?: $resmi_kurum_adi) . " (ID: $remote_id)\n";
    
    // 1. Download Iskan Foto
    $local_iskan_path = null;
    if (!empty($item['iskan_foto'])) {
        $remote_path = $item['iskan_foto'];
        $filename = basename($remote_path);
        $local_dest = __DIR__ . '/../uploads/iskan/' . $filename;
        $db_dest = 'uploads/iskan/' . $filename;
        
        if (file_exists($local_dest) && filesize($local_dest) > 1000) {
            echo "  Iskan document already exists locally.\n";
            $local_iskan_path = $db_dest;
        } else {
            echo "  Downloading Iskan document...\n";
            $data = downloadRemoteFile($remote_path);
            if ($data !== false && strlen($data) > 1000) {
                file_put_contents($local_dest, $data);
                echo "    Success! Saved: $filename (" . strlen($data) . " bytes)\n";
                $local_iskan_path = $db_dest;
                $files_downloaded++;
            } else {
                echo "    Failed to download Iskan document.\n";
                $files_failed++;
            }
        }
    }
    
    // 2. Download Yangin Paneli Foto
    $local_yangin_path = null;
    if (!empty($item['yangin_paneli_foto'])) {
        $remote_path = $item['yangin_paneli_foto'];
        $filename = basename($remote_path);
        $local_dest = __DIR__ . '/../uploads/yangin/' . $filename;
        $db_dest = 'uploads/yangin/' . $filename;
        
        if (file_exists($local_dest) && filesize($local_dest) > 1000) {
            echo "  Yangin panel photo already exists locally.\n";
            $local_yangin_path = $db_dest;
        } else {
            echo "  Downloading Yangin panel photo...\n";
            $data = downloadRemoteFile($remote_path);
            if ($data !== false && strlen($data) > 1000) {
                file_put_contents($local_dest, $data);
                echo "    Success! Saved: $filename (" . strlen($data) . " bytes)\n";
                $local_yangin_path = $db_dest;
                $files_downloaded++;
            } else {
                echo "    Failed to download Yangin panel photo.\n";
                $files_failed++;
            }
        }
    }
    
    // 3. Insert or Update pano_yurtlar
    $stmt_yurt = $pdo->prepare("SELECT id FROM pano_yurtlar WHERE id = ?");
    $stmt_yurt->execute([$remote_id]);
    $exists = $stmt_yurt->fetch();
    
    if (!$exists) {
        $stmt_ins = $pdo->prepare("INSERT INTO pano_yurtlar 
            (id, sn, mintika, yurt_adi, resmi_kurum_adi, kapasite, yurt_muduru, yurt_tel_no, dernek_adi, yurt_adresi, ada_no, pafta_no, parsel_no, iskan_foto, yangin_paneli_foto) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt_ins->execute([
            $remote_id,
            $item['sn'] ?? '',
            $item['mintika'] ?? '',
            $yurt_adi,
            $resmi_kurum_adi,
            $item['kapasite'] ?? '',
            $item['yurt_muduru'] ?? '',
            $item['yurt_tel_no'] ?? '',
            $item['dernek_adi'] ?? '',
            $item['yurt_adresi'] ?? '',
            $item['ada_no'] ?? '',
            $item['pafta_no'] ?? '',
            $item['parsel_no'] ?? '',
            $local_iskan_path,
            $local_yangin_path
        ]);
        $yurtlar_inserted++;
        echo "  Inserted into pano_yurtlar.\n";
    } else {
        $stmt_upd = $pdo->prepare("UPDATE pano_yurtlar SET 
            sn = ?, mintika = ?, yurt_adi = ?, resmi_kurum_adi = ?, kapasite = ?, yurt_muduru = ?, yurt_tel_no = ?, dernek_adi = ?, yurt_adresi = ?, ada_no = ?, pafta_no = ?, parsel_no = ?, iskan_foto = ?, yangin_paneli_foto = ? 
            WHERE id = ?");
        $stmt_upd->execute([
            $item['sn'] ?? '',
            $item['mintika'] ?? '',
            $yurt_adi,
            $resmi_kurum_adi,
            $item['kapasite'] ?? '',
            $item['yurt_muduru'] ?? '',
            $item['yurt_tel_no'] ?? '',
            $item['dernek_adi'] ?? '',
            $item['yurt_adresi'] ?? '',
            $item['ada_no'] ?? '',
            $item['pafta_no'] ?? '',
            $item['parsel_no'] ?? '',
            $local_iskan_path,
            $local_yangin_path,
            $remote_id
        ]);
        $yurtlar_updated++;
        echo "  Updated pano_yurtlar.\n";
    }
    
    // 4. Insert panolar list
    if (!empty($item['panolar'])) {
        foreach ($item['panolar'] as $p) {
            $pano_id = $p['id'];
            $stmt_pano = $pdo->prepare("SELECT id FROM panolar WHERE id = ?");
            $stmt_pano->execute([$pano_id]);
            if (!$stmt_pano->fetch()) {
                $stmt_ins_p = $pdo->prepare("INSERT INTO panolar (id, pano_kurum_id, pano_adi, normal_foto, termal_foto, sira) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt_ins_p->execute([
                    $pano_id,
                    $remote_id,
                    $p['pano_adi'],
                    null,
                    null,
                    $p['sira'] ?? 0
                ]);
                $panolar_inserted++;
            }
        }
        echo "  Processed " . count($item['panolar']) . " panolar.\n";
    }
    
    // 5. System 1 Integration (Reports & Photos mapping)
    $sys1_inst_id = findMatchingInstitution($pdo, $yurt_adi, $resmi_kurum_adi);
    if ($sys1_inst_id) {
        echo "  Matched in 1. Sistem (Kurum ID: $sys1_inst_id).\n";
        
        // Fetch or create fire_detection_reports
        $stmt_fire = $pdo->prepare("SELECT id, report_no FROM fire_detection_reports WHERE kurum_id = ?");
        $stmt_fire->execute([$sys1_inst_id]);
        $fire_rep = $stmt_fire->fetch();
        
        // Extract basic institution metadata to replicate
        $stmt_meta = $pdo->prepare("SELECT il_kodu, kurum_kodu, report_date, start_date, end_date, next_control_date FROM institutions WHERE id = ?");
        $stmt_meta->execute([$sys1_inst_id]);
        $meta = $stmt_meta->fetch();
        
        if (!$fire_rep) {
            $report_no = ($meta ? $meta['il_kodu'] : '01') . '-' . ($meta ? $meta['kurum_kodu'] : '001') . '-ya-' . time() . rand(10, 99);
            $stmt_ins_fire = $pdo->prepare("INSERT INTO fire_detection_reports 
                (kurum_id, report_no, report_date, start_date, end_date, next_control_date, result, authorized_person_id) 
                VALUES (?, ?, ?, ?, ?, ?, 'UYGUNDUR', ?)");
            $stmt_ins_fire->execute([
                $sys1_inst_id,
                $report_no,
                $meta ? $meta['report_date'] : null,
                $meta ? $meta['start_date'] : null,
                $meta ? $meta['end_date'] : null,
                $meta ? $meta['next_control_date'] : null,
                $authorized_person_id
            ]);
            $fire_report_id = $pdo->lastInsertId();
            $sys1_fire_inserted++;
            echo "    Created default Fire Detection Report (Report ID: $fire_report_id).\n";
        } else {
            $fire_report_id = $fire_rep['id'];
        }
        
        // Map yangin_paneli_foto to fire_detection_photos
        if ($local_yangin_path) {
            // Check if photo is already added
            $stmt_p_chk = $pdo->prepare("SELECT id FROM fire_detection_photos WHERE report_id = ? AND description = ?");
            $stmt_p_chk->execute([$fire_report_id, 'Yangın Algılama Paneli Fotoğrafı']);
            if (!$stmt_p_chk->fetch()) {
                // Ensure directory exists
                $dest_dir = __DIR__ . '/../uploads/yangin_algilama/' . $fire_report_id;
                if (!file_exists($dest_dir)) {
                    mkdir($dest_dir, 0777, true);
                }
                
                $orig_filename = basename($local_yangin_path);
                $sys1_dest_file = $dest_dir . '/' . $orig_filename;
                $sys1_db_path = 'uploads/yangin_algilama/' . $fire_report_id . '/' . $orig_filename;
                
                copy(__DIR__ . '/../' . $local_yangin_path, $sys1_dest_file);
                
                $stmt_ins_photo = $pdo->prepare("INSERT INTO fire_detection_photos (report_id, file_path, description) VALUES (?, ?, ?)");
                $stmt_ins_photo->execute([$fire_report_id, $sys1_db_path, 'Yangın Algılama Paneli Fotoğrafı']);
                echo "    Mapped Yangin panel photo to 1. Sistem.\n";
            }
        }
        
        // Fetch or create internal_installation_reports
        $stmt_int = $pdo->prepare("SELECT id, report_no FROM internal_installation_reports WHERE kurum_id = ?");
        $stmt_int->execute([$sys1_inst_id]);
        $int_rep = $stmt_int->fetch();
        
        if (!$int_rep) {
            $report_no = ($meta ? $meta['il_kodu'] : '01') . '-' . ($meta ? $meta['kurum_kodu'] : '001') . '-ic-' . time() . rand(10, 99);
            $stmt_ins_int = $pdo->prepare("INSERT INTO internal_installation_reports 
                (kurum_id, report_no, report_date, start_date, end_date, next_control_date, result, authorized_person_id) 
                VALUES (?, ?, ?, ?, ?, ?, 'UYGUNDUR', ?)");
            $stmt_ins_int->execute([
                $sys1_inst_id,
                $report_no,
                $meta ? $meta['report_date'] : null,
                $meta ? $meta['start_date'] : null,
                $meta ? $meta['end_date'] : null,
                $meta ? $meta['next_control_date'] : null,
                $authorized_person_id
            ]);
            $int_report_id = $pdo->lastInsertId();
            echo "    Created default Internal Installation Report (Report ID: $int_report_id).\n";
        } else {
            $int_report_id = $int_rep['id'];
        }
        
        // Map panolar to ic_tesisat_panels
        if (!empty($item['panolar'])) {
            foreach ($item['panolar'] as $p) {
                // Check if panel already exists under this report
                $stmt_p_chk = $pdo->prepare("SELECT id FROM ic_tesisat_panels WHERE report_id = ? AND panel_name = ?");
                $stmt_p_chk->execute([$int_report_id, $p['pano_adi']]);
                if (!$stmt_p_chk->fetch()) {
                    $stmt_ins_p = $pdo->prepare("INSERT INTO ic_tesisat_panels (report_id, panel_name, panel_order, notes) VALUES (?, ?, ?, ?)");
                    $stmt_ins_p->execute([
                        $int_report_id,
                        $p['pano_adi'],
                        $p['sira'] ?? 0,
                        ''
                    ]);
                    $sys1_panels_inserted++;
                }
            }
            echo "    Mapped panolar to 1. Sistem ic_tesisat_panels.\n";
        }
    } else {
        echo "  Could not find matching institution in 1. Sistem.\n";
    }
    
    echo "\n";
}

echo "=== MIGRATION COMPLETE ===\n";
echo "New pano_yurtlar inserted: $yurtlar_inserted\n";
echo "Pano_yurtlar updated: $yurtlar_updated\n";
echo "New panolar inserted: $panolar_inserted\n";
echo "Files downloaded successfully: $files_downloaded\n";
echo "Files failed to download: $files_failed\n";
echo "New Fire reports created: $sys1_fire_inserted\n";
echo "Mapped panels to ic_tesisat_panels: $sys1_panels_inserted\n";
echo "\nGÜVENLİK UYARISI: Bu dosyayı çalıştırdıktan sonra sunucudan silmeyi UNUTMAYIN!\n";
