- お問い合わせフォーム
    - 環境構築
        - Dockerビルド
            1. git clone git@github.com:coachtech-material/laravel-docker-template.git
            2. docker-compose up -d --build          
          
        - laravel環境構築
             1. docker-compose exec php bash
             2. composer install
             3. cp .env.example .env
             4. .envファイル編集
             5. php artisan key:generate
             6. php artisan migrate
                
    - 使用技術
        - php:7.4.9
        - Laravel Framework 8.83.8
        - mysql:8.0.26
          
    - URL
        - 開発環境：http://localhost/
