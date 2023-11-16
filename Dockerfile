FROM php:8.1-apache

# PHPのPDO MySQL拡張をインストール
RUN docker-php-ext-install pdo_mysql

# 必要なパッケージ（cronなど）をインストール
RUN apt-get update && apt-get install -y cron

# クロンジョブの設定ファイルをコピー
COPY cronjob /etc/cron.d/cronjob

# クロンジョブのパーミッションを設定
RUN chmod 0644 /etc/cron.d/cronjob

# クロンジョブをcrontabに追加
RUN crontab /etc/cron.d/cronjob

# Apacheを起動（クロンデーモンも起動）
CMD cron && docker-php-entrypoint apache2-foreground
