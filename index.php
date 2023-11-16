<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tasca - Pedidos</title>
    <link rel="stylesheet" href="css/styles.css">
    
    <!-- CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Scripts do Bootstrap (opcional, mas recomendado para funcionalidades adicionais) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

</head>
<body>

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-9 col-xs-8">
        <h2>Pedidos online</h2>
    </div>
</div>
<div id="result_var"></div>

<form role="form" action="processa_usuario.php" id="MyForm" method="post" enctype="multipart/form-data" name="MyForm">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="ibox float-e-margins" style="padding: 5%">

            <div class="form-data">
                <div class="row form-group">
                    <div class="col-sm-4">
                        <label class="control-label" for="con_nome">Nome Completo</label>
                        <input name="con_nome" type="text" class="form-control blockenter" id="con_nome" style="text-transform:uppercase;" required/>
                    </div>
                    <div class="col-sm-4">
                        <label class="control-label" for="con_email">E-mail</label>
                        <input name="con_email" type="text" class="form-control blockenter" id="con_email" required/>
                    </div>
                    <div class="col-sm-4">
                        <label class="control-label" for="con_telefone">Telefone</label>
                        <input name="con_telefone" type="text" class="form-control blockenter" id="con_telefone"     required/>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-4">
                    <label>Selecione seu estado</label>
                    <select name="con_uf" id="con_uf" data-reqmsg="Selecione seu estado" class="form-control blockenter">
		                <option value="" selected disabled>SELECIONE</option>
                        <option value="PR - Paraná">PR - Paraná</option>
                        <option value="SC - Santa Catarina">SC - Santa Catarina</option>
                    </select>
                    </div>
                    <div class="col-sm-4">
                        <label for="con_catalogo">Selecione o catálogo</label>
                        <select name="con_catalogo" id="con_catalogo" class="form-control" aria-invalid="false">
		                    <option value="" selected disabled>SELECIONE</option>
                            <option value="Abelha Rainha Cosméticos">Abelha Rainha Cosméticos</option>
                            <option value="Demillus">Demillus</option><option value="Doce Sensação">Doce Sensação</option>
                            <option value="Empório Saúde Natural">Empório Saúde Natural</option><option value="Expressão Feminina">Expressão Feminina</option>
                            <option value="Giga Barato">Giga Barato</option><option value="Golfran">Golfran</option>
                            <option value="Hiroshima | L'Arc en Ciel">Hiroshima | L'Arc en Ciel</option>
                            <option value="Mais Amigas">Mais Amigas</option><option value="Natura Verde">Natura Verde</option>
                            <option value="Pra Você">Pra Você</option>
                            <option value="Quatro Estações Imbatível">Quatro Estações Imbatível</option>
                            <option value="Quatro Estações Primavera">Quatro Estações Primavera</option>
                            <option value="Quatro Estações Shopping">Quatro Estações Shopping</option>
                            <option value="TNT Nitros Química">TNT Nitros Química</option><option value="Vitória Régia">Vitória Régia</option>
                        </select>
                    </div>
                    <div class="col-sm-4" style="margin-top:32px">
                        <button class="btn btn-info" type="submit"> Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

    <script>
        $(document).ready(function() {
            // Aplica a máscara ao campo de telefone
            $('#con_telefone').mask('(00) 00009-0000');
        });
    </script>

</body>
</html>
