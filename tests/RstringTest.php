<?php
require('./revertstring.php');
use  PHPUnit\Framework\TestCase;

class RstringTest extends TestCase{
	public function testRevers(){
		$revertedString = revertstring("Привет!");
		$this->assertSame("!тевирП", $revertedString);
	}
}