<?php

require_once 'Cliente.php';

use PHPUnit\Framework\CTestCase;

class Exemplo1Test extends TestCase
{
	public function testCriacaoCliente(){

		$cliente = new Cliente ('Lucas');

		$this->assertName("Lucas",$cliente->getNome());
	}
}

