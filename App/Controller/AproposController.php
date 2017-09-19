<?php

namespace app\Controller;

use Core\Controller\Controller;

class AproposController extends Controller {

	protected $useTable = false;
	

    public function conditions() {
        $this->render("apropos.conditions");
    }

}