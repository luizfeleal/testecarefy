<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <title>Plataforma</title>
</head>
<body>
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
                    <th class="text-left">Nome</th>
                    <th class="text-left">Editar</th>
                    <th class="text-left">Excluir</th>
                    </tr>
                </thead>
                <tbody class="table-hover">
                    <tr>
                        <td class="text-left">João</td>
                        <td class="text-left"><img src="{{ asset('img/icons/pencil.png') }}" alt="Envelope icon" width="18px" height="18px"></td>
                        <td class="text-left"><button><img src="{{ asset('img/icons/trash-can.png') }}" alt="Envelope icon" width="18px" height="18px"></button></td>
                    </tr>
                    <tr>
                        <td class="text-left">Miguel</td>
                        <td class="text-left">Editar</td>
                        <td class="text-left">Excluir</td>
                    </tr>
                    <tr>
                        <td class="text-left">Felipe</td>
                        <td class="text-left">Editar</td>
                        <td class="text-left">Excluir</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div id="modal" class="modal-container">
        <div class="modal-popup">
            <div id="message">

            </div>
            <button type="button" id="button-modal" class="btn btn-primary" style="width: 98px;">Ok</button>
        </div>
    </div>

    <script src="{{ asset('js/Events.js') }}"></script>
    <script src="{{ asset('js/Validations.js') }}"></script>
    <script src="{{ asset('js/Assets.js') }}"></script>
</body>
</html>
