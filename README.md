# LB 4 TASK

Створіть контролер, який приймає два запити: по GET – виводить форму,
по POST - валідує і повертає користувачеві дані, які він увів. Поля форми згідно
з варіатом

{ name: required, min-length:3, age: number, min-value:18 }

# COMMANDS

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" <br/>
php -r "if (hash_file('sha384', 'composer-setup.php') === <br/> '756890a4488ce9024fc62c56153228907f1545c228516cbf63f885e036d37e9a59d27d63f46af1d4d07ee0f76181c7d3') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" <br/>
php composer-setup.php <br/>
php -r "unlink('composer-setup.php');" <br/>

php composer.phar init <br/>
npm i