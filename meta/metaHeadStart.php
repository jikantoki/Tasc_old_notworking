<?php
define('WEBROOT', $_SERVER['DOCUMENT_ROOT']);
include WEBROOT . '/functions' . '/globalFunction.php'; //定数よりも先に読み込む必要がある
define('META_DIRECTORY', WEBROOT . ifWinFixFileName('/meta'));
define('FUNCTIONS_DIRECTORY', WEBROOT . ifWinFixFileName('/functions'));
define('SETTINGS_DIRECTORY', WEBROOT . ifWinFixFileName('/settings'));
//なるべくコード上にディレクトリを書かない
include SETTINGS_DIRECTORY . '/settingWebName.php';

if (!isset($dontMakeMeta)) {
  $metaDescriptionWithEnter = file_get_contents(META_DIRECTORY . ifWinFixFileName('/metaDescription.txt'));
  $metaDescription = deleteEnter($metaDescriptionWithEnter);
?>
  <!-- Meta -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="<?php echo $metaDescription; ?>" />

  <!-- Link -->
  <link rel="icon" href="/img/favicon.png">

  <!-- Style -->
  <link rel="stylesheet" href="/styles/style.css">

  <!-- CDN -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<?php
}
?>