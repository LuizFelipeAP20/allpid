<?php 

use \Hcode\PageAdmind;
use \Hcode\Model\User;

$app->get('/admind', function() {
    
	User::verifyLogin();

	$page = new PageAdmind();

	$page->setTpl("index");

});
$app->get('/admind/cadastrar', function() {

	$page = new PageAdmind([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("cadastrar");

});
$app->get('/admind/login', function() {

	$page = new PageAdmind([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("login");

});

$app->post('/admind/login', function() {

	User::login($_POST["login"], $_POST["password"]);

	header("Location: /admind");
	exit;

});

$app->get('/admind/logout', function() {

	User::logout();

	header("Location: /admind/login");
	exit;

});

$app->get("/admind/forgot", function() {

	$page = new PageAdmind([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot");	

});

$app->post("/admind/forgot", function(){

	$user = User::getForgot($_POST["email"]);

	header("Location: /admind/forgot/sent");
	exit;

});

$app->get("/admind/forgot/sent", function(){

	$page = new PageAdmind([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-sent");	

});


$app->get("/admind/forgot/reset", function(){

	$user = User::validForgotDecrypt($_GET["code"]);

	$page = new PageAdmind([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-reset", array(
		"name"=>$user["desperson"],
		"code"=>$_GET["code"]
	));

});

$app->post("/admind/forgot/reset", function(){

	$forgot = User::validForgotDecrypt($_POST["code"]);	

	User::setFogotUsed($forgot["idrecovery"]);

	$user = new User();

	$user->get((int)$forgot["iduser"]);

	$password = User::getPasswordHash($_POST["password"]);

	$user->setPassword($password);

	$page = new PageAdmind([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("forgot-reset-success");

});

 ?>