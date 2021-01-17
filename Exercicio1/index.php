<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <title>Exercicio 1</title>
</head>

<body>
    <div class="container">
        <div class="row g-3">
                <div class="col-auto">
                    <input type="text" readonly class="form-control-plaintext" id="label" value="Coloque a matriz:">
                </div>
                <div class="col-auto">
                    <input type="text" class="form-control" id="matriz" placeholder="1,2,3;1,2,3;1,2,3">
                </div>
                <div class="col-auto">
                    <button class="btn btn-primary mb-3 " id="buttonSend" onClick="SendButtonClick()">Verificar Diferenca entre diagonais</button>
                </div>
        </div>
    </div>

</body>

<script src="index.js"></script>

</html>