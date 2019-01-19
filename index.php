<?php

// Mobile detection for different index
require_once "./assets/vendor/Mobile_Detect.php";


$detect = new Mobile_Detect;

if ($detect->isMobile() && !$detect->isTablet()) {
    require_once "./layout/index_mobile.php";
} else {
    require_once "./layout/index_desktop_tablet.php";
}
