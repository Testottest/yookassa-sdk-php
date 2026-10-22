# [YooKassa API SDK](../home.md)

# Class: \testottest\Model\Payout\PayoutDestinationFactory
### Namespace: [\testottest\Model\Payout](../namespaces/yookassa-model-payout.md)
---
**Summary:**

Фабрика создания объекта платежных методов из массива


---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [factory()](../classes/YooKassa-Model-Payout-PayoutDestinationFactory.md#method_factory) |  | Фабричный метод создания объекта платежных данных по типу |
| public | [factoryFromArray()](../classes/YooKassa-Model-Payout-PayoutDestinationFactory.md#method_factoryFromArray) |  | Фабричный метод создания объекта платежных данных из массива |

---
### Details
* File: [lib/Model/Payout/PayoutDestinationFactory.php](../../lib/Model/Payout/PayoutDestinationFactory.php)
* Package: YooKassa
* Class Hierarchy:
  * \testottest\Model\Payout\PayoutDestinationFactory

---
## Methods
<a name="method_factory" class="anchor"></a>
#### public factory() : \testottest\Model\Payout\AbstractPayoutDestination

```php
public factory(string $type) : \testottest\Model\Payout\AbstractPayoutDestination
```

**Summary**

Фабричный метод создания объекта платежных данных по типу

**Details:**
* Inherited From: [\testottest\Model\Payout\PayoutDestinationFactory](../classes/YooKassa-Model-Payout-PayoutDestinationFactory.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | type  | Тип платежных данных |

**Returns:** \testottest\Model\Payout\AbstractPayoutDestination - 


<a name="method_factoryFromArray" class="anchor"></a>
#### public factoryFromArray() : \testottest\Model\Payout\AbstractPayoutDestination

```php
public factoryFromArray(array $data, string|null $type = null) : \testottest\Model\Payout\AbstractPayoutDestination
```

**Summary**

Фабричный метод создания объекта платежных данных из массива

**Details:**
* Inherited From: [\testottest\Model\Payout\PayoutDestinationFactory](../classes/YooKassa-Model-Payout-PayoutDestinationFactory.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | data  | Массив платежных данных |
| <code lang="php">string OR null</code> | type  | Тип платежных данных |

**Returns:** \testottest\Model\Payout\AbstractPayoutDestination - 



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
