# laravel installation [guide](https://medium.com/@rgdev/como-instalar-o-laravel-5-4-no-ubuntu-16-04-a80c047c2978)

\$ sudo apt-get install php

\$ php -v

\$ sudo apt-get install php7.0-mbstring

\$ sudo apt-get install php-xml

\$ sudo apt-get install php7.0-zip

\$ sudo apt-get install curl

\$ curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer

\$ sudo chown -R \$USER ~/.composer/

\$ composer create-project --prefer-dist laravel/laravel project-name

\$ composer global require "laravel/installer"

$ echo 'export PATH="$HOME/.composer/vendor/bin:\$PATH"' >> ~/.bashrc
source ~/.bashrc

\$ laravel new project

\$ cd project/

\$ php artisan serve

# Run databa in docker
\$ docker run --rm   --name pg-docker -e POSTGRES_PASSWORD=docker -d -p 5433:5432 -v $HOME/docker/volumes/postgres:/var/lib/postgresql/data  postgres


# Challenge the ZSSN (Zombie Survival Social Network)

[GitHub Gist](https://gist.github.com/mauricioklein/1b1f279ad2d9cb42bcf0018e1cf05cfb)
