<html>
<head>
    
    <meta charset="UTF-8">
  <link rel='stylesheet' href='//fonts.googleapis.com/css?family=font1|font2|etc' type='text/css'>
  <link rel="stylesheet" href="styles.css" type="text/css">
  <script src="navbar.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   <!--datepicker -->
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>  

</head>

<header>
  <img class="logo" src="fts.PNG">
</header>
<div id="cssmenu" class="align-right">
    <ul>
        <li class="active"><a href="acties/uitloggen.php" target="_blank"><i class="fa fa-sign-out"></i> UITLOGGEN</a></li>
        <li><a href="klanten.php"><i class="fa fa-fw fa-bars"></i>Klanten</a>
        <li><a href="tickets.php"><i class="fa fa-ticket"></i> Alle Tickets</a></li>
        <li><a href="acties/nieuwTicketDash.php"><i class="fa fa-plus-square"></i> nieuw ticket</a></li>
        <li><a href="index.php"><i class="fa fa-home"></i> DASHBOARD</a></li>
<?php
    switch ($_SESSION['isAdmin']) { 
                case "1":
                echo '<li><a href="adminDash.php"><i class="fa fa-unlock"<</i>adminDash</a></li>' ;
                break;

                case "0":
                break;

                default:
                break;
            }

?>


  </ul>
</div>
 <br><br><br>
  </html>

