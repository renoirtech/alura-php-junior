<?php
require_once'cabecalho.php';
require_once 'logica-usuario.php';

verificaUsuario();

$categoria    = new Categoria();
$categoriaDao = new CategoriaDao($conexao);
$categoria->setId(1);

$produto = new Produto('','','',$categoria,'');

$categorias = $categoriaDao->listaCategorias();

?>
<h1>Formulário de produto</h1>
<form class="" action="adicionaproduto.php" method="POST">
  <table class="table">
    <?php require_once 'produto-formulario-base.php'; ?>
    <tr>
      <td colspan="2">
        <button type="submit" name="button" class="btn btn-primary">Cadastrar</button>
      </td>
    </tr>
  </table>
</form>
<?php
require_once('rodape.php');
?>
