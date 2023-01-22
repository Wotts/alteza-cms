# alteza-cms

### before run:
#### install dependencies
`cd app && composer install && cd ..`

### to run:
`make up`

#### create and populate database:
Make sure you have `composer v2.*` installed.

`docker exec -it alteza-cms /bin/bash`

`php bin/console doctrine:migrations:migrate`

`php bin/console doctrine:fixtures:load`

visit http://localhost:8080/

### login with:
baas:eindbaas

or

gebruiker:welkom01
