<?php

require_once "../Estoque/Estoque.php";

use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase{

private $estoque;

public function setUp(){
	$this->estoque = $this->getMockbuilder("estoque")->getMock();
}

	public function testDeveFecharPedido(){
		$item = "Blusa X";
		$quantidade = 3; 

	$this->estoque->expects($this->once())	
		->method("getItem")
		->with($this->equalTo($item))
		->will($this->returnValue($quantidade));

	$pedido = new Pedido($item, $quantidade);
	$pedido->fecharPedido($this->estoque);	

		$item = "Blusa X";
		$quantidade = 3;

		$this->estoque->expects($this->once())
		->method("get")
		->with($this->qualTo($item))
		->will($this->returnValue(0));
		
	$this->estoque->expects($this->never())
	->method("removeItem");

	$pedido = new Pedido($item,$quantidade);

	$pedido->fecharPedido($this->estoque);

	$this->assertFalse($pedido->isFinalizado());

	}
}
