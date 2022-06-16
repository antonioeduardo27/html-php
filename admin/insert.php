<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <form action="envia.php" method="POST" enctype="multipart/form-data">
</head>
<body>
    <main>
        <div class="container">
                <div class="mb-3">
                    <div>
                        <label>Título</label>
                        <input type="text" name="title" class="form-control" placeholher="">
                        <div id="emailHelp" class="form-text"></div>
                        <br>
                    </div>
                    <div>
                        <label>Data</label>
                        <input type="date" name="data" class="form-control">
                    </div>
                    <br>
                    <div>
                        <label>Texto Descritivo</label>
                        <input type="textarea" name="description" class="form-control" placeholder="Descrição">
                    </div>
                    <br>
                    <label>Escolha uma imagem</label>
                    <input type="file" id="formGroupExampleInput3" placeholder="insira uma imagem">

                    <div class="mb-3">
                        <br>
                        <button type="submit" class="btn btn-primary">Publicar</button>
                    </div>
            </form>
        </div>
        </div>
    </main>
</body>
</html>