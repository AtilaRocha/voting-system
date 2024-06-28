# Sistema de Votação

Um sistema web para gerenciamento e realização de votações online, utilizando tecnologias modernas para segurança e eficiência.

## Funcionalidades

- Registro seguro de usuários
- Autenticação com proteção CSRF
- Votação em opções pré-definidas
- Estatísticas detalhadas de votação
- Temas dark e light para personalização da interface

## Rodando Localmente

Clone o Projeto:

```bash
git clone https://link-para-o-projeto
```

Entre no diretório do projeto:

```bash
cd my-project
```
Instale as dependências PHP (assumindo que Composer está instalado):

```bash
composer install
```

Copie o arquivo de ambiente e configure as variáveis de ambiente:

```bash
cp .env.example .env
```
Gere a chave de aplicativo:

```bash
php artisan key:generate
```
Execute as migrações do banco de dados para criar a estrutura inicial:

```bash
php artisan migrate
```
Inicie o servidor PHP embutido:

```bash
php artisan serve
```
Acesse o sistema em seu navegador em http://localhost:8000.

## Segurança
Este projeto utiliza práticas de segurança avançadas, incluindo proteção CSRF para prevenir ataques de falsificação de solicitação entre sites.

## Tecnologias Utilizadas
- PHP
- Laravel
- JavaScript
- PostgreSQL
- Blade (Laravel Template Engine)
- HTML/CSS
- Licença
- MIT


## Licença

[MIT](https://choosealicense.com/licenses/mit/)