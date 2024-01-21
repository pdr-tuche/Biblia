# Biblia

📗 api rest em php utilizando laravel a fins de estudo

Este projeto foi criado para me ajudar a aprender o framework Laravel.

> Nos códigos deste projeto voce irá encontrar muita anotação em forma de comentarios.

<details>
    <summary>
        <h2>Aprendizados 🤓<h2>
    </summary>
    <p>Inicialmente, aprendi a criar uma API REST entendendo os conceitos dos padrões de projetos presentes no Laravel, consequentemente em paralelo, aprendi a utilizar algumas funções de CLI que o Laravel disponibiliza para deixar o desenvolvimento mais agil.</p>
    <p>Após criação da API, dei uma pesquisada sobre as seeds, cujo propósito é popular o banco de dados. Entendi como criar e utiliza-las para fornecer dados iniciais, facilitando o desenvolvimento e os testes do sistema.</p>
    <p>A implementação de autenticação de usuários e a proteção de rotas foram desafios que enfrentei com determinação. Ainda estou um pouco confuso em relação a isso principalmente por que existem varios tipos de autenticação e gostaria de entender mais como eles funcionam. Neste projeto apliquei autenticação com token jwt.</p>
    <p>Os testes de API, por sua vez, se revelaram essenciais para assegurar a integridade do projeto. Aprendi a escrever e executar testes, garantindo que a aplicação funcionasse conforme o esperado em diversas situações.</p>
    <p>Um desafio notável foi compreender a fundo o funcionamento do Laravel. Para superar essa barreira, recorri à documentação do framework, mas minha compreensão se aprofundou ainda mais ao analisar códigos de outros desenvolvedores no GitHub, StackOverflow e, principalmente, ao assistir a tutoriais no YouTube. Essa abordagem prática foi fundamental para assimilar os conceitos e aplicá-los de maneira eficaz no meu projeto.</p>
    <p>Em resumo, o desenvolvimento do projeto não apenas ampliou meu conhecimento técnico, mas também aprimorou minhas habilidades de pesquisa e resolução de problemas, destacando a importância da abordagem prática na assimilação de novos conhecimentos.</p>
</details>

<details>
    <summary>
        <h2>Rodar Localmente 💻</h2>
    </summary>

### Pré-requisitos:

1. [PHP 8.2](https://www.php.net/downloads)
2. [Composer](https://getcomposer.org/)

### passos:

1. clonar repositório:

```bash
git clone https://github.com/pdr-tuche/Biblia.git
```

2. dentro da pasta do repositório, instale as depedencias

```bash
composer install
```

3. copie o conteúdo do arquivo `.env.example` em um arquivo `.env`

4. configure o arquivo `.env` com as informações de conexao do seu banco de dados. (linha 11 a 16)

5. crie uma nova chave para a aplicação

```bash
php artisan key:generate
```

6. realize as migrações para o banco de dados

```bash
php artisan migrate
```

-   se quiser popular seu banco de dados execute:

```bash
php artisan migrate:fresh --seed
```

7. rodar servidor

```bash
php artisan serve
```

</details>
<details>
    <summary>
        <h2>Documentação da API 📄</h2>
    </summary>

A documentação foi criada no postman.
Voce pode conferir no [postman web](https://documenter.getpostman.com/view/22309579/2s9YsQ9AQ9), ou você pode importar o arquivo `Biblia.postman_collection.json` (esta na pasta `.postman_export_file`) no postman da sua maquina para ter acesso a documentação e as requisições.

### demonstração:

![demonstração](.github/docs/postman_docs.gif)

</details>

<details>
    <summary>
        <h2>Comandos Úteis (CLI) 👾</h2>
    </summary>

### iniciar servidor:

```bash
php artisan serve
```

### criar migracoes:

```bash
php artisan make:model nome_do_modelo --migration
```

### criar controller:

```bash
php artisan make:controller NomeController --api
```

### listar rotas

```bash
php artisan route:list
```

### criar seed

```bash
php artisan make:seeder
```

</details>
<details>
    <summary>
        <h2>Rodando os testes 🧪</h2>
    </summary>

Para rodar os testes, rode o seguinte comando na pasta raiz

### todos os testes

```bash
  php artisan test
```

### apenas testes do endpoint de Testamento

```bash
  php artisan test tests/Feature/TestamentoRoutesTest.php
```

### apenas testes do endpoint de Livro

```bash
  php artisan test tests/Feature/LivroRoutesTest.php
```

### apenas testes do endpoint de Versiculo

```bash
  php artisan test tests/Feature/VersiculoRoutesTest.php
```

</details>

# Coisas que me ajudaram

1. 🎥 Desenvolvendo api rest laravel [Clean Code](https://youtube.com/playlist?list=PLJPZ7SmO9-qMWPnNrYOiqm9xyYDolwmoJ&si=CFOHNVwu31z35_FI)
2. 🎥 Desenvolvendo api rest laravel [Code with Dary](https://youtube.com/playlist?list=PLFHz2csJcgk8kvwLWESQcfk1eAivQOjdN&si=0xG3ouB8zkAjyuCd)
3. 🎥 Conteúdo de testes do [Code Experts](https://youtube.com/playlist?list=PLswa9HeoJUq9wgbiNvXgueCetJepA6ekw&si=xVg8TW8j4_8wLXZ5)

4. 📃 para criação das seeds utilizei a API d[a biblia digital](https://www.abibliadigital.com.br/)
