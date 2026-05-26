🚀 Gerenciador de Posts — Laravel & Blade
Uma plataforma dinâmica e robusta para gerenciamento de conteúdos, desenvolvida com o ecossistema Laravel, Blade e Tailwind CSS. O foco principal deste projeto foi aplicar os padrões da arquitetura MVC para entregar um sistema fluido de CRUD (criação, leitura, atualização e exclusão), combinado com filtros de busca inteligentes e manipulação avançada de arquivos de mídia.

🛠️ Conjunto de Tecnologias
Ambiente Backend: PHP 8.2+ utilizando o framework Laravel 11

Camada Frontend: Templates Blade integrados ao Tailwind CSS

Persistência de Dados: Compatibilidade com SQLite e MySQL

Segurança & UI: Fluxos de autenticação e componentes visuais do Laravel Breeze

✨ Recursos Principais
Controle Total de Conteúdo (CRUD): Publique, visualize, altere e remova postagens instantaneamente.

Busca Refinada por Categorias: Mecanismo de filtragem integrado diretamente na página principal (index), atualizando os resultados de forma ágil por meio de requisições GET.

Upload com Pré-visualização: Suporte para envio de mídias com sistema de preview dinâmico antes da publicação.

Exibição Inteligente de Mídia: Layout adaptável via Tailwind (object-contain) que respeita as proporções originais (imagens verticais ou horizontais), eliminando cortes indesejados ou distorções.

Limpeza Automatizada do Storage: O controlador remove fisicamente os arquivos antigos do servidor sempre que um post é atualizado ou excluído, evitando o acúmulo de arquivos órfãos.

🚀 Como Executar o Projeto (Ambiente Windows)
Siga o roteiro de comandos abaixo para clonar a aplicação, configurar as dependências e colocá-la em funcionamento na sua máquina local.

📋 Requisitos Prévios
Antes de iniciar, certifique-se de ter instalado em seu sistema:

Git (Para gerenciar o código-fonte)

PHP (>= 8.2) junto com o Composer

Node.js e NPM

💻 Execução Passo a Passo no Terminal
Digite os seguintes comandos em ordem no seu prompt de comando ou terminal de preferência:

Bash
# 1. Faça o download do repositório para a sua máquina
git clone https://github.com/Thur0808/auth-app

# 2. Acesse o diretório do projeto criado
cd auth-app

# 3. Baixe os pacotes e dependências do PHP/Laravel
composer install

# 4. Instale as dependências de front-end (Vite, Tailwind CSS, etc.)
npm install

# 5. Crie o arquivo de configuração local (.env) baseado no modelo
copy .env.example .env

# 6. Gere a chave de segurança única da aplicação
php artisan key:generate

# 7. Estruture um arquivo de banco de dados SQLite limpo
copy NUL database\database.sqlite

# 8. Processe as migrações e alimente o banco com as categorias iniciais (Seeders)
php artisan migrate --seed

# 9. Vincule a pasta de armazenamento (Essencial para renderizar as imagens na tela)
php artisan storage:link

# 10. Inicie o compilador do Tailwind CSS (Deixe este terminal ativo)
npm run dev

# 11. Em outro terminal, inicialize o servidor local do Laravel
php artisan serve