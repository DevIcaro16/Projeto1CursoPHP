<?php

    //separação de templates para o aproveitamento do código(Parte Das Categorias) : 
    include_once("templates/header.php");
?>

<h3 id="categories-title">Categorias : </h3>
            <ul id="categories-list">

        <?php foreach($categories as $category):  ?>  

            <center><li><a href="<?= $BASE_URL?>"><?= $category ?> </a></li></center>
            

            <?php endforeach ?>

    </ul>

<?php
    //para a página importar o rodapé : 
    include_once("templates/footer.php");
?>