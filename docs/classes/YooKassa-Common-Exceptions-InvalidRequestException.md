# [YooKassa API SDK](../home.md)

# Class: \testottest\Common\Exceptions\InvalidRequestException
### Namespace: [\testottest\Common\Exceptions](../namespaces/yookassa-common-exceptions.md)
---

---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-Exceptions-InvalidRequestException.md#method___construct) |  | InvalidRequestException constructor. |
| public | [getRequestObject()](../classes/YooKassa-Common-Exceptions-InvalidRequestException.md#method_getRequestObject) |  |  |

---
### Details
* File: [lib/Common/Exceptions/InvalidRequestException.php](../../lib/Common/Exceptions/InvalidRequestException.php)
* Package: Default
* Class Hierarchy: 
  * [\RuntimeException](\RuntimeException)
  * \testottest\Common\Exceptions\InvalidRequestException

---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct(\testottest\Common\AbstractRequest|string $error, int $code, null $previous = null) : mixed
```

**Summary**

InvalidRequestException constructor.

**Details:**
* Inherited From: [\testottest\Common\Exceptions\InvalidRequestException](../classes/YooKassa-Common-Exceptions-InvalidRequestException.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Common\AbstractRequest OR string</code> | error  |  |
| <code lang="php">int</code> | code  |  |
| <code lang="php">null</code> | previous  |  |

**Returns:** mixed - 


<a name="method_getRequestObject" class="anchor"></a>
#### public getRequestObject() : \testottest\Common\AbstractRequest|null

```php
public getRequestObject() : \testottest\Common\AbstractRequest|null
```

**Details:**
* Inherited From: [\testottest\Common\Exceptions\InvalidRequestException](../classes/YooKassa-Common-Exceptions-InvalidRequestException.md)

**Returns:** \testottest\Common\AbstractRequest|null - 



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
