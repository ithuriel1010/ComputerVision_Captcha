<?php
require_once("lib/captcha.php");
include("colorList.php");
include("fontList.php");


  use lorrx\captcha;
for ($i = 1; $i <= 200; $i++) 
{
    
    #$rgbColor = array();
    $rgbPixel = array();
    $numbLines = mt_rand(10, 25);
    $numbPixels = 6000;
    $colorCode = mt_rand(1, count($rgbColor));
    $fontCode = mt_rand(1, count($fonts));

    //Create a loop.
    foreach(array('r', 'g', 'b') as $color){
        //Generate a random number between 0 and 255.
        #$rgbColor[$color] = mt_rand(0, 255);
        $rgbPixel[$color] = mt_rand(0, 255);
    }

    $captcha = new captcha(5,48,100,350,$numbPixels,$numbLines,$fonts[$fontCode],"database/");

    //Set captcha options
    $captcha->setBgColor(255,255,255); //Set background color (R,G,B)
    $captcha->setPixelColor($rgbPixel['r'],$rgbPixel['g'],$rgbPixel['b']); //Set pixel color (R,G,B)
    $captcha->setLineColor($rgbColor[$colorCode]['r'],$rgbColor[$colorCode]['g'],$rgbColor[$colorCode]['b']); //Set line color (R,G,B)
    $captcha->setFontColor($rgbColor[$colorCode]['r'],$rgbColor[$colorCode]['g'],$rgbColor[$colorCode]['b']); //Set font color (R,G,B)

    $captcha->getCaptcha();
}
