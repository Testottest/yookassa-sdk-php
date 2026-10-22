# [YooKassa API SDK](../home.md)

# Class: \testottest\Request\Payouts\CreatePayoutRequestBuilder
### Namespace: [\testottest\Request\Payouts](../namespaces/yookassa-request-payouts.md)
---
**Summary:**

Класс билдера объектов запросов к API на создание платежа


---
### Constants
* No constants found

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$currentObject](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#property_currentObject) |  | Собираемый объект запроса |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [build()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_build) |  | Строит и возвращает объект запроса для отправки в API ЮKassa |
| public | [setAmount()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setAmount) |  | Устанавливает сумму |
| public | [setDeal()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setDeal) |  | Устанавливает сделку, в рамках которой нужно провести выплату |
| public | [setDescription()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setDescription) |  | Устанавливает описание транзакции |
| public | [setMetadata()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setMetadata) |  | Устанавливает метаданные, привязанные к платежу |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| public | [setPayoutDestinationData()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setPayoutDestinationData) |  | Устанавливает объект с информацией для создания метода оплаты |
| public | [setPayoutToken()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_setPayoutToken) |  | Устанавливает одноразовый токен для проведения выплаты |
| protected | [initCurrentObject()](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md#method_initCurrentObject) |  | Инициализирует объект запроса, который в дальнейшем будет собираться билдером |

---
### Details
* File: [lib/Request/Payouts/CreatePayoutRequestBuilder.php](../../lib/Request/Payouts/CreatePayoutRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\testottest\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
  * \testottest\Request\Payouts\CreatePayoutRequestBuilder

---
### Tags
| Tag | Version | Description |
| --- | ------- | ----------- |
| todo: |  | @example 02-builder.php 11 78 Пример использования билдера |

---
## Properties
<a name="property_currentObject"></a>
#### protected $currentObject : \testottest\Request\Payouts\CreatePayoutRequest
---
**Summary**

Собираемый объект запроса

**Type:** <a href="../classes/YooKassa-Request-Payouts-CreatePayoutRequest.html"><abbr title="\testottest\Request\Payouts\CreatePayoutRequest">CreatePayoutRequest</abbr></a>

**Details:**



---
## Methods
<a name="method___construct" class="anchor"></a>
#### public __construct() : mixed

```php
public __construct() : mixed
```

**Summary**

Конструктор, инициализирует пустой запрос, который в будущем начнём собирать

**Details:**
* Inherited From: [\testottest\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)

**Returns:** mixed - 


<a name="method_build" class="anchor"></a>
#### public build() : \testottest\Request\Payouts\CreatePayoutRequestInterface|\testottest\Request\Payouts\CreatePayoutRequest|\testottest\Common\AbstractRequest

```php
public build(array|null $options = null) : \testottest\Request\Payouts\CreatePayoutRequestInterface|\testottest\Request\Payouts\CreatePayoutRequest|\testottest\Common\AbstractRequest
```

**Summary**

Строит и возвращает объект запроса для отправки в API ЮKassa

**Details:**
* Inherited From: [\testottest\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | options  | Массив параметров для установки в объект запроса |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidRequestException | Выбрасывается если собрать объект запроса не удалось |

**Returns:** \testottest\Request\Payouts\CreatePayoutRequestInterface|\testottest\Request\Payouts\CreatePayoutRequest|\testottest\Common\AbstractRequest - Инстанс объекта запроса


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : self

```php
public setAmount(\testottest\Model\AmountInterface|array|string $value) : self
```

**Summary**

Устанавливает сумму

**Details:**
* Inherited From: [\testottest\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\AmountInterface OR array OR string</code> | value  | Сумма выплаты |

**Returns:** self - Инстанс билдера запросов


<a name="method_setDeal" class="anchor"></a>
#### public setDeal() : mixed

```php
public setDeal(\testottest\Model\Deal\PayoutDealInfo|array $value) : mixed
```

**Summary**

Устанавливает сделку, в рамках которой нужно провести выплату

**Details:**
* Inherited From: [\testottest\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\Deal\PayoutDealInfo OR array</code> | value  | Сделка, в рамках которой нужно провести выплату |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если был передан объект невалидного типа |

**Returns:** mixed - 


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : \testottest\Request\Payouts\CreatePayoutRequestBuilder

```php
public setDescription(string $value) : \testottest\Request\Payouts\CreatePayoutRequestBuilder
```

**Summary**

Устанавливает описание транзакции

**Details:**
* Inherited From: [\testottest\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Описание транзакции |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение превышает допустимую длину |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** \testottest\Request\Payouts\CreatePayoutRequestBuilder - Инстанс текущего билдера


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : \testottest\Request\Payouts\CreatePayoutRequestBuilder

```php
public setMetadata(\testottest\Model\Metadata|array|null $value) : \testottest\Request\Payouts\CreatePayoutRequestBuilder
```

**Summary**

Устанавливает метаданные, привязанные к платежу

**Details:**
* Inherited From: [\testottest\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\Metadata OR array OR null</code> | value  | Метаданные платежа, устанавливаемые мерчантом |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданные данные не удалось интерпретировать как метаданные платежа |

**Returns:** \testottest\Request\Payouts\CreatePayoutRequestBuilder - Инстанс текущего билдера


<a name="method_setOptions" class="anchor"></a>
#### public setOptions() : \testottest\Common\AbstractRequestBuilder

```php
public setOptions(array|\Traversable $options) : \testottest\Common\AbstractRequestBuilder
```

**Summary**

Устанавливает свойства запроса из массива

**Details:**
* Inherited From: [\testottest\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | options  | Массив свойств запроса |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \InvalidArgumentException | Выбрасывается если аргумент не массив и не итерируемый объект |
| \testottest\Common\Exceptions\InvalidPropertyException | Выбрасывается если не удалось установить один из параметров, переданныч в массиве настроек |

**Returns:** \testottest\Common\AbstractRequestBuilder - Инстанс текущего билдера запросов


<a name="method_setPayoutDestinationData" class="anchor"></a>
#### public setPayoutDestinationData() : mixed

```php
public setPayoutDestinationData(\testottest\Model\Payout\AbstractPayoutDestination|array|null $value) : mixed
```

**Summary**

Устанавливает объект с информацией для создания метода оплаты

**Details:**
* Inherited From: [\testottest\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\Payout\AbstractPayoutDestination OR array OR null</code> | value  | Объект создания метода оплаты или null |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если был передан объект невалидного типа |

**Returns:** mixed - 


<a name="method_setPayoutToken" class="anchor"></a>
#### public setPayoutToken() : \testottest\Request\Payouts\CreatePayoutRequestBuilder

```php
public setPayoutToken(string $value) : \testottest\Request\Payouts\CreatePayoutRequestBuilder
```

**Summary**

Устанавливает одноразовый токен для проведения выплаты

**Details:**
* Inherited From: [\testottest\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Одноразовый токен для проведения выплаты |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** \testottest\Request\Payouts\CreatePayoutRequestBuilder - Инстанс текущего билдера


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \testottest\Request\Payouts\CreatePayoutRequest

```php
protected initCurrentObject() : \testottest\Request\Payouts\CreatePayoutRequest
```

**Summary**

Инициализирует объект запроса, который в дальнейшем будет собираться билдером

**Details:**
* Inherited From: [\testottest\Request\Payouts\CreatePayoutRequestBuilder](../classes/YooKassa-Request-Payouts-CreatePayoutRequestBuilder.md)

**Returns:** \testottest\Request\Payouts\CreatePayoutRequest - Инстанс собираемого объекта запроса к API



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
