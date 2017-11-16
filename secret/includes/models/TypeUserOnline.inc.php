<?php
class TypeUserOnline {
	public $player_id = 0;
	public $username  = "";

	public function __construct($player_id=0, $username="") {
		$this->player_id = $player_id;
		$this->username  = $username;
	}
}