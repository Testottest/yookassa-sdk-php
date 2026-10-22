# [YooKassa API SDK](../home.md)

# Interface: PaymentInterface
### Namespace: [\Testottest\Model](../namespaces/yookassa-model.md)
---
**Summary:**

Interface PaymentInterface

---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getAmount()](../classes/YooKassa-Model-PaymentInterface.md#method_getAmount) |  | Возвращает сумму |
| public | [getAuthorizationDetails()](../classes/YooKassa-Model-PaymentInterface.md#method_getAuthorizationDetails) |  | Возвращает данные об авторизации платежа |
| public | [getCancellationDetails()](../classes/YooKassa-Model-PaymentInterface.md#method_getCancellationDetails) |  | Возвращает комментарий к статусу canceled: кто отменил платеж и по какой причине |
| public | [getCapturedAt()](../classes/YooKassa-Model-PaymentInterface.md#method_getCapturedAt) |  | Возвращает время подтверждения платежа магазином или null, если время не задано |
| public | [getConfirmation()](../classes/YooKassa-Model-PaymentInterface.md#method_getConfirmation) |  | Возвращает способ подтверждения платежа |
| public | [getCreatedAt()](../classes/YooKassa-Model-PaymentInterface.md#method_getCreatedAt) |  | Возвращает время создания заказа |
| public | [getDeal()](../classes/YooKassa-Model-PaymentInterface.md#method_getDeal) |  | Возвращает сделку, в рамках которой нужно провести платеж. |
| public | [getExpiresAt()](../classes/YooKassa-Model-PaymentInterface.md#method_getExpiresAt) |  | Возвращает время до которого можно бесплатно отменить или подтвердить платеж, или null, если оно не задано |
| public | [getId()](../classes/YooKassa-Model-PaymentInterface.md#method_getId) |  | Возвращает идентификатор платежа |
| public | [getIncomeAmount()](../classes/YooKassa-Model-PaymentInterface.md#method_getIncomeAmount) |  | Возвращает сумму перечисляемая магазину за вычетом комиссий платежной системы.(только для успешных платежей) |
| public | [getMetadata()](../classes/YooKassa-Model-PaymentInterface.md#method_getMetadata) |  | Возвращает метаданные платежа установленные мерчантом |
| public | [getPaid()](../classes/YooKassa-Model-PaymentInterface.md#method_getPaid) |  | Проверяет, был ли уже оплачен заказ |
| public | [getPaymentMethod()](../classes/YooKassa-Model-PaymentInterface.md#method_getPaymentMethod) |  | Возвращает используемый способ проведения платежа |
| public | [getReceiptRegistration()](../classes/YooKassa-Model-PaymentInterface.md#method_getReceiptRegistration) |  | Возвращает состояние регистрации фискального чека |
| public | [getRecipient()](../classes/YooKassa-Model-PaymentInterface.md#method_getRecipient) |  | Возвращает получателя платежа |
| public | [getRefundable()](../classes/YooKassa-Model-PaymentInterface.md#method_getRefundable) |  | Возможность провести возврат по API |
| public | [getRefundedAmount()](../classes/YooKassa-Model-PaymentInterface.md#method_getRefundedAmount) |  | Возвращает сумму возвращенных средств |
| public | [getStatus()](../classes/YooKassa-Model-PaymentInterface.md#method_getStatus) |  | Возвращает состояние платежа |
| public | [getTransfers()](../classes/YooKassa-Model-PaymentInterface.md#method_getTransfers) |  | Возвращает данные о распределении платежа между магазинами |

---
### Details
* File: [lib/Model/PaymentInterface.php](../../lib/Model/PaymentInterface.php)
* Package: \YooKassa

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| property-read |  | Идентификатор платежа |
| property-read |  | Текущее состояние платежа |
| property-read |  | Получатель платежа |
| property-read |  | Сумма заказа |
| property-read |  | Описание транзакции |
| property-read |  | Способ проведения платежа |
| property-read |  | Способ проведения платежа |
| property-read |  | Время создания заказа |
| property-read |  | Время создания заказа |
| property-read |  | Время подтверждения платежа магазином |
| property-read |  | Время подтверждения платежа магазином |
| property-read |  | Время, до которого можно бесплатно отменить или подтвердить платеж |
| property-read |  | Время, до которого можно бесплатно отменить или подтвердить платеж |
| property-read |  | Способ подтверждения платежа |
| property-read |  | Сумма возвращенных средств платежа |
| property-read |  | Сумма возвращенных средств платежа |
| property-read |  | Признак оплаты заказа |
| property-read |  | Возможность провести возврат по API |
| property-read |  | Состояние регистрации фискального чека |
| property-read |  | Состояние регистрации фискального чека |
| property-read |  | Метаданные платежа указанные мерчантом |
| property-read |  | Признак тестовой операции |
| property-read |  | Комментарий к отмене платежа |
| property-read |  | Комментарий к отмене платежа |
| property-read |  | Данные об авторизации платежа |
| property-read |  | Данные об авторизации платежа |
| property-read |  | Данные о распределении платежа между магазинами |
| property-read |  | Сумма платежа, которую получит магазин |
| property-read |  | Сумма платежа, которую получит магазин |

---
## Methods
<a name="method_getId" class="anchor"></a>
#### public getId() : string

```php
public getId() : string
```

**Summary**

Возвращает идентификатор платежа

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** string - Идентификатор платежа


<a name="method_getStatus" class="anchor"></a>
#### public getStatus() : string

```php
public getStatus() : string
```

**Summary**

Возвращает состояние платежа

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** string - Текущее состояние платежа


<a name="method_getRecipient" class="anchor"></a>
#### public getRecipient() : \Testottest\Model\RecipientInterface|null

```php
public getRecipient() : \Testottest\Model\RecipientInterface|null
```

**Summary**

Возвращает получателя платежа

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \Testottest\Model\RecipientInterface|null - Получатель платежа или null, если получатель не задан


<a name="method_getAmount" class="anchor"></a>
#### public getAmount() : \Testottest\Model\AmountInterface

```php
public getAmount() : \Testottest\Model\AmountInterface
```

**Summary**

Возвращает сумму

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \Testottest\Model\AmountInterface - Сумма платежа


<a name="method_getPaymentMethod" class="anchor"></a>
#### public getPaymentMethod() : \Testottest\Model\PaymentMethod\AbstractPaymentMethod

```php
public getPaymentMethod() : \Testottest\Model\PaymentMethod\AbstractPaymentMethod
```

**Summary**

Возвращает используемый способ проведения платежа

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \Testottest\Model\PaymentMethod\AbstractPaymentMethod - Способ проведения платежа


<a name="method_getCreatedAt" class="anchor"></a>
#### public getCreatedAt() : \DateTime

```php
public getCreatedAt() : \DateTime
```

**Summary**

Возвращает время создания заказа

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \DateTime - Время создания заказа


<a name="method_getCapturedAt" class="anchor"></a>
#### public getCapturedAt() : \DateTime|null

```php
public getCapturedAt() : \DateTime|null
```

**Summary**

Возвращает время подтверждения платежа магазином или null, если время не задано

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \DateTime|null - Время подтверждения платежа магазином


<a name="method_getConfirmation" class="anchor"></a>
#### public getConfirmation() : \Testottest\Model\Confirmation\AbstractConfirmation

```php
public getConfirmation() : \Testottest\Model\Confirmation\AbstractConfirmation
```

**Summary**

Возвращает способ подтверждения платежа

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \Testottest\Model\Confirmation\AbstractConfirmation - Способ подтверждения платежа


<a name="method_getRefundedAmount" class="anchor"></a>
#### public getRefundedAmount() : \Testottest\Model\AmountInterface

```php
public getRefundedAmount() : \Testottest\Model\AmountInterface
```

**Summary**

Возвращает сумму возвращенных средств

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \Testottest\Model\AmountInterface - Сумма возвращенных средств платежа


<a name="method_getPaid" class="anchor"></a>
#### public getPaid() : bool

```php
public getPaid() : bool
```

**Summary**

Проверяет, был ли уже оплачен заказ

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** bool - Признак оплаты заказа, true если заказ оплачен, false если нет


<a name="method_getRefundable" class="anchor"></a>
#### public getRefundable() : bool

```php
public getRefundable() : bool
```

**Summary**

Возможность провести возврат по API

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** bool - Возможность провести возврат по API


<a name="method_getReceiptRegistration" class="anchor"></a>
#### public getReceiptRegistration() : string

```php
public getReceiptRegistration() : string
```

**Summary**

Возвращает состояние регистрации фискального чека

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** string - Состояние регистрации фискального чека


<a name="method_getMetadata" class="anchor"></a>
#### public getMetadata() : \Testottest\Model\Metadata

```php
public getMetadata() : \Testottest\Model\Metadata
```

**Summary**

Возвращает метаданные платежа установленные мерчантом

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \Testottest\Model\Metadata - Метаданные платежа указанные мерчантом


<a name="method_getExpiresAt" class="anchor"></a>
#### public getExpiresAt() : \DateTime|null

```php
public getExpiresAt() : \DateTime|null
```

**Summary**

Возвращает время до которого можно бесплатно отменить или подтвердить платеж, или null, если оно не задано

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \DateTime|null - Время, до которого можно бесплатно отменить или подтвердить платеж

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.2 |  |

<a name="method_getCancellationDetails" class="anchor"></a>
#### public getCancellationDetails() : \Testottest\Model\CancellationDetailsInterface|null

```php
public getCancellationDetails() : \Testottest\Model\CancellationDetailsInterface|null
```

**Summary**

Возвращает комментарий к статусу canceled: кто отменил платеж и по какой причине

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \Testottest\Model\CancellationDetailsInterface|null - Комментарий к статусу canceled

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.13 |  |

<a name="method_getAuthorizationDetails" class="anchor"></a>
#### public getAuthorizationDetails() : \Testottest\Model\AuthorizationDetailsInterface|null

```php
public getAuthorizationDetails() : \Testottest\Model\AuthorizationDetailsInterface|null
```

**Summary**

Возвращает данные об авторизации платежа

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \Testottest\Model\AuthorizationDetailsInterface|null - Данные об авторизации платежа

##### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| since | 1.0.18 |  |

<a name="method_getTransfers" class="anchor"></a>
#### public getTransfers() : \Testottest\Model\TransferInterface[]

```php
public getTransfers() : \Testottest\Model\TransferInterface[]
```

**Summary**

Возвращает данные о распределении платежа между магазинами

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \Testottest\Model\TransferInterface[] - 


<a name="method_getIncomeAmount" class="anchor"></a>
#### public getIncomeAmount() : \Testottest\Model\MonetaryAmount|null

```php
public getIncomeAmount() : \Testottest\Model\MonetaryAmount|null
```

**Summary**

Возвращает сумму перечисляемая магазину за вычетом комиссий платежной системы.(только для успешных платежей)

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \Testottest\Model\MonetaryAmount|null - 


<a name="method_getDeal" class="anchor"></a>
#### public getDeal() : \Testottest\Model\Deal\PaymentDealInfo

```php
public getDeal() : \Testottest\Model\Deal\PaymentDealInfo
```

**Summary**

Возвращает сделку, в рамках которой нужно провести платеж.

**Details:**
* Inherited From: [\Testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md)

**Returns:** \Testottest\Model\Deal\PaymentDealInfo - Сделка, в рамках которой нужно провести платеж




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
