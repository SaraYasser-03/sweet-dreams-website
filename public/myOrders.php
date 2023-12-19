<?php

define('__ROOT__', "../app/");
require_once(__ROOT__ . "model/Users.php");
require_once(__ROOT__ . "controller/UsersController.php");
require_once(__ROOT__ . "view/ViewUser.php");

if (!isset($_SESSION["ID"]) || $_SESSION["ID"] === null) {
  header("Location: login.php");
  exit();
}
$model = new User($_SESSION['id']);
$controller = new UsersController($model);
$view = new ViewUser($controller, $model);

if (isset($_GET['action']) && !empty($_GET['action'])) {
	$controller->{$_GET['action']}();
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="UTF-8">
    <title>My Orders</title>
    <link rel="icon" href="images/Sweet Dreams logo-01.png"type="image/icon type" />

	</head>
<body>
   
    <?php echo $view->nav();?>
     <h1 style="margin-top:30px;">My Orders<h1>
    <?php echo $view->showUserProducts(); ?>
    <?php echo $view->footer();?>
    </section>
    
    <?php include '../app/api/chatbot.php'; ?>
</body>
</html>