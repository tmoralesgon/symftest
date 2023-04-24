symfony server:start

php bin/console debug:router (ejemplo: http://localhost:8000/main)

# Pasos para installar Doctrine en Symfony 6 y + # 

composer require "doctrine:^2.2" --with-all-dependencies

composer require --dev symfony/maker-bundle

php bin/console docrtine:database:create (siempre que se tenga la línea de la bdd en .env definida)

php bin/console make:entity

php bin/console make:migration

php bin/console doctrine:migrations:migrate