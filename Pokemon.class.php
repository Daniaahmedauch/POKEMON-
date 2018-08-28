<?php


class Pokemon
{
	public $nom;
	public $type;
	public $faiblesse;
	public $pointdevie;
	public $attaque1;
	public $attaque2;


    public function __construct($nom,$type,$faiblesse,$pointdevie,$attaque1,$attaque2)

    {
    	$this->nom=$nom;
    	$this->type=$type;
    	$this->faiblesse=$faiblesse;
    	$this->pointdevie=$pointdevie;
    	$this->attaque1=$attaque1;
    	$this->attaque2=$attaque2;

       
   }
 

 	public function attaque1($pointdevie)	
 	{
		$pointdevie ->pointdevie = $pointdevie ->pointdevie-10;			
	}


// // Fonction deuxieme attaque
 		public function attaque2($pointdevie)
	{
		$pointdevie ->pointdevie = $pointdevie ->pointdevie-20;
	}

    public function attaquer (Pokemon $p, int $num_attaque)

    if ($num_attaque !=1 $$ $num_attaque !=2) 
    {
    	return "Cette attaque est inconnue !";
    }

     {
     	$pointdevie ->pointdevie = $pointdevie ->pointdevie -10;
     }


   //  public function afficher()

   //  {
   //  	if( $this->p1 != 0 )
			// {
			// 	print '<img class="mou.jpeg" src="' . $this->pokemon . '" >';

			// 	print 
			// 	"<div>
			// 		<form method='GET'>
			// 			<button name='att1' type='submit'>att1</button>
			// 			<button name='att2' type='submit'>att2</button>
			// 		</form>
			// 	</div>";
			// }
   //  }


}
?>