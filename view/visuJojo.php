<?php
include_once("../view/hader.php");
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");
?>

<link rel="stylesheet" type="text/css" href="css/style.css">

<div class=" center" form>
<form action="#" method="POST" class="row row-cols-lg-auto g-3 align-items-center">
  <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text">Nome</div>
      <input type="text" name="nomejogo" class="form-control" id="inlineFormInputGroupUsername" placeholder="Jogo">
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Procurar</button>
  </div>
</form>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Cod</th>

      <th scope="col">Nome</th>

      <th scope="col">Valor</th>

      <th scope="col">lançamento</th>

      <th scope="col">Genero</th>

      <th scope="col">Alterar</th>

      <th scope="col">Excluir</th>
    </tr>
  </thead>
  <tbody>
  <?php
$nomejogo = isset ($_POST["nomejogo"])?$_POST["nomejogo"] :"";

if($nomejogo){
  $dado = visuJogo($conn,$nomejogo);
  
  foreach($dado as $codigoJogo):
  ?>
      <tr>
        <th scope="row"><?php  echo($codigoJogo["idjogo"]);?></th>
        <td><?=$codigoJogo["nomejogo"]?></td>
        <td><?=$codigoJogo["valorjogo"]?></td>
        <td><?=$codigoJogo["datalancamentojogo"]?></td>
        <td><?=$codigoJogo["generojogo"]?></td>
        <td><?=$codigoJogo["studiojogo"]?></td>

        
        <td>  
        <form action="../view/alterarformjogo.php" method="POST">
        <input type="hidden" value="<?=$codigoJogo["idjogo"]?>" name="idjogo">
        <button type="submit" class="btn btn-outline-primary">Alterar</button>
        </form>
        </td>
        <td>     <!-- Button trigger modal -->
<button  type="button" class="btn btn-outline-danger" codigo="<?=$codigoJogo["idjogo"]?>" jogo="<?=$codigoJogo["nomejogo"]?>" data-bs-toggle="modal" data-bs-target="#deleteModal">
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
  

  ?>
   <!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModal">Excluir Jogo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">

      <form action="../controlr/deletarJogo.php" method="GET">
        <input type="hidden" class="codigo form-control" name="codigojogo">
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
      var jogo = button.getAttribute('jogo');

      var modalBody = deletarUsuarioModal.querySelector('.modal-body');
      modalBody.textContent = 'Gostaria de Excluir o Jogo ' + jogo + '?';

      var Codigo = deletarUsuarioModal.querySelector('.modal-footer .codigo');
      Codigo.value = codigo;

    })
  </script>
  <?php
  include_once("footer.php");
  ?>