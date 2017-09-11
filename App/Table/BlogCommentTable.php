<?php
namespace App\Table;

use \Core\Table\Table;

class BlogCommentTable extends Table {

	protected $table = "blog_comments";


	public function findFor($id) {
		return $this->db->prepare("
			SELECT * FROM {$this->table}
			WHERE article_id = ?
			ORDER BY date DESC
		", [$id], $this->getEntityClass(), false);
	}

}