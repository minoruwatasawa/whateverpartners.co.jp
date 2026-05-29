# Whatever Partners Inc. サイト

- **ドキュメントルートは `public/`** に設定すること。
- デプロイ時は **`public/` 以下のみ** を配信する。`display-config/` や `.env` は配信しない。
- 詳細は [docs/deploy.md](docs/deploy.md) を参照。

## ローカルで起動

```bash
# リポジトリルートで
php -S wp.localhost:8080 -t public public/router.php
```

Apache の場合は DocumentRoot を `.../wp/public` に設定する。
