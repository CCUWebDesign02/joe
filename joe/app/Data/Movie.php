<?php

namespace Data;

use Data\DataFactory;

class Movie {
	private $db;
	public $zh_name;
	public $en_name;
	public $duration;
	public $rating;
	public $released;
	public $director;
	public $actors;
	public $intro;
	public $trailer_url;

	public $banner;
	public $poster;

	public function __construct($id) {
		$dbFactory = new \Data\DataFactory();
		$this->db = $dbFactory->getDB();
	}

	public function updateInfo() {

	}
}