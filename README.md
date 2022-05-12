## 環境
PHP 8.1.4
composer 2.3.4

## 立ち上げ手順
- このプロジェクトをgit cloneする
- envファイルを編集する。
  - DB_PORTは8809
  - DB_SOCKETはMAMP環境下におけるmysql.sockの絶対パス
  - DB_USERNAME, DB_PASSWORDは各々が設定したユーザーネームとパスワード
- MAMPを起動
- マイグレーション実行

```shell
php artisan config:cache
php artisan migrate
```

- 初期データ
```shell
php artisan db:seed
```