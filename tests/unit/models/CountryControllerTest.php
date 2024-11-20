<?php

namespace tests\unit;

use Codeception\Test\Unit;
use app\models\Country;

class CountryTest extends Unit
{
    public function testCreateCountry()
    {
        $country = new Country();
        $country->name = 'Тестова країна';
        $country->code = 'TEST';
        $country->population = 100000;


        $this->assertTrue($country->save());
        $this->assertEquals('Тестова країна', $country->name);
        $this->assertEquals('TEST', $country->code);
        $this->assertEquals(100000, $country->population);
    }
}
