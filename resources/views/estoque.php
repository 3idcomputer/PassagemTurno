<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilo.css"/>
    <title>Passagem de Turno</title>
</head>


            <body>


            <div class="jumbotron">


            <h1>Passagem de Turno</h1>

                <h3><?php echo date('d/m/Y')?></h3>


                <nav>

                    <ul class="menuLogin">

                        <li><a href="#">Cadastro</a></li>
                        <li><a href="#">Login</a></li>

                    </ul>
                </nav>

                <div class="logo">
                    <img src="../interaxanew.png" alt="ITX">

                </div>

            </div>


            <div class="container">

                <h4>Analista(s) Turno</h4>


                    <table class="table table-bordered table-hover">

                        <thead class="thead">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Inicio-Turno</th>
                            <th scope="col">Fim-Turno</th>
                            <th scope="col">Detalhes</th>
                        </tr>
                        </thead>


                        <tbody>
                                <?php foreach ($analistas as $analista): ?>
                                    <tr>
                                        <td> <?= $analista->id ?>
                                        <td> <?= $analista->nome ?> </td>
                                        <td> <?= $analista->inicio_turno ?> </td>
                                        <td> <?= $analista->fim_turno ?> </td>
                                        <td> <a href=""><?= $analista->detalhe ?> </a></td>
                                    </tr>
                                <?php endforeach ?>
                        </tbody>
                </table>

            </div>

                <div class="responsabilidade">

                    <div class="container">

                            <h4>Responsabilidade(s) Analista </h4><br>
                            <ul>

                                <li> <b>Monitoração, CheckList e Telefone:</b></li>
                                <li><b>Gestão Geral da Fila de Chamados:</b></li>
                                <li><b>Triagem Inicial da Fila de Chamados:</b></li>
                                <li> <b>Fila De Chamados Em Andamentos e Telefone:</b></li>
                                <li><b>Transcrição:</b></li>
                            </ul>
                    </div>
            </div>

            </body>
</html>
