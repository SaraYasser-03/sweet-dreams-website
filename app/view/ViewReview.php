<?php

require_once(__ROOT__ . "view/View.php");


class ViewReview extends View{
    public function output(){

    }
    	public function review(){
    $str = '
    <link rel="stylesheet" href="../public/css/User/reviews.css">
        <div class="review">';
    
    $reviews = $this->model->review(); // Fetch reviews using the review() function
    
    // Display fetched reviews
    foreach ($reviews as $review) {
        $fullname = $review['fullname']; // Assuming 'fullname' is a column in your database
        $reviewText = $review['review']; // Assuming 'review_text' is a column in your database
    
        $str .= '
            <div class="container">
                <label><strong>' . $fullname . '</strong></label>
                <p>' . $reviewText . '</p>  
                </div>
            ';
    }
    
    $str .= '
      
    </div>';
    
    return $str;
}
public function footer()
{
  $str='
  <link rel="stylesheet type="text/css" href="../public/css/User/footer.css">

  <footer class="pageFooter">
    <div class="col">
      <a href="index.php"><img class="Logo" src="../public/images/Sweet Dreams logo-01.png" alt="" width="145" height="100"></a>
      <h4>Contact</h4>
      <p><strong>Adress: </strong>Misr International University</p>
      <p><strong>Phone: </strong>010000000</p>
      <p><strong>Hours: </strong>9 am - 12 am . Mon-Sat</p>
      <div class="follow">
        <h4>Follow us</h4>
        <div class="icon">
          <a href="https://www.facebook.com/"> <i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
          <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
          <a href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a>
          <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
    </div>
    <div class="col">
      <h4>About</h4>
      <a href="#">About us</a>
      <a href="index.php">Home</a>
      <a href="#">Privacy policy</a>
      <a href="#">Terms & conditions</a>

    </div>

    <div class="col">
      <h4>My Account</h4>
      <a href="login.php">Sign in</a>
      <a href="#">View cart</a>
      <a href="#">My wishlist</a>
    </div>

    <div class="col install">
      <h4>Install app</h4>
      <p>From App-Store or Google play</p>
      <div class="row">
        <img src="../public/images/appStore.png" width="130" height="40">
        <img src="../public/images/googlePlay (2).png" width="130" height="40">
      </div>
      <p>Secured payment geteways</p>
      <img src="../public/images/Payment.png" width="300" height="50">

    </div>

  </footer>
  <div class="copyright">
    <p>© 2023, Sweet dreams - E-Commerce</p>
  </div>
  ';
  return $str;
}
    
}