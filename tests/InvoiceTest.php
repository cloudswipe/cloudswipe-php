<?php

namespace CloudSwipe;

use CloudSwipe\Resource;
use CloudSwipe\Invoice;

class InvoiceTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        Resource::setSecretKey("sk_store_68b8bfedbea80675fcf1374e");
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

    public function testGetAll()
    {
        $invoice = Invoice::create([
            "description" => "T-Shirt",
            "total" => 1995
        ]);

        $fetched = Invoice::getAll();
    }
}
