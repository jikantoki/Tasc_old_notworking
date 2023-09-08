<?php

/**
 * str_replace関数の全角対応版
 *
 * @param string $search - 検索文字列
 * @param string $replace - 置き換え後文字列
 * @param string $haystack - 検索する対象
 * @param string $encoding - エンコーディング
 * @return string
 */
function mb_str_replace($search, $replace, $haystack, $encoding = "UTF-8")
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

/**
 * もしサーバがWindowsなら、ファイルパスの/を\にする
 *
 * @param string $path - ファイルパス
 * @return string
 */
function ifWinFixFileName($path)
{
  if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    //Windows
    echo 'a';
    return mb_str_replace('/', '\\', $path);
  } else {
    return $path;
  }
}

/**
 * 文字列から改行を消す
 *
 * @param string $string - 改行を消したい文字列
 * @return string
 */
function deleteEnter($string)
{
  return mb_str_replace("\n", '', $string);
}
