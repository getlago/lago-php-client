# Lago\LagoPhpClient\WalletsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWallet()**](WalletsApi.md#createWallet) | **POST** /wallets | Create a wallet |
| [**createWalletTransaction()**](WalletsApi.md#createWalletTransaction) | **POST** /wallet_transactions | Top up a wallet |
| [**destroyWallet()**](WalletsApi.md#destroyWallet) | **DELETE** /wallets/{lago_id} | Terminate a wallet |
| [**findAllWalletTransactions()**](WalletsApi.md#findAllWalletTransactions) | **GET** /wallets/{lago_id}/wallet_transactions | List all wallet transactions |
| [**findAllWallets()**](WalletsApi.md#findAllWallets) | **GET** /wallets | List all wallets |
| [**findWallet()**](WalletsApi.md#findWallet) | **GET** /wallets/{lago_id} | Retrieve a wallet |
| [**findWalletTransaction()**](WalletsApi.md#findWalletTransaction) | **GET** /wallet_transactions/{lago_id} | Retrieve a wallet transaction |
| [**updateWallet()**](WalletsApi.md#updateWallet) | **PUT** /wallets/{lago_id} | Update a wallet |
| [**walletTransactionPaymentUrl()**](WalletsApi.md#walletTransactionPaymentUrl) | **POST** /wallet_transactions/{lago_id}/payment_url | Generate a payment URL |


## `createWallet()`

```php
createWallet($wallet_create_input): \Lago\LagoPhpClient\Model\Wallet
```

Create a wallet

This endpoint is used to create a wallet with prepaid credits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_create_input = new \Lago\LagoPhpClient\Model\WalletCreateInput(); // \Lago\LagoPhpClient\Model\WalletCreateInput | Wallet payload

try {
    $result = $apiInstance->createWallet($wallet_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_create_input** | [**\Lago\LagoPhpClient\Model\WalletCreateInput**](../Model/WalletCreateInput.md)| Wallet payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Wallet**](../Model/Wallet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createWalletTransaction()`

```php
createWalletTransaction($wallet_transaction_create_input): \Lago\LagoPhpClient\Model\WalletTransactions
```

Top up a wallet

This endpoint is used to top-up an active wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_transaction_create_input = new \Lago\LagoPhpClient\Model\WalletTransactionCreateInput(); // \Lago\LagoPhpClient\Model\WalletTransactionCreateInput | Wallet transaction payload

try {
    $result = $apiInstance->createWalletTransaction($wallet_transaction_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWalletTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_transaction_create_input** | [**\Lago\LagoPhpClient\Model\WalletTransactionCreateInput**](../Model/WalletTransactionCreateInput.md)| Wallet transaction payload | |

### Return type

[**\Lago\LagoPhpClient\Model\WalletTransactions**](../Model/WalletTransactions.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyWallet()`

```php
destroyWallet($lago_id): \Lago\LagoPhpClient\Model\Wallet
```

Terminate a wallet

This endpoint is used to terminate an existing wallet with prepaid credits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet's record within the Lago system.

try {
    $result = $apiInstance->destroyWallet($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->destroyWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\Wallet**](../Model/Wallet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllWalletTransactions()`

```php
findAllWalletTransactions($lago_id, $page, $per_page, $status, $transaction_status, $transaction_type): \Lago\LagoPhpClient\Model\WalletTransactionsPaginated
```

List all wallet transactions

This endpoint is used to list all wallet transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet's record within the Lago system.
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$status = pending; // string | The status of the wallet transaction. Possible values are `pending` or `settled`.
$transaction_status = purchased; // string | The transaction status of the wallet transaction. Possible values are `purchased` (with pending or settled status), `granted` (without invoice_id), `voided` or `invoiced`.
$transaction_type = inbound; // string | The transaction type of the wallet transaction. Possible values are `inbound` (increasing the wallet balance) or `outbound` (decreasing the wallet balance).

try {
    $result = $apiInstance->findAllWalletTransactions($lago_id, $page, $per_page, $status, $transaction_status, $transaction_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->findAllWalletTransactions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet&#39;s record within the Lago system. | |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **status** | **string**| The status of the wallet transaction. Possible values are &#x60;pending&#x60; or &#x60;settled&#x60;. | [optional] |
| **transaction_status** | **string**| The transaction status of the wallet transaction. Possible values are &#x60;purchased&#x60; (with pending or settled status), &#x60;granted&#x60; (without invoice_id), &#x60;voided&#x60; or &#x60;invoiced&#x60;. | [optional] |
| **transaction_type** | **string**| The transaction type of the wallet transaction. Possible values are &#x60;inbound&#x60; (increasing the wallet balance) or &#x60;outbound&#x60; (decreasing the wallet balance). | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\WalletTransactionsPaginated**](../Model/WalletTransactionsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllWallets()`

```php
findAllWallets($external_customer_id, $page, $per_page): \Lago\LagoPhpClient\Model\WalletsPaginated
```

List all wallets

This endpoint is used to list all wallets with prepaid credits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application).
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.

try {
    $result = $apiInstance->findAllWallets($external_customer_id, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->findAllWallets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application). | |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\WalletsPaginated**](../Model/WalletsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findWallet()`

```php
findWallet($lago_id): \Lago\LagoPhpClient\Model\Wallet
```

Retrieve a wallet

This endpoint is used to retrieve an existing wallet with prepaid credits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet's record within the Lago system.

try {
    $result = $apiInstance->findWallet($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->findWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\Wallet**](../Model/Wallet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findWalletTransaction()`

```php
findWalletTransaction($lago_id): \Lago\LagoPhpClient\Model\WalletTransactionObject
```

Retrieve a wallet transaction

This endpoint is used to retrieve a specific wallet transactions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = bb0a27be-51f7-4f4f-aad0-2abc80534c0f; // string | Unique identifier assigned to the wallet transaction within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet's record within the Lago system.

try {
    $result = $apiInstance->findWalletTransaction($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->findWalletTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the wallet transaction within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\WalletTransactionObject**](../Model/WalletTransactionObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWallet()`

```php
updateWallet($lago_id, $wallet_update_input): \Lago\LagoPhpClient\Model\Wallet
```

Update a wallet

This endpoint is used to update an existing wallet with prepaid credits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet's record within the Lago system.
$wallet_update_input = new \Lago\LagoPhpClient\Model\WalletUpdateInput(); // \Lago\LagoPhpClient\Model\WalletUpdateInput | Wallet update payload

try {
    $result = $apiInstance->updateWallet($lago_id, $wallet_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->updateWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet&#39;s record within the Lago system. | |
| **wallet_update_input** | [**\Lago\LagoPhpClient\Model\WalletUpdateInput**](../Model/WalletUpdateInput.md)| Wallet update payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Wallet**](../Model/Wallet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletTransactionPaymentUrl()`

```php
walletTransactionPaymentUrl($lago_id): \Lago\LagoPhpClient\Model\WalletTransactionPaymentUrl
```

Generate a payment URL

This endpoint generates a checkout link for a specific wallet transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the wallet transaction.

try {
    $result = $apiInstance->walletTransactionPaymentUrl($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->walletTransactionPaymentUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| ID of the wallet transaction. | |

### Return type

[**\Lago\LagoPhpClient\Model\WalletTransactionPaymentUrl**](../Model/WalletTransactionPaymentUrl.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
