<?php
//conexão com o banco
include_once 'php_action/db_connect.php';

include_once 'includes/header.php';
?>
    <body>

        <div id="conteiner">
            <div class="divTabela" >
                <h1>Lista de Clientes</h1>
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Sobrenome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM clientes";
                        $resultado = mysqli_query($connect, $sql);

                        while($dados = mysqli_fetch_array($resultado)):
                    ?>
                    <tr>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['sobrenome']; ?></td>
                        <td><?php echo $dados['email']; ?></td>
                        <td><?php echo $dados['idade']; ?></td>
                        <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-warning">Editar</a>
                        <a style="margin: 10px;" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $dados['id']; ?>"">Excluir</a></td>

                        <div class="modal fade" id="myModal<?php echo $dados['id']; ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Opa!</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        Tem certeza que deseja excluir?
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer" id="myModal<?php echo $dados['id']; ?>">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>

                                        <form action="php_action/delete.php" method="POST">
                                            <input type = "hidden" name="id" value="<?php echo $dados['id']; ?>">
                                            <button type="submit" name="btn-deletar" class="btn btn-danger">Continuar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
                </table>
                <a href="cadastrar.php" class="btn btn-primary btnListaCliente">Cadastrar Cliente</a>
            </div>
        </div>
<?php
include_once 'includes/footer.php';
?>