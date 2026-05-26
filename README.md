# 🚀 Laravel Blade Posts Manager

Um ecossistema de administração de postagens robusto e dinâmico arquitetado com Laravel, Blade e Tailwind CSS. O sistema foi concebido com foco estrito em boas práticas de design MVC, proporcionando uma experiência de uso fluida na criação, leitura, atualização e exclusão de artigos (CRUD), além de uma lógica inteligente para filtragem de categorias e gerenciamento avançado de arquivos de mídia.

---

## 🛠️ Tecnologias Utilizadas

* **Backend:** Laravel 11 (PHP 8.2+)
* **Frontend:** Blade Templates & Tailwind CSS
* **Banco de Dados:** SQLite / MySQL
* **Autenticação & UI:** Componentes nativos do ecossistema Laravel Breeze

---

## ✨ Funcionalidades Principais

* **CRUD Completo de Posts:** Criação, listagem, edição e exclusão de publicações em tempo real.
* **Upload Inteligente de Imagens:** Suporte a arquivos de mídia com sistema de *preview* dinâmico.
* **Renderização de Mídia Inteligente:** Algoritmo CSS/Tailwind adaptado para exibir imagens horizontais ou verticais em proporção real (`object-contain`), eliminando cortes indesejados ou distorções no layout.
* **Gerenciamento de Disco Rigoroso:** O controlador remove fisicamente imagens antigas do diretório `Storage` ao atualizar ou deletar um post, evitando o acúmulo de arquivos órfãos no servidor.

---

## 🚀 Guia de Instalação e Execução (Ambiente Windows)

Siga a sequência de comandos abaixo no terminal do seu computador para clonar, configurar e colocar a aplicação para rodar imediatamente.

### 📋 Pré-requisitos
Antes de começar, certifique-se de que tem instalado na sua máquina:
* **Git** (Para clonar o projeto)
* **PHP (>= 8.2)** e **Composer**
* **Node.js & NPM**

### 💻 Passo a Passo Sequencial no Terminal

Execute os comandos abaixo, um por um, dentro do seu terminal de preferência:

```bash
# 1. Clone o repositório para a sua máquina
git clone [https://github.com/Thur0808/auth-app](https://github.com/Thur0808/auth-app)

# 2. Acesse a pasta do projeto que foi criada
cd auth-app

# 3. Instale as dependências de pacotes do PHP/Laravel
composer install

# 4. Instale as dependências do Frontend (Tailwind CSS, Vite, etc.)
npm install

# 5. Crie o arquivo de configuração do ambiente (.env)
copy .env.example .env

# 6. Gere a chave única de segurança do Laravel
php artisan key:generate

# 7. Crie o arquivo de banco de dados SQLite 100% vazio e compatível
copy NUL database\database.sqlite

# 8. Rode as migrations e adicione as categorias padrão (Seeders)
php artisan migrate --seed

# 9. Crie o link do Storage (Passo obrigatório para que as imagens fiquem visíveis na tela)
php artisan storage:link

# 10. Inicialize o compilador do Tailwind CSS (Deixe este terminal aberto rodando)
npm run dev

# 11. Ligue o servidor local do PHP/Laravel
php artisan serve