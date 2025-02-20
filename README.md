# フリマアプリ
## 環境構築
Dockerビルド
  1. git clone git@github.com:chopper7Lufy/test4.git
  2. DockerDesktopアプリを立ち上げる
  3. docker-compose up -d --build
Laravel環境構築
  1.docker-compose exec php bash
  2.composer install
  3.「.env.example」ファイルを「.env」ファイルに命名を変更。または、新しく.envファイルを作成
  4. .envに以下の環境変数を追加
  DB_CONNECTION=mysql
  DB_HOST=mysql
  DB_PORT=3306
  DB_DATABASE=laravel_db
  DB_USERNAME=laravel_user
  DB_PASSWORD=laravel_pass
  5.アプリケーションキーの作成
  php artisan key:generate
  6.マイグレーションの実行
  php artisan migrate
  7.シーディングの実行
  php artisan db:seed
## 使用技術（実行環境）
  ・PHP8.3.9
  ・Laravel8.83.1
  ・MySQL8.0.26
## ER図
![image](https://github.com/user-attachments/assets/21cf155a-4cc2-459e-b968-df41b58b7317)

## URL
・開発環境: http://localhost/
・phpMyAdmin: http://localhost:8080/
