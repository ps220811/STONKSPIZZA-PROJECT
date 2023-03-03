<?php

namespace Tests\Unit;

use App\Models\Winkelmandje;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertEqualsWithDelta;

class WinkelmandjeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_pizzaprice()
    {
        // arange
        $pizza = new Winkelmandje();
        $pizza->groote = 0.8;
        $pizza->price = 10;

        // act
        $pizzaprice = $pizza->PizzaPrijs();


        //assert 
        return assertEquals(8.0, $pizzaprice, 'berekening pizza price fout in test_store_method_item');
    }
}
