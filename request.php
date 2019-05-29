<?php


/**

Türkiye Saatini alıyoruz. dilersek if bloğu içine alıp belirli tarihler aralığı veya saatler aralığı ile screen shot aldırabiliriz.


date_default_timezone_set('Europe/Istanbul');
$betik_zd = date_default_timezone_get();
$currentTimeinSeconds = time();    
$currentDate = date('H-i', $currentTimeinSeconds); 
*/



$benzersizsayi1=rand(0,2000); /
$im = imagegrabscreen();
imagepng($im, "resim.$benzersizsayi1.png");// Resimlerin tekrarı olmaması adına random bir sayı oluşturup resmin sonuna ekliyoruz
imagedestroy($im);





?>