# [YooKassa API SDK](../home.md)

# Class: \Testottest\Model\Confirmation\ConfirmationFactory
### Namespace: [\Testottest\Model\Confirmation](../namespaces/yookassa-model-confirmation.md)
---
**Summary:**

Class ConfirmationFactory


---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [factory()](../classes/YooKassa-Model-Confirmation-ConfirmationFactory.md#method_factory) |  | Возвращает объект, соответствующий типу подтверждения платежа |
| public | [factoryFromArray()](../classes/YooKassa-Model-Confirmation-ConfirmationFactory.md#method_factoryFromArray) |  | Возвращает объект, соответствующий типу подтверждения платежа, из массива данных |

---
### Details
* File: [lib/Model/Confirmation/ConfirmationFactory.php](../../lib/Model/Confirmation/ConfirmationFactory.php)
* Package: YooKassa
* Class Hierarchy:
  * \Testottest\Model\Confirmation\ConfirmationFactory

---
## Methods
<a name="method_factory" class="anchor"></a>
#### public factory() : \Testottest\Model\Confirmation\AbstractConfirmation

```php
public factory(string $type) : \Testottest\Model\Confirmation\AbstractConfirmation
```

**Summary**

Возвращает объект, соответствующий типу подтверждения платежа

**Details:**
* Inherited From: [\Testottest\Model\Confirmation\ConfirmationFactory](../classes/YooKassa-Model-Confirmation-ConfirmationFactory.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | type  | Тип подтверждения платежа |

**Returns:** \Testottest\Model\Confirmation\AbstractConfirmation - 


<a name="method_factoryFromArray" class="anchor"></a>
#### public factoryFromArray() : \Testottest\Model\Confirmation\AbstractConfirmation

```php
public factoryFromArray(array $data, string|null $type = null) : \Testottest\Model\Confirmation\AbstractConfirmation
```

**Summary**

Возвращает объект, соответствующий типу подтверждения платежа, из массива данных

**Details:**
* Inherited From: [\Testottest\Model\Confirmation\ConfirmationFactory](../classes/YooKassa-Model-Confirmation-ConfirmationFactory.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | data  | Массив данных подтверждения платежа |
| <code lang="php">string OR null</code> | type  | Тип подтверждения платежа |

**Returns:** \Testottest\Model\Confirmation\AbstractConfirmation - 



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
