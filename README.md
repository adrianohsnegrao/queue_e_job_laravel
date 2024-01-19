# Projeto Laravel - Sistema de Mensagens

Este projeto Laravel inclui funcionalidades para manipulação de mensagens, incluindo a geração de dados fictícios e um job para deletar mensagens antigas.

## Funcionalidades

- **Model `Mensagem`**: Representa uma mensagem no sistema.
- **Geração de Dados Fictícios**: Cria mensagens aleatórias com datas de criação variando de 01/01/2024 até a data atual.
- **Job `DeleteOldMessages`**: Um job programável para deletar mensagens antigas.
- **Rota `GET /mensagens`**: Uma rota que dispara o job `DeleteOldMessages`.

## Configuração Inicial

1. **Clonar o Repositório**: Clone o projeto para a sua máquina local.

2. **Instalar Dependências**: Execute `composer install` para instalar as dependências do projeto.

3. **Configuração do Ambiente**: Configure o arquivo `.env` com as informações do seu banco de dados.

4. **Executar Migrações**: Execute `php artisan migrate` para criar as tabelas no banco de dados.

## Geração de Dados Fictícios

Para gerar dados fictícios:

1. **Defina os Dados da Factory**: Configure `database/factories/MensagemFactory.php` para definir os dados aleatórios das mensagens.
2. **Execute o comando**: ``php artisan db:seed --class=MensagemSeeder``

## Job para Deletar Mensagens Antigas

1. **Disparar o Job com a Rota**: Acesse a rota `GET /mensagens` para disparar o job, isso ira listar as mensagens já excluídas pelo job.

## Agendamento de Tarefas

Para sistemas Unix, configure o cron para executar o comando `schedule:run`. Para Windows, configure uma tarefa no Agendador de Tarefas para executar o mesmo comando.

## Observações

- Certifique-se de ter registros na tabela de usuários para associar às mensagens.
- Essas instruções são para ambiente de desenvolvimento. Para produção, certifique-se de ajustar as configurações conforme necessário.

