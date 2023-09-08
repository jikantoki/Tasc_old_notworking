# スケジュール管理・共有ソフト

## ブランチ名規則

**英語しか使えないので注意**

### 新機能開発

feature/本名以外のペンネーム/新機能について10～20文字程度で概要  
ex) feature/jikantoki/save-data

### バグ修正、コード改善

hotfix/本名以外のペンネーム/修正内容について10～20文字程度で概要  
ex) hotfix/jikantoki/fix-directory-path

**ブランチ名は機能や修正内容事に分けること**

## 命名規則

サンプル名→my name is jiro
| 名称 | 規則 |
|---|---|
| クラス名 | MyNameIsJiro |
| 変数名・データベースのプロパティ名 | myNameIsJiro |
| ディレクトリパス | MY-NAME-IS-JIRO |
| ブランチ名 | my-name-is-jiro |
| 定数名・大文字小文字に制限がかかる場所 | MY_NAME_IS_JIRO |

## コーディング規則

### 言語規則

PHPでもJavascriptでも開発可能なものは原則Javascriptで
但し外部からソースコードを見られてはいけない部分やDBを触るAPI部分はPHPで作る
APIは原則GETで入力してJSONを出力

### 変数の扱い

| 言語 | 型 | 使い方 |
|---|---|---|
| PHP | $ | 変数 |
| PHP | define | 定数 |
| Js | var | パブリックな変数（できるだけ使わないこと） |
| Js | let | 宣言した場所でのみ使える変数 |
| Js | const | 定数 |

### 命令文について

```
let abc = 'hello' //イコール前後にスペース
if (abc === 'hello') {
  hogehoge()
} else {
  piyopiyo()
}
//処理の中身はタブでインデント
//ifやelseの前後のスペース
```
