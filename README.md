# 📺 KleTretenimento 📺
Projeto desenvolvido para o Trainee da [Code Jr](https://codejr.com.br/) que consiste em um blog sobre entretenimentos!
- Desenvolvimento:
  - Front-end: HTML, CSS, JavaScript
  - Back-end: PHP e SQL


## Projeto Trainee, Code Jr, Grupo X, 2022.2 

Desenvolvedores:
- Arthur riccioppo oliveira pereira
- Lucas de souza carmo
- Hugo Nogueira Carvalho
- Davi Kirchmaier Paiva


Scrum Master:

- [Kleiton Ewerton de Oliveira](https://github.com/KleitonEwerton)


## Tutorial de uso do repositório

### Primeira utilização

- Entre na pasta onde irá guardar o projeto: `cd /caminho/para/a/pasta`
- Clone o repositório: `git clone https://github.com/KleitonEwerton/kletretenimento.git`
- Entre na pasta criada pelo comando clone: ``cd kletretenimento``
- Crie sua branch usando como o padrão o nome da feature que você irá desenvolver
- Exemplo de criação de branch de uma view do painel administrativo
  - Crie a branch da funcionalidade a ser implementada: `git checkout -b view-painel-adm`
  - Envie a sua branch para o repositório remoto do github: `git push origin view-painel-adm`


### Rotina

- Cheque em qual branch está e quais alterações foram adicionadas: git status
- Certifique-se de estar na sua branch usando: `git status`
  - Se não estiver na sua branch, vole para ela: `git checkout suabranch`
- Adicione todas as alterações feitas na sua branch: `git add .`
  - Se achar necessário também é possível adicionar as modificações separadamente: `git add caminho/do/arquivo`
- Dê um commit com uma mensagem especificando as alterações realizadas: `git commit -m "mensagem especificando o que foi feito"`
- Envie o commit feito para sua branch no GitHub: `git push origin suabranch`


### Ao final da sprint, estando tudo certo, faça o merge

- Espere a confirmação do seu SCRUM para fazer o Merge
- Depois de solicitado pelo Scrum Master, faça o merge entre sua branch e a main:
- Certifique-se de estar na sua branch usando: `git status`
  - Se não estiver na sua branch, vole para ela: `git checkout suabranch`
- Mescle o conteúdo da main na sua branch: `git merge main`
- Confirme o merge enviando para o servidor do GitHub: `git push origin suabranch`
- Vá para a main: `git checkout main`
- Atualize a main: `git pull`
- Faça o merge das alterações de sua branch com a main: `git merge suabranch`
- Confirme o merge enviando para o servidor do GitHub: `git push origin main`

## Comandos projeto em PHP

### Como executar o projeto inicial

\* É necessário ter o _PHP 8.0+_

1. Abra o Terminal na Pasta do Projeto;

2. Instale as dependências necessárias: `composer install`;

3. Atualize as dependências: `composer update`;

4. Rode o comando composer `dump-autoload`;

5. Crie um banco de dados `sql` com o nome de `sua preferencia e coloque o nome dele dentro do arquivo start_application que está dentro do diretorio bootstrap`;

6. Rode as migrations com o comando `php bootstrap run_all_migrations.php`;

### Comandos atualmente presentes nesse repositorio

1. `php codejr make:migration`: Comando responsavel por criar uma migration. Seus parametros são `1° o nome da tabela`, como por exemplo, "users", `2°: --m` , responsavel por criar uma Model junto a migration. A migration serve para auxiliar os desenvolvedores a manterem o controle das versões do banco de dados, já a model serve para representar o elemento de uma determinada tabela. Rode o comando composer `composer dump-autoload` para que o sistema identifique a nova migration criada.

2. `php codejr run_migrations`: Comando responsavel por rodar todas as migrations dentro da pasta database\migrations. Esse comando vai fazer com que suas migrations passem a existir no banco de dados.

3. `php codejr down_all_migrations`: Comando responsavel por desfazer todas as migrations dentro da pasta database\migrations. Esse comando vai fazer com que suas migrations passem a não mais existir no banco de dados.

4. `php codejr make:controller`: Comando responsavel por criar um controller. Seu parametro é o `nome do controller`, a padronização para nome de controllers é a mesma padronização para nome de classes, então como exemplo, um controller de usuario tera o nome de `UsuarioController`, `2°: --resource`, responsavel por criar um controller com todos os metodos basícos de um controller. O controller serve como intermediario entre o usuario e o banco de dados, podendo chamar metodos que irão tratar dados ou redirecionando o usuario. Rode o comando composer `dump-autoload` para que o sistema identifique o novo controller criado.

5. `php codejr serv`: Comando responsavel por iniciar o servidor do projeto. Seu parametro é --port, o qual torna possivel escolher a porta que o servidor irá executar

## Classe abstrata Controller

Essa class extendida por todos os controllers tem como objetivo `iniciar o eloquent e a session` do php em todos os controller.
