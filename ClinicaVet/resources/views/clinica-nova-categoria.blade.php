<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu amigo animal</title>
    <link rel="stylesheet" href="nova-categoria.css">
</head>

<body>

    <div class="conteudo">
        <div class="formulari">
            <div class="animal-box">
                <div class="pesquisar">
                    <h3>Raças registradas</h3>
                    <div class="pesquisa">

                        <input type="text" placeholder="Pesquisar..." name="pesquisa" class="barra">
                        <label for="pesquisa"><img src="Pesq-removebg-preview.png" alt="pesq"></label>

                    </div>

                </div>

                <div class="animal-info">
                    <div class="infs">
                        <form action="/submit_form" method="post">
                            <div>
                                
                                <input type="text" id="info1" name="info1" required placeholder="Escreva o nome da RAÇA:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info2" name="info2" required placeholder="Escreava a raça de ORIGEM:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info3" name="info3" required placeholder="Descreva a APÂRENCIA:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info4" name="info4" required placeholder="Descreva as CORES:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info5" name="info5" required placeholder="Descreva a PERSONALIDADE:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info6" name="info6" required placeholder="Descrava as HABILIDADES:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info7" name="info7" required placeholder="Descreva sobre SUÁDE:" class="caixa">
                            </div>
                            <div>
                                <input type="text" id="info8" name="info8" required placeholder="Descreva sobre a EXPECTATIVA DE VIDA:" class="caixa">
                            </div>
                            
                        </form>

                    </div>
                    <div class="buttons">
                        <h5>Numero de registro: A ser gerado</h5>
                        <button>Salvar alterações</button>
                        <button>Descartar Alterações</button>
                    </div>


                </div>

                
            </div>

        </div>

    </div>
    <div class="content">
        <img src="logo-vet-removebg-preview.png" alt="logo" width="250px" height="250px">



    </div>

    </div>


</body>

</html>