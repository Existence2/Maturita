 <?php
 $t1 = "Prihlaste se prosím";
	   $t2 = "Heslo";
	   $t3 = "Zùstat prihlášen?";
	   $t4 = "Prihlásit";
	   $t5 = "E-mail";
   
   
	 
	 
   echo "<div class=\"panel panel-primary\">";
	echo "<div class=\"panel-heading\"> ";
	echo "<h3 class=\"panel-title\">$t1</h3>";
	echo "</div>";
	echo "<div class=\"panel-body\"> ";
	echo "<form role\"form\" method=post >";
	  echo "<input type=\"hidden\" name=\"id_akce\" value=\"user\">";
  	  echo "<input type=\"hidden\" name=\"akce\" value=\"login\">";
	 echo "<div class=\"form-group\"> ";
	  echo "<label for=\"email\">E-mail</label>";
	  echo "<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\"   placeholder=\"$t5\"> ";
     echo "</div>";
	 echo "<div class=\"form-group\">";
	  echo "<label for=\"heslo\">$t2</label>";
	  echo "<input type=\"password\" class=\"form-control\" id=\"heslo\" name=\"heslo\" placeholder=\"$t2\">";
	 echo "</div>";
	 echo "<div class=\"checkbox\"> ";
	  echo "<label> <input type=\"checkbox\" name=\"trvale\" > $t3 </label> ";
	 echo "</div>";
	 echo "<button type=\"submit\" class=\"btn btn-primary\">$t4</button> ";
	 echo "</form>";
	echo "</div>";
   echo "</div>";
  
 ?> 
  ////////////////
   <!--
  <div class="row">
  <div class="col-sm-7">
     <img src="kapr_obecny.gif" alt="kapr_obecny.gif" title="Kapr obecny" height="242" width="519">
   </div> 
   <div class="col-sm-">
   <br>
   
  <div class="panel-group">
  <div class="panel panel-primary">
    <div class="panel-body">Přihlášení</div>
  </div>
  <div class="panel panel-primary">
  <div class="panel-body">
   
   <form>
   <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email"  id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
   </form>
   </div>
   
   </div>
  </div>
 </div>
 
   
  </div> 
     -->