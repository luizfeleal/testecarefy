<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">

    <title>Plataforma</title>
</head>
<body onload="get_all_person()">
    <nav>
        <img src="{{ asset('img/logo/logoCarefy.png') }}" alt="Logo Carefy">
    </nav>

    <div class="container">
        <div class="content-platform">
            <h1>Plataforma</h1>

            <div class="div-add-person">
                <button class="button-green" id="button-add">+ Adicionar</button>
            </div>

            <table class="table-fill">
                <thead>
                    <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Editar</th>
                    <th class="text-center">Excluir</th>
                    </tr>
                </thead>
                <tbody class="table-hover">

                </tbody>
            </table>
        </div>
    </div>

    <div id="modal" class="modal-container">
        <div class="modal-popup">

        </div>
    </div>
    <div class="modal-container-loading">
        <div class="loading"></div>
    </div>


    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('js/Events.js') }}"></script>
    <script src="{{ asset('js/Validations.js') }}"></script>
    <script src="{{ asset('js/Assets.js') }}"></script>

</body>
</html>
