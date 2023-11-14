<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tasca - Pedidos</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/inputmask/5.0.6/jquery.inputmask.min.js"></script>
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
        <div class="ibox float-e-margins">

            <div class="form-data">
                <div class="row form-group">
                    <div class="col-sm-3">
                        <label class="control-label" for="con_nome">Nome Completo</label>
                        <input name="con_nome" type="text" class="form-control blockenter" id="con_nome" style="text-transform:uppercase;" required/>
                    </div>
                    <div class="col-sm-4">
                        <label class="control-label" for="con_email">E-mail</label>
                        <input name="con_email" type="text" class="form-control blockenter" id="con_email" required/>
                    </div>
                    <div class="col-sm-4">
                        <label class="control-label" for="con_telefone">Telefone</label>
                        <input name="con_telefone" type="text" class="form-control blockenter" id="con_telefone" style="text-transform:uppercase;" required/>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-sm-3">
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
                            <option value="TNT Nitros Química">TNT Nitros Química</option><option value="Vitória Régia">Vitória Régia</option>	</select>
                    </div>
                    <div class="col-sm-4" style="margin-top:25px">
                        <button class="btn btn-primary" type="submit"> Salvar</button>
                        <button class="btn btn-default" onclick="voltar();" type="button"><i class="fa fa-times"></i><span class="hidden-xs hidden-sm"> Cancelar</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

    <script>
        $(document).ready(function(){
            $('#con_telefone').inputmask('(99) 9999-9999'); // Exemplo de máscara para telefone
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
