<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Coleta de Dados</title>
  </head>
  <body class="container">
    <h3>Olá! Preencha as seguintes informações antes de iniciar o teste.</h3>

    <form method="POST" action="quiz.php">
        <div class="form-group">
            <label for="idade">Idade:</label>
            <input class="form-control" name="idade" type="number" required>
        </div>
        <div class="form-group">
            <label for="peso">Peso:</label>
            <input class="form-control" name="peso" type="number" required>
        </div>
        <div class="form-group">
            <label for="freq">Frequência cardíaca (BPM):</label>
            <input class="form-control" name="freq" type="number" required>
        </div>
        <div class="form-group">
            <label for="altura">Altura:</label>
            <input class="form-control" name="altura" type="number" required>
        </div>
        <div class="form-group">
            <label for="curso">Curso:</label>
            <input class="form-control" name="curso" required>
        </div>
        <div class="form-group">
            <label for="nivel">Nível de facilidade em questões de lógica</label>
            <select class="form-control" name="nivel" required>
                <option value="1">Baixo</option>
                <option value="2">Médio</option>
                <option value="3">Alto</option>
            </select>
        </div>
          <button type="submit" class="btn btn-primary">Iniciar</button>
          <a href="download.php" class="btn btn-success">Baixar dados (.csv)</a> 
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>