```
UNIVERSIDADE FEDERAL DO TOCANTINS (UFT) _ CÂMPUS PALMAS
CURSO DE BACHARELADO EM CIÊNCIAS DA COMPUTAÇÃO
DISCIPLINA: Desenvolvimento Web Mobile _ PROJETO: Companion
DOCENTE: Marcelo Ribeiro
DISCENTES: (Ordem Alfabética)
> Sophia Ribeiro Prado - Líder
> Antonio André Barcelos Chagas - OP
> Luiz Filipe de Souza Alves - OP
> Victor Emanuel da Silva Campelo - Frontend
> Maria Herminia Okuendo - Frontend
> Rafael de Oliveira Ribeiro - Backend
> Murilo Estêvão Passos - Backend
```
# dwm-2023-2-bender
Repositório do projeto Bender 2.0 (Companion), como parte da disciplina Desenvolvimento Web Mobile, ministrada pelo professor Marcelo Ribeiro, no período 2023.2.

# Objetivos:
> Implementar respositório especial com as informações importantes para os estudantes, com o nome de Companion;
> Reforçar o aprendizado web-mobile tanto no front-end quanto no back-end ou OL;
> Gerar idéias para a comunidade acadêmica, bem como melhorias futuras na aplicação;

# Requisitos Funcionais(Iterações):

>## Iteração 1 da documentação: De 00/00/23 à 00/00/23
>- *RF01*: - Exibir tela principal - @LuFi-1227
>- *RF02*: - Exibir horários de aula - @LuFi-1227
>- *RF03*: - Exibir contatos importantes - @LuFi-1227
>- *RF04*: - Exibir estatutos - @author
>- *RF05*: - Exibir fluxogramas - @author
>- *RF06*: - Exibir calendário de eventos - @author
>- *RF07*: - Exibir Manual do Aluno - @author
>- *RF08*: - Redirecionar para o espaço do aluno - @author
>- *RF09*: - Editar informações e links do aplicativo - @author

*Substituir "author" ou "revisor" pelo seu nick do GitHub, a depender de sua função*
*### Atores:

> Administrador - Acesso à edição das informações contidas no aplicativo;
> Usuário - Acesso à todas as informações contidas no aplicativo;*

# Casos de Uso e User Stories

## RF01: Exibir tela principal

### Autor do requisito: @LuFi-1227

## Revisor: @revisor

### Atores:

> Administrador - Acesso à edição das informações contidas no aplicativo;
> Usuário - Acesso à todas as informações contidas no aplicativo;

### Descrição Sucinta:

Tela Home, que será o principal redirecionador para as outras telas funcionais do aplicativo.

### Pré-Condição:

Abrir a URL que redireciona para a tela principal do Companion;

### Fluxo Principal:

1. O ator abre o aplicativo ou entra no link da página web;
2. O ator consegue visualizar os botões de redirecionamento para as outras telas do App;

### Campos do Formulário:

| Campo | Obrigatório? | Editável? | Formato |
| --- | --- | --- | --- |
| busca | não | sim | texto |

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Rolar a página | O usuário pode rolar a página para acessar informações ainda não exibidas | scrol ou deslize|
| Busca | O usuário pode fazer uma busca no aplicativo | --- |
| Menu | O usuário é abre um menu no canto da tela | Botão |
| Horários | O usuário é redirecionado para a página de visualização dos horários | Botão |
| Contatos | O usuário é redirecionado para a página de visualização dos contatos | Botão |
| Fluxograma | O usuário é redirecionado para a página de visualização do Fluxograma de requisitos do curso | Botão |
| Links úteis | O usuário é redirecionado para a página de visualização de Links úteis | Botão |
| Calendário | O usuário é redirecionado para a página de visualização do calendário de eventos | Botão |
| Espaço do Aluno | O usuário é redirecionado para a página de espaço do aluno da UFT | Botão |
| Página de administração do site | O administrador é redirecionado para a tela de Login | Botão |

### Relatório do Usuário:

| Campo | Descrição | Formato |
| --- | --- | --- |
| --- | --- | --- |

### Fluxo Alternativo:
   
## User Stories

### Usuário:

**Story Telling**
```
Olá, me chamo Patryck e sou estudante de ciências da computação e administrador do Companion, como administrador e usuário do sistema, preciso de uma tela home elegante e sem extravagância para que eu tenha acesso ao aplicativo completo tanto para registro de informações no banco de dados quanto para visualização do material pertinente ao curso (Horários, contatos, fluxogramas e links) e ao restaurante universitário de forma centralizada, com botões bem destacados para facilitar a visualização das funcionalidades do sistema, também preciso de um Menu interativo e de uma barra de busca que facilite a interação com o banco de dados.
```
### Telas
**Tela Mobile**

