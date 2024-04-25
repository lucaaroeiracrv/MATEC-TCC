<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./tema/CSS/main.css">
    <title>Main</title>
</head>

<body>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <span class="navbar-brand mb-0 h1">MATEC</span>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class=" col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline" style="color: white;">Avisos</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline" style="color: white;">Listagem de Chats</span></a>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline" style="color: white;">Listagem Clientes</span></a>
                        </li>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="conteudo borda">
                <table class="table" id="tabela">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style='text-align: center; vertical-align:middle'>
                                <h5> 1 </h5>
                            </td>
                            <td style='text-align: center; vertical-align:middle'>
                                <h5> Caua Brasil </h5>
                            </td>
                            <td style='text-align: center; vertical-align:middle'>
                                <h5> Casa do calisto </h5>
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle rounded-pill dropdown-toggle" type="button" id="dropdownMenuActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Ações
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuActions">
                                        <li>
                                            <button class="dropdown-item">
                                                EDITAR
                                            </button>
                                        </li>
                                        <li>
                                            <button class="dropdown-item">
                                                CANCELAR
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>