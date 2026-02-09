<?php
    session_start();
    
    class Aluno{
        private $nome;
        private $sobrenome;
        private $nota;
        private $data;

        public function __construct($nome,$sobrenome,$nota,$data){
            $this->nome = $nome;
            $this->sobrenome = $sobrenome;
            $this->nota = $nota;
            $this->data = $data;
        }

        public function salvar(){
            if(!isset($_SESSION['alunos'])){
                $_SESSION['alunos'] = [];
            }
            $_SESSION['alunos'][] = [
                'nome'=> $this->nome,
                'sobrenome'=> $this->sobrenome,
                'nota'=> $this->nota,
                'data'=> $this->data
            ];
        }
    }

     if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $nota = $_POST['nota'];
        $data = $_POST['data'];

        $usuario = new Aluno($nome,$sobrenome,$nota,$data);
        $usuario->salvar();
    }
    
    if(isset($_GET['reset'])){
        session_destroy();
    }
    
    //echo "<pre>";
    //print_r($_SESSION);
    //echo "</pre>";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadatro de Alunos</title>
</head>
<body>
    <h2 style="color:darkblue; font-family:Arial"> Cadastro de Aluno</h2>
     <form action="" method="POST" style="background:#f2f2f2; padding: 15px; border-radius 8px; width: 300px;">
        Nome: <br>
        <input type="text" name="nome" value="" style="width:100%; margin-bottom:10px"><br>
        sobrenome: <br>
       <input type="text" name="sobrenome" value="" style="width:100%; margin-bottom:10px"><br>
        Nota: <br>
        <input type="number" name="nota" value="" style="width:100%; margin-bottom:10px"><br>
        Data de nascimento: <br>
        <input type="date" name="data" value="" style="width:100%; margin-bottom:10px"><br>
        <button type="submit" style="background:green; color:white; padding:5px 10px;">Cadastrar</button>
        <button type="reset" style="background:red; color:white; padding:5px 10px;">Limpar</button>
    </form>
</body>
</html>