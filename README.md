# コンテナ起動

docker-compose up -d --build

# PHPコンテナに入る
docker-compose exec php bash

# パーミッション設定
chmod -R 777 storage/ bootstrap/cache/

# nodeコンテナに入る
docker-compose exec node bash

npm run dev
(*エラー時 rm -rf node_modules rm package-lock.json)
