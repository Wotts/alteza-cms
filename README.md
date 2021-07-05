# alteza-cms

### before run:
#### install dependencies
`cd app && composer install && cd ..`

### to run:
`make up`

#### create and populate database:
`docker exec -it alteza-cms`

`php bin/console doctrine:migrations:diff`

`php bin/console doctrine:migrations:migrate`

`php bin/console doctrine:fixtures:load`

visit http://localhost:8080/

### login with:
baas:eindbaas

gebruiker:welkom01