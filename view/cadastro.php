
<!---------------------------------------------------------------------------------------------------------------->


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
    <script type="text/javascript">
        <script type="text/javascript">
        function validarSenha(){
            var senha = document.getElementById('senhaUsuario').value;
            var senhaC = document.getElementById('conf_senha').value;
            if (senha != senhaC) {
                window.alert("Senhas inválidas");   
                return false;           
            }
            else{
                window.alert("Senhas válidas");
                return true;    
            }
        }       
    </script>
    </script>
<head>
    <title>Login Aimup - Gestão de Tarefas</title>
    <link rel="stylesheet" href="../view/assets/css/estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<!--Coded with love by Mutiullah Samim-->
<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card" style="height: 450px;">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="imagens/logo-branca.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form  action="viewController/cadastrar.php" method="POST">
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="nomeUsuario" id="nome" placeholder="Nome do Usuario" required="required" class="form-control input_user" value="">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-at"></i></span>
                            </div>
                            <input type="text" name="emailUsuario" id="nome" placeholder="Email do Usuario" required="required" class="form-control input_pass" value="">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="senhaUsuario" id="senhaUsuario" placeholder="senha do usuario" required="required" class="form-control input_pass" value="">
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-check"></i></span>
                            </div>
                            <input type="password" name="conf_senha" id="conf_senha" placeholder="Confirmação de senha" required="required" class="form-control input_pass" value="">
                        </div>
                        <div class="form-group">
                            <!--<div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customControlInline">
                                <label class="custom-control-label" for="customControlInline"></label>
                            </div>-->
                        </div>
                            <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="submit" name="btn_cadastrar_usuario" id = "botaoCadastro" onclick = "return validarSenha()" class="btn login_btn">Cadastrar</button>
                   </div>
                    </form>
                </div>
        
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        <a href="../index.php" class="ml-2">Já Tenho Conta</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>