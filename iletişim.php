<?php

    $ad_soyad = $_POST['ad_soyad'] ?? 'Bilgi Yok';
    $eposta   = $_POST['eposta'] ?? 'Bilgi Yok';
    $konu     = $_POST['konu'] ?? 'Bilgi Yok';
    $mesaj    = $_POST['mesaj'] ?? 'Bilgi Yok';
    $cinsiyet = $_POST['cinsiyet'] ?? 'Belirtilmedi';

    echo "<h2>Form Verileri Başarıyla Alındı</h2>";
    echo "<hr>";
    echo "<b>Ad Soyad:</b> " . htmlspecialchars($ad_soyad) . "<br>";
    echo "<b>E-posta:</b> " . htmlspecialchars($eposta) . "<br>";
    echo "<b>Konu:</b> " . htmlspecialchars($konu) . "<br>";
    echo "<b>Cinsiyet:</b> " . htmlspecialchars($cinsiyet) . "<br>";
    echo "<b>Mesaj:</b> " . htmlspecialchars($mesaj) . "<br>";
    echo "<hr>";
    echo "<a href='iletisim.html'>Geri Dön</a>";
?>