<?php

namespace app\Controller;

use Core\Controller\Controller;

class GuideController extends Controller {

    protected $useTable = false;


    public function index() {
        $this->render("guide");
    }

    public function subcategory() {
    	$this->render("guide.subcategory");
    }

    public function article() {
    	$this->render("guide.article");
    }

}

?>