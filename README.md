# Test Yii2
Steps to work with this repo.

**Clone** the repo

```shell   
sudo docker-compose up -d
```
```shell
sudo docker ps -a
```
```shell
sudo docker exec -it [container-id] bash
```
```shell
sudo composer install
```
Now update the **db.php** inside **config**
```shell
php yii migrate
```
```shell
php yii seed
```
That's it you are now ready!