## Template и компонент находятся:
```
/www/local/templates/main
```
## Запуск и остановка:
### Запуск (требуется подождать пару минут после запуска для инициализации базы с дампа)
```shell
docker compose -p bitrixdock up -d
```

### Остановка
```shell
docker compose -p bitrixdock stop
```

### Полное удаление
```shell
docker compose -p bitrixdock down -v
```