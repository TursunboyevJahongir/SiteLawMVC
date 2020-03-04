<?php
session_start();
include_once "application/config/main.php";
include_once "vendor/autoload.php";
include_once "core/helpers/Format.php";
include "core/Model.php";
include "core/Controller.php";
include "core/View.php";


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//Config


Model::setParams($params);
Controller::setParams($params);
include "application/models/LawsModel.php";
include "application/models/RegModel.php";
include "application/models/CategoryModel.php";
include "application/models/galleryModel.php";
include "application/models/AdminModal.php";
include "application/models/MessageModel.php";
include "application/models/CommentModel.php";
include "application/controllers/SiteController.php";
include "application/controllers/StudentController.php";
include "application/controllers/AdminController.php";


$route = isset($_GET['c']) ? $_GET['c']:'';
$method = isset($_GET['m']) ? $_GET['m']: '';
$site = new SiteController('site');
$admin = new AdminController("admin");
$student = new StudentController('student');
$events = new StudentController('events');


if ($route === '') {
    $site->index();
}
else if ($route === 'admin' && $method == '') {
    $admin->admin();
}
else if($route === "logout"){
    $admin->logout();
}
else if ($route == 'site' && $method == 'pdf') {
    $site->pdf();
}
else {
    if ($method !== '') {
        if (method_exists($$route, $method)) {
            $$route->$method();
        }
        else {
            echo "metod yo'q";
            exit;
        }
    }
    else {
        $site->index();
    }
}
