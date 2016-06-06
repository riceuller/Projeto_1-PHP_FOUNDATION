<?php
/**
 * Created by PhpStorm.
 * User: Ricardo
 * Date: 06/06/2016
 * Time: 15:14
 */

    $n = $_POST['nome'];
    $e = $_POST['email'];
    $a = $_POST['assunto'];
    $m = $_POST['mensagem'];
?>


<div>

    <div><h1>Dados enviados com sucesso. Abaixo seguem os dados que você enviou:</h1></div>

    <div>

        <form action="index.php" method="post" class="form-actions">

            <label for="" class="label">Nome:</label><p><?php echo $n;?></p>
            <label for="" class="label">Email:</label><p><?php echo $e;?></p>
            <label for=""  class="label">Assunto:</label> <p><?php echo $a;?></p>
            <label for="" class="label" >Mensagem: </label> <p><?php echo $m;?></p>
            </br>

            <input type="submit" value="Voltar">
        </form>

    </div>
</div>


