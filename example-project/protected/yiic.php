<?php

// change the following paths if necessary
//$yiic=dirname(__FILE__).'/../../../yii-1.1.16.bca042/framework/yiic.php';

// load custom yii path if the file is available
if (file_exists(dirname(__FILE__) . '/config/yii.php')) {
    require_once(dirname(__FILE__) . '/config/yii.php');
}

$config=dirname(__FILE__).'/config/console.php';

require_once($yiic);
