<?php
function mb_str_replace($search, $replace, $haystack, $encoding = "UTF-8")
//str_replace関数の全角対応版
{
  // 検索先は配列か？
  $notArray = !is_array($haystack) ? TRUE : FALSE;
  // コンバート
  $haystack = $notArray ? array($haystack) : $haystack;
  // 検索文字列の文字数取得
  $search_len = mb_strlen($search, $encoding);
  // 置換文字列の文字数取得
  $replace_len = mb_strlen($replace, $encoding);

  foreach ($haystack as $i => $hay) {
    // マッチング
    $offset = mb_strpos($hay, $search);
    // 一致した場合
    while ($offset !== FALSE) {
      // 差替え処理
      $hay = mb_substr($hay, 0, $offset) . $replace . mb_substr($hay, $offset + $search_len);
      $offset = mb_strpos($hay, $search, $offset + $replace_len);
    }
    $haystack[$i] = $hay;
  }
  return $notArray ? $haystack[0] : $haystack;
}

function ifWinFixFileName($path)
//もしサーバがWindowsなら、ファイルパスの/を\にする
{
  if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    //Windows
    return mb_str_replace('/', '\\', $path);
  }
}

function deleteEnter($string)
//文字列から改行を消す
{
  return mb_str_replace("\n", '', $string);
}
