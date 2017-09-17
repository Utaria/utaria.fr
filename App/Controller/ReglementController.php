<?php
namespace app\Controller;

use Core\Controller\Controller;
use App\Helper\API;

class ReglementController extends Controller {

    protected $useTable = false;


    public function index() {
    	$updateDate = API::get("util.reglement", array("date" => true))->update_date;
    	$updateDate = strftime("%d %B %Y", $updateDate);

        $this->render("reglement", compact("updateDate"));
    }

}