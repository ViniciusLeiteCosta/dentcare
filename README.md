# Dent Care

<p align="center">
  <img src="https://github.com/user-attachments/assets/5b2a37e7-83f0-42eb-ae66-e150e5a6475f" width="400" alt="Dent Care Logo">
</p>

## Status do Projeto

Em progresso...

## Sobre o Dent Care

O **Dent Care** é um projeto desenvolvido individualmente como parte do **Desafio Connecta Tecnologia**. A proposta é criar um site responsivo voltado para serviços odontológicos, conectando pacientes a uma rede de dentistas qualificados. O projeto está sendo construído utilizando **Laravel** e **PHP**, sendo essa minha primeira experiência estruturando um sistema completo com essas tecnologias.

## Objetivo do Projeto

O **Dent Care** tem como objetivo facilitar o acesso a profissionais da odontologia por meio de um sistema intuitivo e eficiente. Com ele, os usuários podem:

- Pesquisar e agendar consultas com dentistas cadastrados.
- Acessar informações detalhadas sobre serviços odontológicos.
- Obter recomendações personalizadas com base nas suas necessidades.
- Navegar em um site responsivo, otimizado para diferentes dispositivos.

## Tecnologias Utilizadas

- **Laravel**: Estrutura principal do projeto, garantindo segurança e eficiência.
- **PHP**: Linguagem backend utilizada para construir a lógica da aplicação.
- **Blade**: Motor de templates do Laravel para criar interfaces dinâmicas.
- **Bootstrap**: Para estilização responsiva e moderna.

## Como Rodar o Projeto

Para rodar o projeto localmente no Windows, siga os passos.
Obs: Se estiver no Linux, leia os passos ao final deste Readme!

```bash
# 1. Clone o repositório
git clone https://github.com/ViniciusLeiteCosta/dentcare.git

# 2. Navegue até o diretório do projeto
cd <diretorio_do_projeto>

# 3. Instale as dependências do PHP
composer install

# 4. Instale as dependências do front-end
npm install

# 5. Crie o '.env' com as informações que o servidor precisa

    Obs: para que tudo funcione corretamente você precisa gerar um arquivo '.env',
    este arquivo é importante para que o projeto funcione.

    Se o '.env' não for configurado corretamente, o Laravel pode não funcionar,
    especialmente se faltar a chave de aplicação (APP_KEY).
    
    Como o '.env' é um arquivo sensível e não pode ser commitado,
    serão necessários alguns passos:
    
    1) Copie o arquivo .env.example para um novo arquivo '.env':

    cp .env.example .env <-- Necessário para a aplicação funcionar.

    2) Gere a chave de aplicação no Laravel:
    php artisan key:generate

# 6. Em outro terminal, inicie o front-end com live reload
npm run dev

# 7. Entre no link do servidor gerado pelo comando:
php artisan serve

Deve aparecer algo semelhante a isto no seu terminal:

--------------------------------------------------------------------------------------------------------
C:\dentcare> php artisan serve

   INFO  Server running on [http://127.0.0.1:8000]. <-- Abra o link no navegador 

  Press Ctrl+C to stop the server
--------------------------------------------------------------------------------------------------------

🐧 Como Rodar o Projeto no LINUX 🐧

1) Instale as dependências do sistema

sudo apt update
sudo apt install php php-cli php-mbstring php-xml php-bcmath unzip curl

    Caso não possua o Composer, será necessário instalar:

        curl -sS https://getcomposer.org/installer | php
        sudo mv composer.phar /usr/local/bin/composer

2) Clone o repositório

git clone

3) Instale as dependências do Composer

    Se já houver 'composer.lock', primeira remova ele pois pode gerar incompatibilidades,
    e além disso, instale os pacotes:
    
    rm -rf vendor/ composer.lock
    composer install --ignore-platform-reqs

4) Configure a aplicação gerando o '.env'

cp .env.example .env

5) Gere a chave da aplicação

php artisan key:generate

    Se necessário, também corrija problemas de permissões e rode
    migrações e seeders:

    chmod -R 777 storage bootstrap/cache
    php artisan migrate --seed

6) Inicie o servidor local

php artisan serve

Deve aparecer algo semelhante a isto no seu terminal:

--------------------------------------------------------------------------------------------------------
C:\dentcare> php artisan serve

   INFO  Server running on [http://127.0.0.1:8000]. <-- Abra o link no navegador 

  Press Ctrl+C to stop the server
--------------------------------------------------------------------------------------------------------

Notas adicionais:

Caso o 'npm run dev' não funcione por algum motivo, você pode tentar rodar 'npm run build' para compilar os assets.

Certifique-se de que tem o Node.js e o npm corretamente instalados.

Se a pessoa não tiver o PHP, Composer ou Node.js instalados corretamente, o processo de instalação pode falhar.
