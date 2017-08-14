<?php
namespace App\Table;

use Core\Table\Table;

class BlogTable extends Table {

	protected $table = "blog_articles";


	public function find($id) {
		return $this->db->prepare("
			SELECT * FROM {$this->table}
			WHERE id = ? AND not removed
		", [$id], $this->getEntityClass(), true);
	}

	public function findActive($id) {
		$article = $this->find($id);

		return (!$article->draft && $article->date != null && strtotime($article->date) <= strtotime("now")) ? $article : null;
	}

}