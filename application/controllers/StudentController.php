<?php
/**
 * Created by PhpStorm.
 * User: Jahongir
 * Date: 12.04.2019
 * Time: 17:02
 */

class StudentController extends Controller
{
    public function index() {
        $this->render('index');
    }

    public function news() {
        echo "salom";
    }
}