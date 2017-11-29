<?php

require_once "Pedido.php";

use PHPUnit\Framework\TestCase;

class PedidoTest extends PHPUnit_Framework_TestCase
{
	private $estoque;
	public function setUp()
	{
		$this->estoque = new Estoque();
		$this->estoque->add('blusa amarela P', 10)
		$this->estoque->add('blusa alca azul', 5);
	}

	public function testDeveFecharPedido()
	{
		$pedido = new Pedido('blusa alca azul', 5);
		$pedido->fechar($this->estoque);

		$this->assertTrue($pedido->isFinalizado());
		$this->assertSame(0,$this->estoque->get('blusa alca azul'()); 
	}

}