<?php

namespace test;

use App\Class\Arbitre;
use DateTime;
use PHPUnit\Framework\TestCase;

class ArbitreTest extends TestCase
{
    public function testAll(): void
    {
        $unArbitre = new Arbitre ("Pitana","Nestor", new DateTime("1975-06-17"), "Argentin");
        $this->assertEquals("Argentin", $unArbitre->getNationnalite());

        $this->assertEquals("Arbitre : Pitana Nestor 17/06/1975", $unArbitre->donneTexte());
    }

}
