# alteza-cms

###before run:
#### install dependencies
`cd app && composer install && cd ..`
#### create database:
`docker exec -it alteza-cms`

`php bin/console doctrine:migrations:diff`

`php bin/console doctrine:migrations:migrate`

###to run:
`make up`

###to test:
`make test`



todo:
database populate
