###############################################################################################################################################

				Descrição do Projeto.

Projeto Desenvolvido com o Framework Laravel na versão 8, com a versão do PHP 7.4, utilizado o composer para efetuar a instalação das dependências do laravel  em um ambiente Linux UBUNTU com DB mysql.
Escolhido essas tecnologias pois facilitam o desenvolvimento, e são as mais utilizadas em um ambiente web (nuvem).

O projeto é uma API Rest simples onde temos os atores(Actors), Diretores(Directors), classificação do filme(ClassMovies) e filmes(Movies).
Existe um relacionamento entre as tabelas com os Ids das mesmas com a entidade Filme(Movies).
				

				Descrição de comandos utilizados para criar o projeto.

Após o ambientes de desenvolvimento estar pronto para utilização, foi criado o projeto com o seguinte comando:

	composer create-project --prefer-dist laravel/laravel movie

vamos no BD escolhido e criamos um schema para armaznarmos nossos dados do projeto:

        CREATE SCHEMA 'movie';

Após projetos e dependências instalados, entrar na pasta do projeto criado e acessar a pasta .env e alterar os dados de conexão do DB.

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=movie
	DB_USERNAME=root	(utilizado user root apenas para fins didaticos, sei que não é uma boa prática)
	DB_PASSWORD=123qwe

iniciar um servidor web do próprio framework laravel com o seguinte comando:

 	php artisan serve

Ainda dentro da pasta do projeto iniciamos a criação das models e com um parametro a mais (-m) ja criaremos junto as migrations:

	php artisan make:model Actors -m
	php artisan make:model Director -m
	php artisan make:model ClassMovie -m
	php artisan make:model Movie -m

Após os models e migrtions criados iremos agora executar as migrations para criar as tabelas e relacionamentos conforme criado codigos.

	php artisan migrate

Após executar as migrations esta na hora de criarmos o nosso controller, execute o seguinte:

	 php artisan make:controller ActorsController --resource (o comando --resource ja cria uma serie de paramtros no nosso controller, como view, update, create etc...).

Após a criação do nosso controller temos que criar as rotas necessarias para funcionamento da nossa API, na pasta routes, acessar o arquivo api.php, nesse arquivo que é destinado para a criação das rotas de API.

Após esses passos utilizar a ferramenta POSTMAN para consumirmos e tastarmos nossa API.
