<?php
define('WEBROOT', $_SERVER['DOCUMENT_ROOT']);
include WEBROOT . '/functions' . '/globalFunction.php'; //定数よりも先に読み込む必要がある
define('META_DIRECTORY', WEBROOT . ifWinFixFileName('/meta')); //なるべくコード上にディレクトリを書かない
define('FUNCTIONS_DIRECTORY', WEBROOT . ifWinFixFileName('/functions'));
define('SETTINGS_DIRECTORY', WEBROOT . ifWinFixFileName('/settings'));
define('HIDDEN_DIRECTORY', WEBROOT . ifWinFixFileName('/.hidden'));
include SETTINGS_DIRECTORY . '/settingWebName.php';
include SETTINGS_DIRECTORY . '/settingExternalFile.php';

if (isset($ConnectDB)) {
  define('PDO_INFO', 'mysql:host=' . DB_ADDRESS . ';dbname=' . DB_NAME . ';charset=utf8mb4');
  $pdo = new PDO(PDO_INFO, DB_USERNAME, DB_PASSWORD); //何故か動かない
  //データベースを操作する場合は上のコードを使う（APIを介さず使わないこと）
}

if (!isset($dontMakeMeta)) {
  $metaDescriptionWithEnter = file_get_contents(META_DIRECTORY . ifWinFixFileName('/metaDescription.txt'));
  $metaDescription = deleteEnter($metaDescriptionWithEnter);
?>
  <!-- Meta -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="description" content="<?php echo $metaDescription; ?>" />

  <!-- Link -->
  <link rel="icon" href="<?php $FAVICON_URL ?>">

  <!-- Style -->
  <link rel="stylesheet" href="/styles/style.css">

  <!-- CDN -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://unpkg.com/http-vue-loader"></script>

<?php
}
?>
