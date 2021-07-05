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

###login with:
baas:eindbaas
gebruiker:welkom01

todo:
creator bij aanmaak post/comment getten, object relaties fixen (getCreator $this->username ofzo)
password hashing van nieuwe users
password escapen in migrate file? (fixtures gebruiken om troep aan te maken. er is een symfony command om ze uit te voeren)
default role toewijzen

security sloopt login, access denied... :(
In de Usercontroller dit toevoegen
print_r($this->getUser()->getRoles());
die;
geeft gewoon Array ( [0] => ADMIN )
- { path: ^/user, roles: IS_AUTHENTICATED_FULLY } werkt wel



ff kijken of id index goed gaat na database population via doctrine:migrations
INSERT INTO users (id, username, password) VALUES (1, 'baas', '$2y$13$VnOQZiD4IC3i6WOFSVLr8eyzcJca3rNFRLMPiMvjIaS6uGVQ9q7VO');
INSERT INTO users (id, username, password) VALUES (2, 'hoi', '$2y$13$lcCawy4pjbH8LOt/8SqCZu2xsA8P6acdseUSGQlQ7qmEetzeWI1Oi');
INSERT INTO roles (id, description) VALUES (1, 'ADMIN');
INSERT INTO roles (id, description) VALUES (2, 'USER');
INSERT INTO user_role (user_id, role_id) VALUES (1, 1);
INSERT INTO user_role (user_id, role_id) VALUES (2, 2);