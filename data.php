<?php

class  jogadoresRPG
{
        public $nome;
        public $idade;
        public $classe;
        public $personagem;
        public $raça;
        public $objetivo;
        public $sexo;

}

header('location:index.php');


$nome = $_POST['nome'];
$personagem =$_POST['personagem'];
$classe = $_POST['classe'];
$idade =$_POST['idade'];
$raça = $_POST['raça'];
$objetivo =$_POST['objetivo'];
$sexo =$_POST['sexo'];



// logica que calculará as categorias e os competidores pela idade - serviço categoria competidor

function defineCategoriaCompetidor (string $nome, string $idade) : ?string
{

$categorias = ['infantil', 'adolecente','adulto','idoso'];

    if(validaNome($nome) && validaIdade($idade)){

        removerMensagemErro();

        switch ($idade){
        case ($idade >= 6 && $idade <= 12) :
            setarMensagemSucesso("O Jogador ".$nome. " compete na categoria Infantil");
            return null;  
        case ($idade >= 13 && $idade <= 18):
            setarMensagemSucesso("O Jogador ".$nome." compete na categoria Adolecente");
            return null; 
        case ($idade >= 19 && $idade <= 65):
            setarMensagemSucesso('O Jogador '.$nome. " compete na categoria Adulto");
            return null; 
        default: 
            setarMensagemSucesso('O Jogador '.$nome." compete na categoria Idoso");
            return null; 
        }
    }
    else 
    {
        removerMensagemSucesso();   
        return obterMensagemErro();
    }
}

// serviço mensagem Sessao


session_start();


function setarMensagemSucesso(string $mensagem) : void
{
    $_SESSION['mensagem-de-sucesso'] = $mensagem;
}

function obterMensagemSucesso() : ?string
{
    if (isset($_SESSION['mensagem-de-sucesso']))
        return $_SESSION['mensagem-de-sucesso'];

    return null;
}

function setarMensagemErro(string $mensagem) : void
{
    $_SESSION['mensagem-de-erro'] = $mensagem;
}

function obterMensagemErro() : ?string
{
    if (isset($_SESSION['mensagem-de-erro']))
        return $_SESSION['mensagem-de-erro'];

    return null;
}

function removerMensagemSucesso () : void
{
    if (isset($_SESSION['mensagem-de-sucesso']))
        unset ($_SESSION['mensagem-de-sucesso']);
}

function removerMensagemErro () : void
{
    if (isset($_SESSION['mensagem-de-erro']))
        unset($_SESSION['mensagem-de-erro']);

}



// segurança e boas praticas para inserção de dados.

function validaNome(string $nome) : bool
{
    if(empty($nome)){
        setarMensagemErro("o nome não pode ser vazio, favor inserir os dados");
        return false;
    }
    else if(strlen($nome) <3){
        setarMensagemErro("o nome deve conter mais de 3 caracteres, favor inserir os dados");
        return false;
    }
    else if(strlen($nome) >20){
        setarMensagemErro("o nome não pode ter mais de 20 caracteres, favor inserir os dados");
        return false;
    }
return true;
}

function validaIdade(string $idade) : bool
{
    if(empty($idade)){
        setarMensagemErro("a idade não pode ser vazia, favor inserir os dados");
        return false;
    }
    else if(!is_numeric($idade)){
        setarMensagemErro("insira um numero para a idade");
        return false;
    }
return true;
}

?>
