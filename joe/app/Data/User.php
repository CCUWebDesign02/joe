<?php

namespace Data;
use Data\DataFactory;

class User extends DataFactory{

	public function getName() {
		$q = $this->getDB()->query("SELECT member_name FROM member WHERE member_account = 'test'");
		$row = $q->fetch();
		return $row['member_name'];
	}
}