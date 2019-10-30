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

- Recomendado PHP 7.1 ou mais recente.
- Necessário PHP GD
- Necessário Composer
- Recomendado usar GIT

## Instalação

- Usuando git clonar esse repositório dentro do diretório desejado, ou fazer upload da forma desejada.
- Dentro da pasta do projeto rodar o comando "composer install"
- Criar um arquivo .env e o copiar o conteúdo do arquivo .env.exemple para dentro dele e salvar.
- No arquivo .env setar as configurações de banco de dados (Exemplo: DB_CONNECTION=mysql            DB_HOST=carneiro-mysqlDB_PORT=3306 DB_DATABASE=carneiro DB_USERNAME=user DB_PASSWORD=user).
- Dentro da pasta do projeto rodar "php artisan key:generate".
- Dentro da pasta do projeto rodar "php artisan storage:link".
- Depois disso o projeto está pronto, no servidor fazer o apontamento para a pasta public, dentro da pasta do projeto.
