<?php include_once './controller/dados.php';?>

<div class="container">
    <div class="main-body">
        <hr class="my-4">
        <div class="row d-flex justify-content-center align-items-center">
            <?php while($dados = $query->fetch()){?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <form class="col-12 d-flex justify-content-start"  action="./editar.php" method="get">
                                <button name="edit" value="<?php echo  $dados["idT_dados"] ?>" style="width: 70px;" class=" btn btn-primary">edit</button> 
                            </form>
                            <div class="mt-5">
                                <h1><?php echo $dados["nome_nota"] ;?></h1>
                            </div>
                        </div>
                        <hr class="my-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h3 class="col-12 mb-0">Descrição:</h3>
                                <span class="text-secondary mt-3"><?php echo $dados["nota"]; ?></span>
                            </li>
                        </ul>
                        <form class="col-12 d-flex justify-content-end mt-5"  action="./controller/deletar.php" method="post">
                           <button name="delete" value="<?php echo  $dados["idT_dados"] ?>" style="width: 70px;" class=" btn btn-primary">delete</button> 
                        </form>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>