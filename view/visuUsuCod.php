<?php
include_once("hader.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
?>

<link rel="stylesheet" type="text/css" href="css/style.css">

<div class="center" form>
<form action="#" method="POST" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text">Codiogo</div>
      <input type="text" name="codigousu" class="form-control" id="inlineFormInputGroupUsername" placeholder="ID">
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-outline-success">Procurar</button>
  </div>
</form>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Cod</th>

      <th scope="col">Nome</th>

      <th scope="col">Email</th>

      <th scope="col">Fone</th>

      <th scope="col">alterar</th>
    </tr>
  </thead>
  <tbody>
  <?php
$codigousu = isset ($_POST["codigousu"])?$_POST["codigousu"] :"";

if($codigousu){
  $codigoUsuarios = visuUsuarioCodigo($conn,$codigousu);
  

  ?>
      <tr>
        <th scope="row"><?php  echo($codigoUsuarios["idusu"]);?></th>
        <td><?=$codigoUsuarios["nomeusu"]?></td>
        <td><?=$codigoUsuarios["emailusu"]?></td>
        <td><?=$codigoUsuarios["foneusu"]?></td>
        <td>
      <form action="../view/alterarform.php" method="POST">
      <input type="hidden" value="<?=$codigoUsuarios["idusu"]?>"name="idusu">
      <button type="submit" class="btn btn-outline-primary">Alterar</button>
      </form>
      </td>
      
      <td>

      <!-- Button trigger modal -->
<button  type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
  Deletar
</button>
      </td>
      
      </tr>
    </tbody>
  </table>  
      <?php

  }
      ?>
  <!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Excluir Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
        <button type="button" class="btn btn-outline-danger">Excluir</button>
      </div>
    </div>
  </div>
</div>
  <?php
  include_once("footer.php");
  ?>