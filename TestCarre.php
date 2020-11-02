<?php
require "Calcul.php";

use PHPUnit\Framework\TestCase;

class CalculTest extends TestCase {
    public function testMethodeCarre()
    {
        $this->assertEquals(36,Calcul::carre(6));
    }

}