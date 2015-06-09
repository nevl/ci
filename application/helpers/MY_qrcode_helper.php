<?php
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2015-6-9
 * Time: 13:38
 */

require_once APPPATH."libraries/phpqrcode/phpqrcode.php";

    function qrcode($text)
    {
        $logo_path = "F:/1.jpg";
        QRcode::pngWithLogo($text,$logo_path);
    }