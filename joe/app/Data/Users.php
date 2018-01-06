<?php

namespace Data;
use Data\DataFactory;

class Users extends DataFactory{

	public function getUserByID($id) {
		$q = $this->getDB()->query("SELECT member_name FROM member WHERE member_account = '$id'");
		$row = $q->fetch();
		return $row['member_name'];
	}

	public function getUserByAccount($account) {
		$q = $this->getDB()->query("SELECT * FROM users WHERE account = '$account'");
		$row = $q->fetch();
		return $row;
	}

	public function insertUser($user) {
		
	}
}