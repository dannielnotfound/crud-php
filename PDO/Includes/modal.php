<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <style>
        hr{
            border: none;
            background-color: rgba(0, 0, 0, .3);
            margin-top: 1rem;
            margin-bottom: 1rem;
            height: .5px;
            width: 100%; 
        }
        .box{
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .modal{
            display: none;
            position: absolute;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .3);
            z-index: 1;
        }
        .center-modal{
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .modal-content{
            position: relative;
            transition: 3s;
            background-color:#fffcf9;
            color: #EF476F;
            width: 18%;
            max-width: 680px;
            min-width: 260px;
            padding: 10px;
            border-radius: .8rem;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .close-btn>button{
            position: absolute;
            right: 2%;
            font-weight: 500;
            font-size: large;
            border: none;
            background-color: transparent;
            cursor: pointer;
        }
        #btn{
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
    <div id="modal-box"class="modal">
        <div class="center-modal">
            <div class="modal-content">
                <div class="close-btn">
                    <button id="closeBtn"> X </button>
                </div>
                <div class="modal-main">
                    <?php  echo"<h2>Cadastro realizado com sucesso</h2>"?>
                </div>
            </div>
        </div>
    </div>
    <script>
    // Mostrar o modal na tela    
    const modal = document.getElementById('modal-box');
        modal.style.display= 'block';
    const close = document.getElementById('closeBtn')

    // Fechar o modal e limpar os inputs
    close.onclick = function(){
        const modal = document.getElementById('modal-box');
        modal.style.display= 'none';
        clearInputs()
    }
    </script>
</body>
</html>