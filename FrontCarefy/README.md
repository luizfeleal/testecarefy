<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Para roda seu projeto, execute o seguite comando: "Composer update"
Para executar, execute o seguinte comando, no terminal, na raiz da pasta "API"

+ Executar

        php artisan serve --port=8000
  

### URL de acesso
http://localhost:8000/api/

### Requisição HTTP

Segui a estrutura padrão do estilo [RESTful](https://en.wikipedia.org/wiki/Representational_state_transfer)

- GET: lista ou consulta dados
- POST: criação de dados
- PUT: atualização de dados
- DELETE: remoção de dados


### Rotas


+ /person - Realiza todas as transações para um pessoa (plataforma)
+ /user - Realiza todas as operações para um usuário
+ /user/login - Verifica os dados de login



## Códigos de respostas

+ 200 (application/json)

        Sucesso

+ 401 (text/json)


+ 404 (text/json)

        Registro não encontrado

+ 409 (text/json)

        Conflito, problema com alguma regra/restrição 

+ 500 (text/json)

        Erro do servidor


### Padrão de endpoints
    Para listagem, use GET: /endpoint/
    Para inserção, use POST: /endpoint/
    Para visualização, use GET: /endpoint/{id}
    Para atualização, use PUT: /endpoint/{id}
    Para exclusão, use DELETE: /endpoint/{id}
    
    

### Header
A requisição deve conter:

- Content-Type: application/json
