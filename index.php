<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="pokemon.css">
	<title></title>
</head>
<body>



<?php

 require("Pokemon.class.php");

$p1 = new Pokemon ('marisson','plante','feu','60','10','20');

  $p1->nom.' '; 
  $p1->type.' ';
  $p1->faiblesse.' ';
  $p1->pointdevie.' ';
  $p1->attaque1.' ';
  $p1->attaque2.' ';


 //   if(!empty($_POST['attaque1']))
 //    {
 //  	 echo $p1 ->attaque1 ($p2);
 //     }


 //   if(!empty($_POST['attaque2'])) 
	//  {
 //      echo $p1 -> attaque2 ($p2);
	// }


?>


 <center> <h1> <img src="titre.jpeg"> </h1> </center> </br>  


   <form method="POST">
                <input type="submit" name="attaque1" value="Marisson attaque Grenousse"><p></p>
                <input type="submit" name="attaque2" value="Grenousse attaque Marisson"><p></p>           
                 <input type="submit" href="http://localhost/Pokemon/" value="Recommence"><p></p>   
             </form>         </div>

 <div id="centre">
 <table id="tableun"> 
 <tr>
 	 <td> <h1>  M A R I S S O N    </h1> </br> </br> 

 	 <center> <?php echo '<img src="mou.jpeg" alt=" base ! "/> '.' '; ?></center>  
 </br> <strong> Fouet lianes = 10 </strong></br>
<strong>	Cannon Graines = 20 </strong></br> </td> 
</tr>
</table>
</div>


<?php 

 $p2 = new Pokemon ('grounousse','eau','plante',60,10,20);

   $p2->nom.' ';
   $p2->type.' ';
   $p2->faiblesse.' ';
   $p2->pointdevie.' ';
   $p2->attaque1.' ';
   $p2->attaque2.' ';

?>
 <div id="gauche"> 
<table id="tabledeux">


<tr>
	 <td> <h1>  G R E N O U S S E   </h1> </br> </br> 


<center> <?php echo '<img src="gr.jpeg" alt=" base ! "/> '.' '; ?></center>  
</br> <strong> Ecras'Face = 10 </strong></br>
<strong>	Gouttes à gouttes = 20 </strong></br> </td> 


 </tr>

</table>
</div>

<?php
 $p3 = new Pokemon ('feunnec','feu','eau',60,10,20);

   $p3->nom.' '; 
   $p3->type.' ';
   $p3->faiblesse.' ';
   $p3->pointdevie;
   $p3->attaque1;
   $p3->attaque2;
?>
 <div id="droite"> 
<table id="tabletrois">


<tr>
	 <td> <h1>  F E U N N E C   </h1> </br> </br>  


<center> <?php echo '<img src="fe.png" alt=" base ! "/> '.' '; ?> </center> </br> </> 
</br> <strong> Griffe = 10 </strong></br>
<strong>	Charbon muttant = 20 </strong></br> </td>  
</tr>
</table>
</div>

</body>
</html>









