# [YooKassa API SDK](../home.md)

# Class: \Testottest\Common\Exceptions\NotFoundException
### Namespace: [\Testottest\Common\Exceptions](../namespaces/yookassa-common-exceptions.md)
---
**Summary:**

Ресурс не найден.


---
### Constants
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [HTTP_CODE](../classes/YooKassa-Common-Exceptions-NotFoundException.md#constant_HTTP_CODE) |  |  |

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [$retryAfter](../classes/YooKassa-Common-Exceptions-NotFoundException.md#property_retryAfter) |  |  |
| public | [$type](../classes/YooKassa-Common-Exceptions-NotFoundException.md#property_type) |  |  |
| protected | [$responseBody](../classes/YooKassa-Common-Exceptions-ApiException.md#property_responseBody) |  |  |
| protected | [$responseHeaders](../classes/YooKassa-Common-Exceptions-ApiException.md#property_responseHeaders) |  |  |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-Exceptions-NotFoundException.md#method___construct) |  | Constructor |
| public | [getResponseBody()](../classes/YooKassa-Common-Exceptions-ApiException.md#method_getResponseBody) |  |  |
| public | [getResponseHeaders()](../classes/YooKassa-Common-Exceptions-ApiException.md#method_getResponseHeaders) |  |  |

---
### Details
* File: [lib/Common/Exceptions/NotFoundException.php](../../lib/Common/Exceptions/NotFoundException.php)
* Package: YooKassa
* Class Hierarchy:  
  * [\Exception](\Exception)
  * [\Testottest\Common\Exceptions\ApiException](../classes/YooKassa-Common-Exceptions-ApiException.md)
  * \Testottest\Common\Exceptions\NotFoundException

---
## Constants
<a name="constant_HTTP_CODE" class="anchor"></a>
###### HTTP_CODE
```php
HTTP_CODE = 404
```



---
## Properties
<a name="property_retryAfter"></a>
#### public $retryAfter
---

**Details:**


<a name="property_type"></a>
#### public $type
---

**Details:**


<a name="property_responseBody"></a>
#### protected $responseBody : mixed
---
**Type:** <a href="../mixed"><abbr title="mixed">mixed</abbr></a>

**Details:**
* Inherited From: [\Testottest\Common\Exceptions\ApiException](../classes/YooKassa-Common-Exceptions-ApiException.md)


<a name="property_responseHeaders"></a>
#### protected $responseHeaders : string[]
---
**Type:** <a href="../string[]"><abbr title="string[]">string[]</abbr></a>

**Details:**
* Inherited From: [\Testottest\Common\Exceptions\ApiException](../classes/YooKassa-Common-Exceptions-ApiException.md)



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(mixed $responseHeaders = [], mixed $responseBody = null) : mixed
```

**Summary**

Constructor

**Details:**
* Inherited From: [\Testottest\Common\Exceptions\NotFoundException](../classes/YooKassa-Common-Exceptions-NotFoundException.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">mixed</code> | responseHeaders  | HTTP header |
| <code lang="php">mixed</code> | responseBody  | HTTP body |

**Returns:** mixed - 


<a name="method_getResponseBody" class="anchor"></a>
#### public getResponseBody() : mixed

```php
public getResponseBody() : mixed
```

**Details:**
* Inherited From: [\Testottest\Common\Exceptions\ApiException](../classes/YooKassa-Common-Exceptions-ApiException.md)

**Returns:** mixed - 


<a name="method_getResponseHeaders" class="anchor"></a>
#### public getResponseHeaders() : string[]

```php
public getResponseHeaders() : string[]
```

**Details:**
* Inherited From: [\Testottest\Common\Exceptions\ApiException](../classes/YooKassa-Common-Exceptions-ApiException.md)

**Returns:** string[] - 



---

### Top Namespaces

* [\YooKassa](../namespaces/yookassa.md)

---

### Reports
* [Errors - 0](../reports/errors.md)
* [Markers - 0](../reports/markers.md)
* [Deprecated - 13](../reports/deprecated.md)

---

This document was automatically generated from source code comments on 2022-03-22 using [phpDocumentor](http://www.phpdoc.org/)

&copy; 2022 YooMoney
