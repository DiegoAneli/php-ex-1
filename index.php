/*Passare due argomenti allo script:Nome e Cognome.
Lo script dovrà salutare l interlocutore*/




<?php

  $name = $argv[1];
  $lastname = $argv[2];

  echo 'Ciao ' . $name . ' ' . $lastname . ', benvenuto nello script';


 ?>




 /*Creare una variabile con un paragrafo di testo.
 Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata
 in GET con tre * */




 <?php

  $text ='Questo è il secondo esercizio';

  $textLenght = strlen($text);

  $badword = 'secondo';

  $textModify = str_replaced($badword, '***', $text);

 ?>

 <h1>il testo è lungo <?php echo $textLenght; ?> caratteri</h1>

 <p><?php echo $textModify; ?></p>
