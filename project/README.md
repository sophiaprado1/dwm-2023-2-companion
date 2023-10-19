# MANUAL DO PROGRAMADOR PARA O COMPANION
## Índice
- [Índice](#índice)
- [Pré-requisitos desejados:](#pré-requisitos-desejados)
  - [Git ou GitBash:](#git-ou-gitbash)
  - [XAMPP:](#xampp)
- [Passo a Passo:](#passo-a-passo)
  - [1° passo:](#1-passo)
  - [2° passo:](#2-passo)
  - [3° passo:](#3-passo)
  - [4° passo:](#4-passo)
- [Dicas que podem ajudar:](#dicas-que-podem-ajudar)
  - [ctrl + f5:](#ctrl--f5)
## Pré-requisitos desejados:

### Git ou GitBash:
Para dar o git clone do repositório, você precisará ter o [gitbash](https://git-scm.com/downloads) instalado na sua máquina.

Link para instalar o Git:
[link](https://git-scm.com/downloads)

Tutorial para instalar o Git (Créditos aos criadores):
[windows](https://www.youtube.com/watch?v=s2ptmpslhV4)
[linux](https://www.youtube.com/watch?v=YKjPi7Td3ZQ)

### XAMPP:
Para o funcionamento do projeto na sua máquina, você deve ter o [XAMPP](https://www.apachefriends.org/pt_br/download.html) ou outra ferramenta de host para o php instalado no seu computador, não é obrigatório o uso do XAMPP, mas este projeto recomenda a utilização do mesmo ao fazer o clone deste repositório.

Link para instalar o XAMPP:
[link](https://www.apachefriends.org/pt_br/download.html)

Tutorial para instalar o XAMPP (Créditos aos criadores):
[Windows](https://pt.wikihow.com/Instalar-o-XAMPP-para-Windows)
[Linux](https://pt.wikihow.com/Instalar-o-XAMPP-no-Linux)

## Passo a Passo:
### 1° passo:
Com o XAMPP instalado e aberto, aperte em start nos módulos de Apache e de MySql

![image](https://github.com/LuFi-1227/dwm-2023-2-companion/assets/129668645/8da606af-c895-4b3d-80d3-896ad7495aad)

### 2° passo:
Agora, vá no seu gerenciador de arquivos, procure pelo disco no qual o xampp está instalado, e entre no seguinte endereço (Se alguma pasta do endereço estiver faltando no seu dispositivo, crie a pasta que falta):

`C:\xampp\htdocs\PHP`

Após entrar neste endereço, pelo terminal ou git-bash, digite o comando cd seguido do endereçamento das suas pastas:

`cd [C:\xampp\htdocs\PHP]`

Agora, com o seu terminal aberto na pasta, digite o comando:

`git clone https://github.com/LuFi-1227/dwm-2023-2-companion.git`

Quando este comando terminar, você terá o projeto em seu disco local.

### 3° passo:
No XAMPP, clique em admin do módulo de mysql, conforme a figura.

![image](https://github.com/LuFi-1227/dwm-2023-2-companion/assets/129668645/fcbacced-f9ed-4cdf-8f4a-c7b2ea6cb500)

Na aba que abrir, aperte no botão SQL, conforme a figura.

![image](https://github.com/LuFi-1227/dwm-2023-2-companion/assets/129668645/af35ddd3-71d0-41e0-9138-cbbb8cf73ff5)

Com a aba SQL aberta, no seu gerenciador de arquivos onde você fez o clone do projeto, vá até o endereço:

`C:\xampp\htdocs\PHP\dwm-2023-2-companion\project\model`

E entre no arquivo `banco de dados.sql`;

Com o arquivo aberto, copie todo o seu conteúdo e cole na aba do google onde você abriu o admin do mySql, conforme a figura:

![image](https://github.com/LuFi-1227/dwm-2023-2-companion/assets/129668645/3bb54d98-a4cf-4351-bdbe-b5e0f6545c17)

Agora, role a página e clique em executar, conforme a figura:

![image](https://github.com/LuFi-1227/dwm-2023-2-companion/assets/129668645/a6cbb296-bfbd-4dda-9a5c-3f5246c5d197)

### 4° passo:

Se tudo houver ocorrido bem até então, abra o localhost do XAMPP na pasta php com um link como este:

`http://localhost/PHP/`

Com este link aberto em uma aba aperte na pasta `dwm-2023-2-companion`, e você terá um link como este:

`http://localhost/PHP/dwm-2023-2-companion/`

Agora, aperte na pasta `project` e o site será aberto, te deixando com um link como este:

`http://localhost/PHP/dwm-2023-2-companion/project/view/Home.php`

O projeto agora deve estar rodando no seu dispositivo, todas as alterações feitas nos arquivos serão feitas no seu projeto local também.

## Dicas que podem ajudar:

### ctrl + f5:
Se você fizer alguma alteração em alguma página e a alteração não aparecer ao dar f5, faça o comando ctrl + f5 para limpar o pré-carregamento do google e a alteração fazer efeito, se não fizer, uma revisão de código é recomendada.
