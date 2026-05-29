# クライアント紹介（トップページ・バナー）

## ファイルの役割

| ファイル | 役割 | 編集する人 |
|----------|------|------------|
| **client-intro.json** | バナーの中身。各要素に **id**（一意）が必須。記載順は表示に使わない | バナー追加担当・AI 等 |
| **client-intro-approvals.json** | 表示順（`order`: ID の配列）と掲載可否。**display-config/** に配置（デプロイで上書きしない） | 掲載確認担当・内部ページ（スイッチ・ドラッグで更新） |

- 紐づけは **ID のみ**。client-intro.json の配列の順序に依存しないため、並び替え・挿入しても崩れない。
- **approvals は public の外（display-config/）に置くため、デプロイで上書きされない。** バナー本体（client-intro.json）は public/data/ でリリースする。

## 運用ルール（重要）

- **client-intro.json の各バナーには必ず `id` を付ける。** 例: `"id": "yumeplaza-1"`。同一ファイル内で重複しないこと。
- **並び替えは /internal/client-services のドラッグ＆ドロップで行う。** order に無い ID（新規バナー）は自動で末尾に追加される。
- 新規バナーは掲載可否のキーが無い間は「未承認」。内部ページでスイッチを ON にすると approvals にその ID が追加される。

## client-intro.json の形式（抜粋）

```json
[
    {
        "id": "yumeplaza-1",
        "logo": "images/introduce/...",
        "client_name": "広島県商工会連合会",
        ...
    }
]
```

- **id**: 必須。英数字・ハイフンなど。他バナーと重複不可。AI で追加するときも必ず付与すること。

## client-intro-approvals.json の形式

- 配置場所: **display-config/client-intro-approvals.json**（リポジトリルートの display-config/。git には含めない）

```json
{
    "order": ["yumeplaza-1", "yumeplaza-2", "yumeplaza-3"],
    "yumeplaza-1": true,
    "yumeplaza-2": false,
    "yumeplaza-3": true
}
```

- **order**: 表示順。client-intro.json に存在する ID を並べた配列。この順でトップ・内部ページに表示される。
- それ以外のキーはバナーの **id**。値は `true`（トップに掲載）または `false`（未承認）。キーが無い場合は未承認扱い。
