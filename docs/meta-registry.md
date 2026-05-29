# ページメタ情報（title / description）と AI 用カテゴリ

## 概要

**1つのJSON**（`data/pages.json`）で次の2つを管理しています。

- **pages**: 各ページの `<title>` と `<meta name="description">`（メタ用）
- **categories**: AIチャット用のカテゴリ・コンテンツ一覧（質問の分類と回答参照に使用）

AI にはこのファイルの **categories** を読ませ、カテゴリ判定→コンテンツ候補選択→回答生成の参照に使います。

## ファイル

| ファイル | 役割 |
|----------|------|
| `data/pages.json` | `pages`（メタ用）と `categories`（AI用）を定義。AI に読ませる前提の構成 |
| `includes/functions.php` | `getPageMetaOptions($pageKey)`（メタ）、`getAiCategories()`（AI用カテゴリ）、`getPagesJson()`（全体） |
| `index.php` | ルートごとに `$pageKey` を設定してから各ページを読み込み |

## ページキー一覧

`index.php` のルーティングで設定されるキーは次のとおりです。

| キー | 対応URL例 |
|------|-----------|
| `home` | `/` |
| `about` | `/?page=about` |
| `business` | `/?page=business` |
| `business-web` | `/?page=business&slug=web` |
| `business-operation` | `/?page=business&slug=operation` |
| `business-marketing` | `/?page=business&slug=marketing` |
| `business-game-dev` | `/?page=business&slug=game-dev` |
| `services` | `/?page=services` |
| `service-detail` | `/?page=services&slug=xxx`（詳細はサービスごとの title/description で上書き） |
| `philosophy` | `/?page=philosophy` |
| `message` | `/?page=message` |
| `news` | `/?page=news` |
| `news-detail` | `/?page=news&slug=xxx`（詳細は記事ごとの title/description で上書き） |
| `contact` | `/?page=contact` |
| `privacy` | `/?page=privacy` |
| `terms` | `/?page=terms` |
| `admin-icons` | `/?page=admin-icons` |

## data/pages.json の形式

### 1. pages（メタ用）

メタタグ用の一覧。`getPageMeta()` / `getPageMetaOptions()` が参照します。

```json
{
  "pages": {
    "ページキー": {
      "title": "ページタイトル（&lt;h1&gt;や&lt;title&gt;に使う）",
      "description": "メタ description 用の説明文（120〜160文字程度を推奨）"
    }
  }
}
```

- **title**: 空文字 `""` のときはサイト名のみが `<title>` に出力されます（トップ用）。
- **description**: 検索結果のスニペットや OGP に使われます。

### 2. pages の共通フィールド（メタ＋AI）

- **title**, **description**: 全ページ必須。メタタグと一覧表示に使用。
- **category**: このページが属する AI 用カテゴリID（`company` / `business` など）。該当しない場合は `null`。
- **url**: 参考リンク用（`category` があるページのみ）。例: `/about`, `/business/web`。
- **body**: AI が回答生成時に参照する本文・要約（`category` があるページで推奨）。未指定時は `description` を代用。

### 3. categories（AI用）

カテゴリの定義のみ。コンテンツの中身は **pages** を参照するため重複しません。`getAiCategories()` が `pages` から `title` / `url` / `body` を組み立てて返します。

- **categories**: カテゴリID → `label`（表示名）、`description`（どういう質問が該当するか）、**contents**（ページキーの配列）
- **contents**: 例: `["about", "message", "philosophy"]`。各キーは `pages` のキーと一致させる。

AI の想定フロー:

1. **一次マッチング（カテゴリ判定）**: ユーザー質問と **categories[].description** を照らしてカテゴリを1つ選ぶ（※pages[].description はメタ用で、AIのマッチングには使わない）
2. **二次（コンテンツ選択）**: そのカテゴリの contents に対応する各ページの **title** と **body の先頭150文字** を一覧化し、質問に最も関連するページを最大2つ選ぶ
3. 1位の **body**（全文）と質問を AI に渡して回答を生成し、参考ページとして 1位・2位の **title** と **url** を返す

ヒット率を上げるには **body** を詳しく書くことが有効です（キーワード・ページ内容の要約を含める）。

## 運用ルール

### 1. メタ・AI の情報は pages に一元化

- 文言の変更は **必ず `data/pages.json` の `pages`** を編集してください。`title` / `description` はメタとAIで共通です。
- カテゴリに含めるページには **category**・**url**・**body** を追加し、`categories` の該当カテゴリの **contents** にそのページキーを並べます。`categories` 側に title/url/body を書かず、pages だけを正とします。
- 各 `pages/*.php` に title/description を直接書かないでください（レジストリから読みます）。

### 2. 新規ページを追加したとき

1. **index.php** のルーティングで、該当 case に `$pageKey = '新しいキー';` を追加する。
2. **data/pages.json** の **pages** に、同じキーで `title` と `description` を追加する。AI の回答対象にする場合は `category`・`url`・`body` も追加する。
3. **pages/新しいページ.php** の先頭で、他ページと同様に `getPageMetaOptions($pageKey)` の戻り値から `$pageTitle` と `$metaOptions` を設定する。
4. そのページを AI の回答対象にする場合は、**categories** の該当カテゴリの **contents** 配列にそのページキーを1つ追加する（title/url/body は pages にだけ書く）。

キー名は英数字とハイフンのみにし、ルートと1対1で対応させてください。

### 3. 動的ページ（サービス詳細・お知らせ詳細）

- `service-detail` と `news-detail` は、一覧用の共通メタを `pages.json` に持っています。
- 実際の表示では、**各サービス・記事の title / description で上書き**しているため、詳細ページ用の文言を変えたい場合は、`data/services/list.json` や `data/news/list.json` 側のデータを編集してください。

### 4. 更新漏れの防止

- 新規ページ追加時は「index にキー追加」と「pages.json にエントリ追加」をセットで行うよう、チェックリストや PR テンプレートに含めておくと安全です。
- （任意）`data/pages.json` のキー一覧と、index.php で設定している `$pageKey` の一覧が一致しているかを確認するスクリプトを CI やコミット前フックで回すと、更新漏れを検知できます。

## 技術メモ

- `getPagesJson()` で `pages.json` 全体を読み、同一リクエスト内でキャッシュします。`getPageMeta($pageKey)` はその `pages` を参照します。
- キーが存在しない場合は `getPageMetaOptions()` 内で `trigger_error(..., E_USER_WARNING)` が発生し、フォールバックとしてサイト名・サイト説明が返ります。原因追従のため、ログや開発環境で警告を確認してください。
- 各ページでは `getPageMetaOptions($pageKey)` の戻り値だけを使い、フォールバック用の文字列をページ側に書かないようにしています。
- `metaTags($metaOptions)` は `title` / `description` のほか、`image`・`url`・`robots` などがあれば出力に含めます（admin-icons の noindex など）。
- **AI 用**: PHP 側では `getAiCategories()` で `categories` だけ取得できます。API やチャット処理ではこの戻り値をそのまま AI に渡すか、必要な形に整形して利用します。
