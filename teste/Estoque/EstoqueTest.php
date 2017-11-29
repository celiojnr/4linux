<?php

require_once "Estoque.php";

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase
{
	
	private $estoque;

	public function setUp(){
		$this->estoque = new Estoque();
	}

	public function testAddItem(){
		$item = "Blusa X";
		$quantidade = 10;

		$this->estoque->addItem($item,$quantidade);

		$estoque = new Estoque();
		$estoque->addItem($item,$quantidade);

		$this->assertSame($quantidade,$estoque->getItem($item));
	}


	public function testSomaQuantidade(){
		$item = 'blusa X';

		$estoque = new Estoque();
		$estoque->addItem($item,1);
		$estoque->addItem($item,2);
		$estoque->addItem($item,3);
		

		$this->assertSame(6,$estoque->getItem($item));
	}

	  /**
		* @expectedException InvalidArgumentException
		* @expectedExceptionMessage Item nao existe no estoque
		*/
	public function testItemInvalido(){		

		$estoque = new Estoque();
		$estoque->getItem("Blusa Y");
	}

	public function testRemoveQuantidade(){

	$this->estoque->addItem("blusa A",10);
		$this->estoque->removeItem("blusa A",4);

		$this->assertSame(6,$this->estoque->getItem("blusa A"));
	}	
}