![image](https://github.com/LuFi-1227/dwm-2023-2-companion/assets/129668645/6dbb4a3e-9861-4cb9-aba8-29f57f11a516)
>================================================================================
## RF02: Exibir horários de aula

### Autor: @LuFi-1227

## Revisor: @revisor

### Atores:

> Usuário - Acesso à todas as informações contidas no aplicativo;

### Descrição Sucinta:

Exibe os horários de aula aos alunos de ciência da computação;

### Pré-Condição:

Estar com o aplicativo aberto no telefone ou na aba do google e ter clicado no botão "Horários de aula";

### Fluxo Principal:

1. O ator abre o aplicativo ou entra no link da página web;
2. O ator clica no botão "Horários de aula" da tela inicial;
3. O ator consegue ter acesso aos horários de aula de acordo com o período escolhido;

### Campos do Formulário:

| Campo | Obrigatório? | Editável? | Formato |
| --- | --- | --- | --- |
| --- | --- | --- | --- |

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Rolar a página | O usuário pode rolar a página para acessar informações ainda não exibidas | scrol ou deslize|
| Escolher semestre | O ator pode escolher o semestre no qual deseja visualizar os horários de aula | --- |
| Retornar | O ator pode retornar para a página inicial do aplicativo | Botão |

### Relatório do Usuário:

| Campo | Descrição | Formato |
| --- | --- | --- |
| --- | --- | --- |

### Fluxo Alternativo:
   
## User Stories

### Usuário:

**Story Telling**
```
Olá, me chamo Brenda e sou estudante de ciências da computação, sou caloura e necessito de um aplicativo que contenha as informações de horários de aula, pois sempre me confundo com o número de informações encontrado na internet ou no instagram do curso e sempre acabo me perdendo em meio à confusão, por isso, gostaria de uma tela onde posso escolher o semestre no qual vizualizarei os horários de aula que tenha a qualidade de imagem necessária para que não haja confusão.
```
### Telas
**Tela Mobile**

![image](https://github.com/LuFi-1227/dwm-2023-2-companion/assets/129668645/b128561e-51be-4499-8801-508303956a36)
>================================================================================
## RF03: - Exibir contatos importantes - @LuFi-1227

### Autor: @LuFi-1227

## Revisor: @revisor

### Atores:

> Usuário - Acesso à todas as informações contidas no aplicativo;

### Descrição Sucinta:

Fornece os meios de contato (Telefone, email, número do escritório, horário de tira dúvidas) com os professores do curso de Ciência da Computação;

### Pré-Condição:

Estar com o aplicativo aberto no telefone ou na aba do google e ter clicado no botão "Contatos";

### Fluxo Principal:

1. O ator abre o aplicativo ou entra no link da página web;
2. O ator clica no botão "Contatos" da tela inicial;
3. O ator consegue escolher o contato que deseja acessar de acordo com a classificação da pessoa procurada e por meio do seu nome;

### Campos do Formulário:

| Campo | Obrigatório? | Editável? | Formato |
| --- | --- | --- | --- |
| --- | --- | --- | --- |

### Opções dos Usuários:

| Opção | Descrição | Atalho |
| --- | --- | --- |
| Rolar a página | O usuário pode rolar a página para acessar informações ainda não exibidas | scrol ou deslize|
| Escolher Classe | O ator pode escolher a classe à qual o contato procurado pertence | Lista |
| Escolher Contato | O ator pode escolher o contato que deseja obter de acordo com o nome do professor | Lista |
| Retornar | O ator pode retornar para a página inicial do aplicativo | Botão |

### Relatório do Usuário:

| Campo | Descrição | Formato |
| --- | --- | --- |
| --- | --- | --- |

### Fluxo Alternativo:
   
## User Stories

### Usuário:

**Story Telling**
```
Olá, me chamo Caio e sou estudante de Ciência da Computação, gostaria de uma tela organizada por meio de listas na qual eu conseguiria obter os meios de contato com os professores e pessoas envolvidas com o curso para facilitar a minha comunicação com eles, de modo que facilitaria a obtenção destes dados, pois a falta de centralização destas informações dificulta a realização das atividades por causa da falta desta comunicação, necessária para tirar dúvidas pertinentes às matérias ou regulamentos do curso.
```
### Telas
**Tela Mobile**

![image](https://github.com/LuFi-1227/dwm-2023-2-companion/assets/129668645/c6ed1daa-d656-47ca-8521-ba07347391de)

