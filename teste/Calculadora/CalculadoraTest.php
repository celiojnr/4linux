<?php

require_once 'Calculadora.php';

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
	
	public function testeSoma(){

		$calculadora = new calculadora(2,3);

		$this->assertSame(5, $calculadora->somar());
	}

	public function testeSubtrair(){

		$calculadora = new calculadora(5,3);

		$this->assertSame(2, $calculadora->subtrair());
	}

	public function testeMult(){

		$calculadora = new calculadora(2,8);

		$this->assertSame(16, $calculadora->Mult());
	}


	//teste para soma
	//teste para subtrair
	//teste para multiplicar
	//teste para dividir
}