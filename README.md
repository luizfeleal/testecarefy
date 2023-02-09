# testecarefy

##  API.
  
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


## Plataforma
Para rodar seu projeto, execute o seguite comando: 

+ Executar

        composer update

Para executar, execute o seguinte comando , no terminal, na raiz da pasta "FrontCarefy":

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

#Comando para ciração de banco de dados

+ Executar

        php artisan migrate 



