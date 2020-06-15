# docker-laravel

![License](https://img.shields.io/github/license/ucan-lab/docker-laravel?color=f05340)
![Stars](https://img.shields.io/github/stars/ucan-lab/docker-laravel?color=f05340)
![Issues](https://img.shields.io/github/issues/ucan-lab/docker-laravel?color=f05340)
![Forks](https://img.shields.io/github/forks/ucan-lab/docker-laravel?color=f05340)

## Introduction

Build laravel development environment with docker-compose.

## Usage

- [Build for Mac](https://github.com/ucan-lab/docker-laravel/wiki/Build-for-Mac)
- [Build for Windows](https://github.com/ucan-lab/docker-laravel/wiki/Build-for-Windows)

## Container structure

```bash
├── app
├── web
└── db
```

### app container

- Base image
  - [php](https://hub.docker.com/_/php):7.4-fpm-buster
  - [composer](https://hub.docker.com/_/composer):latest

### web container

- Base image
  - [nginx](https://hub.docker.com/_/nginx):1.18-alpine
  - [node](https://hub.docker.com/_/node):14.2-alpine

### db container

- Base image
  - [mysql](https://hub.docker.com/_/mysql):8.0

# fish_restaurant
## コンテナに入る
- make app
- make web
- make db

## マイグレーション実行コマンド
### php artisan migrate
- [mac] $ make migrate

### php artisan migrate:fresh
- [mac] $ make fresh

### php artisan db:seed
- [mac] $ make seed

## テスト実行
- [mac] $ make test

## MySQL接続
- [mac] $ make mysql

## 環境構築時にインストールしたいライブラリがある場合
makefileのinitに追記を行う
npmでインストールするものに関しては速度を上げたいので、
yarnで記述する