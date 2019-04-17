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
