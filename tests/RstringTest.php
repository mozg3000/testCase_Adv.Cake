<?php
use  PHPUnit\Framework\TestCase;

class RstringTest extends TestCase{
	public function testRevers(){
		$reverser = new app\utiles\RevertString();
		$revertedString = $reverser->revert("Привет!");
		$this->assertSame("!тевирП", $revertedString);
	}
}