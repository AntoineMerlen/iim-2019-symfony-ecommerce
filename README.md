# iim-2019-symfony-ecommerce



#### Configure Server
```bash
- Change .env/.test to local test
- Change .env to connect with your Database
```

#### Installation
```bash
- git clone 
- composer install
- curl install
- " >= php 7.1 "
```

#### Run this project
```bash
- php bin/console server:run
```

#### Création et update de la BDD
```bash
- php bin/console doctrine:database:create
- php bin/console doctrine:schema:update --force
```