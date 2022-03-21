<?php
include_once("../view/hader.php");

    include_once("../model/conexao.php");
    include_once("../model/usuarioModel.php");

extract($_REQUEST,EXTR_OVERWRITE);


  if(InserirUsuario($conn,$nomeusu,$emailusu,$foneusu,$tipousu,$cpfusu,$cepusu,$numusu,$compleusu,$senhausu,$pinusu)){
echo("Os dados foram cadastrados com sucesso");

  }else{
echo("Não possiel cadastrar seu sdados. Por favor revise seus dados");
  }
  
?>




