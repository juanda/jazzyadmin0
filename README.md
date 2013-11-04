JazzyAdmin0
===========

A Symfony2 model project intended to be a starting point for backend development application with sonataAdmin and FOSUser.

Instalation
-----------

git clone https://github.com/juanda/jazzyadmin0.git

cd jazzyadmin0

php composer.phar install

php app/console doctrine:database:create

php app/console doctrine:schema:create

php app/console jwsecurity:fixtures:load 

