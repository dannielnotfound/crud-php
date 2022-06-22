
<?php include("Includes/header.php"); ?>
<?php include("Class/ClassCrud.php");?>
    <main>
        <?php
            $Crud = new ClassCrud();
            $IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
            $BFetch = $Crud->selectInDB(
                "*",
                "cadastro",
                "where id=?",
                array($IdUser)
            );
            $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        ?>
        <h2>Dados do Usuário</h2>
        <div class="div"></div>
        <p>Nome: <?php echo $Fetch['Nome']; ?> </p>
        <p>Cidade: <?php echo $Fetch['Cidade']; ?></p>
        <p>Sexo: <?php echo $Fetch['Sexo']; ?></p>
        <div class="div"></div>
    </main>
<?php include("Includes/footer.php"); ?>