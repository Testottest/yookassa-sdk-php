# [YooKassa API SDK](../home.md)

# Class: \Testottest\Request\Payouts\PayoutDestinationData\PayoutDestinationDataFactory
### Namespace: [\Testottest\Request\Payouts\PayoutDestinationData](../namespaces/yookassa-request-payouts-payoutdestinationdata.md)
---
**Summary:**

Класс PayoutDestinationDataFactory

**Description:**

Фабрика создания объекта платежных методов из массива

---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [factory()](../classes/YooKassa-Request-Payouts-PayoutDestinationData-PayoutDestinationDataFactory.md#method_factory) |  | Фабричный метод создания объекта платежных данных по типу |
| public | [factoryFromArray()](../classes/YooKassa-Request-Payouts-PayoutDestinationData-PayoutDestinationDataFactory.md#method_factoryFromArray) |  | Фабричный метод создания объекта платежных данных из массива |

---
### Details
* File: [lib/Request/Payouts/PayoutDestinationData/PayoutDestinationDataFactory.php](../../lib/Request/Payouts/PayoutDestinationData/PayoutDestinationDataFactory.php)
* Package: YooKassa
* Class Hierarchy:
  * \Testottest\Request\Payouts\PayoutDestinationData\PayoutDestinationDataFactory

---
## Methods
<a name="method_factory" class="anchor"></a>
#### public factory() : \Testottest\Request\Payouts\PayoutDestinationData\AbstractPayoutDestinationData

```php
public factory(string $type) : \Testottest\Request\Payouts\PayoutDestinationData\AbstractPayoutDestinationData
```

**Summary**

Фабричный метод создания объекта платежных данных по типу

**Details:**
* Inherited From: [\Testottest\Request\Payouts\PayoutDestinationData\PayoutDestinationDataFactory](../classes/YooKassa-Request-Payouts-PayoutDestinationData-PayoutDestinationDataFactory.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | type  | Тип платежных данных |

**Returns:** \Testottest\Request\Payouts\PayoutDestinationData\AbstractPayoutDestinationData - 


<a name="method_factoryFromArray" class="anchor"></a>
#### public factoryFromArray() : \Testottest\Request\Payouts\PayoutDestinationData\AbstractPayoutDestinationData

```php
public factoryFromArray(array $data, string|null $type = null) : \Testottest\Request\Payouts\PayoutDestinationData\AbstractPayoutDestinationData
```

**Summary**

Фабричный метод создания объекта платежных данных из массива

**Details:**
* Inherited From: [\Testottest\Request\Payouts\PayoutDestinationData\PayoutDestinationDataFactory](../classes/YooKassa-Request-Payouts-PayoutDestinationData-PayoutDestinationDataFactory.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | data  | Массив платежных данных |
| <code lang="php">string OR null</code> | type  | Тип платежных данных |

**Returns:** \Testottest\Request\Payouts\PayoutDestinationData\AbstractPayoutDestinationData - 



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
