# スケジュール管理・共有ソフト
## 命名規則
サンプル名→my name is jiro
| 名称 | 規則 |
|---|---|
| クラス名 | MyNameIsJiro |
| 変数名・データベースのプロパティ名 | myNameIsJiro |
| ディレクトリパス | MY-NAME-IS-JIRO |
| 定数名・大文字小文字に制限がかかる場所 | MY_NAME_IS_JIRO |

## コーディング規則
### 変数の扱い
| 言語 | 型 | 使い方 |
|---|---|---|
| PHP | $ | 変数 |
| PHP | define | 定数 |
| Js | var | パブリックな変数（できるだけ使わないこと） |
| Js | let | 宣言した場所でのみ使える変数 |
| Js | const | 定数 |

### 命令文について
#### 代入
let abc = 'hello' //イコール前後にスペース
if (abc === 'hello') {
  hogehoge()
} else {
  piyopiyo()
}
//処理の中身はタブでインデント
//ifやelseの前後のスペース
