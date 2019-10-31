[![Build Status](https://travis-ci.org/wallee-payment/php-sdk.svg?branch=master)](https://travis-ci.org/wallee-payment/php-sdk)

# wallee PHP Library

The wallee PHP library wraps around the wallee API. This library facilitates your interaction with various services such as transactions, accounts, and subscriptions.


## Documentation

[wallee Web Service API](https://app-wallee.com/doc/api/web-service)

## Requirements

- PHP 5.6.0 and above

## Installation

You can use **Composer** or **install manually**

### Composer

The preferred method is via [composer](https://getcomposer.org). Follow the
[installation instructions](https://getcomposer.org/doc/00-intro.md) if you do not already have
composer installed.

Once composer is installed, execute the following command in your project root to install this library:

```sh
composer require wallee/sdk
```

### Manual Installation

Alternatively you can download the package in its entirety. The [Releases](../../releases) page lists all stable versions.

Uncompress the zip file you download, and include the autoloader in your project:

```php
require_once '/path/to/php-sdk/autoload.php';
```

## Usage
The library needs to be configured with your account's space id, user id, and secret key which are available in your [wallee
account dashboard](https://app-wallee.com/account/select). Set `space_id`, `user_id`, and `api_secret` to their values.

### Configuring a Service

```php
require_once(__DIR__ . '/autoload.php');

// Configuration
$spaceId = 405;
$userId = 512;
$secret = 'FKrO76r5VwJtBrqZawBspljbBNOxp5veKQQkOnZxucQ=';

// Setup API client
$client = new \Wallee\Sdk\ApiClient($userId, $secret);

// Create API service instance
$transactionService = new \Wallee\Sdk\Service\TransactionService($client);
$transactionPaymentPageService = new \Wallee\Sdk\Service\TransactionPaymentPageService($client);

```

To get started with sending transactions, please review the example below:

```php
require_once(__DIR__ . '/autoload.php');

// Configuration
$spaceId = 405;
$userId = 512;
$secret = 'FKrO76r5VwJtBrqZawBspljbBNOxp5veKQQkOnZxucQ=';

// Setup API client
$client = new \Wallee\Sdk\ApiClient($userId, $secret);

// Create API service instance
$transactionService = new \Wallee\Sdk\Service\TransactionService($client);
$transactionPaymentPageService = new \Wallee\Sdk\Service\TransactionPaymentPageService($client);

// Create transaction
$lineItem = new \Wallee\Sdk\Model\LineItemCreate();
$lineItem->setName('Red T-Shirt');
$lineItem->setUniqueId('5412');
$lineItem->setSku('red-t-shirt-123');
$lineItem->setQuantity(1);
$lineItem->setAmountIncludingTax(29.95);
$lineItem->setType(\Wallee\Sdk\Model\LineItemType::PRODUCT);


$transaction = new \Wallee\Sdk\Model\TransactionCreate();
$transaction->setCurrency('EUR');
$transaction->setLineItems(array($lineItem));
$transaction->setAutoConfirmationEnabled(true);

$createdTransaction = $transactionService->create($spaceId, $transaction);

// Create Payment Page URL:
$redirectionUrl = $transactionPaymentPageService->paymentPageUrl($spaceId, $createdTransaction->getId());

header('Location: ' . $redirectionUrl);

```

## License

Please see the [license file](https://github.com/wallee-payment/php-sdk/blob/master/LICENSE) for more information.
