<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Calculator;

class MyFirstUnitTest extends TestCase
{
    public function testDeposite()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->deposite(2, 2) == 4);
    }
    public function testTransfer()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->transfer(2, 2) == 0);
    }
    public function testInterest()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->interest(2, 2) == .2);
    }
 public function testLoanclaculation()
    {
        $calculator = new Calculator();
        $this->assertTrue($calculator->loan(100, 5) == 20);
    }

    

}
