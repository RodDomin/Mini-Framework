# Mini-Framework

O Mini-Framework é um software livre: você pode redistribuí-lo e / ou modificar sob os termos da Licença Pública Geral GNU, conforme publicada pela Free Software Foundation, versão 3 da Licença, ou qualquer versão posterior.
Este Mini-Framework é distribuído na esperança de que seja útil, mas SEM QUALQUER GARANTIA; sem mesmo a garantia implícita de COMERCIABILIDADE OU ADEQUAÇÃO A UM DETERMINADO FIM. Veja a GNU General Public License para mais detalhes.
Para visualizar essa Licença acesse: [GNU General Public License](https://www.gnu.org/licenses/ "GNU General Public License").

## Considerações
1. Visando atingir o maior público possível, disponibilizamos o código em *ingles*;
2. Para estruturação do Mini-Framework a documentação estará disponível conforme o desenvolvimento;

### Visão geral
#### Configuração inicial - `Mini-Framework/App/Config/cfg.php`  
Declara as constantes para acesso ao banco de dados.  
``` php
    define("BD_HOST","");
    define("BD_NAME","");
    define("BD_LOGIN","");
    define("BD_PASS","");
    define("TBL_ADM","");
    define("TBL_MSG","");
```
| Constante | Definição |
| --- | --- |
| BD_HOST | Defina aqui o host que será acessado para conexão com o banco de dados. Ex.: `localhost` |
| BD_NAME | Defina aqui o nome do banco de dados a ser acessado. Ex.: `mini_framework` |
| BD_LOGIN | Defina aqui o usuário para conexão com o banco de dados. Ex.: `root` |
| BD_PASS | Defina aqui a senha para conexão com o banco de dados. Ex.: `12345678` |  
| BD_ADM | Defina aqui o nome da tabela que tera os login's de acesso. Ex.: `adm` |  
| BD_MSG | Defina aqui o nome da tabela que registrará as mensagens. Ex.: `registro` |  
|

#### Página Inicial - `Mini-Framework/index.php`  
A página index implementada, apresenta um forma simples com um Jumbotrom apresentando nosso "Olá, mundo!".  
No botão, temos um link para esta documentação.  