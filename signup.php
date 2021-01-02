<?php 
     include_once 'header.php';
?>	 
	 
<section class="main-container">
     <div class="main-wrapper">
	    <h2>signup</h2>
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
		    <input type="text" name="first" placeholder="firstname">
			<input type="text" name="last" placeholder="lastname">
			<input type="text" name="email" placeholder="e-mail">
			<input type="text" name="uid" placeholder="username">
			<input type="password" name="pwd" placeholder="password">
	 	    <button type="submit" name="submit">sign up</button>
	    </form>
	 </div>	
</section>

class Signup1{
  public function print(){
    String a = "successful";
    return a;
    
  }
}
<?php
    include_once 'footer.php';
?>	
  