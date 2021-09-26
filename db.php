<?php

function connect_sqlite_db($filename) {

	class sqliteDB extends SQLite3 {

		function __construct($filename) {

			$this->open($filename);
		}

	}

	$db = new sqliteDB($filename);
	return $db;

}

$connection = connect_sqlite_db('test.db');
$connection->exec('CREATE TABLE vtmp (name STRING, version STRING, arch STRING, ssh STRING, size STRING, doc STRING, vtmpc STRING, family STRING, addnote STRING, ovafile STRING, vmdkfile STRING)');

?>
