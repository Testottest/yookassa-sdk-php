# [YooKassa API SDK](../home.md)

# Class: \Testottest\Model\PaymentMethod\PaymentMethodFactory
### Namespace: [\Testottest\Model\PaymentMethod](../namespaces/yookassa-model-paymentmethod.md)
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
| public | [factory()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodFactory.md#method_factory) |  | Фабричный метод создания объекта платежных данных по типу |
| public | [factoryFromArray()](../classes/YooKassa-Model-PaymentMethod-PaymentMethodFactory.md#method_factoryFromArray) |  | Фабричный метод создания объекта платежных данных из массива |

---
### Details
* File: [lib/Model/PaymentMethod/PaymentMethodFactory.php](../../lib/Model/PaymentMethod/PaymentMethodFactory.php)
* Package: YooKassa
* Class Hierarchy:
  * \Testottest\Model\PaymentMethod\PaymentMethodFactory

---
## Methods
<a name="method_factory" class="anchor"></a>
#### public factory() : \Testottest\Model\PaymentMethod\AbstractPaymentMethod

```php
public factory(string $type) : \Testottest\Model\PaymentMethod\AbstractPaymentMethod
```

**Summary**

Фабричный метод создания объекта платежных данных по типу

**Details:**
* Inherited From: [\Testottest\Model\PaymentMethod\PaymentMethodFactory](../classes/YooKassa-Model-PaymentMethod-PaymentMethodFactory.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | type  | Тип платежного метода |

**Returns:** \Testottest\Model\PaymentMethod\AbstractPaymentMethod - 


<a name="method_factoryFromArray" class="anchor"></a>
#### public factoryFromArray() : \Testottest\Model\PaymentMethod\AbstractPaymentMethod

```php
public factoryFromArray(array $data, string|null $type = null) : \Testottest\Model\PaymentMethod\AbstractPaymentMethod
```

**Summary**

Фабричный метод создания объекта платежных данных из массива

**Details:**
* Inherited From: [\Testottest\Model\PaymentMethod\PaymentMethodFactory](../classes/YooKassa-Model-PaymentMethod-PaymentMethodFactory.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | data  | Массив платежных данных |
| <code lang="php">string OR null</code> | type  | Тип платежного метода |

**Returns:** \Testottest\Model\PaymentMethod\AbstractPaymentMethod - 



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
