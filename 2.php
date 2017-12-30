
  <div class="panel-group">
  <div class="panel panel-primary">
    <div class="panel-body">Registrace</div>
  </div>
  <div class="panel panel-primary">
  <div class="panel-body">
   
   <form>
   <div class="form-group">
    <label for="jmeno">Jmeno</label>
    <input type="text" class="form-control" name="jmeno"  id="jmeno">
  </div>
   <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="newemail"  id="newemail">
  </div>
  <div class="form-group">
    <label for="heslo">Heslo:</label>
    <input type="password" class="form-control" name="heslo" id="heslo">
  </div>
  <div class="form-group">
    <label for="reheslo">Znovu heslo:</label>
    <input type="password" class="form-control" name="reheslo" id="reheslo">
  </div>
  </div>
  <button type="submit" name=registrace class="btn btn-default">Potvrd</button>
   </form>
   </div>
   
   </div>
  </div>
 </div>
 
   
  </div> 

  
<?php

require("../CONNECT/CONNECT.php");


  
  $databaze=new mysqli($host, $user, $password, $db) or die("connect ERROR");
  if ($databaze->connect_errno){
    printf("Pripojeni spadlo: %s\n", $databaze->connect_error);
    exit();
  }

if (isset($_POST['registrace']))
{
   
  if($_POST['heslo'] <> "" and  $_POST['jmeno'] <>""){
  
  	$jmeno=$_POST["jmeno"];
		$heslo=$_POST["heslo"];
    $prikaz="SELECT * from uzivatel";
    $vysledek = $databaze->query($prikaz);
   While($radek=$vysledek->fetch_object())
  
   {
    
    if($radek->jmeno ==$jmeno ){
     if($radek->heslo ==$heslo ){
      echo "Tyto údaje jsou již obsazené, zvolte prosím jiné. " ;
      exit();
     } 
    
   }
   }
   
		$prikaz="INSERT into uzivatel VALUES('Null',?,?)";
	

		$vysledek=$databaze->prepare($prikaz);
		$vysledek->bind_param("ss",$jmeno,$heslo);
		$vysledek->execute();
		echo "Váš účet byl vytvořen.<br><br>";
   }
   else
        echo"Jméno a heslo nebylo zadané, registrace neproběhla<br><br>";
}  
  


?>
