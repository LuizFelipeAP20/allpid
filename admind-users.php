<?php 

use \Hcode\PageAdmind;
use \Hcode\Model\User;

$app->get("/admind/users/:iduser/password", function($iduser){

	User::verifyLogin();

	$user = new User();

	$user->get((int)$iduser);

	$page = new PageAdmind();

	$page->setTpl("users-password", [
		"user"=>$user->getValues(),
		"msgError"=>User::getError(),
		"msgSuccess"=>User::getSuccess()
	]);

});

$app->post("/admind/users/:iduser/password", function($iduser){

	User::verifyLogin();

	if (!isset($_POST['despassword']) || $_POST['despassword']==='') {

		User::setError("Preencha a nova senha.");
		header("Location: /admind/users/$iduser/password");
		exit;

	}

	if (!isset($_POST['despassword-confirm']) || $_POST['despassword-confirm']==='') {

		User::setError("Preencha a confirmação da nova senha.");
		header("Location: /admind/users/$iduser/password");
		exit;

	}

	if ($_POST['despassword'] !== $_POST['despassword-confirm']) {

		User::setError("Confirme corretamente as senhas.");
		header("Location: /admind/users/$iduser/password");
		exit;

	}

	$user = new User();

	$user->get((int)$iduser);

	$user->setPassword(User::getPasswordHash($_POST['despassword']));

	User::setSuccess("Senha alterada com sucesso.");

	header("Location: /admind/users/$iduser/password");
	exit;

});


$app->get("/admind/users", function() {

	//User::verifyLogin();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	if ($search != '') {

		$pagination = User::getPageSearch($search, $page);

	} else {

		$pagination = User::getPage($page);

	}

	$pages = [];

	for ($x = 0; $x < $pagination['pages']; $x++)
	{

		array_push($pages, [
			'href'=>'/admind/users?'.http_build_query([
				'page'=>$x+1,
				'search'=>$search
			]),
			'text'=>$x+1
		]);

	}

	$page = new PageAdmind();

	$page->setTpl("users", array(
		"users"=>$pagination['data'],
		"search"=>$search,
		"pages"=>$pages
	));

});

$app->get("/admind/users/create", function() {

	User::verifyLogin();

	$page = new PageAdmind();

	$page->setTpl("users-create");

});

$app->get("/admind/users/:iduser/delete", function($iduser) {

	User::verifyLogin();	

	$user = new User();

	$user->get((int)$iduser);

	$user->delete();

	header("Location: /admind/users");
	exit;

});

$app->get("/admind/users/:iduser", function($iduser) {

	User::verifyLogin();

	$user = new User();

	$user->get((int)$iduser);

	$page = new PageAdmind();

	$page->setTpl("users-update", array(
		"user"=>$user->getValues()
	));

});

$app->post("/admind/users/create", function() {

	//User::verifyLogin();

	$user = new User();

	$_POST["inadmin"] = (isset($_POST["inadmin"]))?1:0;

	$_POST['despassword'] = User::getPasswordHash($_POST['despassword']);

	$user->setData($_POST);

	$user->save();

	header("Location: /admind/login");
	exit;

});

$app->post("/admind/users/:iduser", function($iduser) {

	User::verifyLogin();

	$user = new User();

	$_POST["inadmin"] = (isset($_POST["inadmin"]))?1:0;

	$user->get((int)$iduser);

	$user->setData($_POST);

	$user->update();	

	header("Location: /admind/users");
	exit;

});

 ?>