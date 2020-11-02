<?php
require "./autoload.php" ;


use PHPUnit\Framework\TestCase;

class ClasseTest extends TestCase
{

    public function testVerifiePassagerClandestin()
    {
        $slamOption = new Option("SIO","BTS",19,"SLAM",16) ;
        $sisrOption = new Option("SIO","BTS",16,"SISR",14) ;

        $eleveProlong = new Eleve("Prolong","Brian",$slamOption) ;
        $eleveAhmed = new Eleve("Ahmed","Isra",$slamOption) ;
        $eleveBitoun = new Eleve("Bitoun","Benjamin",$sisrOption) ;

        $listeEleves = array($eleveProlong,$eleveAhmed,$eleveBitoun) ;
        $classeSio2Slam = new Classe($slamOption,$listeEleves) ;

        $this->assertEquals(1,count($classeSio2Slam->listePassagersClandestins()), "Erreur calcul passager clandestin") ;


    }
}
