<?php

namespace app\Controller;

use Core\Controller\Controller;

class PartenairesController extends Controller {

    public function index() {
    	$dbPartenaires = $this->getTable()->all();
    	$partenaires   = array(
    		"youtube" => array(), "twitch" => array(), "service" => array()
    	);

    	foreach ($dbPartenaires as $partenaire)
    		$partenaires[$partenaire->type][] = $partenaire;

        $this->render("partenaires", compact('partenaires'));
    }

}

?>