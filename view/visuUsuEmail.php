<?php
include_once("hader.php");
include_once("../model/conexao.php");
include_once("../model/usuarioModel.php");
?>

<link rel="stylesheet" type="text/css" href="css/style.css">

<div class="center" form>
<form action="#" method="POST" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Email</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" name="emailUsu" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email">
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

      <th scope="col">nome</th>

      <th scope="col">Email</th>

      <th scope="col">Fone</th>

      <th scope="col">alterar</th>

      <th scope="col">excluir</th>
    </tr>
  </thead>
  <tbody>
  <?php
$emailusu = isset($_POST["emailUsu"])?$_POST["emailUsu"]:"";

if($emailusu){

  $dado = visuUsuarioEmail($conn,$emailusu);
  
  foreach($dado as $emailUsuarios):
  ?>
      <tr>
        <th scope="row"><?php  echo($emailUsuarios["idusu"]);?></th>
        <td><?=$emailUsuarios["nomeusu"]?></td>
        <td><?=$emailUsuarios["emailusu"]?></td>
        <td><?=$emailUsuarios["foneusu"]?></td>
        <td>
      <form action="../view/alterarform.php" method="POST">
        <input type="hidden" value="<?=$emailUsuarios["idusu"]?>" name="idusu">
      <button type="submit" class="btn btn-outline-primary">Alterar</button>
      </form>
      </td>
      
      <td>     <!-- Button trigger modal -->
<button  type="button" class="btn btn-outline-danger" codigo="<?=$emailUsuarios["idusu"]?>" email="<?=$emailUsuarios["emailusu"]?>" data-bs-toggle="modal" data-bs-target="#deleteModal">
  Deletar
</button>
</td>
</tr>
      <?php
  endforeach;
  }
      ?>
    </tbody>
  </table>

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

      <form action="../controlr/deletarUsuario.php" method="GET">
        <input type="hidden" class="codigo form-control" name="codigousu">
      <button type="submit" class="btn btn-danger">Excluir</button>
      </form>

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
        
      </div>
    </div>
  </div>
</div>

<script>
var deletarUsuarioModal = document.getElementById('deleteModal');
    deletarUsuarioModal.addEventListener('show.bs.modal', function(event){
      var button = event.relatedTarget; 
      var codigo = button.getAttribute('codigo');
      var email = button.getAttribute('email');

      var modalBody = deletarUsuarioModal.querySelector('.modal-body');
      modalBody.textContent = 'Gostaria de Excluir o Email' + email + '?';

      var Codigo = deletarUsuarioModal.querySelector('.modal-footer .codigo');
      Codigo.value = codigo;

    })
  </script>

  <?php
  include_once("footer.php");
  ?>