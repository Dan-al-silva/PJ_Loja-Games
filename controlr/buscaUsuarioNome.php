<?php

include_once("../model/conexao.php");

include_once("../model/usuarioModel.php");

$nomeusu = $_POST ("nomeUsu");

if(visuUsuarioNome($conn,$nomeusu)){
    header("Location:../view/visuJogo.php");
}

else{
    header("Location:../view/visuJogo.php");
}

?>