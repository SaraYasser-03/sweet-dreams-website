<?php

require_once(__ROOT__ . "view/View.php");

class ViewUser extends View{	
	public function output(){
		$str="";
		$str.="<h1>Welcome ".$this->model->getName()."</h1>";
		$str.="<h5>Age: ".$this->model->getAge()."</h5>";
		$str.="<h5>Phone: ".$this->model->getPhone()."</h5>";
		$str.="<br><br>";
		$str.="<a href='profile.php?action=edit'>Edit Profile </a><br><br>";
		$str.="<a href='profile.php?action=movie'>My Movies </a><br><br>";
		$str.="<a href='profile.php?action=signOut'>SignOut </a><br><br>";
		$str.="<a href='profile.php?action=delete'>Delete Account </a>";
		return $str;
	}

	function signupForm(){
		$str='<section class="container">
        <a href="index.php"><img src="../../public/images/Sweet Dreams logo-01.png" alt="logo" ></a>
          <form action="index.php?action=insert" method="post"">
            <div class="input-box">
              <label>Full Name</label>
              <input type="text" name="name" placeholder="Enter your name" required>
            </div>
    
            <div class="input-box">
              <label>Email Address</label>
              <input type="text" name="email" id="email" placeholder="username@email.com" required />
            </div>
    
            <div class="input-box">
              <label>Phone number</label>
              <input type="text" name="phone" id="phone"  required />
    
            </div>
    
            <div class="input-box">
                <label>Password</label>
                <input type="password" name="password" method="post" placeholder="Enter your password" required />
              </div>
              
    
            <div class="input-box">
                <label>Confirm password</label>
                <input type="password" name="confirm" placeholder="Confirm your password" required />
            </div>
    
            <div class="column">
              <div class="input-box">
                <label>Birth Date</label>
                <input type="date" name="birth" placeholder="Enter birth date" required />
              </div>
            </div>
            <div class="gender-box">
              <h3>Gender</h3>
              <div class="gender-option">
                <div class="gender">
                  <input type="radio" id="check-male" name="gender" value="male"/>
                  <label for="check-male">Male</label>
                </div>
                <div class="gender">
                  <input type="radio" id="check-female" name="gender" value="female" />
                  <label for="check-female">Female</label>
                </div>
               <span>already have an account?<a href="login.php">Login here!</a></span>
            </div>
          
          <input type="submit"/>
          </form>
        </section>
        ';
		return $str;
	}

  public function loginForm() {
    $str='
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            <br>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
            <br>

            <button type="submit" name="login">Login</button>
        </form>';
        return $str;    


}
}
?>
