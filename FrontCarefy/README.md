<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


Para rodar seu projeto, execute o seguite comando: 

+ Executar

        composer update

Para executar, execute o seguinte comando , no terminal, na raiz da pasta "FrontCarefy":

+ Executar

        composer update
        
+ Executar

        cp .env.example .env

+ Executar

        php artisan key:generate



#Após executar esse comandos, configurar as seguintes variáveis no arquivo .emv

+ Variáveis

        GITHUB_CLIENT_ID="422c4b0d22fea4b52262"
        GITHUB_CLIENT_SECRET="3e94bfcb431b9d4d56f4a3f58c2c22d345540169"
        GITHUB_CALLBACK_URL="http://localhost:9000/auth/callback"

+ Executar

        php artisan serve --port=9000
        
        
Para a criação da plataforma foi utilizado o Laravel, JavaScript, HTML, CSS, jQuery

A plataforma contempla as seguintes funções:

+ Tela de login com usuário e senha com autenticação via github.
+ Ao realizar o login, deve carregar uma tela com a lista de pacientes
+ cadastrados com as opções de exclusão e edição.
+ Deve conter um botão na tela para cadastro de novos pacientes.
+ Utilizar banco de dados para gerenciar as inclusões e exclusões dos
pacientes.

#Executar o script dentro do arquivo "Script.sql" para criação do banco de dados



