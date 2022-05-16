<?php include("Includes/header.php"); ?>
    <main>
        <?php
            include("Class/ClassConexao.php"); 
            include("Class/ClassCrud.php");
            $Crud = new ClassCrud();
            echo "<h1>Seleção</h1>"
        ?>
    </main>
<?php include("Includes/footer.php"); ?>