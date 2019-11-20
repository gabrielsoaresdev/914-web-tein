<?php
require_once '../model/Participante.php';
require_once '../controller/ParticipanteController.php';
$controller = new ParticipanteController();
if(isset($_POST['idade'], $_POST['peso'], $_POST['freq'], $_POST['altura'],
        $_POST['curso'], $_POST['nivel'])) {
    $participante = new Participante(0, $_POST['idade'], $_POST['peso'],
        $_POST['freq'], $_POST['altura'], $_POST['curso'], $_POST['nivel'], 0, 0);
}
else if (isset($_GET['id'])) {
    $participante = $controller->getParticipante($_GET['id']);
}


if($participante == null)
    header('Location: ./index.php');
else {
    $controller->cadastrar($participante);
    $participante->setId($controller->getLastId());
}
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Quiz</title>
  </head>
  <body class="container">
    <h1>Responda! Seu tempo está contando: <span id="tempo">0</span> segundos </h1>
    <form method="POST" action="../controller/ParticipanteController.php">
      <div class="form-group">
        <div class="card">
          <img class="w-100" src="https://img.playbuzz.com/image/upload/ar_1.5,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/40b6c70b-52b0-428e-87c5-5cb7a343599e.jpg">
          <div class="font-weight-bold p-1 border-bottom">
            Qual dos cubos abaixo  poderia ser a rotação do cubo acima?
          </div>
          <div class="container row">
          <div class="col-sm">
            <input id="11" name="q1" type="radio" value="false">
            <label for="11"> 
              <img src="https://img.playbuzz.com/image/upload/ar_1.0,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/8b9bc85d-e9ce-40c4-8045-4677de187f07.jpg">
            </label>
            </div>
            <div class="col-sm">
            <input id="12" name="q1" type="radio" value="false">
            <label for="12"> 
              <img src="https://img.playbuzz.com/image/upload/ar_1.0,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/c88d794c-7b97-41bb-8890-ed00a7ffd102.jpg">
            </label>
            </div>
            <div class="col-sm">
            <input id="13" name="q1" type="radio" value="false">
            <label for="13"> 
              <img src="https://img.playbuzz.com/image/upload/ar_1.0,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/d4f77ec9-b550-4cef-89cf-1fb880314110.jpg">
            </label>
            </div>
            <div class="col-sm">
            <input name="q1" id="14" type="radio" value="true">
            <label for="14"> 
              <img src="https://img.playbuzz.com/image/upload/ar_1.0,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/8d88dc76-e73a-4338-8829-cb731eb4e4ed.jpg">
            </label>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="card">
          <img class="w-100" src="https://img.playbuzz.com/image/upload/ar_1.5,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/0167716a-e119-463d-8ca8-b90413d941ad.jpg">
          <div class="font-weight-bold p-1 border-bottom">
            Se o dia depois de amanhã é dois dias antes da quinta-feira, que dia é hoje?
          </div>
          <div class="container row">
          <div class="col-sm">
            <input id="21" name="q2" type="radio" value="false">
            <label for="21"> 
              Quarta
            </label>
            </div>
            <div class="col-sm">
            <input id="22" name="q2" type="radio" value="false">
            <label for="22"> 
              Segunda
            </label>
            </div>
            <div class="col-sm">
            <input id="23" name="q2" type="radio" value="false">
            <label for="23"> 
              Terça
            </label>
            </div>
            <div class="col-sm">
            <input name="q2" id="24" type="radio" value="true">
            <label for="24"> 
              Domingo
            </label>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="card">
          <img class="w-100" src="https://img.playbuzz.com/image/upload/ar_1.5,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/6efdc783-fae7-44eb-9843-14bbb1b91147.jpg">
          <div class="font-weight-bold p-1 border-bottom">
            Marque a palavra que não combina com as outras
          </div>
          <div class="container row">
          <div class="col-sm">
            <input id="31" name="q3" type="radio" value="false">
            <label for="31"> 
              Cuiabá
            </label>
            </div>
            <div class="col-sm">
            <input id="32" name="q3" type="radio" value="false">
            <label for="32"> 
              Cairo
            </label>
            </div>
            <div class="col-sm">
            <input id="33" name="q3" type="radio" value="false">
            <label for="33"> 
              Buenos Aires
            </label>
            </div>
            <div class="col-sm">
            <input name="q3" id="34" type="radio" value="true">
            <label for="34"> 
              Campinas
            </label>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="card">
          <img class="w-100" src="https://img.playbuzz.com/image/upload/ar_1.5,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/28d092cf-818a-4056-820d-9be6ede4421d.jpg">
          <div class="font-weight-bold p-1 border-bottom">
            4-7-11-18-29... Qual é o próximo número nessa sequência?
          </div>
          <div class="container row">
          <div class="col-sm">
            <input id="41" name="q4" type="radio" value="true">
            <label for="41"> 
              47
            </label>
            </div>
            <div class="col-sm">
            <input id="42" name="q4" type="radio" value="false">
            <label for="42"> 
              46
            </label>
            </div>
            <div class="col-sm">
            <input id="43" name="q4" type="radio" value="false">
            <label for="43"> 
              55
            </label>
            </div>
            <div class="col-sm">
            <input name="q4" id="44" type="radio" value="false">
            <label for="44"> 
              40
            </label>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="card">
          <img class="w-100" src="https://img.playbuzz.com/image/upload/ar_1.5,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/8950090e-018d-4d53-80a1-d38345827e0e.jpg">
          <div class="font-weight-bold p-1 border-bottom">
            Fernanda gosta do número 96, mas não do 45. Ela também gosta do número 540, mas não do 250. De qual número abaixo ela gosta?
          </div>
          <div class="container row">
          <div class="col-sm">
            <input id="51" name="q5" type="radio" value="false">
            <label for="31"> 
              128
            </label>
            </div>
            <div class="col-sm">
            <input id="52" name="q5" type="radio" value="false">
            <label for="32"> 
              140
            </label>
            </div>
            <div class="col-sm">
            <input id="53" name="q5" type="radio" value="false">
            <label for="53"> 
              93
            </label>
            </div>
            <div class="col-sm">
            <input name="q5" id="54" type="radio" value="true">
            <label for="54"> 
              132
            </label>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="card">
          <img class="w-100" src="https://img.playbuzz.com/image/upload/ar_1.5,c_pad,f_jpg,b_auto/q_auto:good,f_auto,fl_lossy,w_640,c_limit/cdn/0f3e7bfe-cfa3-41f8-8309-2b972a3f3ebd/637579b8-9ce2-41b5-8fdc-8b581a603673.jpg">
          <div class="font-weight-bold p-1 border-bottom">
            C, F, I, L, O... Nesta sequência, qual é a próxima letra?
          </div>
          <div class="container row">
          <div class="col-sm">
            <input id="61" name="q6" type="radio" value="false">
            <label for="61"> 
              T
            </label>
            </div>
            <div class="col-sm">
            <input id="62" name="q6" type="radio" value="true">
            <label for="62"> 
              R
            </label>
            </div>
            <div class="col-sm">
            <input id="63" name="q6" type="radio" value="false">
            <label for="63"> 
              W
            </label>
            </div>
            <div class="col-sm">
            <input name="q6" id="64" type="radio" value="false">
            <label for="64"> 
              Q
            </label>
            </div>
          </div>
        </div>
      </div>
      <input hidden id="tempo_input" name="tempo" value="">
      <input hidden name="id" value="<?php echo $participante->getId(); ?>">
      <input type="submit" class="btn btn-primary">
    </form>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

<script>
  var n = 0;
  window.setInterval(function(){
    document.getElementById("tempo_input").value = n;
    document.getElementById("tempo").innerHTML = n;
    n++;
  },1000);
</script>