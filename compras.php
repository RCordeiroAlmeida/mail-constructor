<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tasca - Pedidos</title>

    <link rel="stylesheet" href="style.css">

    <!-- CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">


    <!-- Scripts do Bootstrap (opcional, mas recomendado para funcionalidades adicionais) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>

<body>

    <div class="cabecalho">
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-9 col-xs-8">
                <h2>Pedidos online - Itens</h2>   
            </div>
            <div class="cabecalho-btn">
                <button class="btn btn-info" id="submit-btn" onclick="submitForm()">Salvar</button>
                <button class="btn btn-outline-warning" onclick="goBack()">Cancelar</button>
            </div>
        </div>
    </div>
    <form role="form" action="processa_compras.php" id="MyForm" method="post" enctype="multipart/form-data"
        name="MyForm">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox float-e-margins" style="padding: 5%">

                <div class="form-data">
                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label class="control-label" for="con_nome">Nome Completo</label>
                            <input name="con_nome" type="text" class="form-control blockenter" id="con_nome"
                                style="text-transform:uppercase;" value="<?php echo $_POST['con_nome'] ?>" readonly />
                        </div>
                        <div class="col-sm-4">
                            <label class="control-label" for="con_email">E-mail</label>
                            <input name="con_email" type="text" class="form-control blockenter" id="con_email"
                                value="<?php echo $_POST['con_email'] ?>" readonly />
                        </div>
                        <div class="col-sm-4">
                            <label class="control-label" for="con_telefone">Telefone</label>
                            <input name="con_telefone" type="text" class="form-control blockenter" id="con_telefone"
                                value="<?php echo $_POST['con_telefone'] ?>" readonly />
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-sm-4">
                            <label>Selecione seu estado</label>
                            <input name="con_uf" type="text" class="form-control blockenter" id="con_uf"
                            value="<?php echo $_POST['con_uf'] ?>" style="text" readonly />
                        </div>
                        <div class="col-sm-4">
                            <label for="con_catalogo">Selecione o catálogo</label>
                            <select name="con_catalogo" id="con_catalogo" class="form-control" aria-invalid="false"
                                disabled>
                                <option value="<?php echo $_POST['con_catalogo'] ?>" selected disabled>
                                    <?php echo $_POST['con_catalogo'] ?>
                                </option>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <label for="totTotal">Total da compra (R$)</label>
                            <input name="totTotal" type="text" class="form-control blockenter" id="totTotal" readonly />
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="ibox float-e-margins" style="padding: 0 5%">

                <div class="form-data" id="item_0">
                    <div class="row form-group">
                        <div class="col-sm-1">
                            <label class="control-label" for="ped_quantidade">Quantidade:</label>
                            <input name="ped_quantidade_0" type="number" class="form-control blockenter" id="ped_quantidade_0" style="text-transform:uppercase;" required />
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label" for="ped_quantidade">Código:</label>
                            <input name="ped_codigo_0" type="text" class="form-control blockenter" id="ped_codigo_0"
                                style="text-transform:uppercase;" required />
                        </div>
                        <div class="col-sm-2">
                            <label class="control-label" for="ped_produto">Produto:</label>
                            <input name="ped_produto_0" type="text" class="form-control blockenter" id="ped_produto_0"
                                required />
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label" for="ped_pagina">Página:</label>
                            <input name="ped_pagina_0" type="number" class="form-control blockenter" id="ped_pagina_0"
                                style="text-transform:uppercase;" required />
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label" for="ped_preco_uni_0">Preço Uni.</label>
                            <input name="ped_preco_uni_0" onchange="totalParcial(0)" type="number" class="form-control blockenter" id="ped_preco_uni_0"
                                required />
                        </div>
                        <div class="col-sm-1">
                            <label class="control-label" for="ped_total_0">Total</label>
                            <input name="ped_total_0" type="number" class="form-control blockenter" id="ped_total_0"
                                readonly />
                        </div>
                        <div class="col-sm-1 ">
                            <span onclick="addItem()" class="btn btn-success btn-duplicate" style="margin-top: 32px"><i
                                    class="bi bi-plus"></i></span>
                            <span onclick="removeItem('item_0')" class="btn btn-outline-danger btn-delete" style="margin-top: 32px"><i class="bi bi-trash"></i></span>
                        </div>
                    </div>
                </div>
                <div id="formContainer"></div>
            </div>
        </div>
    </form>


    <script>
        $(document).ready(function () {
            // Aplica a máscara ao campo de telefone
            $('#con_telefone').mask('(00) 00009-0000');
        });

        var qtdItems = 0;
        var totalGeral = 0;

        function addItem() {
            qtdItems++;

            var novoItem = document.createElement('div');
            novoItem.className = 'ibox float-e-margins';
            novoItem.innerHTML =
                `
            <div class="form-data" id="item_${qtdItems}">
                <div class="row form-group">
                    <div class="col-sm-1">
                        <label class="control-label" for="ped_quantidade_${qtdItems}">Quantidade:</label>
                        <input name="ped_quantidade_${qtdItems}" type="number" class="form-control blockenter" id="ped_quantidade_${qtdItems}" required />
                    </div>
                    <div class="col-sm-1">
                        <label class="control-label" for="ped_codigo_${qtdItems}">Código:</label>
                        <input name="ped_codigo_${qtdItems}" type="text" class="form-control blockenter" id="ped_codigo_${qtdItems}" required />
                    </div>
                    <div class="col-sm-2">
                        <label class="control-label" for="ped_produto_${qtdItems}">Produto:</label>
                        <input name="ped_produto_${qtdItems}" type="text" class="form-control blockenter" id="ped_produto_${qtdItems}" required />
                    </div>
                    <div class="col-sm-1">
                        <label class="control-label" for="ped_pagina_${qtdItems}">Página:</label>
                        <input name="ped_pagina_${qtdItems}" type="number" class="form-control blockenter" id="ped_pagina_${qtdItems}" required />
                    </div>
                    <div class="col-sm-1">
                        <label class="control-label" for="ped_preco_uni_${qtdItems}">Preço Uni.</label>
                        <input name="ped_preco_uni_${qtdItems}" onchange="totalParcial(${qtdItems})" type="number" class="form-control blockenter" id="ped_preco_uni_${qtdItems}" required />
                    </div>
                    <div class="col-sm-1">
                        <label class="control-label" for="ped_total_${qtdItems}">Total</label>
                        <input name="ped_total_${qtdItems}" type="number" class="form-control blockenter" id="ped_total_${qtdItems}" readonly />
                    </div>
                    <div class="col-sm-1 ">
                        <span onclick="addItem()" class="btn btn-success btn-duplicate" style="margin-top: 32px"><i
                                class="bi bi-plus"></i></span>
                        <span onclick="removeItem('item_${qtdItems}')" class="btn btn-outline-danger btn-delete" style="margin-top: 32px"><i
                        class="bi bi-trash"></i></span>
                    </div>
                </div>
            </div>
        `;
            document.getElementById("formContainer").appendChild(novoItem);

            //rola até o ultimo item criado
            novoItem.scrollIntoView({ behavior: 'smooth', block: 'end' });
        }

        function removeItem(itemId) {
            if(qtdItems > 0){
            // Remove o item pelo ID
                var itemRemovido = document.getElementById(itemId);
                console.log(itemRemovido);
                if (itemRemovido) {
                    itemRemovido.remove();
                }
                qtdItems--;
            }else{
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "É necessário ao menos 1 item para realizar esse pedido"
                });
            }
        }

        function totalParcial(itemId) {
            var qtd = document.getElementById('ped_quantidade_' + itemId).value || 0;
            var precoUni = document.getElementById('ped_preco_uni_' + itemId).value || 0;
            var targetTotal = document.getElementById('ped_total_' + itemId);

            // Verifica se os campos estão preenchidos antes de calcular o total
            if (qtd.trim() !== '' && precoUni.trim() !== '') {
                // Use parseFloat para converter os valores, mesmo se estiverem vazios
                qtd = parseFloat(qtd) || 0;
                precoUni = parseFloat(precoUni) || 0;

                // Calcula o total parcial
                targetTotal.value = (qtd * precoUni).toFixed(2);
                totalFinal();
            } else {
                Swal.fire({
                    icon: "Error",
                    title: "Oops...",
                    text: "Certifique-se de preencher a quantidade e o preço unitário antes de calcular o total."
                });
            }
        }

        function totalFinal() {
            totalGeral = 0;

            for (var i = 0; i < qtdItems; i++) {
                var totParc = document.getElementById('ped_total_' + i).valueAsNumber || 0;

                // Verifica se o valor é um número válido antes de somar
                if (!isNaN(totParc)) {
                    totalGeral += totParc;
                } else {
                    Swal.fire({
                        icon: "Error",
                        title: "Oops...",
                        text: "Certifique-se de que os totais parciais sejam números válidos."
                    });
                    return;
                }
            }

            var totTotal = document.getElementById('totTotal');
            totTotal.value = totalGeral.toFixed(2);
        }

        function submitForm() {
            // Obtém uma referência para o formulário
            var form = document.getElementById("MyForm");   
            // Aciona o envio do formulário
            form.submit();
        }

        function goBack(){
            window.history.back();
        }
    </script>

</body>

</html>
