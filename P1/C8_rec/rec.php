<?php
class rec {
	public $width;
	public $height;

	public function __construct($w = 0, $h = 0) {
		$this -> width = $w;
		$this -> height = $h;
	}

	public function getArea() {
		return ($this -> width * $this -> height);
	}

	public function getPer() {
		return (($this -> width + $this -> height) * 2);
	}

	function isSquare() {
		if ($this -> width == $this -> height) {
			return true;
		} else {
			return false;
		}
	}
}
?>