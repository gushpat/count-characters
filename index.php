<?php 

    if(!empty($_POST['phrase'])) //se phrase não é nulo
    {
        $phrase = $_POST['phrase']; // obtem a variavel phrase do formulario

        if(isset($phrase)){ // se a variavel phrase não está vazia
            $numchar = strlen($phrase); //strlen() returna o tamanho da string
            $numphrase =  "Your sentence has $numchar characters";
            echo "<script type='text/javascript'>alert('$numphrase');</script>";
            
        }
        else
        {
            echo 'algo deu errado';
        }

    }


?>

<!DOCTYPE html> 
<html lang="pt-br">
<head>
<title>Count Characters - by Gustavo Patricio</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>


<div class="header">
  <h2>Count Characters - by Gustavo Patricio</h2>
  
</div>

<div class="row">
  <div class="column side" style="background-color:#ffffff;"></div>

  <div class="column middle" style="background-color:#bbb;">
  <p>Hello my friend, use this website to count the number of characters in a sentence. Spaces are also counted, so stay tuned! </p>
  <p>This page uses: HTML and CSS for user interface && PHP and Javascript for logic</p>
  <div>
 <form action="index.php" method="post">
     
    <label for="text">Please type your phrase below:</label>
    <textarea class="textarea" name="phrase" id="phrase" cols="30" rows="10"></textarea>
    <input class="submit" type="submit" value="Submit">
    </form>
  </div>

  </div>

  <div class="column side" style="background-color:#ffffff;"></div>

</div>

<div class="footer">
  <p>Gustavo Patricio - 2021</p>
</div>

</body>
</html>
