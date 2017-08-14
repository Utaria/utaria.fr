<?php
namespace App\Table;

use \Core\Table\Table;

class BlogCommentTable extends Table {

	protected $table = "blog_comments";


	public function findFor($id) {
		// TODO : retourner les articles pour l'article avec l'identifiant $id.
		return array();
	}

}