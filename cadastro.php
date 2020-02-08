<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>

        <!-- bootstrap 4-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
        <style type="text/css">
       
        </style>
    </head>
    <body>
        <!-- header -->
        <div class="jumbotron bg-dark text-center text-white">
            <h1>Cadastro</h1>
        </div><!-- end header  -->
        <!-- container main -->
        <section class="d-flex  bg-ligth justify-content-center">
            <form action="_cadastro_user.php" method="post" >
                <div class="form-row ">
                    <div class="form-group col-sm-6">
                        <label for="inputName">Nome:</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Nome" name="nomeUser">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="inputSobrenome">Sobrenome:</label>
                        <input type="text" class="form-control" id="inputSobrenome" placeholder="Sobrenome" name="sobrenomeUser">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Email:</label>
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="emailUser">
                </div>
                <div class="form-group">
                    <label for="inputPass">Senha:</label>
                    <input type="password" class="form-control" id="inputPass" placeholder="Senha" name="senhaUser">
                </div>
                <button type="submit" class="btn btn-success btn-md" id="btn_submit">Cadastrar</button>
            </form>
        </section><!-- end container main -->
        <!--  footer -->
        <footer class="container-fluid text-center text-secondary p-3">
            <span>&copy;Felipe Cassiano - <script>document.write(new Date().getFullYear());</script></span>
        </footer><!-- end footer -->

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <!-- script -->
        <script>
    
        </script>
    
    </body>
</html>