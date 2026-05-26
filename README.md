<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/actions/workflows/tests.yml/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

---

# 📰 Sistema de Posts e Categorias

Este é um sistema prático de gerenciamento de posts organizados por categorias. O projeto conta com autenticação completa de usuários, controle de categorias e criação/edição de posts com upload e tratamento dinâmico de imagens.

## 🚀 Funcionalidades da Aplicação

* **Autenticação de Usuários:** Cadastro, login e controle de perfil seguro (via Laravel Breeze).
* **Gestão de Categorias:** CRUD completo para organizar as publicações de forma lógica.
* **Gestão de Posts:** CRUD completo contendo:
    * Vínculo dinâmico com categorias.
    * Upload inteligente de imagens no disco local.
    * Preview de imagem em tempo real na criação e edição do post.
    * Tratamento de exclusão: limpeza automática de arquivos antigos do servidor na edição ou exclusão do post para não acumular lixo no *storage*.

## 🛠️ Tecnologias Utilizadas

* **Linguagem:** PHP 8.2+
* **Framework:** Laravel
* **Estilização:** Tailwind CSS
* **Banco de Dados:** MySQL / PostgreSQL / SQLite

## 📦 Como Instalar e Rodar o Projeto Localmente

Siga o passo a passo abaixo para executar o projeto na sua máquina:

### 1. Clonar o repositório
```bash
git clone [https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git](https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git)
cd SEU-REPOSITORIO

### 2. Instalar dependências (Back-end e Front-end)
```bash
composer install
npm install

### 3. Configurar o ambiente (.env)
```bash
cp .env.example .env
Abra o arquivo .env e configure a conexão com o seu banco de dados local (ex: DB_DATABASE=nome_do_seu_banco).

### 4. Gerar a chave da aplicação e rodar as Migrations
```bash
php artisan key:generate
php artisan migrate

### 5.Criar o link simbólico do Storage (Essencial para imagens)
```bash
php artisan key:generate
php artisan migrate

### 6. Iniciar os servidores Em um terminal, inicie o servidor do Laravel:
```bash
php artisan serve
Em outro terminal, compile os assets do Tailwind:

npm run dev
Acesse no navegador: http://127.0.0.1:8000

Sobre o Laravel
Laravel é um framework para aplicações web com sintaxe expressiva e elegante. Acreditamos que o desenvolvimento deve ser uma experiência prazerosa e criativa para ser verdadeiramente gratificante. O Laravel busca simplificar o desenvolvimento, facilitando tarefas comuns na maioria dos projetos web, como:

Motor de roteamento simples e rápido.

Contêiner poderoso para injeção de dependências.

Múltiplos back-ends parasessãoecachearmazenar.

agnóstico em relação ao banco de dadosmigrações de esquema.

Processamento robusto de tarefas em segundo plano.

Transmissão de eventos em tempo real.

O Laravel é acessível, poderoso e fornece as ferramentas necessárias para aplicações robustas e de grande porte.

Aprendendo Laravel
O Laravel possui a documentação mais extensa e completa.documentaçãoe uma biblioteca de tutoriais em vídeo de todos os frameworks modernos de aplicações web, facilitando o início com o framework. Você também pode conferirAprenda Laravel, onde você será guiado na construção de uma aplicação Laravel moderna.  

Se você não estiver com vontade de ler,LaracastsPode ajudar. O Laracasts contém milhares de tutoriais em vídeo sobre diversos tópicos, incluindo Laravel, PHP moderno, testes unitários e JavaScript.  

Patrocinadores do Laravel
Gostaríamos de agradecer aos seguintes patrocinadores por financiarem o desenvolvimento do Laravel. Se você estiver interessado em se tornar um patrocinador, visite o site [inserir link aqui].Programa de Parceiros Laravel.  

Contribuindo
Obrigado por considerar contribuir para o framework Laravel! O guia de contribuição pode ser encontrado noDocumentação do Laravel.

Código de Conduta
Para garantir que a comunidade Laravel seja acolhedora para todos, revise e siga as diretrizes.Código de Conduta.

Vulnerabilidades de segurança
Caso encontre alguma vulnerabilidade de segurança no Laravel, envie um e-mail para Taylor Otwell através do endereço taylor@laravel.com. Todas as vulnerabilidades de segurança serão prontamente corrigidas.

Licença
  
O framework Laravel é um software de código aberto licenciado sob a licença Creative Commons Attribution-NonCommercial ...Output-College.Licença MIT.

