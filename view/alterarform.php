<?php
include_once("hader.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
extract($_REQUEST,EXTR_OVERWRITE);
$informa = visuUsuarioCodigo($conn,$idusu);
?>

<link rel="stylesheet" type="text/css" href="css/estilo.css">


<div class="container">

<form class="row g-3" action="../controlr/alterarUsuario.php"  method="post">

  <input type="hidden" name="codigousu" value="<?=$informa["idusu"]?>">

  <div class="col-md-6">
    <label for="inputNome4" class="form-label">Nome</label>
    <input type="text" name="nomeusu" value="<?=$informa["nomeusu"]?>" class="form-control" id="inputNome4" placeholder="Digite seu nome"  required >
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="emailusu" value="<?=$informa["emailusu"] ?>" class="form-control" id="inputEmail4" placeholder="Digite seu email" required>
  </div>

  <div class="col-6">
    <label for="inputAddress" class="form-label">Telefone</label>
    <input type="text" name="foneusu" value="<?=$informa["foneusu"] ?>" class="form-control" id="inputAddress" placeholder="(00) 00000-0000" required>
  </div>

<div class="col-md-4">
    <label for="inputState" class="form-label" >Tipo de Usuario</label>
    <select id="inputState" name="tipousu" class="form-select" >
      <option selected>Escolha</option>
      <option value="1">Funcionario</option>
      <option value="2">Cliente</option>
    </select>
  </div>

  <div class="col-md-6">
    <label for="inputCPF" class="form-label">CPF</label>
    <input type="text" name="cpfusu" value="<?=$informa["cpfusu"] ?>" class="form-control" id="inputCPF" placeholder="000.000.000-00" required>
  </div>

  <div class="col-2">
    <label for="inputCEP" class="form-label">CEP</label>
    <input type="text" name="cepusu" value="<?=$informa["cepusu"] ?>"class="form-control" id="inputAddress2" placeholder="Digite seu CEP" required>
  </div>

  <div class="col-md-2">
    <label for="inputNum" class="form-label">Numero</label>
    <input type="text" name="numusu" value="<?=$informa["numusu"] ?>" class="form-control" id="inputNum" placeholder="Numero da residencia"required>
  </div>

  <div class="col-md-2">
    <label for="inputCom" class="form-label">Complemento</label>
    <input type="text" name="compleusu" value="<?=$informa["compleusu"] ?>"class="form-control" id="inputCom" placeholder="Complemento" required>
  </div>

  </div>
  <div class="col-4">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>

</div>



<?php
 include_once("footer.php");
 ?>