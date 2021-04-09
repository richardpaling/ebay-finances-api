# OpenAPIClient-php

This API is used to retrieve seller payouts and monetary transaction details related to those payouts.


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: api_auth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payout_id = 'payout_id_example'; // string | The unique identfier of the payout is passed in as a path parameter at the end of the call URI. The getPayouts method can be used to retrieve the unique identifier of a payout, or the user can check Seller Hub to get the payout ID.

try {
    $result = $apiInstance->getPayout($payout_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayout: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://apiz.ebay.com/sell/finances/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PayoutApi* | [**getPayout**](docs/Api/PayoutApi.md#getpayout) | **GET** /payout/{payout_Id} | 
*PayoutApi* | [**getPayoutSummary**](docs/Api/PayoutApi.md#getpayoutsummary) | **GET** /payout_summary | 
*PayoutApi* | [**getPayouts**](docs/Api/PayoutApi.md#getpayouts) | **GET** /payout | 
*SellerFundsSummaryApi* | [**getSellerFundsSummary**](docs/Api/SellerFundsSummaryApi.md#getsellerfundssummary) | **GET** /seller_funds_summary | 
*TransactionApi* | [**getTransactionSummary**](docs/Api/TransactionApi.md#gettransactionsummary) | **GET** /transaction_summary | 
*TransactionApi* | [**getTransactions**](docs/Api/TransactionApi.md#gettransactions) | **GET** /transaction | 
*TransferApi* | [**getTransfer**](docs/Api/TransferApi.md#gettransfer) | **GET** /transfer/{transfer_Id} | 

## Models

- [Amount](docs/Model/Amount.md)
- [BalanceAdjustment](docs/Model/BalanceAdjustment.md)
- [Buyer](docs/Model/Buyer.md)
- [Charge](docs/Model/Charge.md)
- [Error](docs/Model/Error.md)
- [ErrorParameter](docs/Model/ErrorParameter.md)
- [Fee](docs/Model/Fee.md)
- [FundingSource](docs/Model/FundingSource.md)
- [OrderLineItem](docs/Model/OrderLineItem.md)
- [Payout](docs/Model/Payout.md)
- [PayoutInstrument](docs/Model/PayoutInstrument.md)
- [PayoutSummaryResponse](docs/Model/PayoutSummaryResponse.md)
- [Payouts](docs/Model/Payouts.md)
- [Reference](docs/Model/Reference.md)
- [SellerFundsSummaryResponse](docs/Model/SellerFundsSummaryResponse.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionSummaryResponse](docs/Model/TransactionSummaryResponse.md)
- [Transactions](docs/Model/Transactions.md)
- [Transfer](docs/Model/Transfer.md)
- [TransferDetail](docs/Model/TransferDetail.md)

## Authorization

### api_auth

- **Type**: `OAuth`
- **Flow**: `accessCode`
- **Authorization URL**: `https://auth.ebay.com/oauth2/authorize`
- **Scopes**: 
    - **https://api.ebay.com/oauth/api_scope/sell.finances**: View and manage your payment and order information to display this information to you and allow you to initiate refunds using the third party application

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.8.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
