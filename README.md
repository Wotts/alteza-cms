# alteza-cms

###before run:
#### install dependencies
`cd app && composer install && cd ..`

###to run:
`make up`

#### create and populate database:
`docker exec -it alteza-cms`

`php bin/console doctrine:migrations:diff`

`php bin/console doctrine:migrations:migrate`

`php bin/console doctrine:fixtures:load`

###to test:
`make test`

###login with:
baas:eindbaas
gebruiker:welkom01

todo:
creator bij aanmaak post/comment getten, object relaties fixen (getCreator $this->username ofzo)
password hashing, nu wordt nog default henk gebruikt

tests?
phpstan / styling / annotation zooi