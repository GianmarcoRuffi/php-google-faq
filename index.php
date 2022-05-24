<!-- Riscrivere questa pagina del sito google
https://policies.google.com/faq.
Ci sono diverse domande con relative risposte.
Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->


<?php

include 'data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Google Faq</title>
</head>

<style>

ul {
  list-style: none;
}

li {display:inline-block;
margin-right:35px;}

h2 {font-weight: bold;
font-size: 25px;
margin-bottom: 30px;
margin-top: 30px;}

p {font-size: 15px;
  margin-bottom: 30px;}

</style>

<body>
  <div class="header">
  <h3>Google Privacy e Termini</h3>  
  <ul>
    <li>Introduzione</li>
  <li>Norme sulla privacy</li>
  <li>Termini di servizio</li>
  <li>Tecnologie</li>
  <li>Domande Frequenti</li></ul></div>
  <hr>
  <div class="container">

  <?php 
            foreach ($faqs as $v){
              echo $v['question'];
              echo $v['answer'];
              echo $v['infos'];
          }
            ?>

  </div>
  
</body>
</html>