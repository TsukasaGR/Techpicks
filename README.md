# Techpicks

Laravel 8 による記事投稿、共有アプリケーション

# Features

主な機能は以下の通りです。

![Nov-28-2021 10-20-31](https://user-images.githubusercontent.com/12994726/143725253-919d3b05-fc69-40c5-b5dc-ebab83a42bae.gif)

- アカウント新規登録・ログイン・パスワードリセット
- 記事一覧・検索
- 記事投稿
- アカウント編集

# Installation

当アプリケーションは[Laravel Sail](https://laravel.com/docs/8.x/sail) を利用しているため、Laravel Sailの手順通り行います。

## 1. Composer依存関係のインストール

```bash
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```

## 2. Dockerイメージ及びコンテナ起動

```bash
./vendor/bin/sail up -d
```

## 3. 初期設定

```bash
cp .env.example .env
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan artisan storage:link
docker compose exec laravel.test chmod -R 777 storage bootstrap/cache
./vendor/bin/sail artisan migrate --seed
```

## 補足

sailコマンドをエイリアス設定しておくと便利です。

[参考](https://laravel.com/docs/8.x/sail#configuring-a-bash-alias)

# License

"Techpicks" is under [MIT license](https://en.wikipedia.org/wiki/MIT_License).
