# **CSI606-2020-02 - Remoto - Trabalho Final - Resultados**
## *Aluna(o): Princesa Leia (Luke Skywalker)*

--------------

<!-- Este documento tem como objetivo apresentar o projeto desenvolvido, considerando o que foi definido na proposta e o produto final. -->

### Resumo

  O trabalho tem como objetivo desenvolver a estrutura principal e o layout do meu Trabalho de Conclusão de Curso, que tem como objetivo a criação de uma ferramente web para a consulta de Álgebra relacional. 

  A ferramenta precisa ser simples, objetiva e com interface amigável. Ela deve apresentar além da página de consulta, uma página com a definição e limitação da ferramenta, uma página de instruções do funcionamento e uma página de tarefas propostas pelo professor.

  A ferramenta inicialmente limita o acesso e modificação de tabelas apenas aos professores cadastrados.  


### 1. Funcionalidades implementadas
  Foram criadas as seguintes páginas:

  Home: página inicial com informações textuais genericas.

  Consulta: página onde o aluno poderá fazer a consulta usando álgebra relacional e também consultar as tabelas disponíveis.

  Tarefas: página onde o aluno poderá visualizar as tarefas propostas e página onde o professor poderá incluir, editar e excluir tarefas.

  Login: página de login dos professores.

  Cadastre-se: página de cadastro de login dos professores.

  Instruções: página com instruções de uso da ferramenta.

  
### 2. Funcionalidades previstas e não implementadas
Não foi implementado o JS para que ao selecionar o botão na página Consulta o conteudo será incluido na caixa de texto.
### 3. Principais desafios e dificuldades
A maior dificuldade foi no entendimento da autenticação, para entender a funcionalidade dos divs inclui css colorido para identificar cada parte.

Também encontrei dificuldade no controller depois que inclui a autenticação, para redirecionar o home depois de realizar o login, mas com algumas tentativas encontrei uma solução, mas que deixou as views redundantes (as views home e inicio são iguais).

### 4. Instruções para instalação e execução
A execução é realizada conforme as aulas. Toda a estrutura e funcionamento foi formada baseada nas aulas ministradas.

Alterar o .env
Criar a tabela "dados" e "tarefas" conforme os migrations
Preencher a tabela "dados" utilizando o "DadoFactory"

Os usuários e tabelas podem ser cadastrados utilizando a ferramenta.


OBS: minha versão é acima da usada na disciplina, não consegui voltar. Então no factory ele pedia para colar um () na frente.. Então quando for testar na versão da disciplina precisa apagar.

