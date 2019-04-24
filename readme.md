<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>


## Medical API

### Criar o banco de dados

CREATE DATABASE medical CHARACTER SET utf8 COLLATE utf8_general_ci;

### Configure o banco de dados na aplicação

 - Edit o arquivo /.env (raiz da aplicação) conforme o seu usuário e host do seu banco de dados conforme indicado abaixo. 
 
        DB_CONNECTION=mysql
        DB_HOST=<SEU HOST>
        DB_PORT=3306
        DB_DATABASE=medical
        DB_USERNAME=<SEU USER>
        DB_PASSWORD=<SUA PASSWORD>

### Rodar as migrations

 - php artisan migrate
 
### Rodar as seeds

 - php artisan db:seed

### Para rodar a aplicação

 - php artisan serve
 
### URLs da api

 - Listar Médicos - GET http://&lt;server&gt;:&lt;port&gt;/api/doctors/
 - Visualizar Médico - GET http://&lt;server&gt;:&lt;port&gt;/api/doctors/&lt;id&gt;
 - Atualizar Médico - PUT http://&lt;server&gt;:&lt;port&gt;/api/doctors/&lt;id&gt;
 - Cadastrar Médico - POST http://&lt;server&gt;:&lt;port&gt;/api/doctors/
 - Excluir Médico - Delete http://&lt;server&gt;:&lt;port&gt;/api/doctors/&lt;id&gt;
 
