<?php

namespace App\Table;

use Core\Table\Table;

class BlogTable extends Table {

	protected $table = "blog_articles";


	public function allByDate() {
		return $this->db->query("
			SELECT * from {$this->table}
			ORDER BY date DESC
		", $this->getEntityClass());
	}

	public function find($id) {
		return $this->db->prepare("
			SELECT * FROM {$this->table}
			WHERE id = ? AND not removed
		", [$id], $this->getEntityClass(), true);
	}

	public function findActive($id) {
		$article = $this->find($id);

		return ($article != null && !$article->draft && $article->date != null && strtotime($article->date) <= strtotime("now")) ? $article : null;
	}

}

?>