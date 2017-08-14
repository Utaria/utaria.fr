<?php
namespace App\Table;

use \Core\Table\Table;

class BlogCategorieTable extends Table {

	protected $table = "blog_categories";


	public function getNameById($id) {
		$el = $this->find($id);

		if (is_null($el)) return null;
		else              return $el->name;
	}

}