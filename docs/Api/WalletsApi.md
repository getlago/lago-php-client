# OpenAPI\Client\WalletsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWallet()**](WalletsApi.md#createWallet) | **POST** /wallets | Create a new wallet |
| [**createWalletTransaction()**](WalletsApi.md#createWalletTransaction) | **POST** /wallet_transactions | Create a new wallet transaction |
| [**destroyWallet()**](WalletsApi.md#destroyWallet) | **DELETE** /wallets/{id} | Delete a wallet |
| [**findAllWallets()**](WalletsApi.md#findAllWallets) | **GET** /wallets/ | Find wallets |
| [**findWallet()**](WalletsApi.md#findWallet) | **GET** /wallets/{id} | Find wallet |
| [**updateWallet()**](WalletsApi.md#updateWallet) | **PUT** /wallets/{id} | Update an existing wallet |


## `createWallet()`

```php
createWallet($wallet_input): \OpenAPI\Client\Model\Wallet
```

Create a new wallet

Create a new wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_input = new \OpenAPI\Client\Model\WalletInput(); // \OpenAPI\Client\Model\WalletInput | Wallet payload

try {
    $result = $apiInstance->createWallet($wallet_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_input** | [**\OpenAPI\Client\Model\WalletInput**](../Model/WalletInput.md)| Wallet payload | |

### Return type

[**\OpenAPI\Client\Model\Wallet**](../Model/Wallet.md)

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
createWalletTransaction($wallet_transaction_input): \OpenAPI\Client\Model\WalletTransaction
```

Create a new wallet transaction

Create a new wallet transaction

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$wallet_transaction_input = new \OpenAPI\Client\Model\WalletTransactionInput(); // \OpenAPI\Client\Model\WalletTransactionInput | Wallet transaction payload

try {
    $result = $apiInstance->createWalletTransaction($wallet_transaction_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->createWalletTransaction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **wallet_transaction_input** | [**\OpenAPI\Client\Model\WalletTransactionInput**](../Model/WalletTransactionInput.md)| Wallet transaction payload | |

### Return type

[**\OpenAPI\Client\Model\WalletTransaction**](../Model/WalletTransaction.md)

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
destroyWallet($id): \OpenAPI\Client\Model\Wallet
```

Delete a wallet

Delete a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 321da83c-c007-4fbb-afcd-b00c07c41ssd; // string | Lago ID of the existing wallet

try {
    $result = $apiInstance->destroyWallet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->destroyWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Lago ID of the existing wallet | |

### Return type

[**\OpenAPI\Client\Model\Wallet**](../Model/Wallet.md)

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
findAllWallets($external_customer_id, $page, $per_page): \OpenAPI\Client\Model\Wallets
```

Find wallets

Find all wallets for certain customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 12345; // string | External customer ID
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page

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
| **external_customer_id** | **string**| External customer ID | |
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\Wallets**](../Model/Wallets.md)

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
findWallet($id): \OpenAPI\Client\Model\Wallet
```

Find wallet

Return a wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 321da83c-c007-4fbb-afcd-b00c07c41ssd; // string | Lago ID of the existing wallet

try {
    $result = $apiInstance->findWallet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->findWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Lago ID of the existing wallet | |

### Return type

[**\OpenAPI\Client\Model\Wallet**](../Model/Wallet.md)

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
updateWallet($id, $wallet_update_input): \OpenAPI\Client\Model\Wallet
```

Update an existing wallet

Update an existing wallet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\WalletsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 321da83c-c007-4fbb-afcd-b00c07c41ssd; // string | Lago ID of the existing wallet
$wallet_update_input = new \OpenAPI\Client\Model\WalletUpdateInput(); // \OpenAPI\Client\Model\WalletUpdateInput | Update an existing wallet

try {
    $result = $apiInstance->updateWallet($id, $wallet_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WalletsApi->updateWallet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Lago ID of the existing wallet | |
| **wallet_update_input** | [**\OpenAPI\Client\Model\WalletUpdateInput**](../Model/WalletUpdateInput.md)| Update an existing wallet | |

### Return type

[**\OpenAPI\Client\Model\Wallet**](../Model/Wallet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
