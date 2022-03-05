<?php

//Document   : Bijoy to Unicode (UTF-8) converter
//Created on : Dec 29, 2021, 02:32:43 AM
//@author    : Md.Tawfiqul Islam
//Email      : tawfiq@mascoders.com, tawfiqmislam@gmail.com
//Organization  : http://mascoders.com
//Facebook : https://facebook.com/nhd.trais

//example script

require_once 'bijoy2unicode.php';

// $demo = 'Dfq cv‡k av‡bi kx‡l †ewóZ cvwb‡Z fvmgvb RvZxq dzj kvcjv| Zvi gv_vq cvUMv‡Qi ci¯úi mshy³ wZbwU cvZv Ges Dfh cv‡k `ywU K‡i ZviKv|';

$demo = '‡fŠZRMr I cwigvc:
‡jKPvi-1: c`v_©weÁv‡bi bxwZ; Ae`vb; ivwk
‡jKPvi-2: gvÎv, gvÎvi mgxKi‡Yi MvwYwZK mgm¨vejx;
‡jKPvi-3: cwigv‡ci g~jbxwZ I ÎæwU 
‡jKPvi-4: cwigv‡ci ÎæwU m¤úwK©Z';

$converted = convertBijoyToUnicode($demo);

echo $converted;

echo "<br>";
echo $demo;

// উভয় পাশে ধানের শীষে বেষ্টিত পানিতে ভাসমান জাতীয় ফুল শাপলা। তার মাথায় পাটগাছের পরস্পর সংযুক্ত তিনটি পাতা এবং উভয পাশে দুটি করে তারকা।

?>
