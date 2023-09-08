<?php
define('DB_SETTING_FILEPATH', HIDDEN_DIRECTORY . ifWinFixFileName('/.databaseSetting.php'));
include DB_SETTING_FILEPATH; //定義ではないためこのファイルから分離したいが、ここじゃないと動かない

//定数でも良かったが、Webページの表示中に変えたくなるかもしれないので
$FAVICON_URL = '/img/favicon.png';
