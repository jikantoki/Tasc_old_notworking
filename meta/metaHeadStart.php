<?php
define('WEBROOT', $_SERVER['DOCUMENT_ROOT']);
define('META_DIRECTORY', WEBROOT . '/meta');
define('SETTINGS_DIRECTORY', WEBROOT . '/settings');
//なるべくコード上にディレクトリを書かない
include SETTINGS_DIRECTORY . '/settingWebName.php';
