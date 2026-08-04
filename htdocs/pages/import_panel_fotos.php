<?php
require_once __DIR__ . "/../includes/db.php";
require_once __DIR__ . "/../includes/functions.php";
require_once __DIR__ . "/../includes/auth.php";

// Secure page: require login
requireLogin();

// Increase execution time for the batch
set_time_limit(180);
ini_set("memory_limit", "256M");

$photos = array (
  0 => 
  array (
    'file_path' => 'uploads/ic_tesisat/2/1/normal_1772065410_327.jpeg',
    'photo_type' => 'normal',
    'panel_name' => '1',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  1 => 
  array (
    'file_path' => 'uploads/ic_tesisat/2/1/termal_1772065414_542.png',
    'photo_type' => 'termal',
    'panel_name' => '1',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  2 => 
  array (
    'file_path' => 'uploads/ic_tesisat/2/1/normal_1772065420_803.png',
    'photo_type' => 'normal',
    'panel_name' => '1',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  3 => 
  array (
    'file_path' => 'uploads/ic_tesisat/2/2/normal_1772065544_765.jpg',
    'photo_type' => 'normal',
    'panel_name' => '2',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  4 => 
  array (
    'file_path' => 'uploads/ic_tesisat/2/2/termal_1772065546_298.jpeg',
    'photo_type' => 'termal',
    'panel_name' => '2',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  5 => 
  array (
    'file_path' => 'uploads/ic_tesisat/2/3/normal_1772065578_901.jpg',
    'photo_type' => 'normal',
    'panel_name' => '3',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  6 => 
  array (
    'file_path' => 'uploads/ic_tesisat/2/3/termal_1772065580_369.jpeg',
    'photo_type' => 'termal',
    'panel_name' => '3',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  7 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/4/normal_1772558791_643.png',
    'photo_type' => 'normal',
    'panel_name' => 'ana pano',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  8 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/4/termal_1772558826_959.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'ana pano',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  9 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/5/termal_1772558864_226.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'pano 1',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  10 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/5/termal_1772558864_503.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'pano 1',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  11 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/5/normal_1772558876_760.png',
    'photo_type' => 'normal',
    'panel_name' => 'pano 1',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  12 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/6/normal_1772558892_797.png',
    'photo_type' => 'normal',
    'panel_name' => 'pano 2',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  13 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/6/termal_1772558897_982.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'pano 2',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  14 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/7/normal_1772558940_109.png',
    'photo_type' => 'normal',
    'panel_name' => 'pano 3',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  15 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/7/termal_1772558946_380.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'pano 3',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  16 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/7/termal_1772558946_459.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'pano 3',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  17 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/9/normal_1772559202_353.png',
    'photo_type' => 'normal',
    'panel_name' => 'pano 5',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  18 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/9/normal_1772559210_220.png',
    'photo_type' => 'normal',
    'panel_name' => 'pano 5',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  19 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/9/termal_1772559262_332.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'pano 5',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  20 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/9/termal_1772559262_910.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'pano 5',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  21 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/8/termal_1772559302_562.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'pano 4',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  22 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/8/termal_1772559302_212.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'pano 4',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  23 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/8/termal_1772559302_451.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'pano 4',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  24 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/8/termal_1772559302_718.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'pano 4',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  25 => 
  array (
    'file_path' => 'uploads/ic_tesisat/5/8/normal_1772559457_701.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'pano 4',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  26 => 
  array (
    'file_path' => 'uploads/ic_tesisat/6/10/normal_1772629865_564.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana Pano',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  27 => 
  array (
    'file_path' => 'uploads/ic_tesisat/6/10/termal_1772629927_175.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana Pano',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  28 => 
  array (
    'file_path' => 'uploads/ic_tesisat/6/10/termal_1772629927_609.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana Pano',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  29 => 
  array (
    'file_path' => 'uploads/ic_tesisat/6/10/termal_1772629945_527.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana Pano',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  30 => 
  array (
    'file_path' => 'uploads/ic_tesisat/6/11/normal_1772629972_214.png',
    'photo_type' => 'normal',
    'panel_name' => 'Tali Pano',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  31 => 
  array (
    'file_path' => 'uploads/ic_tesisat/6/11/termal_1772629978_419.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Tali Pano',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  32 => 
  array (
    'file_path' => 'uploads/ic_tesisat/6/11/termal_1772629978_994.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Tali Pano',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  33 => 
  array (
    'file_path' => 'uploads/ic_tesisat/6/11/termal_1772629978_687.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Tali Pano',
    'firma_adi' => 'DERYA SILAH SANAYI VE TICARET LIMITED SIRKETI',
  ),
  34 => 
  array (
    'file_path' => 'uploads/ic_tesisat/8/13/normal_1775403807_227.jpeg',
    'photo_type' => 'normal',
    'panel_name' => 'Ana sayac panosu',
    'firma_adi' => 'Özel Beyşehir Yıldız Anaokulu',
  ),
  35 => 
  array (
    'file_path' => 'uploads/ic_tesisat/8/14/normal_1775403812_567.jpeg',
    'photo_type' => 'normal',
    'panel_name' => 'tali pano',
    'firma_adi' => 'Özel Beyşehir Yıldız Anaokulu',
  ),
  36 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/33/normal_1776431476_353.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ovalama pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  37 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/35/normal_1776432070_920.jpg',
    'photo_type' => 'normal',
    'panel_name' => '13 no kapı ana besleme',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  38 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/36/normal_1776432355_265.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'İmalat kalite kontrol yanı pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  39 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/37/normal_1776433154_467.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Rotilli kol pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  40 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/37/normal_1776433155_442.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Rotilli kol pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  41 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/37/normal_1776433158_295.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Rotilli kol pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  42 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/40/normal_1776433575_176.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im089',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  43 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/41/normal_1776433843_854.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im088',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  44 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/42/normal_1776433934_700.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im013',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  45 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/43/normal_1776434005_646.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  46 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/44/normal_1776434139_358.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im011',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  47 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/46/normal_1776434284_323.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im054',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  48 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/47/normal_1776434366_436.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im055',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  49 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/48/normal_1776434429_216.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im053',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  50 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/49/normal_1776434513_596.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im058',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  51 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/50/normal_1776434628_669.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im087',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  52 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/51/normal_1776434727_911.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im093',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  53 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/52/normal_1776434859_609.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Brother pano im 94 yanı',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  54 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/53/normal_1776434975_774.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im094',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  55 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/54/normal_1776435042_923.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im086',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  56 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/55/normal_1776435112_875.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im107',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  57 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/56/normal_1776435237_983.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im106',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  58 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/57/normal_1776435324_262.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-cn138',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  59 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/58/normal_1776435399_532.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-cn139',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  60 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/61/normal_1776435682_609.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im028',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  61 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/62/normal_1776435730_866.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im015',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  62 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/63/normal_1776435780_598.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im014',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  63 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/15/normal_1776658736_560.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  64 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/15/normal_1776658736_231.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  65 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/15/normal_1776658739_853.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  66 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/15/normal_1776658745_956.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  67 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/16/normal_1776660227_723.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Baskı bölümü pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  68 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/16/normal_1776660228_395.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Baskı bölümü pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  69 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/16/normal_1776660231_971.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Baskı bölümü pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  70 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/17/normal_1776660254_404.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Poşet 2',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  71 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/18/normal_1776660271_210.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ek bina aydınlatma',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  72 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/19/normal_1776660297_264.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ek bina dağıtım panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  73 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/19/normal_1776660298_354.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ek bina dağıtım panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  74 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/19/normal_1776660309_524.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ek bina dağıtım panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  75 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/19/normal_1776660309_106.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ek bina dağıtım panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  76 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/20/normal_1776660351_163.jpg',
    'photo_type' => 'normal',
    'panel_name' => '19 ve 20 nolu makina panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  77 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/21/normal_1776660364_912.jpg',
    'photo_type' => 'normal',
    'panel_name' => '14 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  78 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/30/normal_1776660932_983.jpg',
    'photo_type' => 'normal',
    'panel_name' => '21 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  79 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/31/normal_1776660955_580.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Kazan dairesi panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  80 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/15/termal_1777030509_399.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  81 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/15/termal_1777030509_307.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  82 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/15/termal_1777030509_134.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  83 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/15/termal_1777030509_817.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  84 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/16/termal_1777030534_384.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Baskı bölümü pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  85 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/16/termal_1777030534_526.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Baskı bölümü pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  86 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/16/termal_1777030535_828.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Baskı bölümü pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  87 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/17/termal_1777030550_488.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Poşet 2',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  88 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/31/termal_1777030568_279.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Kazan dairesi panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  89 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/30/termal_1777030578_487.jpg',
    'photo_type' => 'termal',
    'panel_name' => '21 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  90 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/29/termal_1777030594_890.jpg',
    'photo_type' => 'termal',
    'panel_name' => '3 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  91 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/28/termal_1777030606_398.jpg',
    'photo_type' => 'termal',
    'panel_name' => '4 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  92 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/28/normal_1777030624_999.jpg',
    'photo_type' => 'normal',
    'panel_name' => '4 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  93 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/28/normal_1777030629_474.jpg',
    'photo_type' => 'normal',
    'panel_name' => '4 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  94 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/27/termal_1777030646_489.jpg',
    'photo_type' => 'termal',
    'panel_name' => '5 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  95 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/26/termal_1777030664_842.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Havalandırma panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  96 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/25/termal_1777030678_492.jpg',
    'photo_type' => 'termal',
    'panel_name' => '2 nolu pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  97 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/24/termal_1777030694_164.jpg',
    'photo_type' => 'termal',
    'panel_name' => '1 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  98 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/24/termal_1777030694_583.jpg',
    'photo_type' => 'termal',
    'panel_name' => '1 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  99 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/23/termal_1777030705_855.jpg',
    'photo_type' => 'termal',
    'panel_name' => '13 nolu pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  100 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/23/termal_1777030705_831.jpg',
    'photo_type' => 'termal',
    'panel_name' => '13 nolu pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  101 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/22/termal_1777030726_697.jpg',
    'photo_type' => 'termal',
    'panel_name' => '11 ve 12 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  102 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/22/termal_1777030726_596.jpg',
    'photo_type' => 'termal',
    'panel_name' => '11 ve 12 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  103 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/21/termal_1777030741_189.jpg',
    'photo_type' => 'termal',
    'panel_name' => '14 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  104 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/21/termal_1777030741_337.jpg',
    'photo_type' => 'termal',
    'panel_name' => '14 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  105 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/20/termal_1777030752_808.jpg',
    'photo_type' => 'termal',
    'panel_name' => '19 ve 20 nolu makina panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  106 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/20/termal_1777030752_179.jpg',
    'photo_type' => 'termal',
    'panel_name' => '19 ve 20 nolu makina panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  107 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/19/termal_1777030778_697.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ek bina dağıtım panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  108 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/19/termal_1777030778_566.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ek bina dağıtım panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  109 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/19/termal_1777030778_486.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ek bina dağıtım panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  110 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/19/termal_1777030778_664.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ek bina dağıtım panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  111 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/18/termal_1777030790_607.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ek bina aydınlatma',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  112 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/29/normal_1777030866_260.jpg',
    'photo_type' => 'normal',
    'panel_name' => '3 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  113 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/27/normal_1777030906_991.jpg',
    'photo_type' => 'normal',
    'panel_name' => '5 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  114 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/26/normal_1777030931_922.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Havalandırma panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  115 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/26/normal_1777030932_945.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Havalandırma panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  116 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/25/normal_1777030968_629.jpg',
    'photo_type' => 'normal',
    'panel_name' => '2 nolu pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  117 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/25/normal_1777030980_258.jpg',
    'photo_type' => 'normal',
    'panel_name' => '2 nolu pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  118 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/24/normal_1777031044_260.jpg',
    'photo_type' => 'normal',
    'panel_name' => '1 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  119 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/24/normal_1777031045_709.jpg',
    'photo_type' => 'normal',
    'panel_name' => '1 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  120 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/24/normal_1777031045_803.jpg',
    'photo_type' => 'normal',
    'panel_name' => '1 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  121 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/23/normal_1777031083_608.jpg',
    'photo_type' => 'normal',
    'panel_name' => '13 nolu pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  122 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/23/normal_1777031083_381.jpg',
    'photo_type' => 'normal',
    'panel_name' => '13 nolu pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  123 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/23/normal_1777031084_149.jpg',
    'photo_type' => 'normal',
    'panel_name' => '13 nolu pano',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  124 => 
  array (
    'file_path' => 'uploads/ic_tesisat/11/22/normal_1777031108_991.jpg',
    'photo_type' => 'normal',
    'panel_name' => '11 ve 12 nolu makine panosu',
    'firma_adi' => 'PAPİRUS KAĞIT SANAYİ VE TİCARET ANONİM ŞİRKETİ',
  ),
  125 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/66/normal_1777225251_485.png',
    'photo_type' => 'normal',
    'panel_name' => '3. kat pano 1',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  126 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/67/normal_1777225284_678.png',
    'photo_type' => 'normal',
    'panel_name' => '3. kat pano 2',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  127 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/69/normal_1777225322_368.png',
    'photo_type' => 'normal',
    'panel_name' => '2. kat pano 1',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  128 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/70/normal_1777225341_353.png',
    'photo_type' => 'normal',
    'panel_name' => '2. kat pano 2',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  129 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/71/normal_1777225383_266.png',
    'photo_type' => 'normal',
    'panel_name' => '1. kat pano 1',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  130 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/72/normal_1777225394_368.png',
    'photo_type' => 'normal',
    'panel_name' => '1. kat pano 2',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  131 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/74/normal_1777225414_256.png',
    'photo_type' => 'normal',
    'panel_name' => 'bodrum kat pano',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  132 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/normal_1777225434_701.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  133 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/normal_1777225440_919.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  134 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/normal_1777225447_827.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  135 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/normal_1777225454_182.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  136 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/normal_1777225460_980.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  137 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/normal_1777225470_434.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  138 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/normal_1777225477_287.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  139 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/65/normal_1777230938_781.png',
    'photo_type' => 'normal',
    'panel_name' => 'ş1',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  140 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/65/normal_1777230943_810.png',
    'photo_type' => 'normal',
    'panel_name' => 'ş1',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  141 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/75/normal_1777230979_325.png',
    'photo_type' => 'normal',
    'panel_name' => 'ş2',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  142 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/76/normal_1777230997_118.png',
    'photo_type' => 'normal',
    'panel_name' => 'ş3',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  143 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/76/normal_1777231002_749.png',
    'photo_type' => 'normal',
    'panel_name' => 'ş3',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  144 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/77/normal_1777231019_687.png',
    'photo_type' => 'normal',
    'panel_name' => 'ş4',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  145 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/77/normal_1777231024_736.png',
    'photo_type' => 'normal',
    'panel_name' => 'ş4',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  146 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/78/normal_1777231078_274.png',
    'photo_type' => 'normal',
    'panel_name' => 'bs1',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  147 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/79/normal_1777231099_429.png',
    'photo_type' => 'normal',
    'panel_name' => 'mg1',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  148 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/80/normal_1777231148_935.png',
    'photo_type' => 'normal',
    'panel_name' => 'mg2',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  149 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/80/normal_1777231155_307.png',
    'photo_type' => 'normal',
    'panel_name' => 'mg2',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  150 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/80/normal_1777231164_872.png',
    'photo_type' => 'normal',
    'panel_name' => 'mg2',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  151 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/81/normal_1777231189_373.png',
    'photo_type' => 'normal',
    'panel_name' => 'mg3',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  152 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/81/normal_1777231195_247.png',
    'photo_type' => 'normal',
    'panel_name' => 'mg3',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  153 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/82/normal_1777231229_364.png',
    'photo_type' => 'normal',
    'panel_name' => 'mg4 (şarj ist.)',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  154 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/83/normal_1777231299_188.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana Elektrik Odası',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  155 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/83/normal_1777231305_794.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana Elektrik Odası',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  156 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/83/normal_1777231311_180.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana Elektrik Odası',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  157 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/83/normal_1777231317_276.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana Elektrik Odası',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  158 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/84/normal_1777231341_351.png',
    'photo_type' => 'normal',
    'panel_name' => 'by01',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  159 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/85/normal_1777231359_781.png',
    'photo_type' => 'normal',
    'panel_name' => 'komp01',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  160 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/86/normal_1777231398_353.png',
    'photo_type' => 'normal',
    'panel_name' => 'kaporta pano',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  161 => 
  array (
    'file_path' => 'uploads/ic_tesisat/14/88/normal_1777232468_724.png',
    'photo_type' => 'normal',
    'panel_name' => 'Depo pano',
    'firma_adi' => 'Depo - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  162 => 
  array (
    'file_path' => 'uploads/ic_tesisat/7/89/normal_1777233032_842.png',
    'photo_type' => 'normal',
    'panel_name' => 'Mağaza Ana Pano',
    'firma_adi' => 'Malatya Park Mağazası - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  163 => 
  array (
    'file_path' => 'uploads/ic_tesisat/15/98/normal_1777233831_689.png',
    'photo_type' => 'normal',
    'panel_name' => 'bodrum kat',
    'firma_adi' => 'Dörtyol Mağazası - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  164 => 
  array (
    'file_path' => 'uploads/ic_tesisat/15/99/normal_1777233842_233.png',
    'photo_type' => 'normal',
    'panel_name' => 'ana pano',
    'firma_adi' => 'Dörtyol Mağazası - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  165 => 
  array (
    'file_path' => 'uploads/ic_tesisat/15/99/normal_1777233854_106.png',
    'photo_type' => 'normal',
    'panel_name' => 'ana pano',
    'firma_adi' => 'Dörtyol Mağazası - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  166 => 
  array (
    'file_path' => 'uploads/ic_tesisat/15/100/normal_1777233866_555.png',
    'photo_type' => 'normal',
    'panel_name' => 'kompanzasyon pano',
    'firma_adi' => 'Dörtyol Mağazası - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  167 => 
  array (
    'file_path' => 'uploads/ic_tesisat/15/101/normal_1777233962_664.png',
    'photo_type' => 'normal',
    'panel_name' => 'şebeke/jenerator panosu',
    'firma_adi' => 'Dörtyol Mağazası - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  168 => 
  array (
    'file_path' => 'uploads/ic_tesisat/15/102/normal_1777233972_264.png',
    'photo_type' => 'normal',
    'panel_name' => 'zemin kat pano',
    'firma_adi' => 'Dörtyol Mağazası - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  169 => 
  array (
    'file_path' => 'uploads/ic_tesisat/15/103/normal_1777233993_397.png',
    'photo_type' => 'normal',
    'panel_name' => '1.kat pano',
    'firma_adi' => 'Dörtyol Mağazası - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  170 => 
  array (
    'file_path' => 'uploads/ic_tesisat/15/104/normal_1777234004_971.png',
    'photo_type' => 'normal',
    'panel_name' => '2.kat pano',
    'firma_adi' => 'Dörtyol Mağazası - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  171 => 
  array (
    'file_path' => 'uploads/ic_tesisat/15/105/normal_1777234021_208.png',
    'photo_type' => 'normal',
    'panel_name' => '3.kat pano',
    'firma_adi' => 'Dörtyol Mağazası - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  172 => 
  array (
    'file_path' => 'uploads/ic_tesisat/10/106/normal_1777234585_534.png',
    'photo_type' => 'normal',
    'panel_name' => 'sayaç panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Villa Mağazası)',
  ),
  173 => 
  array (
    'file_path' => 'uploads/ic_tesisat/10/107/normal_1777234599_414.png',
    'photo_type' => 'normal',
    'panel_name' => 'ana pano',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Villa Mağazası)',
  ),
  174 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/66/termal_1777234857_788.jpg',
    'photo_type' => 'termal',
    'panel_name' => '3. kat pano 1',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  175 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/66/termal_1777234857_820.jpg',
    'photo_type' => 'termal',
    'panel_name' => '3. kat pano 1',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  176 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/69/termal_1777234881_644.jpg',
    'photo_type' => 'termal',
    'panel_name' => '2. kat pano 1',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  177 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/69/termal_1777234881_576.jpg',
    'photo_type' => 'termal',
    'panel_name' => '2. kat pano 1',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  178 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/69/termal_1777234881_696.jpg',
    'photo_type' => 'termal',
    'panel_name' => '2. kat pano 1',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  179 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/70/termal_1777234902_974.jpg',
    'photo_type' => 'termal',
    'panel_name' => '2. kat pano 2',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  180 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/70/termal_1777234902_996.jpg',
    'photo_type' => 'termal',
    'panel_name' => '2. kat pano 2',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  181 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/70/termal_1777234902_823.jpg',
    'photo_type' => 'termal',
    'panel_name' => '2. kat pano 2',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  182 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/67/termal_1777234926_874.jpg',
    'photo_type' => 'termal',
    'panel_name' => '3. kat pano 2',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  183 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/67/termal_1777234926_450.jpg',
    'photo_type' => 'termal',
    'panel_name' => '3. kat pano 2',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  184 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/67/termal_1777234926_667.jpg',
    'photo_type' => 'termal',
    'panel_name' => '3. kat pano 2',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  185 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/71/termal_1777234953_968.jpg',
    'photo_type' => 'termal',
    'panel_name' => '1. kat pano 1',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  186 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/71/termal_1777234953_483.jpg',
    'photo_type' => 'termal',
    'panel_name' => '1. kat pano 1',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  187 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/72/termal_1777234962_147.jpg',
    'photo_type' => 'termal',
    'panel_name' => '1. kat pano 2',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  188 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235042_485.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  189 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235042_145.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  190 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235042_692.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  191 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235043_141.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  192 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235043_456.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  193 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235043_874.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  194 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235085_421.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  195 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235085_923.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  196 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235085_820.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  197 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235085_560.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  198 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235085_489.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  199 => 
  array (
    'file_path' => 'uploads/ic_tesisat/9/73/termal_1777235085_451.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana pano ve 0.kat panosu',
    'firma_adi' => 'ŞAMPİYON EV GEREÇLERİ ELEKTRİK ELEKTRONİK TEKSTİL INŞAAT TARIM VE HAYVANCILIK SAN. VE TIC. A.Ş. (Ev Konsept Mağazası)',
  ),
  200 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/108/normal_1777362452_844.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im048',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  201 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/109/normal_1777362651_163.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im049',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  202 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/110/normal_1777362863_992.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im052',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  203 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/111/normal_1777362996_509.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im061',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  204 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/112/normal_1777363100_189.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im062',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  205 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/114/normal_1777363270_695.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im034',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  206 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/115/normal_1777363350_258.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im035',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  207 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/117/normal_1777363463_716.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im022',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  208 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/118/normal_1777363560_633.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im021',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  209 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/119/normal_1777363708_595.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im104',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  210 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/120/normal_1777363833_248.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im105',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  211 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/116/normal_1777363861_283.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-im020',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  212 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/121/normal_1777364098_723.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-cn166',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  213 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/122/normal_1777364208_829.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN014',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  214 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/123/normal_1777364294_690.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN013',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  215 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/124/normal_1777364442_604.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN180',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  216 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/125/normal_1777364478_261.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN181',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  217 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/126/normal_1777364571_605.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN167',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  218 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/127/normal_1777364679_962.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN247',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  219 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/128/normal_1777364791_942.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN246',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  220 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/129/normal_1777364829_746.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN254',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  221 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/130/normal_1777364909_824.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN249',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  222 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/132/normal_1777365067_276.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN291',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  223 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/131/normal_1777365119_895.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN292',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  224 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/133/normal_1777365197_446.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN251',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  225 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/134/normal_1777365290_258.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN253',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  226 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/135/normal_1777365352_745.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN252',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  227 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/136/normal_1777365464_372.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN250',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  228 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/137/normal_1777365862_310.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN313',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  229 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/138/normal_1777365907_211.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN314',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  230 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/139/normal_1777365986_860.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN160',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  231 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/140/normal_1777366044_569.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN200',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  232 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/141/normal_1777366123_654.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN201',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  233 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/142/normal_1777366210_677.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN202',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  234 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/143/normal_1777366264_736.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN203',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  235 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/144/normal_1777366320_679.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN161',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  236 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/146/normal_1777366583_804.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN245',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  237 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/145/normal_1777370807_427.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN244',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  238 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/147/normal_1777370895_927.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN243',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  239 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/148/normal_1777370952_913.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN242',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  240 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/149/normal_1777371014_223.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN240',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  241 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/150/normal_1777371083_465.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN241',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  242 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/151/normal_1777371206_592.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  243 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/152/normal_1777371285_692.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN204',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  244 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/153/normal_1777371344_645.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN205',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  245 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/154/normal_1777371383_386.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN206',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  246 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/155/normal_1777371420_406.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN207',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  247 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/156/normal_1777371497_381.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN104',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  248 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/157/normal_1777371544_227.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN183',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  249 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/158/normal_1777371648_692.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN182',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  250 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/159/normal_1777371740_982.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN185',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  251 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/160/normal_1777371799_405.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN184',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  252 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/161/normal_1777371834_492.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN186',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  253 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/162/normal_1777371881_556.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN187',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  254 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/163/normal_1777371977_223.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN273',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  255 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/164/normal_1777372093_247.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN274',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  256 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/165/normal_1777372133_909.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN075',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  257 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/167/normal_1777372312_649.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN277',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  258 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/166/normal_1777372384_259.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN276',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  259 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/168/normal_1777372408_454.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN278',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  260 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/169/normal_1777372478_786.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN300',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  261 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/170/normal_1777372544_300.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN301',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  262 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/171/normal_1777372608_750.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN302',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  263 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/172/normal_1777372661_939.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN303',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  264 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/173/normal_1777372719_421.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN304',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  265 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/174/normal_1777372837_207.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN305',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  266 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/175/normal_1777372889_701.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN238',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  267 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/176/normal_1777373047_498.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN239',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  268 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/177/normal_1777373099_686.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN237',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  269 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/179/normal_1777373192_743.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN247',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  270 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/178/normal_1777373248_430.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN248',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  271 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/180/normal_1777373387_666.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN246',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  272 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/181/normal_1777373532_960.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN272',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  273 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/182/normal_1777373616_917.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN271',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  274 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/183/normal_1777373692_617.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN269',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  275 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/184/normal_1777373753_115.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN270',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  276 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/185/normal_1777373897_637.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN234',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  277 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/186/normal_1777374262_189.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN233',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  278 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/187/normal_1777374505_710.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN229',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  279 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/188/normal_1777375945_993.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN230',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  280 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/189/normal_1777376053_361.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN227',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  281 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/190/normal_1777376286_241.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN226',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  282 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/191/normal_1777376338_820.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN224',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  283 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/192/normal_1777376418_923.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN225',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  284 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/193/normal_1777376500_819.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN267',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  285 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/194/normal_1777376606_740.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN268',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  286 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/195/normal_1777376806_676.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN266',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  287 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/196/normal_1777376869_844.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN265',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  288 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/197/normal_1777376944_810.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN223',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  289 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/198/normal_1777377046_340.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN222',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  290 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/198/normal_1777377065_656.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN222',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  291 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/199/normal_1777377151_432.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN133',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  292 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/200/normal_1777377239_859.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN134',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  293 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/201/normal_1777377321_262.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN144',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  294 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/203/normal_1777377553_325.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN145',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  295 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/202/normal_1777379024_141.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN135',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  296 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/204/normal_1777379191_586.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN136',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  297 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/205/normal_1777379340_531.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN261',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  298 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/205/normal_1777379377_731.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN261',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  299 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/206/normal_1777379745_102.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN262',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  300 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/207/normal_1777380042_155.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN260',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  301 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/208/normal_1777380226_545.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN259',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  302 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/210/normal_1777383326_415.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN297',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  303 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/209/normal_1777383383_216.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN298',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  304 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/211/normal_1777383463_920.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN258',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  305 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/212/normal_1777383579_558.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN257',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  306 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/213/normal_1777383646_488.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN256',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  307 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/215/normal_1777383727_186.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN255',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  308 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/216/normal_1777383840_695.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN033',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  309 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/217/normal_1777383968_847.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN034',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  310 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/218/normal_1777384076_262.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN309',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  311 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/219/normal_1777384199_315.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN310',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  312 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/220/normal_1777384289_792.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN172',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  313 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/221/normal_1777384389_793.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN171',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  314 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/222/normal_1777384531_607.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN170',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  315 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/223/normal_1777384754_417.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN102',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  316 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/224/normal_1777385112_306.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN162',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  317 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/225/normal_1777385283_347.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN190',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  318 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/226/normal_1777385468_485.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN191',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  319 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/228/normal_1777385549_415.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN105',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  320 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/229/normal_1777385638_673.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN189',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  321 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/230/normal_1777385779_423.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN165',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  322 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/231/normal_1777385897_274.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN163',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  323 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/232/normal_1777386067_140.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN192',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  324 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/234/normal_1777386536_939.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN164',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  325 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/235/normal_1777386650_540.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN188',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  326 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/237/normal_1777386755_448.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN052',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  327 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/236/normal_1777386856_735.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN051',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  328 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/238/normal_1777386927_695.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN053',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  329 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/239/normal_1777387115_796.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN054',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  330 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/240/normal_1777387263_479.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  331 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/241/normal_1777387402_915.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN103',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  332 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/242/normal_1777387487_169.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN062',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  333 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/244/normal_1777968264_450.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV-018',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  334 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/245/normal_1777968329_650.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  335 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/246/normal_1777968503_379.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV006',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  336 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/247/normal_1777968603_522.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  337 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/248/normal_1777968661_469.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV020',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  338 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/249/normal_1777968753_443.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  339 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/250/normal_1777968808_862.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV015',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  340 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/251/normal_1777968887_505.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV009',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  341 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/252/normal_1777968933_106.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  342 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/253/normal_1777968977_653.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV019',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  343 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/254/normal_1777969056_947.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV017',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  344 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/255/normal_1777969118_172.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV010',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  345 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/256/normal_1777969163_840.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV012',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  346 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/257/normal_1777969215_717.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T05-OV013',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  347 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/258/normal_1777969351_260.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Pergel 4',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  348 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/259/normal_1777969393_233.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Pergel 3',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  349 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/260/normal_1777969442_243.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Pergel 2',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  350 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/261/normal_1777969484_482.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Pergel 1',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  351 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/262/normal_1777969545_770.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  352 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/263/normal_1777969628_330.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-GD005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  353 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/264/normal_1777969678_820.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-GD008',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  354 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/265/normal_1777969731_260.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-GD011',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  355 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/266/normal_1777969774_966.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-GD009',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  356 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/267/normal_1777969844_950.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-GD007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  357 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/268/normal_1777969925_701.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'AL06',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  358 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/269/normal_1777969982_559.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'AL01',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  359 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/270/normal_1777970069_124.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-AL002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  360 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/271/normal_1777970124_869.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-AL005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  361 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/272/normal_1777970183_121.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-AL003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  362 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/274/normal_1777970315_230.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-AA002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  363 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/275/normal_1777970409_358.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-AA001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  364 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/276/normal_1777970510_201.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T02-MT052',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  365 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/277/normal_1777970574_128.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T02-MT053',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  366 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/278/normal_1777970802_168.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN083',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  367 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/279/normal_1777970854_956.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN082',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  368 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/280/normal_1777970930_843.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN080',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  369 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/281/normal_1777970999_127.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN081',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  370 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/282/normal_1777971058_133.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN263',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  371 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/283/normal_1777971131_585.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN264',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  372 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/284/normal_1777974191_309.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN324',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  373 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/285/normal_1777974266_671.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN325',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  374 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/288/normal_1777974376_982.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN326',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  375 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/289/normal_1777974412_324.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN327',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  376 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/290/normal_1777974480_306.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN328',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  377 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/291/normal_1777974538_446.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN330',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  378 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/292/normal_1777974585_551.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN329',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  379 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/293/normal_1777974650_475.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN332',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  380 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/294/normal_1777974694_495.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN331',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  381 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/295/normal_1777974801_593.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN333',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  382 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/296/normal_1777974885_954.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN058',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  383 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/297/normal_1777974938_368.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN059',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  384 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/298/normal_1777975022_882.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN091',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  385 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/300/normal_1777975093_220.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN090',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  386 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/301/normal_1777975263_153.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN041',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  387 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/302/normal_1777975393_984.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN040',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  388 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/303/normal_1777975627_222.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN100',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  389 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/304/normal_1777975834_272.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN101',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  390 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/305/normal_1777976081_538.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN125',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  391 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/306/normal_1777976170_401.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN228',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  392 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/307/normal_1777976257_465.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN124',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  393 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/308/normal_1777976443_235.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN126',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  394 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/309/normal_1777976525_444.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN122',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  395 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/310/normal_1777976648_839.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN123',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  396 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/311/normal_1777976723_250.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN311',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  397 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/312/normal_1777976994_678.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN312',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  398 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/313/normal_1777977085_435.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN286',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  399 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/314/normal_1777977174_283.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN285',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  400 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/315/normal_1777977353_502.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN283',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  401 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/316/normal_1777977399_146.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN281',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  402 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/317/normal_1777977457_127.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN279',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  403 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/318/normal_1777977531_447.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN280',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  404 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/319/normal_1777977646_660.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN282',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  405 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/320/normal_1777977708_271.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN284',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  406 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/321/normal_1777977761_748.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN323',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  407 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/322/normal_1777977852_653.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN322',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  408 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/323/normal_1777978083_316.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN097',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  409 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/324/normal_1777978178_738.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN098',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  410 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/325/normal_1777978249_651.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN150',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  411 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/326/normal_1777978302_502.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN137',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  412 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/327/normal_1777978369_573.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN093',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  413 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/328/normal_1777978442_738.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN092',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  414 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/329/normal_1777978602_457.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN178',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  415 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/330/normal_1777978650_321.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  416 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/331/normal_1777978722_579.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN106',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  417 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/332/normal_1777978889_645.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN107',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  418 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/333/normal_1777979236_509.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN094',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  419 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/334/normal_1777979321_483.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN095',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  420 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/335/normal_1777980133_867.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN050',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  421 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/337/normal_1777980421_972.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN073',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  422 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/338/normal_1777980486_380.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN074',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  423 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/339/normal_1777980619_206.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN069',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  424 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/340/normal_1777980680_826.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN071',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  425 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/342/normal_1777980815_153.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN072',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  426 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/343/normal_1777980926_587.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN151',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  427 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/344/normal_1777981177_712.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN142',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  428 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/345/normal_1777981478_722.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN056',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  429 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/346/normal_1777981740_959.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN089',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  430 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/347/normal_1777981848_966.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN096',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  431 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/348/normal_1777981933_563.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN087',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  432 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/351/normal_1777982023_517.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN179',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  433 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/352/normal_1777982153_359.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN047',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  434 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/353/normal_1777982239_110.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN044',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  435 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/360/normal_1777982465_146.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN043',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  436 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/359/normal_1777982547_426.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN048',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  437 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/358/normal_1777982594_622.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN004',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  438 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/357/normal_1777982632_845.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN086',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  439 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/356/normal_1777982676_814.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN099',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  440 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/355/normal_1777982724_815.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN088',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  441 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/354/normal_1777982781_409.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN057',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  442 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/370/normal_1777983313_340.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN035',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  443 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/369/normal_1777983449_340.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN031',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  444 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/368/normal_1777983504_904.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN127',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  445 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/367/normal_1777983552_221.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN130',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  446 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/366/normal_1777983598_310.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN288',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  447 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/365/normal_1777983659_575.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN290',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  448 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/364/normal_1777983710_140.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN293',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  449 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/363/normal_1777983780_273.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN296',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  450 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/362/normal_1777983819_268.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN075',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  451 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/361/normal_1777983875_215.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN152',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  452 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/371/normal_1777983969_325.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN143',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  453 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/372/normal_1777984030_671.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN076',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  454 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/373/normal_1777984079_636.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN295',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  455 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/374/normal_1777984137_173.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN294',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  456 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/375/normal_1777984201_300.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN289',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  457 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/376/normal_1777984257_959.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN287',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  458 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/377/normal_1777984362_379.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN129',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  459 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/378/normal_1777984414_356.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN128',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  460 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/379/normal_1777984473_697.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN032',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  461 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/380/normal_1777984558_379.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN036',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  462 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/381/normal_1777988385_683.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Mekanik1-SN:1155',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  463 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/382/normal_1777988760_201.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM095',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  464 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/383/normal_1777988842_841.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM102',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  465 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/384/normal_1777988937_403.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM097',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  466 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/385/normal_1777989012_344.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM103',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  467 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/386/normal_1777989100_626.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  468 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/387/normal_1777989175_213.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM006',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  469 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/388/normal_1777989341_706.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM024',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  470 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/389/normal_1777989462_307.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM017',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  471 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/390/normal_1777989543_137.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  472 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/391/normal_1777989610_179.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  473 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/392/normal_1777989793_754.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN168',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  474 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/393/normal_1777989883_199.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN169',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  475 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/394/normal_1777989986_958.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN173',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  476 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/395/normal_1777990123_957.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN306',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  477 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/396/normal_1777990237_559.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN307',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  478 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/397/normal_1777990305_972.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN308',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  479 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/398/normal_1777990437_100.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN148',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  480 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/399/normal_1777990543_364.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN037',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  481 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/400/normal_1777990671_504.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-KD001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  482 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/401/normal_1777990791_660.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT010',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  483 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/402/normal_1777991416_875.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT011',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  484 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/403/normal_1777991522_652.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-TI002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  485 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/404/normal_1777991611_734.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-TI001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  486 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/404/normal_1777991620_116.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-TI001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  487 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/405/normal_1777991699_242.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-ST001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  488 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/406/normal_1777991760_481.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-ST002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  489 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/407/normal_1777991827_400.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-KA003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  490 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/408/normal_1777991903_531.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-KA001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  491 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/409/normal_1777991965_718.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-KA002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  492 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/410/normal_1777992019_615.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN175',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  493 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/411/normal_1777992086_943.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN019',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  494 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/412/normal_1777992262_345.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN174',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  495 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/413/normal_1777992312_668.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN177',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  496 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/414/normal_1777992394_175.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN020',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  497 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/415/normal_1777992467_562.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN176',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  498 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/416/normal_1777992624_982.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT018',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  499 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/65/termal_1778002694_794.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'ş1',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  500 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/65/termal_1778002694_276.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'ş1',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  501 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/75/termal_1778002706_660.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'ş2',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  502 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/76/termal_1778002733_329.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'ş3',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  503 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/76/termal_1778002761_594.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'ş3',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  504 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/77/termal_1778002782_642.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'ş4',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  505 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/78/termal_1778002807_793.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'bs1',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  506 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/79/termal_1778002829_168.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'mg1',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  507 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/80/termal_1778002874_434.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'mg2',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  508 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/80/termal_1778002875_973.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'mg2',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  509 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/81/termal_1778002902_882.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'mg3',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  510 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/82/termal_1778002937_584.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'mg4 (şarj ist.)',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  511 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/83/termal_1778003293_869.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana Elektrik Odası',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  512 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/83/termal_1778003293_858.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana Elektrik Odası',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  513 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/83/termal_1778003293_185.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Ana Elektrik Odası',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  514 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/84/termal_1778003331_475.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'by01',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  515 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/85/termal_1778003352_146.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'komp01',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  516 => 
  array (
    'file_path' => 'uploads/ic_tesisat/13/86/termal_1778003396_903.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'kaporta pano',
    'firma_adi' => 'SERVIS - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  517 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/416/normal_1778059663_682.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT018',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  518 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/418/normal_1778059986_202.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT020',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  519 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/419/normal_1778060030_121.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT015',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  520 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/420/normal_1778060190_948.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT022',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  521 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/421/normal_1778060335_462.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT023',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  522 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/422/normal_1778060418_699.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT021',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  523 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/423/normal_1778060503_990.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT004',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  524 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/424/normal_1778060574_388.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT009',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  525 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/425/normal_1778060642_603.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  526 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/426/normal_1778060716_331.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T14-TT007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  527 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/427/normal_1778060835_301.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  528 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/428/normal_1778060948_250.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP048',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  529 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/429/normal_1778060994_510.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP010',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  530 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/430/normal_1778061073_672.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  531 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/431/normal_1778061157_974.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP018',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  532 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/432/normal_1778061257_710.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP021',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  533 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/433/normal_1778061324_166.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP009',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  534 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/434/normal_1778061428_799.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP012',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  535 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/435/normal_1778061521_925.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP010',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  536 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/436/normal_1778061576_247.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP008',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  537 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/437/normal_1778061692_407.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-IN064',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  538 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/438/normal_1778061823_654.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM026',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  539 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/439/normal_1778061914_402.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM004',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  540 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/440/normal_1778062135_806.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-YZ001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  541 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/441/normal_1778062218_611.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-ER002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  542 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/442/normal_1778062295_656.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-ER001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  543 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/443/normal_1778063475_753.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS039',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  544 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/444/normal_1778063583_522.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T03-FR015',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  545 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/445/normal_1778063662_132.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T03-FR006',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  546 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/446/normal_1778063747_247.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T03-FR005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  547 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/447/normal_1778064007_159.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP136',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  548 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/448/normal_1778064099_351.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP135',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  549 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/449/normal_1778064159_373.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP118',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  550 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/450/normal_1778064232_102.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP138',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  551 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/451/normal_1778064295_826.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP137',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  552 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/452/normal_1778064349_759.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP119',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  553 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/454/normal_1778064431_405.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP147',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  554 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/455/normal_1778064505_443.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP146',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  555 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/456/normal_1778064593_392.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP044',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  556 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/457/normal_1778064834_937.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP130',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  557 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/458/normal_1778064907_355.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP131',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  558 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/459/normal_1778064982_691.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP058',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  559 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/460/normal_1778065047_266.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP113',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  560 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/461/normal_1778065108_544.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP026',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  561 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/462/normal_1778065194_357.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP040',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  562 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/463/normal_1778065381_701.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP144',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  563 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/464/normal_1778065773_270.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP145',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  564 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/465/normal_1778065852_773.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP143',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  565 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/466/normal_1778065917_617.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP018',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  566 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/467/normal_1778066003_371.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP027',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  567 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/468/normal_1778066111_178.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP014',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  568 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/469/normal_1778066184_400.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP046',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  569 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/470/normal_1778066266_406.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  570 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/471/normal_1778066355_339.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP036',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  571 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/472/normal_1778066471_107.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP022',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  572 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/473/normal_1778066576_145.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP045',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  573 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/474/normal_1778066775_326.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-RMO01',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  574 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/475/normal_1778066853_830.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP114',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  575 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/476/normal_1778066916_568.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP139',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  576 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/477/normal_1778066975_442.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP012',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  577 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/478/normal_1778067038_488.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP017',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  578 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/479/normal_1778067130_639.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP013',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  579 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/480/normal_1778067209_811.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP016',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  580 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/481/normal_1778067272_790.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP023',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  581 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/482/normal_1778067317_275.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP021',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  582 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/483/normal_1778067382_539.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP019',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  583 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/484/normal_1778067457_215.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-ZMO01',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  584 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/485/normal_1778067555_103.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP034',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  585 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/486/normal_1778067621_716.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP015',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  586 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/487/normal_1778067742_888.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP039',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  587 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/488/normal_1778067825_872.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP142',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  588 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/489/normal_1778067903_989.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP011',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  589 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/490/normal_1778068036_475.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'PM-10MOOG KOMBİNASYON',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  590 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/493/normal_1778068213_785.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'MONTAJ MASA 4 Kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  591 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/494/normal_1778068250_453.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'MONTAJ MASA 3 Kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  592 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/495/normal_1778068286_539.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'MONTAJ MASA 2 Kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  593 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/496/normal_1778068322_337.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'MONTAJ MASA 1 Kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  594 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/497/normal_1778068456_687.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP116',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  595 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/498/normal_1778070262_758.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP011 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  596 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/499/normal_1778070348_553.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP009 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  597 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/501/normal_1778070440_335.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP041 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  598 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/502/normal_1778070476_225.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP043 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  599 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/503/normal_1778070577_319.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP031 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  600 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/504/normal_1778070660_335.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP030 kombin',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  601 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/505/normal_1778070707_794.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP029 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  602 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/506/normal_1778070805_581.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP028 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  603 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/507/normal_1778070841_334.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP027 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  604 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/508/normal_1778070883_887.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP026 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  605 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/509/normal_1778070923_135.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP025 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  606 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/510/normal_1778070973_828.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP038 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  607 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/511/normal_1778071023_704.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SP037 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  608 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/512/normal_1778071099_426.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP140 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  609 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/513/normal_1778071162_867.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP115 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  610 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/514/normal_1778071483_224.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP035',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  611 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/515/normal_1778071577_530.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP054 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  612 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/516/normal_1778071662_444.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP024 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  613 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/517/normal_1778071741_649.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP035 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  614 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/518/normal_1778071984_335.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'DELPHİ MASA 2 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  615 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/519/normal_1778072033_534.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'DELPHİ MASA 1 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  616 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/520/normal_1778072096_570.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Rotkolu masa 3 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  617 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/521/normal_1778072129_537.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Rotkolu masa 2 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  618 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/522/normal_1778072190_506.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Rotkolu masa 1 kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  619 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/523/normal_1778072235_123.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Rotkolu masa 1 çakma makinesi kombinasyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  620 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/524/normal_1778072385_300.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Moog masa 2',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  621 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/525/normal_1778072438_134.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Moog masa 1',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  622 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/526/normal_1778225071_589.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Montaj ana aydınlatma panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  623 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/527/normal_1778225293_298.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Lazer Ana pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  624 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/528/normal_1778225630_358.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Eski salıncak montaj pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  625 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/529/normal_1778225771_944.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Eski salıncak montaj ana pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  626 => 
  array (
    'file_path' => 'uploads/ic_tesisat/12/530/normal_1778226069_200.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Planlama yanı ana pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  627 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/531/normal_1778228433_387.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK49',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  628 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/532/normal_1778228561_324.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK48',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  629 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/533/normal_1778228656_466.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK47',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  630 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/534/normal_1778228725_653.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK46',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  631 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/535/normal_1778228829_269.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK 46 YANI PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  632 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/535/normal_1778228843_916.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK 46 YANI PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  633 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/536/normal_1778228904_896.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK45',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  634 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/537/normal_1778228954_885.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK44',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  635 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/538/normal_1778229052_685.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK43',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  636 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/539/normal_1778229107_665.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK42',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  637 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/540/normal_1778229201_585.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK32',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  638 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/541/normal_1778229284_523.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK31',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  639 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/542/normal_1778229416_812.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK31 ARKASI TMS PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  640 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/543/normal_1778229499_611.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'MK011',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  641 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/544/normal_1778229609_518.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK28',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  642 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/545/normal_1778229718_823.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK27',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  643 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/547/normal_1778229786_656.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK25',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  644 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/548/normal_1778229841_469.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK24',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  645 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/549/normal_1778229897_246.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK23',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  646 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/551/normal_1778229985_904.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK26',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  647 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/552/normal_1778230078_134.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK22',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  648 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/553/normal_1778230132_390.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK21',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  649 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/554/normal_1778230276_376.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK12',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  650 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/555/normal_1778230329_384.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK11',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  651 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/556/normal_1778230391_756.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK10',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  652 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/557/normal_1778230440_327.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK09',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  653 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/558/normal_1778230515_223.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK08',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  654 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/559/normal_1778230570_800.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK07',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  655 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/560/normal_1778230626_208.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK06',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  656 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/561/normal_1778230678_834.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK05',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  657 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/562/normal_1778230736_590.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK04',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  658 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/563/normal_1778230801_208.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK03',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  659 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/564/normal_1778230849_647.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK02',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  660 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/565/normal_1778230899_861.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK01',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  661 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/566/normal_1778231038_607.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK20',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  662 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/567/normal_1778231082_963.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK19',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  663 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/568/normal_1778231158_490.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK18',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  664 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/569/normal_1778231205_682.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK17',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  665 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/570/normal_1778231321_443.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK16',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  666 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/571/normal_1778231375_273.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK15',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  667 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/572/normal_1778231415_649.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK14',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  668 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/573/normal_1778231473_571.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK13',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  669 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/574/normal_1778231540_773.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK41',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  670 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/575/normal_1778231610_681.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK40',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  671 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/576/normal_1778232351_840.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK39',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  672 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/577/normal_1778232377_256.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK38',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  673 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/578/normal_1778239035_144.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK 38 YANI PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  674 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/578/normal_1778239051_508.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK 38 YANI PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  675 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/579/normal_1778239220_513.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK37',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  676 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/580/normal_1778239293_268.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK36',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  677 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/581/normal_1778239367_588.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK35',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  678 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/582/normal_1778239418_524.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK34',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  679 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/583/normal_1778239483_368.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK33',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  680 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/584/normal_1778239635_780.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'KALITE KONTROL YANI PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  681 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/585/normal_1778239825_883.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK63',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  682 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/586/normal_1778239860_391.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK61',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  683 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/587/normal_1778239919_144.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK60',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  684 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/588/normal_1778240019_925.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK59',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  685 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/589/normal_1778240087_710.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK58',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  686 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/590/normal_1778240147_414.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK57',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  687 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/591/normal_1778240207_785.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK56',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  688 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/592/normal_1778240358_451.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'PR01',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  689 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/593/normal_1778240475_579.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK67 ARKASI SÜRÜCÜ PANOSU',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  690 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/594/normal_1778240662_246.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK69',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  691 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/595/normal_1778240845_520.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK68',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  692 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/596/normal_1778240914_534.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK67',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  693 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/597/normal_1778240992_730.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK66',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  694 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/599/normal_1778241130_167.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK67 YANI PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  695 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/598/normal_1778241234_493.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK65',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  696 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/600/normal_1778241291_806.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK64',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  697 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/601/normal_1778241439_700.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'KATAFOREZ ARKASI TEKLİ PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  698 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/602/normal_1778241597_611.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK55',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  699 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/603/normal_1778241688_918.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK54',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  700 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/604/normal_1778241751_705.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK53',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  701 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/605/normal_1778241833_924.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK52',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  702 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/606/normal_1778241916_790.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK51',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  703 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/607/normal_1778241978_782.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'RK50',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  704 => 
  array (
    'file_path' => 'uploads/ic_tesisat/16/608/normal_1778242107_645.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'KATAFORES BUHAR KAZANI YANI PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  705 => 
  array (
    'file_path' => 'uploads/ic_tesisat/17/609/normal_1778246078_573.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Giriş kapı önü pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  706 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/610/normal_1778246317_775.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM043',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  707 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/611/normal_1778246434_175.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM042',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  708 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/613/normal_1778246559_881.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM038',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  709 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/614/normal_1778246592_906.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM039',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  710 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/615/normal_1778246641_184.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM040',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  711 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/616/normal_1778246694_166.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM041',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  712 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/617/normal_1778246758_187.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM045',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  713 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/618/normal_1778246810_254.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM060',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  714 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/619/normal_1778246875_871.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM044',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  715 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/620/normal_1778246971_708.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM082',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  716 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/621/normal_1778247040_795.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM083',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  717 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/622/normal_1778247230_259.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM090',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  718 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/623/normal_1778247333_590.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM091',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  719 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/624/normal_1778247459_893.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM047',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  720 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/625/normal_1778247617_394.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM092',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  721 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/626/normal_1778247754_651.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM046',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  722 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/627/normal_1778247904_160.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T04-TR018',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  723 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/628/normal_1778248054_388.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'D02-TOR2',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  724 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/629/normal_1778248340_476.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Rot mili doğrultma',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  725 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/630/normal_1778248616_676.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T03-F013',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  726 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/631/normal_1778249189_439.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Dövme raf arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  727 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/631/normal_1778249231_150.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Dövme raf arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  728 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/632/normal_1778249379_591.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Dövme TMS panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  729 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/632/normal_1778249399_628.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Dövme TMS panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  730 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/633/normal_1778249619_695.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'DOVME SÜRÜCÜ VE TMS PANOU',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  731 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/633/normal_1778249637_167.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'DOVME SÜRÜCÜ VE TMS PANOU',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  732 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/634/normal_1778249848_479.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Sürücü yanı pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  733 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/635/normal_1778250261_577.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SR005 ARKASI PANO1',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  734 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/637/normal_1778312861_464.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV009',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  735 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/638/normal_1778312931_684.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-FY002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  736 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/639/normal_1778313053_465.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'TO6-SR001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  737 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/640/normal_1778313116_174.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'TO6-SR003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  738 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/641/normal_1778313245_759.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'TO6-FY005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  739 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/642/normal_1778313307_821.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'TO6-CK020',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  740 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/644/normal_1778313454_244.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS044',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  741 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/645/normal_1778313911_612.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS040',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  742 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/646/normal_1778314034_593.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS012',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  743 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/647/normal_1778314120_382.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS022',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  744 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/648/normal_1778314224_162.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS021',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  745 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/649/normal_1778314435_817.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'SOCCO MARKA TESTERE SA115NC',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  746 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/650/normal_1778314634_997.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'HP-149',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  747 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/651/normal_1778314740_254.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'HP-148',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  748 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/652/normal_1778314925_253.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'HP-123',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  749 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/653/normal_1778315043_323.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'HP-122',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  750 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/654/normal_1778315139_882.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'HP-120',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  751 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/655/normal_1778315374_150.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'GİRİŞ KONTROL KARŞISI PANOLAR',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  752 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/655/normal_1778315413_381.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'GİRİŞ KONTROL KARŞISI PANOLAR',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  753 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/655/normal_1778315504_771.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'GİRİŞ KONTROL KARŞISI PANOLAR',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  754 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/656/normal_1778315850_986.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'GİRİŞ KONTROL KARŞISI TEKLİ PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  755 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/657/normal_1778316018_397.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS009',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  756 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/658/normal_1778316098_887.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS016',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  757 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/659/normal_1778316223_494.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'DOVME KESİCİ PANOSU',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  758 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/660/normal_1778316632_655.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP068',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  759 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/661/normal_1778316695_470.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP066',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  760 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/662/normal_1778316735_709.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP067',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  761 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/663/normal_1778316896_320.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SR007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  762 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/663/normal_1778317492_878.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SR007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  763 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/664/normal_1778317590_767.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  764 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/665/normal_1778317697_876.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SR008',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  765 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/666/normal_1778317767_871.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SR008 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  766 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/667/normal_1778317839_697.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV014',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  767 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/668/normal_1778317894_862.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV013',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  768 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/669/normal_1778318005_524.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV006',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  769 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/672/normal_1778318143_182.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  770 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/673/normal_1778318220_214.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  771 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/674/normal_1778318293_568.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-IN026',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  772 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/675/normal_1778318516_132.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV016 yanındaki makine',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  773 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/676/normal_1778318615_450.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV011',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  774 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/677/normal_1778318687_762.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-CK034',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  775 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/678/normal_1778318782_226.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV012',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  776 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/679/normal_1778318927_648.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV012 yanı makine',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  777 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/681/normal_1778325131_758.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP81 arkası pres',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  778 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/682/normal_1778325515_304.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'JW31-400',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  779 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/683/normal_1778325799_904.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'JW31-250 ARKASI PANOLAR',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  780 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/683/normal_1778325812_414.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'JW31-250 ARKASI PANOLAR',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  781 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/684/normal_1778325945_781.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-CX029',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  782 => 
  array (
    'file_path' => 'uploads/ic_tesisat/18/685/normal_1778326125_914.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-IN048',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  783 => 
  array (
    'file_path' => 'uploads/ic_tesisat/19/686/normal_1778326535_735.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Boyahane odası',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  784 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/687/normal_1778326896_393.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Robot lazer 1',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  785 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/688/normal_1778326975_223.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Robot lazer 2',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  786 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/689/normal_1778327079_421.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'EP106',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  787 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/690/normal_1778327190_963.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'EP105',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  788 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/691/normal_1778327257_762.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'EP104',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  789 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/692/normal_1778327318_679.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'EP103',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  790 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/693/normal_1778327377_188.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'EP102',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  791 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/694/normal_1778327427_286.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'EP101',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  792 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/695/normal_1778327524_682.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP037',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  793 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/696/normal_1778327592_417.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP013',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  794 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/697/normal_1778327669_666.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP015',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  795 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/698/normal_1778327724_408.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP017',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  796 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/699/normal_1778327781_419.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP016',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  797 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/700/normal_1778327836_252.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP048',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  798 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/701/normal_1778327915_894.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP028',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  799 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/702/normal_1778327981_366.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP051',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  800 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/703/normal_1778328037_342.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP050',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  801 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/704/normal_1778328849_954.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP009',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  802 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/705/normal_1778328951_608.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP084',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  803 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/706/normal_1778329020_692.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP083',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  804 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/707/normal_1778329069_549.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP082',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  805 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/708/normal_1778329143_803.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP120',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  806 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/709/normal_1778329204_222.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP050',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  807 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/710/normal_1778329261_193.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP054',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  808 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/711/normal_1778329310_509.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP053',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  809 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/712/normal_1778329472_317.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP053 Arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  810 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/713/normal_1778329554_125.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP076',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  811 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/714/normal_1778329701_236.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP079',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  812 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/715/normal_1778329812_576.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP022',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  813 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/716/normal_1778329885_542.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP059',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  814 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/717/normal_1778330104_897.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP089',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  815 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/718/normal_1778330146_990.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP088',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  816 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/719/normal_1778330225_101.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP087',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  817 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/720/normal_1778330292_442.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP086',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  818 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/721/normal_1778330363_433.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP085',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  819 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/722/normal_1778330442_647.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP117',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  820 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/723/normal_1778330697_181.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP078',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  821 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/724/normal_1778330844_991.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP075',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  822 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/725/normal_1778330917_653.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP077',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  823 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/726/normal_1778331023_363.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP074',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  824 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/727/normal_1778331119_206.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP073',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  825 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/728/normal_1778331181_116.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP118',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  826 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/729/normal_1778331253_825.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP119',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  827 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/730/normal_1778331332_423.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP013',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  828 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/731/normal_1778331379_108.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP016',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  829 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/732/normal_1778331443_647.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP041',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  830 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/733/normal_1778333419_808.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP098',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  831 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/735/normal_1778333604_780.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP098 ROBOT',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  832 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/735/normal_1778333611_168.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP098 ROBOT',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  833 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/736/normal_1778333799_236.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP099',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  834 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/737/normal_1778333857_466.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP100',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  835 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/738/normal_1778333970_698.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP097',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  836 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/739/normal_1778334081_132.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP096 ARKASINDAKİ PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  837 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/740/normal_1778334176_655.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP096',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  838 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/741/normal_1778334275_133.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP096 arkası robot panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  839 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/742/normal_1778334564_475.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP107',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  840 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/743/normal_1778334663_558.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP108',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  841 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/743/normal_1778334709_657.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP108',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  842 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/744/normal_1778334760_146.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP109',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  843 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/745/normal_1778334808_576.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP110',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  844 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/746/normal_1778334850_926.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP111',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  845 => 
  array (
    'file_path' => 'uploads/ic_tesisat/20/747/normal_1778334895_293.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP112',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  846 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/748/normal_1778335230_776.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'CP04',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  847 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/749/normal_1778335302_359.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'CP05',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  848 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/750/normal_1778335377_408.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'CP06',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  849 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/751/normal_1778335463_128.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'EP1',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  850 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/752/normal_1778335568_266.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'EP2',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  851 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/753/normal_1778335664_958.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'HP6',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  852 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/754/normal_1778335719_931.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'HP5',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  853 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/755/normal_1778335789_587.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'HP1',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  854 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/756/normal_1778335844_431.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'HP2',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  855 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/757/normal_1778335923_659.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'HP097',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  856 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/758/normal_1778336002_913.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'HP07',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  857 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/761/normal_1778336175_327.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM067',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  858 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/762/normal_1778336232_262.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM068',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  859 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/763/normal_1778336273_308.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM080',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  860 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/764/normal_1778336319_678.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM064',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  861 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/765/normal_1778336373_210.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM066',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  862 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/766/normal_1778336506_498.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM089',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  863 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/767/normal_1778336635_501.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM081',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  864 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/768/normal_1778336754_115.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'ST01',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  865 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/769/normal_1778336802_567.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS036',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  866 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/770/normal_1778336893_652.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Jetco Freze',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  867 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/771/normal_1778336964_579.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'FİRST FREZE',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  868 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/772/normal_1778337033_292.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'TEZSAN MATKAP',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  869 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/773/normal_1778337084_270.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T04-TR015',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  870 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/773/normal_1778337102_927.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T04-TR015',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  871 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/774/normal_1778337121_746.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'DE01',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  872 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/775/normal_1778337293_371.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN235',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  873 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/776/normal_1778337441_474.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E41',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  874 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/777/normal_1778337506_448.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E42',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  875 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/778/normal_1778337579_955.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E43',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  876 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/779/normal_1778337608_266.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E44',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  877 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/780/normal_1778337657_786.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E45',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  878 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/781/normal_1778337700_276.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E50',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  879 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/782/normal_1778337741_858.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E49',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  880 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/783/normal_1778337793_187.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E48',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  881 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/784/normal_1778337833_831.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E47',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  882 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/785/normal_1778337864_142.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E46',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  883 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/786/normal_1778337989_446.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E57',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  884 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/787/normal_1778338024_443.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E56',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  885 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/788/normal_1778338054_581.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E55',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  886 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/789/normal_1778338113_244.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E54',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  887 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/790/normal_1778338157_560.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E53',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  888 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/791/normal_1778338226_358.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E58',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  889 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/792/normal_1778338274_160.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E24',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  890 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/793/normal_1778338310_500.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E38',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  891 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/794/normal_1778338349_966.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E39',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  892 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/795/normal_1778338387_171.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E37',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  893 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/796/normal_1778338413_734.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E36',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  894 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/798/normal_1778338529_767.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E10',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  895 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/797/normal_1778338569_811.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E35',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  896 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/799/normal_1778338623_399.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E9',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  897 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/802/normal_1778654438_831.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E25',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  898 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/803/normal_1778654476_566.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E1',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  899 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/804/normal_1778654528_154.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E2',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  900 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/805/normal_1778654565_339.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E3',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  901 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/806/normal_1778654603_720.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E4',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  902 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/807/normal_1778654649_400.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E28',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  903 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/808/normal_1778654689_869.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E34',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  904 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/809/normal_1778654750_290.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E29',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  905 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/810/normal_1778654803_258.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E40',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  906 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/811/normal_1778654840_101.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E31',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  907 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/812/normal_1778654879_415.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E32',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  908 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/813/normal_1778654928_573.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E33',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  909 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/814/normal_1778654977_218.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T1',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  910 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/815/normal_1778655016_343.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E51',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  911 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/816/normal_1778655048_292.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E52',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  912 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/817/normal_1778655146_179.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E7',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  913 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/818/normal_1778655175_613.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E27',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  914 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/819/normal_1778655224_335.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E26',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  915 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/820/normal_1778655256_246.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E6',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  916 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/821/normal_1778655319_434.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E6 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  917 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/821/normal_1778655329_881.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E6 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  918 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/822/normal_1778655465_490.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E37 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  919 => 
  array (
    'file_path' => 'uploads/ic_tesisat/21/823/normal_1778655565_873.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'E54 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  920 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/824/normal_1778655749_122.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Fosfat panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  921 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/825/normal_1778655809_832.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T09-KM005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  922 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/826/normal_1778655858_747.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Bsm kumlama',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  923 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/827/normal_1778655999_224.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Çetingil kumlama',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  924 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/828/normal_1778656071_325.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Endümak kumlama',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  925 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/829/normal_1778656121_106.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Endümak kumlama 2',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  926 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/830/normal_1778656205_878.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Endümak yanı pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  927 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/831/normal_1778656275_332.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Sabun hattı pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  928 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/832/normal_1778656354_250.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Depo giriş yanı pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  929 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/833/normal_1778656448_200.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'OBM03',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  930 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/834/normal_1778656519_979.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'OBM01',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  931 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/835/normal_1778656584_530.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Boyacı küpü',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  932 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/836/normal_1778656633_800.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'OBM02',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  933 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/837/normal_1778656753_348.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'AKDİ BOYA MAKINESI',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  934 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/838/normal_1778656822_203.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'OBM02 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  935 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/838/normal_1778656831_545.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'OBM02 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  936 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/840/normal_1778656974_715.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'YBM01',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  937 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/841/normal_1778657113_722.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Yağ alma pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  938 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/842/normal_1778657175_764.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Sabun arkası ana pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  939 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/843/normal_1778657261_852.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'OBM04',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  940 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/844/normal_1778657544_199.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Kauçuk depo aydınlatma pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  941 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/845/normal_1778657681_978.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Depo giriş aydınlatma panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  942 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/846/normal_1778658000_372.jpeg',
    'photo_type' => 'normal',
    'panel_name' => '1301 depo ana pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  943 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/846/normal_1778658003_185.jpeg',
    'photo_type' => 'normal',
    'panel_name' => '1301 depo ana pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  944 => 
  array (
    'file_path' => 'uploads/ic_tesisat/22/847/normal_1778658150_942.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Boyahane arkası akü şarj pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  945 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/849/normal_1778658403_813.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Boruhane depo aydınlatma',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  946 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/850/normal_1778658661_935.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'EP36',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  947 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/851/normal_1778658786_498.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  948 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/852/normal_1778658861_809.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS026',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  949 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/853/normal_1778658921_472.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS027',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  950 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/854/normal_1778659032_617.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS029',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  951 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/855/normal_1778659081_331.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS030',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  952 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/856/normal_1778659128_994.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS032',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  953 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/857/normal_1778659243_949.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS028',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  954 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/858/normal_1778659355_805.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS033',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  955 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/859/normal_1778659400_441.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS034',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  956 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/860/normal_1778659477_957.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS035',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  957 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/861/normal_1778659511_895.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS041',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  958 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/862/normal_1778659547_846.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS042',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  959 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/863/normal_1778659729_140.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS043',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  960 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/864/normal_1778659748_635.jpeg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS031',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  961 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/865/normal_1778659786_422.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS047',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  962 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/866/normal_1778659839_902.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS048',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  963 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/867/normal_1778659883_388.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS049',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  964 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/868/normal_1778659933_277.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS050',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  965 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/869/normal_1778660005_897.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS051',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  966 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/871/normal_1778660214_136.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'K004',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  967 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/872/normal_1778660258_176.jpeg',
    'photo_type' => 'normal',
    'panel_name' => 'Havalandırma panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  968 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/870/normal_1778660277_534.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS052',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  969 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/873/normal_1778660332_532.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-LK001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  970 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/874/normal_1778660385_829.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'LK001 havalandırma',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  971 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/875/normal_1778660454_963.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Giriş yanı pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  972 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/876/normal_1778660550_582.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA019',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  973 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/877/normal_1778660592_890.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA020',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  974 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/878/normal_1778660675_817.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA022',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  975 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/879/normal_1778660712_146.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA021',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  976 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/880/normal_1778660755_474.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA024',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  977 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/881/normal_1778660792_841.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA023',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  978 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/882/normal_1778660844_797.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  979 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/883/normal_1778660900_146.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA017',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  980 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/884/normal_1778660936_791.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA006',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  981 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/885/normal_1778660976_104.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA010',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  982 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/886/normal_1778661030_739.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA015',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  983 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/887/normal_1778661070_744.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA016',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  984 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/888/normal_1778661294_837.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA009',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  985 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/889/normal_1778661330_704.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA012',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  986 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/890/normal_1778661386_998.jpeg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA025',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  987 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/891/normal_1778661487_732.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA025 arkasındaki tezgah',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  988 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/892/normal_1778661533_404.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-BT003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  989 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/893/normal_1778665624_600.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Boruhane yıkama ön pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  990 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/894/normal_1778665654_331.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Boruhane yıkama arka pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  991 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/895/normal_1778665708_266.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN039',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  992 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/896/normal_1778665777_789.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN039 çubuk sürücüsü',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  993 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/897/normal_1778665842_920.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN118 çubuk sürücü',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  994 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/898/normal_1778665905_867.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN118',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  995 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/899/normal_1778665964_825.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN120 çubuk',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  996 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/900/normal_1778666009_749.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN120',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  997 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/902/normal_1778666088_760.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN040 çubuk sürücü',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  998 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/901/normal_1778666129_810.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN040',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  999 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/903/normal_1778666181_881.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN022 Çubuk sürücü',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1000 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/904/normal_1778666233_174.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN022',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1001 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/905/normal_1778666286_268.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN024',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1002 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/906/normal_1778666338_953.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN024',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1003 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/907/normal_1778666378_158.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN025 çubuk sürücü',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1004 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/908/normal_1778666416_190.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN025',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1005 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/909/normal_1778666464_969.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN220',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1006 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/910/normal_1778666522_430.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN220',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1007 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/911/normal_1778666586_861.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN085 çubuk sürücü',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1008 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/912/normal_1778666633_833.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN085',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1009 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/913/normal_1778666681_908.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN121 çubuk sürücü',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1010 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/914/normal_1778666719_479.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN121',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1011 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/915/normal_1778666794_617.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-BT001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1012 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/916/normal_1778666865_588.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1013 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/917/normal_1778666929_962.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA013',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1014 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/918/normal_1778666999_470.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-B002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1015 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/919/normal_1778667056_124.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP114',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1016 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/920/normal_1778667093_283.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP115',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1017 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/921/normal_1778667144_913.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP121',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1018 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/922/normal_1778667175_910.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP116',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1019 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/923/normal_1778667202_634.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP117',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1020 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/924/normal_1778667239_745.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP120',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1021 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/925/normal_1778667319_410.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN117',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1022 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/926/normal_1778667387_471.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN119',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1023 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/927/normal_1778667471_655.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN232',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1024 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/928/normal_1778667538_105.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN231',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1025 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/929/normal_1778667594_168.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN063',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1026 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/930/normal_1778667653_894.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN084',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1027 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/931/normal_1778667765_240.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM056',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1028 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/932/normal_1778667835_792.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM057',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1029 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/933/normal_1778667917_899.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA004',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1030 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/934/normal_1778667960_914.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-HA018',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1031 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/935/normal_1778668021_377.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Boruhane kamsan tezgah',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1032 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/936/normal_1778668089_570.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T03-FR001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1033 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/937/normal_1778668168_755.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP119',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1034 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/938/normal_1778668256_252.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP118',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1035 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/939/normal_1778668318_922.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP102',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1036 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/940/normal_1778668377_223.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP031',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1037 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/941/normal_1778668422_251.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP053',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1038 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/942/normal_1778668471_831.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP032',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1039 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/943/normal_1778668515_519.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP052',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1040 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/944/normal_1778668667_393.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T08-AK003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1041 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/945/normal_1778668895_420.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'KY07',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1042 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/946/normal_1778669007_670.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'KY01',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1043 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/947/normal_1778669045_617.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'KY05',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1044 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/948/normal_1778669100_507.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'KY06',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1045 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/949/normal_1778669167_758.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'KY12',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1046 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/950/normal_1778669213_212.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'KY13',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1047 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/953/normal_1778669398_641.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'PK-005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1048 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/952/normal_1778669532_595.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP113',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1049 => 
  array (
    'file_path' => 'uploads/ic_tesisat/23/954/normal_1778669579_272.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Giriş pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1050 => 
  array (
    'file_path' => 'uploads/ic_tesisat/24/955/normal_1778670639_959.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-LK-002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1051 => 
  array (
    'file_path' => 'uploads/ic_tesisat/24/956/normal_1778670695_859.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-LK-004',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1052 => 
  array (
    'file_path' => 'uploads/ic_tesisat/24/957/normal_1778670768_501.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-LK-005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1053 => 
  array (
    'file_path' => 'uploads/ic_tesisat/24/958/normal_1778670807_658.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-LK-006',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1054 => 
  array (
    'file_path' => 'uploads/ic_tesisat/24/959/normal_1778670861_248.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-LK-007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1055 => 
  array (
    'file_path' => 'uploads/ic_tesisat/24/960/normal_1778670912_196.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-LK-008',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1056 => 
  array (
    'file_path' => 'uploads/ic_tesisat/24/961/normal_1778670954_706.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Arka taraf pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1057 => 
  array (
    'file_path' => 'uploads/ic_tesisat/24/962/normal_1778671014_762.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-GM002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1058 => 
  array (
    'file_path' => 'uploads/ic_tesisat/24/963/normal_1778671166_759.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Rulo lazer kesim',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1059 => 
  array (
    'file_path' => 'uploads/ic_tesisat/24/964/normal_1778671247_803.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-LK-003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1060 => 
  array (
    'file_path' => 'uploads/ic_tesisat/24/964/normal_1778671276_256.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-LK-003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1061 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/965/normal_1778671434_660.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ana dağıtım panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1062 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/965/normal_1778671447_362.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ana dağıtım panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1063 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/965/normal_1778671456_300.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ana dağıtım panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1064 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/966/normal_1778671537_525.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS012',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1065 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/967/normal_1778671604_262.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'FR008',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1066 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/968/normal_1778671678_671.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-CN315',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1067 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/969/normal_1778671736_694.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM063',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1068 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/970/normal_1778671796_658.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM079',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1069 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/971/normal_1778671844_403.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM074',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1070 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/972/normal_1778671882_473.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM070',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1071 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/973/normal_1778671951_371.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM059',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1072 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/974/normal_1778672028_402.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM077',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1073 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/975/normal_1778672095_837.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM076',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1074 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/977/normal_1778672238_646.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM032',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1075 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/978/normal_1778672313_159.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM010',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1076 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/979/normal_1778672500_905.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-TE001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1077 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/980/normal_1778672567_572.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-TE002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1078 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/981/normal_1778672617_380.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-DD001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1079 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/982/normal_1778672679_277.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM050',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1080 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/983/normal_1778672716_241.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM051',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1081 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/984/normal_1778672777_399.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM078',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1082 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/985/normal_1778672812_338.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM075',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1083 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/986/normal_1778672886_223.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM071',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1084 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/987/normal_1778672967_693.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM110',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1085 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/989/normal_1778672999_166.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM109',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1086 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/990/normal_1778673052_833.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T01-IM108',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1087 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/991/normal_1778673106_648.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T03-FR009',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1088 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/993/normal_1778673222_450.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T04-TR008',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1089 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/994/normal_1778673288_703.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Aydınlatma panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1090 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/995/normal_1778673413_921.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Arka taraf küçük pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1091 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/996/normal_1778673578_321.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-TM001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1092 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/997/normal_1778673645_817.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T02-MT087',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1093 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/998/normal_1778673750_180.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP150',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1094 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/999/normal_1778674037_786.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Kompresör panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1095 => 
  array (
    'file_path' => 'uploads/ic_tesisat/25/1000/normal_1778674099_707.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Kompresör aydınlatma',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1096 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1001/normal_1778675104_260.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP081',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1097 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1002/normal_1778675260_442.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP130',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1098 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1003/normal_1778675351_526.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP140 robot',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1099 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1004/normal_1778675407_573.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP092 robot',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1100 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1006/normal_1778675568_494.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP132',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1101 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1007/normal_1778675701_244.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX013 Arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1102 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1008/normal_1778675825_657.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP132 reterm panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1103 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1009/normal_1778675886_581.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX013 reterm',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1104 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1010/normal_1778676002_884.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-CK029',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1105 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1011/normal_1778676208_789.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Şahmerdan',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1106 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1012/normal_1778676267_308.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'EP14',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1107 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1013/normal_1778676405_939.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX011 yanı jw31',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1108 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1015/normal_1778676699_215.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SH014 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1109 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1016/normal_1778676762_491.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SH014 arkası TMS ve kesici',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1110 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1016/normal_1778676776_556.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SH014 arkası TMS ve kesici',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1111 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1017/normal_1778676867_546.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-IN050',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1112 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1018/normal_1778676917_171.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX19',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1113 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1019/normal_1778677016_801.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX19 yanı jw31',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1114 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1020/normal_1778677182_256.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ep17',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1115 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1022/normal_1778677318_978.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'LS001 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1116 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1023/normal_1778677447_243.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'LS001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1117 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1024/normal_1778677514_423.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-RW001',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1118 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1025/normal_1778677627_905.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-CK031',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1119 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1026/normal_1778677697_650.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-CK031 arkası',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1120 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1028/normal_1778678001_775.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-RW004',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1121 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1030/normal_1778678010_808.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ls002',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1122 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1031/normal_1778832991_781.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX012 yanı rekwals otomatik',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1123 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1032/normal_1778833093_216.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX012',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1124 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1033/normal_1778833178_623.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX012 yanı JL21',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1125 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1034/normal_1778833341_581.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SH005 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1126 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1035/normal_1778833440_325.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SH005 yanı yanı reterm',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1127 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1036/normal_1778833538_751.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-CK007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1128 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1037/normal_1778833639_372.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'BM12',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1129 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1038/normal_1778833862_645.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX021 YANI PRESS',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1130 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1040/normal_1778833918_388.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-RW009',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1131 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1039/normal_1778833969_758.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX021',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1132 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1041/normal_1778834108_900.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Çıkış yanı pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1133 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1042/normal_1778834223_612.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX024 yanı indiksüyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1134 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1045/normal_1778835685_213.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX024 yanı jw31',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1135 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1046/normal_1778835767_423.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX024 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1136 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1047/normal_1778835874_937.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX024',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1137 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1049/normal_1778836047_110.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'LASCO07 yanı press',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1138 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1048/normal_1778836099_612.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'LASCO07',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1139 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1050/normal_1778836289_136.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-RW006 arkası dövme',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1140 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1051/normal_1778836409_938.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-RW006',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1141 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1052/normal_1778836452_792.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-RW007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1142 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1054/normal_1778836547_779.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-LS006 yanı indiksüyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1143 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1053/normal_1778836584_389.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-LS006',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1144 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1055/normal_1778836716_663.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-CK009',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1145 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1056/normal_1778836785_925.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-CK005',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1146 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1058/normal_1778836980_785.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-SH003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1147 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1060/normal_1778842646_582.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX09 yanı JH21',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1148 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1059/normal_1778842686_310.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX09',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1149 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1061/normal_1778842747_127.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-RW003',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1150 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1062/normal_1778842901_778.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX09 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1151 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1063/normal_1778843138_325.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX007 YANI EP MAKİNE',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1152 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1064/normal_1778843178_387.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX007',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1153 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1065/normal_1778843310_362.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX007 yanı inductoforge',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1154 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1067/normal_1778843491_309.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX023 arkası indüksiyon',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1155 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1066/normal_1778843610_442.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX023',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1156 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1068/normal_1778843659_609.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX022 YANI PRESS',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1157 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1069/normal_1778843727_338.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX018',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1158 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1070/normal_1778843823_506.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX018 yanı press',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1159 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1071/normal_1778843892_167.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX018 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1160 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1072/normal_1778844193_519.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T09-KM004',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1161 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1073/normal_1778844322_993.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Giriş sol pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1162 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1074/normal_1778844428_436.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Giriş sol spiral panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1163 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1075/normal_1778844532_289.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP071',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1164 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1075/normal_1778844549_736.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP071',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1165 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1076/normal_1778844593_366.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP071 önü baskı makinesi',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1166 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1077/normal_1778844630_994.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T02-MT079',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1167 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1078/normal_1778844777_856.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T11-TC014',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1168 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1079/normal_1778844858_260.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T11-TC013',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1169 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1080/normal_1778845025_246.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV017 SAĞI MAKİNE',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1170 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1081/normal_1778845077_760.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-DV017',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1171 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1082/normal_1778845125_214.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP056',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1172 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1083/normal_1778845167_654.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP056 yanı kumlama',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1173 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1084/normal_1778845249_647.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'PMS MAKİNA',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1174 => 
  array (
    'file_path' => 'uploads/ic_tesisat/26/1085/normal_1778845310_541.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T10-KM008',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1175 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1086/normal_1778845510_876.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Giriş saç çinden gelen makine',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1176 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1087/normal_1778845611_920.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS07',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1177 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1088/normal_1778845721_350.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T07-TS07 yanı KENTAI',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1178 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1089/normal_1778846022_249.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Giriş sol Çin\\',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1179 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1090/normal_1778846073_937.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Giriş sol ana pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1180 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1091/normal_1778846192_389.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Isıl işlem fırını 1',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1181 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1092/normal_1778846262_531.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Isıl işlem fırını 2 ikili',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1182 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1092/normal_1778846269_781.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Isıl işlem fırını 2 ikili',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1183 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1093/normal_1778846326_965.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T6-3 pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1184 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1093/normal_1778846350_181.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T6-3 pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1185 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1094/normal_1778846390_107.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T6-4 pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1186 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1095/normal_1778846443_852.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T4-2 pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1187 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1096/normal_1778846507_237.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T19-YA005 ARKASI PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1188 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1097/normal_1778846571_690.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T19-YA005 arkası küçük pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1189 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1098/normal_1778846671_187.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T19-YS006 ARKA ANA PANO',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1190 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1099/normal_1778846717_368.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T19-YS006 arkası pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1191 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1100/normal_1778847280_574.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Mola yeri yanı motor sürücü panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1192 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1101/normal_1778847364_811.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX015',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1193 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1102/normal_1778847473_157.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-EP069',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1194 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1103/normal_1778847519_280.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-HP126',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1195 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1104/normal_1778847713_474.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'D04-OIF3',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1196 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1106/normal_1778847857_535.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Tünel dağıtım panosu1',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1197 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1107/normal_1778847922_924.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-MX014',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1198 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1108/normal_1778847967_362.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Dağıtım panosu 1',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1199 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1105/normal_1778848029_415.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'T06-CK006',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1200 => 
  array (
    'file_path' => 'uploads/ic_tesisat/27/1109/normal_1778848191_240.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'ALUMİNUM DOVME SOCO TEZGAH',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1201 => 
  array (
    'file_path' => 'uploads/ic_tesisat/28/1110/normal_1778848726_306.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Arıtma yaşar pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1202 => 
  array (
    'file_path' => 'uploads/ic_tesisat/28/1111/normal_1778848776_443.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Arıtma hidrafor',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1203 => 
  array (
    'file_path' => 'uploads/ic_tesisat/28/1112/normal_1778848862_910.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Kilitli açılamayan pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1204 => 
  array (
    'file_path' => 'uploads/ic_tesisat/29/1113/normal_1778848922_515.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Aydınlatma pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1205 => 
  array (
    'file_path' => 'uploads/ic_tesisat/29/1114/normal_1778848982_527.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Ana pano',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1206 => 
  array (
    'file_path' => 'uploads/ic_tesisat/29/1115/normal_1778849065_732.jpg',
    'photo_type' => 'normal',
    'panel_name' => 'Kompresör panosu',
    'firma_adi' => 'AYD OTOMOTİV ENDÜSTRİ SAN. VE TİC. A.Ş.',
  ),
  1207 => 
  array (
    'file_path' => 'uploads/ic_tesisat/14/88/termal_1780600869_373.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Depo pano',
    'firma_adi' => 'Depo - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  1208 => 
  array (
    'file_path' => 'uploads/ic_tesisat/14/88/termal_1780600879_518.jpg',
    'photo_type' => 'termal',
    'panel_name' => 'Depo pano',
    'firma_adi' => 'Depo - SAMPIYON EV GEREÇLERI ELEKTRIK ELEKTRONIK TEKSTIL INSAAT TARIM VE HAYVANCILIK SANAYI VE TICARET ANONIM SIRKETI',
  ),
  1209 => 
  array (
    'file_path' => 'uploads/ic_tesisat/30/1116/normal_1781211010_328.png',
    'photo_type' => 'normal',
    'panel_name' => 'Ana Pano',
    'firma_adi' => 'Özel Minik Yıldızlar Anaokulu',
  ),
);
$total_photos = count($photos);

// Batch configuration
$batch_size = 50;
$offset = isset($_GET["offset"]) ? (int)$_GET["offset"] : 0;
$limit = $batch_size;

$current_batch = array_slice($photos, $offset, $limit);
$has_more = ($offset + $batch_size) < $total_photos;

// Cookie & Downloader logic (InfinityFree bypass)
function decryptCookieChallenge($html) {
    if (preg_match('/toNumbers\("([0-9a-f]+)"\).*?toNumbers\("([0-9a-f]+)"\).*?toNumbers\("([0-9a-f]+)"\)/s', $html, $m)) {
        $key = hex2bin($m[1]);
        $iv = hex2bin($m[2]);
        $ct = hex2bin($m[3]);
        $decrypted = openssl_decrypt($ct, 'AES-128-CBC', $key, OPENSSL_RAW_DATA | OPENSSL_ZERO_PADDING, $iv);
        return bin2hex($decrypted);
    }
    return null;
}

function downloadRemoteFile($remote_path) {
    $base_url = "https://bilgiler.gt.tc/";
    $url = $base_url . ltrim($remote_path, '/');
    $ua = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36";
    
    // Step 1: Initial request to get challenge
    $opts1 = [
        'http' => [
            'header' => "User-Agent: $ua\r\n",
            'timeout' => 8
        ]
    ];
    $context1 = stream_context_create($opts1);
    $html = @file_get_contents($url, false, $context1);
    
    if (!$html) return false;
    
    $cookie_val = decryptCookieChallenge($html);
    if (!$cookie_val) {
        return $html;
    }
    
    // Step 2: Request file with cookie
    $opts2 = [
        'http' => [
            'header' => "Cookie: __test=$cookie_val\r\nUser-Agent: $ua\r\n",
            'timeout' => 12
        ]
    ];
    $context2 = stream_context_create($opts2);
    $response = @file_get_contents($url . "?i=1", false, $context2);
    
    return $response;
}

$downloaded = 0;
$skipped = 0;
$failed = 0;
$log = [];

if ($offset < $total_photos) {
    foreach ($current_batch as $ph) {
        $file_path = ltrim($ph['file_path'], '/');
        $local_dest = __DIR__ . '/../' . $file_path;
        
        // Ensure directory exists
        $dir = dirname($local_dest);
        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }
        
        if (file_exists($local_dest) && filesize($local_dest) > 1000) {
            $skipped++;
            $log[] = "Skipped (already exists): " . basename($file_path);
        } else {
            $data = downloadRemoteFile($ph['file_path']);
            if ($data !== false && strlen($data) > 1000) {
                file_put_contents($local_dest, $data);
                $downloaded++;
                $log[] = "Downloaded: " . basename($file_path) . " (" . strlen($data) . " bytes)";
            } else {
                $failed++;
                $log[] = "Failed: " . basename($file_path);
            }
        }
    }
}

// Helper function to clean name for case-insensitive and Turkish-safe comparison
function cleanNameForCompare($name) {
    $name = mb_strtolower($name, 'UTF-8');
    $search =  ['ı', 'i', 'ğ', 'ü', 'ş', 'ö', 'ç', 'İ', 'I', 'Ğ', 'Ü', 'Ş', 'Ö', 'Ç'];
    $replace = ['i', 'i', 'g', 'u', 's', 'o', 'c', 'i', 'i', 'g', 'u', 's', 'o', 'c'];
    $name = str_replace($search, $replace, $name);
    $name = preg_replace('/[^a-z0-9]/', '', $name);
    return trim($name);
}

// If download complete, perform DB sync
$sync_log = "";
if (!$has_more && $total_photos > 0) {
    // 1. Map institution names to local IDs
    $local_institutions = $pdo->query("SELECT id, firma_adi FROM institutions")->fetchAll(PDO::FETCH_KEY_PAIR);
    
    // 2. Fetch local reports map (local_inst_id => local_report_id)
    $local_reports_map = [];
    $stmt_lr = $pdo->query("SELECT id, kurum_id FROM internal_installation_reports");
    while ($row = $stmt_lr->fetch()) {
        $local_reports_map[$row['kurum_id']] = $row['id'];
    }
    
    // 3. Fetch local panels map (local_report_id => [panel_name => local_panel_id])
    $local_panels_map = [];
    $stmt_lp = $pdo->query("SELECT id, report_id, panel_name FROM ic_tesisat_panels");
    while ($row = $stmt_lp->fetch()) {
        $local_panels_map[$row['report_id']][cleanNameForCompare($row['panel_name'])] = $row['id'];
    }

    // Run clean up queries outside transaction to avoid implicit commits
    $pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
    $pdo->exec("DELETE FROM ic_tesisat_photos");
    $pdo->exec("ALTER TABLE ic_tesisat_photos AUTO_INCREMENT = 1");
    $pdo->exec("SET FOREIGN_KEY_CHECKS = 1");

    $pdo->beginTransaction();
    try {
        $pdo->exec("SET FOREIGN_KEY_CHECKS = 0");
        
        $stmt_ins_photo = $pdo->prepare("INSERT INTO ic_tesisat_photos (panel_id, photo_type, file_path) VALUES (?, ?, ?)");
        $stmt_ins_panel = $pdo->prepare("INSERT INTO ic_tesisat_panels (report_id, panel_name, panel_order, notes) VALUES (?, ?, 0, '')");
        
        $synced_sys1_photos = 0;
        
        foreach ($photos as $ph) {
            $firma_adi = $ph['firma_adi'];
            $panel_name = $ph['panel_name'];
            $clean_firma_sql = cleanNameForCompare($firma_adi);
            
            // Match institution in System 1 using cleanNameForCompare
            $local_inst_id = null;
            foreach ($local_institutions as $id => $name) {
                if (cleanNameForCompare($name) === $clean_firma_sql) {
                    $local_inst_id = $id;
                    break;
                }
            }
            if (!$local_inst_id) {
                foreach ($local_institutions as $id => $name) {
                    $clean_local = cleanNameForCompare($name);
                    if (strpos($clean_local, $clean_firma_sql) !== false || strpos($clean_firma_sql, $clean_local) !== false) {
                        $local_inst_id = $id;
                        break;
                    }
                }
            }
            
            if (!$local_inst_id) continue;
            
            // Ensure local report exists (insert NULL for FK columns to avoid constraint failures)
            if (!isset($local_reports_map[$local_inst_id])) {
                $stmt_ins_rep = $pdo->prepare("INSERT INTO internal_installation_reports (kurum_id, report_date, control_reason, authorized_person_id, device1_id) VALUES (?, ?, 'Yıllık', NULL, NULL)");
                $stmt_ins_rep->execute([$local_inst_id, date('Y-m-d')]);
                $local_reports_map[$local_inst_id] = $pdo->lastInsertId();
            }
            
            $local_report_id = $local_reports_map[$local_inst_id];
            $panel_name_clean = cleanNameForCompare($panel_name);
            
            // Find or create local panel
            if (isset($local_panels_map[$local_report_id][$panel_name_clean])) {
                $local_panel_id = $local_panels_map[$local_report_id][$panel_name_clean];
            } else {
                $stmt_ins_panel->execute([$local_report_id, $panel_name]);
                $local_panel_id = $pdo->lastInsertId();
                $local_panels_map[$local_report_id][$panel_name_clean] = $local_panel_id;
            }
            
            // Link photo in ic_tesisat_photos
            $stmt_ins_photo->execute([
                $local_panel_id,
                $ph['photo_type'],
                $ph['file_path']
            ]);
            $synced_sys1_photos++;
        }
        
        // 4. Sync to System 2 tables
        $stmt_yurt = $pdo->query("SELECT id, yurt_adi, resmi_kurum_adi FROM pano_yurtlar");
        $yurtlar = $stmt_yurt->fetchAll(PDO::FETCH_ASSOC);
        
        $inserted_yurt_fotos = 0;
        $new_sys2_panels = 0;
        
        $panolar_2_cache = [];
        $stmt_p2 = $pdo->query("SELECT id, pano_kurum_id, pano_adi FROM panolar");
        while ($row = $stmt_p2->fetch()) {
            $panolar_2_cache[$row['pano_kurum_id']][] = $row;
        }
        
        $pdo->exec("DELETE FROM pano_fotograflar");
        
        foreach ($photos as $ph) {
            $clean_firma_sql = cleanNameForCompare($ph['firma_adi']);
            $matched_yurt_id = null;
            
            foreach ($yurtlar as $y) {
                $clean_yurt = cleanNameForCompare($y['yurt_adi']);
                $clean_resmi = cleanNameForCompare($y['resmi_kurum_adi']);
                if ($clean_yurt === $clean_firma_sql || $clean_resmi === $clean_firma_sql) {
                    $matched_yurt_id = $y['id'];
                    break;
                }
            }
            
            if (!$matched_yurt_id) {
                foreach ($yurtlar as $y) {
                    $clean_yurt = cleanNameForCompare($y['yurt_adi']);
                    $clean_resmi = cleanNameForCompare($y['resmi_kurum_adi']);
                    if (strpos($clean_yurt, $clean_firma_sql) !== false || strpos($clean_firma_sql, $clean_yurt) !== false ||
                        strpos($clean_resmi, $clean_firma_sql) !== false || strpos($clean_firma_sql, $clean_resmi) !== false) {
                        $matched_yurt_id = $y['id'];
                        break;
                    }
                }
            }

            if ($matched_yurt_id) {
                $clean_pname_sql = cleanNameForCompare($ph['panel_name']);
                $panolar_2 = $panolar_2_cache[$matched_yurt_id] ?? [];
                
                $matched_pano_id = null;
                foreach ($panolar_2 as $p2) {
                    $clean_pname_2 = cleanNameForCompare($p2['pano_adi']);
                    if ($clean_pname_2 === $clean_pname_sql || strpos($clean_pname_2, $clean_pname_sql) !== false || strpos($clean_pname_sql, $clean_pname_2) !== false) {
                        $matched_pano_id = $p2['id'];
                        break;
                    }
                }
                
                if (!$matched_pano_id) {
                    $stmt_ins_p = $pdo->prepare("INSERT INTO panolar (pano_kurum_id, pano_adi, sira) VALUES (?, ?, ?)");
                    $stmt_ins_p->execute([$matched_yurt_id, $ph['panel_name'], 99]);
                    $matched_pano_id = $pdo->lastInsertId();
                    
                    $panolar_2_cache[$matched_yurt_id][] = [
                        'id' => $matched_pano_id,
                        'pano_kurum_id' => $matched_yurt_id,
                        'pano_adi' => $ph['panel_name']
                    ];
                    $new_sys2_panels++;
                }
                
                $stmt_ins = $pdo->prepare("INSERT INTO pano_fotograflar (pano_id, foto_tipi, foto_yolu) VALUES (?, ?, ?)");
                $stmt_ins->execute([$matched_pano_id, $ph['photo_type'], $ph['file_path']]);
                $inserted_yurt_fotos++;
            }
        }
        
        $pdo->exec("SET FOREIGN_KEY_CHECKS = 1");
        $pdo->commit();
        $sync_log = "1. Sistem Rapor Entegrasyonu: $synced_sys1_photos fotoğraf bağlandı. 2. Sistem Entegrasyonu: $inserted_yurt_fotos fotoğraf panolar ile eşleştirildi, $new_sys2_panels yeni pano başlığı oluşturuldu.";
    } catch (Exception $e) {
        $pdo->exec("SET FOREIGN_KEY_CHECKS = 1");
        if ($pdo->inTransaction()) {
            $pdo->rollBack();
        }
        $sync_log = "Hata: Entegrasyon yapılamadı. " . $e->getMessage() . " (Hata Satırı: " . $e->getLine() . ")";
    }
}

$next_offset = $offset + $batch_size;
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elektrik Pano Fotoğrafları Aktarımı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <?php if ($has_more): ?>
    <meta http-equiv="refresh" content="1;url=?offset=<?= $next_offset ?>">
    <?php endif; ?>
    <style>
        body { background: #f8fafc; font-family: system-ui, -apple-system, sans-serif; }
        .main-card { max-width: 700px; margin: 4rem auto; border: none; border-radius: 12px; box-shadow: 0 10px 15px -3px rgba(0,0,0,0.05); }
        .progress { height: 1.25rem; border-radius: 20px; }
        .log-box { max-height: 250px; overflow-y: auto; background: #0f172a; color: #38bdf8; font-family: monospace; font-size: 0.85rem; border-radius: 8px; padding: 10px; }
    </style>
</head>
<body>

<div class="container">
    <div class="card main-card p-4">
        <div class="text-center mb-4">
            <i class="fas fa-images text-primary fa-3x mb-3"></i>
            <h4 class="fw-bold">Elektrik Pano Fotoğrafları Aktarımı</h4>
            <p class="text-muted">İç Tesisat Raporları (Sistem 1) ve Elektrik Panoları (Sistem 2) fotoğrafları indiriliyor.</p>
        </div>

        <?php if ($total_photos === 0): ?>
            <div class="alert alert-warning text-center">
                <i class="fas fa-exclamation-triangle me-2"></i> Veritabanında (ic_tesisat_photos) indirilecek pano fotoğrafı kaydı bulunamadı!
            </div>
        <?php else: ?>
            <?php
            $percent = min(100, round(($offset / $total_photos) * 100));
            if (!$has_more) $percent = 100;
            ?>
            <div class="mb-3">
                <div class="d-flex justify-content-between text-muted small mb-1">
                    <span>İlerleme: <?= $offset ?> / <?= $total_photos ?></span>
                    <span>%<?= $percent ?></span>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: <?= $percent ?>%"></div>
                </div>
            </div>

            <div class="alert alert-info py-2">
                <i class="fas fa-spinner fa-spin me-2"></i> 
                <?php if ($has_more): ?>
                    Lütfen bekleyin, sonraki grup indiriliyor...
                <?php else: ?>
                    <strong>İndirme ve entegrasyon tamamlandı!</strong>
                <?php endif; ?>
            </div>

            <div class="log-box mb-3">
                <?php foreach ($log as $l): ?>
                    <div>[<?= date('H:i:s') ?>] <?= htmlspecialchars($l) ?></div>
                <?php endforeach; ?>
                <?php if (empty($log)): ?>
                    <div class="text-muted">İşlem bekleniyor...</div>
                <?php endif; ?>
            </div>

            <?php if (!$has_more && !empty($sync_log)): ?>
                <div class="alert alert-success">
                    <i class="fas fa-check-circle me-2"></i> <?= htmlspecialchars($sync_log) ?>
                </div>
                
                <div class="alert alert-danger mb-0">
                    <h6 class="fw-bold"><i class="fas fa-shield-halved me-2"></i> GÜVENLİK UYARISI</h6>
                    Bu sayfa görevini başarıyla tamamladı. Güvenliğiniz için lütfen sunucudaki <strong>`htdocs/pages/import_panel_fotos.php`</strong> dosyasını derhal siliniz.
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
