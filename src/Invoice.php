<?php

namespace CloudSwipe;

class Invoice extends Resource
{
    public function __construct()
    {
        parent::__construct("invoices", "invoice");
    }
}
