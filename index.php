<?php

    $permitidos = array('home.php', 'imp_contato.php','servicos.php','produtos.php', 'contato.php', 'empresa.php');

    if (isset($_GET['arquivo']) AND (array_search($_GET['arquivo'], $permitidos) !== false)) {

        $arq = $_GET['arquivo'];
    }else {

        $arq = 'home.php';
    }

?>


<?php
    require_once ('topo.php');
?>



<?php
    require_once ('menu.php');
?>

<?php
    require_once ($arq);
?>


<?php
    require_once ('footer.php');
?>