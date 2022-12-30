# Como rodar o projeto

Clonar o projeto:<br>
**git clone https://github.com/nilsonnegraodeveloper/teccompany.git && cd teccompany**

No seu servidor criar um banco de dados PostgreSQL (Ex. teccompany)<br>

Copiar o .env.example como nosso .env principal e atualizar com as suas credencias do BD:<br>
**cp .env.example .env**

Atualizar as dependências do aplicativo:<br>
**composer update**

Gerar a chave do aplicativo:<br>
**php artisan key:generate**

Rodar as migrations:<br>
**php artisan migrate**

Rodar a aplicação:<br>
**php artisan serve**

**ENTREGA DO CÓDIGO:**<br>
**O que foi implementado:**
- As atividades listadas e apontadas no detalhamento do projeto, desenvolvido um sistema CRUD clientes e produtos na tecnologia definida;
- Validação dos campos com HTML5;
- Validação no servidor (Laravel);
- Máscaras jQuery nos campos CPF e Campos Monetários;
- Tecnologia:  PHP + Framework Laravel;
- Entrega funcional: gerado um entregável funcional e facilmente testável (vide instruções no fim deste documento);
- Código-fonte: foi realizado o commit no repositório GIT indicado e posteriormente realizado 

**O que não foi implementado:**<br>
Devido ao prazo para a entrega do teste ser muito curto, não foi implementado a função para poder incluir mais de um produto em uma fatura, a qual seria feita da seguinte forma: utilizaria um plugin jQuery (chosen ou multiselect) para selecionar um ou mais produtos, mandaria para o controller como array (produto[]) e salvaria no banco de dados no formato json.<br>
O Modelagem do Banco também ficou bastante enxuta para conseguir entregar no prazo, num cenário real faria outra modelagem.<br>
Obs.: Também falta ajustar o alert de confirmação ao tentar excluir um registro, pois o mesmo não está funcionando.<br>

**TECH STACK E DEPENDÊNCIAS:**<br>
- PHP 7.4.3;
- PostgreSQL 12.10 (Ubuntu 12.10-0ubuntu0.20.04.1)
- Apache/2.4.41 (Ubuntu);
- VSCodium 1.64.2;
- Composer 2.1.3;
- Laravel 8.83.9;
- Navegadores: Mozilla Firefox Versão 99.0 (64 bits) for Ubuntu canonical 1.0; 
- Google Chrome Versão 101.0.4951.41 (Versão oficial) 64 bits; 
- Template Bootstrap Pixel Admin; 
- Bootstrap 4; 
- HTML5; 
- CSS; 
- JavaScript; 
- Jquery - Plugins: DataTables e MaskMoney;<br>

# Regras de negócio:<br>
- Criar  um CRUD de CLIENTES e PRODUTOS,  então  criar  um  relacionamento  entre  cliente  e produtos.   
- Um   mesmo   produto   poderá   estar   relacionado   a   vários   clientes,   pois   são recorrentes(similar a contratação de serviço), não contempla estoque.
- As  faturas  serão  geradas  por  clientes,  ou  seja,  cada  cliente  poderá  ter  várias  faturas,  porém cada fatura será  exclusivamente dele.  
- O valor da fatura será  calculado conforme o valor dos produtos vinculados ao cliente, ao gerar a fatura.

# Sistema:<br>
**O sistema deverá ter:**
- Uma tela de cadastro, edição, exclusão de clientes
- Um grid de clientes, com filtro pelo nome (Exclusão pode estar no grid)
- Uma tela de cadastro, edição, exclusão de produtos
- Um grid de produtos, com filtro por produto (Exclusão pode estar no grid)
- Na tela de cadastro do cliente deverá ter uma tela para listar, e poder vincular/desvincular seus produtos (Pode ser Aba, link pra outra página, sessão na mesma página, frame, etc)
- Na tela de cadastro do cliente deverá ter uma tela para listar, e gerar/excluir suas faturas(Pode ser Aba, link pra outra página, sessão na mesma página, frame, etc)Requisitos técnicos:
- Utilizar PHP 7.x
- Banco de dados PostgreSQL
- Versionar o sistema com GIT
- Projeto orientado a objeto
- Fazer o projeto com Laravel
- Para o Frontend, utilizar Bootstrap
- Para validar os campos no Frontend, utlizar JQuery
