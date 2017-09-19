<?php
namespace App\Table;

use \Core\Table\Table;

class GuideArticleTable extends Table {

	protected $table = "guide_articles";


	public function allInCategory($categoryId) {
		return $this->db->prepare("
			SELECT * FROM {$this->table}
			WHERE category_id = ?
		", [$categoryId], $this->getEntityClass(), false);
	}

}