# デプロイ方針

## ドキュメントルートと public/

- **ドキュメントルート**は `public/` に設定する。
- 配信・デプロイするのは **`public/` 以下のみ** とする。これにより、テストと本番で内容が異なるファイルをデプロイで上書きすることを防ぐ。

## ディレクトリ構成（リポジトリルート = wp/）

```
wp/
├── public/          ← ドキュメントルート。ここだけデプロイする
│   ├── index.php
│   ├── router.php
│   ├── .htaccess
│   ├── includes/
│   ├── pages/
│   ├── api/
│   ├── assets/
│   ├── data/        ← client-intro.json, pages.json など（リリースするデータ）
│   ├── sitemap.php
│   ├── robots.txt
│   └── llms.txt
├── display-config/  ← 本番用の設定・表示用のデータ（デプロイで配信しない。.gitignore 済み）
│   └── client-intro-approvals.json
├── .env             ← 環境依存（.gitignore 済み）
├── docs/
└── ...
```

## デプロイ時の手順

1. **配信するのは `public/` のみ**  
   - 本番サーバのドキュメントルートに `public/` の内容をコピーまたは rsync する。
   - または、リポジトリを clone したうえで、Web サーバのドキュメントルートを `.../wp/public` に設定する。

2. **`display-config/` は配信しない**  
   - 本番サーバでは、ドキュメントルートの**外**（例: `public/` の兄弟ディレクトリ）に `display-config/` を用意する。
   - 初回のみ手動で作成するか、内部ページでスイッチを一度操作すると API が自動作成する。
   - `client-intro-approvals.json` はここにのみ置き、デプロイで上書きされないようにする。

3. **`.env`**  
   - 本番では環境変数またはサーバ側の `.env` をドキュメントルート外に配置し、`public/` の親ディレクトリに置く（config が `BASE_PATH . '/..'` から読み込む）。

## ローカル開発

- PHP 組み込みサーバで `public/` をドキュメントルートにして起動する（リポジトリルートで実行）:
  ```bash
  cd /path/to/wp && php -S wp.localhost:8080 -t public public/router.php
  ```
  または、Apache の DocumentRoot を `.../wp/public` に設定する。
- `.env` と `display-config/` はリポジトリルート（`wp/`）に配置する。
