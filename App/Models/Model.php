<?php

namespace App\Models;

use PDO;

class Model{

    
    public function Form(){
        
        require_once "App/Config/cfg.php";

        //Definição de conexão PDO
        $pdo = new PDO("mysql:host=".BD_HOST.";dbname=".BD_NAME.",".BD_LOGIN.",".BD_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");

        //Informações passadas pelo usuário
        $nome     = $_POST['nome'];
        $email    = $_POST['email'];
        $mensagem = $_POST['Mensagem'];

        //Verificação de validade
        if(!empty($nome) && !empty($email) && !empty($mensagem)){

            $inserir  = "INSERT INTO ".TBL_MSG."(Nome,Email,Mensagem) VALUES";
            $inserir .= "('$nome','$email','$mensagem');";

            $_SESSION['M'] = $pdo->query($inserir) ? '<strong class="bg-success rounded">Cadastro Efetuado com sucesso </strong>' : '<strong>Erro no cadastro</strong>';
            $pdo = null;
        }
        else{
            $pdo = null;
            $_SESSION['M'] = '<strong class="bg-danger rounded">Está faltando informações</strong>';

        }

    }

    public function Adm(){

        require_once "App/Config/cfg.php";

        //Dados sobre Login da Usuario
        $loginuser = $_POST['email'];
        $senha     = $_POST['senha'];


        //Definição de conexão PDO
        $pdo = new PDO("mysql:host=".BD_HOST.";dbname=".BD_NAME.",".BD_LOGIN.",".BD_PASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");        

        if($_SESSION['M'] = 'index'){

            //Verificação de validade
            $con = $pdo->prepare("SELECT * FROM ".TBL_ADM." WHERE Email = '$loginuser' AND Senha = '$senha'");
            $con->execute();
            $cont = $con->rowCount();

            //Verificação de validade
            if($cont == 1){
                $_SESSION['login'] = 'login';
                $pdo = null;
            }
            else{
                
                setcookie("login",$loginuser);
                $pdo = null;
                echo"Erro no Login";
                header("Location: http://local.recifecortes.com/index.php?pagina=adm");
            }
        }
    }

}