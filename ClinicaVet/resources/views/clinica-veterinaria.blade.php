<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu amigo animal</title>
    <link rel="stylesheet" href="estilo-clinica-vet.css">
</head>

<body>

    <div class="conteudo">
        <div class="formulari">
            <div class="animal-box">
                <div class="pesquisar">
                    <h2>Raças registradas</h2>
                <div class="pesquisa">
                    <input type="text" placeholder="Pesquisar..." name="pesquisa">
                    <label for="pesquisa"><img src="Pesq-removebg-preview.png" alt="pesq"></label>
                </div>

                </div>

                <div class="animal-info">
                    <div class="infs">
                        <p class="textBox">Numero de registro: 19952</p>
                        <p class="textBox">Nome da raça: Border</p>
                        <p class="textBox">Raça: Border Collie</p>
                        <p class="textBox">Nome do dono(a): Marcia</p>
                        <p class="textBox">Idade do PET: 7</p>
                        <p class="textBox">Doenças: N/A</p>
                        <p class="textBox">Cirurgias: N/A</p>
                        <p class="textBox">Peso: 17 Kg</p>
                        <p class="textBox">Informações: O animal possui comportamento agressivo.</p>
                    </div>
                    <div class="buttons">
                        <img src="editar-removebg-preview (1).png" alt="edit">
                        <img src="excluir-removebg-preview (3).png" alt="ex">

                        <button type="button" class="botaoEdMenos botaoExibir">Exibir menos</button>
                    </div>

                </div>
                <div class="animal-info">
                    <div class="infs">
                        <p class="textBox">Numero de registro: 19952</p>
                        <p class="textBox">Nome da raça: Border</p>
                        <p class="textBox">Raça: Border Collie</p>
                        <p class="textBox">Nome do dono(a): Marcia</p>
                        <p class="textBox">Idade do PET: 7</p>
                        <p class="textBox">Doenças: N/A</p>
                        <p class="textBox">Cirurgias: N/A</p>
                        <p class="textBox">Peso: 17 Kg</p>
                        <p class="textBox">Informações: O animal possui comportamento agressivo.</p>
                    </div>
                    <div class="buttons">
                        <img src="editar-removebg-preview (1).png" alt="edit">
                        <img src="excluir-removebg-preview (3).png" alt="ex">

                        <button type="button" class="botaoEdMenos botaoExibir">Exibir menos</button>
                    </div>

                </div>
                
            </div>
            
            
<script>
  const botoesExibir = document.querySelectorAll('.botaoEdMenos');

botoesExibir.forEach(botao => {
    let expandido = false; // Mova a variável expandido para fora do evento de clique

    botao.addEventListener('click', function() {
        const informacoes = this.closest('.animal-info').querySelectorAll('.infs p:not(:first-child)');

        if (!expandido) { 
            informacoes.forEach(info => {
                info.style.display = 'block';
            });
            this.textContent = 'Exibir Menos';
        } else {
            informacoes.forEach(info => {
                info.style.display = 'none';
            });
            this.closest('.animal-info').querySelector('.infs p:first-child').style.display = 'block';
            this.textContent = 'Exibir Mais';
        }

        expandido = !expandido; 
    });
});

</script>
        </div>
        <div class="content">
            <img src="logo-vet-removebg-preview.png" alt="logo" width="250px" height="250px">



        </div>

    </div>
    

</body>

</html>