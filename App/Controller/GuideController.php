<?php

namespace app\Controller;

use Core\Controller\Controller;

class GuideController extends Controller {

    protected $useTable = false;


    public function index() {
        $this->render("guide");
    }

}

?>