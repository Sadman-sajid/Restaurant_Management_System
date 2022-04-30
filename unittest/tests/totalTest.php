<?php
class totalTest extends \PHPUnit\Framework\TestCase

{
    public $payment;
    function testpayment()
    {
        $totalbill=150;
        $this->assertequals($totalbill,150);
    }
}