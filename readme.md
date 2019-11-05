<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Sobre
APP WEB desenvolvido com Laravel 5.8 para o Colégio Carneiro Martins

## Requisitos

- Necessário PHP 7.1 ou mais recente.
- Necessário PHP GD
- Necessário Composer
- Recomendado usar GIT

## Instalação

- Usuando git clonar esse repositório dentro do diretório desejado, ou fazer upload da forma desejada.
- Dentro da pasta do projeto rodar o comando "composer install"
- Criar um arquivo .env e o copiar o conteúdo do arquivo .env.exemple para dentro dele e salvar.
- No arquivo .env setar as configurações do seu banco de dados (EXEMPLO: DB_CONNECTION=mysql            DB_HOST=carneiro-mysqlDB_PORT=3306 DB_DATABASE=carneiro DB_USERNAME=user DB_PASSWORD=user).
- Depois de setar as configurações de banco de dados rodar o comando "php artisan migrate", se as configurações de banco de dados estiverem corretas as tabelas serão criadas, caso aconteça algum erro revise a instrução anterior.
- Também no arquivo .env setar ambiente de APP_NAME=Carneiro APP_ENV=local ou production
    APP_DEBUG=true ou false (mostrar erros) APP_URL=seu dominio
- Dentro da pasta do projeto rodar "php artisan key:generate".
- Dentro da pasta do projeto rodar "php artisan storage:link".
- Dentro da pasta do projeto rodar "php artisan db:seed".
- Depois disso o projeto está pronto, no servidor fazer o apontamento para a pasta public, dentro da pasta do projeto.
