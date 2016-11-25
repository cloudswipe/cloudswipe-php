<?php

namespace CloudSwipe;

class InvoiceTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        CloudSwipe::setSecretKey("sk_store_450a2f49069330d59136400c");
    }

    public function testCreate()
    {
        $invoice = Invoice::create([
            "description" => "T-Shirt",
            "total" => 1995,
            "currency" => "USD",
            "customer" => [
                "name" => "Bud Abbott",
                "email" => "bud@abbott.com"
            ]
        ]);
    }

    public function testGetOne()
    {
        $invoice = Invoice::create([
            "description" => "T-Shirt",
            "total" => 1995
        ]);

        $fetched = Invoice::getOne($invoice->id);
    }
}
