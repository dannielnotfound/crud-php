<?php
    include("Includes/header.php"); 
    include("Class/ClassCrud.php");
?>
    <main>
    <script>
        const locationHref = window.location.href
        if (location.href === locationHref) {
            const main = document.getElementsByTagName('main');
            main[0].classList.add('min-width-selecao');
        }
        
    </script>
        <h1>Seleção</h1>
        <table class="TabelaCrud">
            <tr class="fisrtChild">
                <td>Nome</td>
                <td>Sexo</td>
                <td>Email</td>
                <td>Cidade</td>
                <td>Ações</td>
            </tr>
            <!-- Estrutura de loop -->
            <?php
                $Crud= new ClassCrud();
                $BFetch = $Crud->selectInDB(
                    "*",
                    "cadastro",
                    "",
                    array()
                );
                while($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)){
            ?>
                <tr>
                    <td><?php echo $Fetch['Nome'] ?></td>
                    <td><?php echo $Fetch['Sexo'] ?></td>
                    <td><?php echo $Fetch['Cidade'] ?></td>
                    <td><?php echo $Fetch['Email'] ?></td>
                    <td>
                        <div class="icons">
                            <a href="" alt="Editar"><i class="fa fa-pen" aria-hidden="true"></i></a>
                            <a href="" alt="Deletar"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a href="" alt="Vizualizar"><i class="fa fa-eye" aria-hidden="true"></i></a>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <script>
            const tableRowsBG = document.getElementsByTagName('tr');
            for(i=1; i<tableRowsBG.length; i++){
                tableRowsBG[i + i].classList.add('changeBG');
            };
        </script>
        <div class="line"></div>
    </main>
<?php include("Includes/footer.php"); ?>