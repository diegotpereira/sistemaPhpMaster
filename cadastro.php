<DOCTYPE htnl>
    <hmtl>

        <head>

            <meta charset="utf-8">
            <title>Cadastro de Clientes</title>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="css/custom.css">
        </head>

        <body>

            <div class='container'>

                <fieldset>
                    <legend>
                        <h1>Formulário de Cadastro de Cliente</h1>
                    </legend>

                    <form action="action_cliente.php" method="post" id='form-contato' enctype='multipart/form-data'>
                        <div class="row">

                            <label for="nome">Selecionar Foto</label>
                            <div class="col-md-2">
                                <a href="#" class="thumbnail">
                                    <img src="fotos/padrao.jpg" height="190" height="150" id="foto-cliente">
                                </a>
                            </div>
                            <imput type="file" name="foto" id="foto" value="foto"></imput>
                        </div>

                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome"
                                placeholder="Informe seu nome">
                            <span class='msg-erro msg-nome'></span>
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Informe o E-mail">
                            <span class='msg-erro msg-email'></span>
                        </div>

                        <div>
                            <label for="cpf">CPF</label>
                            <input type="cpf" class="form-control" id="cpf" maxlength="14" name="cpf"
                                placeholder="Informe seu CPF">
                            <span class='msg-erro msg-cpf'></span>
                        </div>

                        <div class="form-group">
                            <label for="data_nascimento">Data de Nascimento</label>
                            <input type="data_nascimento" class="form-control" id="data_nascimento" maxlength="10"
                                name="data_nascimento" placeholder="Informe sua data de nascimento">
                            <span class='msg-erro msg-data'></span>
                        </div>

                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="telefone" class="form-control" id="telefone" maxlength="12" name="telefone"
                                placeholder="Informe o Telefone">
                            <span class='msg-erro msg-telefone'></span>
                        </div>

                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="celular" class="form-control" id="celular" maxlength="12" name="telefone"
                                placeholder="Informe seu Telefone">
                            <span class='msg-erro msg-celular'></span>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option value="">Selecione o status</option>
                                <option value="Ativo">Ativo</option>
                                <Option value="Inativo">Inativo</Option>
                            </select>
                            <span class='msg-erro msg-status'></span>
                        </div>

                        <input type="hidden" name="acao" value="incluir">
                        <button type="submit" class="btn btn-primary" id='botao'>Gravar</button>


                    </form>
                </fieldset>

            </div>

            <script type="text/javascript" src="js/custom.js"></script>


        </body>

        </html>