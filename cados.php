<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1">
    <title>Cadastro feira</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome-free-6.1.1-web\css\all.css" rel="stylesheet">
</head>
<style>
.body {
    background-color: #7915ab;
}
</style>


<body class="body">
<div class="row fixed-top text-center text-light"><small>Desenvolvido por Henrique Wildfaier Haggstrom</small>
            <hr style="box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);">
        </div>

    <div class="container-fluname container py-5 h-100">
        <div class="row row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
                <div class="card shadow" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center form-outline mb-3" name="card">
                        <img src="mult.png" class="img-fluid" alt="Logotipo Languiru" height="500" width="300">
                        <p></p>
                        <p class="h2 text-dark">Cadastro de OS</p>
                        <form class="form-signin" method="POST" action="gerarpdf.php">
                            <div class="input-group mb-3">
                                <span class="input-group-text" name="basic-addon1">Nome do cliente</span>
                                <input type="text" class="form-control shadow-none" name="nomcli" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                <span class="input-group-text" name="basic-addon1">CPF</span>
                                <input type="text" class="form-control shadow-none" name="cpf" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                <span class="input-group-text" name="basic-addon1">Telefone</span>
                                <input type="text" class="form-control shadow-none" name="tel" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" name="basic-addon1">Endereço</span>
                                <input type="text" class="form-control shadow-none" name="end" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                <span class="input-group-text" name="basic-addon1">Cidade</span>
                                <input type="text" class="form-control shadow-none" name="cidade" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <p class="h2 text-dark">Equipamento</p>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Marca</span>
                                <input class="form-control shadow-none" name="marca" aria-label="With textarea"></input>
                                <span class="input-group-text">Modelo</span>
                                <input class="form-control shadow-none" name="modelo"
                                    aria-label="With textarea"></input>
                                <span class="input-group-text">Cor</span>
                                <input class="form-control shadow-none" name="cor" aria-label="With textarea"></input>
                                <span class="input-group-text">Senha</span>
                                <input class="form-control shadow-none" name="senha" aria-label="With textarea"></input>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" name="basic-addon1">IMEI-1</span>
                                <input type="text" class="form-control shadow-none" name="imei" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                <span class="input-group-text" name="basic-addon1">IMEI-2</span>
                                <input type="text" class="form-control shadow-none" name="imei2" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>
                            <div class="col-12 text-start">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="1" value=",Não Liga">
                                    <label class="form-check-label" for="inlineCheckbox1">Não Liga</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="2" value=",Reinicia">
                                    <label class="form-check-label" for="inlineCheckbox2">Reinicia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="3" value=",Touch Quebrado">
                                    <label class="form-check-label" for="inlineCheckbox3">Touch Quebrado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="4"
                                        value=",Touch não Funciona">
                                    <label class="form-check-label" for="inlineCheckbox1">Touch não Funciona</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="5" value=",Touch Fantasma">
                                    <label class="form-check-label" for="inlineCheckbox2">Touch Fantasma</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="6" value=",Display Quebrado">
                                    <label class="form-check-label" for="inlineCheckbox3">Display Quebrado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="7" value=",Frontal Completa">
                                    <label class="form-check-label" for="inlineCheckbox1">Frontal Completa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="8"
                                        value=",Sem Brilho na Tela">
                                    <label class="form-check-label" for="inlineCheckbox2">Sem Brilho na Tela</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="9" value=",Tela Piscando">
                                    <label class="form-check-label" for="inlineCheckbox3">Tela Piscando</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="10"
                                        value=",Liga com tela Preta">
                                    <label class="form-check-label" for="inlineCheckbox1">Liga com tela Preta</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="11" value=",Conector carga">
                                    <label class="form-check-label" for="inlineCheckbox2">Conector carga</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="12" value=",Carga Falsa">
                                    <label class="form-check-label" for="inlineCheckbox3">Carga Falsa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="13" value=",Não Segura Carga">
                                    <label class="form-check-label" for="inlineCheckbox1">Não Segura Carga</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="14"
                                        value=",Autofalante Estéreo">
                                    <label class="form-check-label" for="inlineCheckbox2">Autofalante Estéreo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="15"
                                        value=",Autofalante Auricular">
                                    <label class="form-check-label" for="inlineCheckbox3">Autofalante Auricular</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="16" value=",Microfone">
                                    <label class="form-check-label" for="inlineCheckbox1">Microfone</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="17"
                                        value=",Câmera frontal não Funciona">
                                    <label class="form-check-label" for="inlineCheckbox2">Câmera frontal não
                                        Funciona</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="18"
                                        value=",Câmera Traseira não Funciona">
                                    <label class="form-check-label" for="inlineCheckbox3">Câmera Traseira não
                                        Funciona</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="19"
                                        value=",Flash não Funciona">
                                    <label class="form-check-label" for="inlineCheckbox1">Flash não Funciona</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="20" value=",Bateria">
                                    <label class="form-check-label" for="inlineCheckbox2">Bateria</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="21"
                                        value=",Digital não Funciona">
                                    <label class="form-check-label" for="inlineCheckbox3">Digital não Funciona</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="22" value=",Conector Bateria">
                                    <label class="form-check-label" for="inlineCheckbox1">Conector Bateria</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="23" value=",Não vibra">
                                    <label class="form-check-label" for="inlineCheckbox2">Não vibra</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="24" value=",Sem Sinal Sim">
                                    <label class="form-check-label" for="inlineCheckbox3"> Sem Sinal Sim</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="25" value=",Não faz Ligação">
                                    <label class="form-check-label" for="inlineCheckbox1">Não faz Ligação</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="26" value=",Super aquecendo">
                                    <label class="form-check-label" for="inlineCheckbox2">Super aquecendo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="27"
                                        value=",Não Reconhece o Chip">
                                    <label class="form-check-label" for="inlineCheckbox3">Não Reconhece o Chip</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="28" value=",Botão Volume +/-">
                                    <label class="form-check-label" for="inlineCheckbox1">Botão Volume +/-</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="29" value=",Botão Power">
                                    <label class="form-check-label" for="inlineCheckbox2">Botão Power</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="30" value=",Molhou">
                                    <label class="form-check-label" for="inlineCheckbox3">Molhou</label>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" name="obs">OBS</span>
                                <input type="text" class="form-control shadow-none" name="obs" aria-label="Username"
                                    aria-describedby="basic-addon1">
                                <span class="input-group-text" name="basic-addon1">Valor</span>
                                <input type="text" class="form-control shadow-none" name="valor" aria-label="Username"
                                    aria-describedby="basic-addon1">
                            </div>

                            <div>
                                <button type="submit" class="col-2 btn btn-primary shadow mb-3 outline">Gerar
                                    OS</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>