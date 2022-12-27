<?php
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM clientes WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>

<div id="conteiner">
    <div class="divForm">
        <h1>Editar Cliente</h1>
        <form action="php_action/update.php" method="POST">
            <input type = "hidden" name="id" value="<?php echo $dados['id']; ?>">
            <div>
                <div class="col">
                    <label class="form-label">Nome</label>
                    <input type="text" class="form-control" aria-label="First name" name="nome" value="<?php echo $dados['nome'] ?>">
                </div>
                <div class="col">
                    <label class="form-label">Sobrenome</label>
                    <input type="text" class="form-control" aria-label="Last name" name="sobrenome" value="<?php echo $dados['sobrenome'] ?>">
                </div>
                <div class="col">
                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                    <input type="text" class="form-control" aria-label="email" name="email" value="<?php echo $dados['email'] ?>">
                </div>
                <div class="col">
                    <label class="form-label">Idade</label>
                    <input type="text" class="form-control" aria-label="age" name="idade" value="<?php echo $dados['idade'] ?>">
                </div>
                <div class="buttonsForm">
                    <a href="index.php" class="btn btn-primary">Lista de Clientes</a>
                    <button type="submit" class="btn btn-success" name="btn-editar">Editar</button>
                </div>
                </div>
        </form>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>