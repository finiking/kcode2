<?php
class cal {
	private $x = 0;
	private $y = 0;
	private $c;

	public function __construct($x, $y, $c) {
		$this -> x = $x;
		$this -> y = $y;
		$this -> c = $c;
	}
	function docal(){
		switch ($this -> c) {
			case '+':
				return $this ->add();
			case '-':
				return $this ->sub();
			case '*':
				return $this ->mul();
			case '/':
				return $this ->div();
		}
	}

	private function add() {
		return $this -> x + $this -> y;
	}
	private function sub(){
		return $this -> x - $this -> y;
	}
	private function mul(){
		return $this -> x * $this -> y;
	}
	private function div(){
		return $this -> x / $this -> y;
	}
}
?>