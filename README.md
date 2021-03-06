**NOTE: This library is still in development and is not ready to be used in
production yet.**

# CloudSwipe PHP Library

This library can be used to interact with the [CloudSwipe API](http://cloudswipe.com).

## Requirements

* PHP 5.4 or later
* [JSON API PHP Client](https://github.com/cloudswipe/json-api-php-client)
  (auto-included via Composer)

## Composer

You can install it via [Composer](https://getcomposer.org).  Run the following
command:

```bash
composer require cloudswipe/cloudswipe-php
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/00-intro.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Usage

### Authentication
All API authentication is done using HTTP Authentication with the **Secret Key** available in your CloudSwipe account.

You can set the **Secret Key** for all requests like this:

```php
CloudSwipe\CloudSwipe::setSecretKey("sk_store_12345");
```

### Invoices

#### Create New Invoice

```php
// bare minimum invoice
$invoice = CloudSwipe\Invoice::create([
  "description" => "T-Shirt",
  "total" => 1995,
  "currency" => "USD"
]);

// more detailed invoice
$invoice = CloudSwipe\Invoice::create([
  "total" => 2705,
  "currency" => "USD",
  "customer" => [
    "name" => "Bud Abbott",
    "email" => "bud@abbott.com"
    "billing_address" => [
      "name" => "Bud Abbott",
      "company" => "Laugh Lines",
      "line1" => "123 Anystreet",
      "line2" => "Suite A",
      "city" => "Anytown",
      "state" => "VA",
      "zip" => "12345",
      "country" => "US",
      "phone" => "111-222-3333"
    ],
    "shipping_address" => [
      "name" => "Lou Costello",
      "company" => "Laugh Lines",
      "line1" => "456 Otherstreet",
      "line2" => "Suite Z",
      "city" => "Othertown",
      "state" => "VA",
      "zip" => "12345",
      "country" => "US",
      "phone" => "111-222-3333"
    ],
    "line_items" => [
      "header" => ["Item", "Description", "Quantity", "Total"],
      "rows" => [
        ["T-Shirt", "Small, Blue", 1, 1095],
        ["Mug", "Branded Coffee Mug", 2, 535]
      ]
    ],
    "line_totals" => [
      "rows" => [
        ["Discount" => 500],
        ["Tax" => 245],
        ["Shipping" => 795]
      ]
    ],
    "metadata" => [
      "some-custom-field" => "some-custom-value"
    ]
  ]
]);
```

#### Get A Single Invoice
```php
$invoice = CloudSwipe\Invoice::getOne("in_12345");
```

#### Get All Invoices
```php
$invoices = CloudSwipe\Invoice::getAll();
```
