<?php

use PHPUnit\Framework\TestCase;

class Exemplo1Teste extends TestCase
{
	public function testeSoma(){

		$soma = 2 + 3;

		$this->assertSoma(5, $soma);
	}


	public function testTrue(){

		$verdadeiro = true;

		$this->assertTrue($verdadeiro);


	}

	public function testFalse(){

		$verdadeiro = false;

		$this->assertFalse($verdadeiro);
	}	

	public function testCount(){

		$array = [0,1,2];

		$this->assertCount(3,$array);
	}

	public function testEmpty(){
		$vazio = null;

		$this->assertEmpty($vazio);
	}

	public function testNull(){
		$vazio = null;

		$this->assertNull($vazio);
	}

	public function testEquals(){
		$a = "a";
		$b = "a";

		$this->assertEquals($a,$b);
	}
}