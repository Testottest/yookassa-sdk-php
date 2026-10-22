# [YooKassa API SDK](../home.md)

# Class: \testottest\Request\Refunds\RefundsRequestBuilder
### Namespace: [\testottest\Request\Refunds](../namespaces/yookassa-request-refunds.md)
---
**Summary:**

Класс билдера объектов запросов к API списка возвратов


---
### Constants
* No constants found

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$currentObject](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#property_currentObject) |  | Инстанс собираемого запроса |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [build()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_build) |  | Собирает и возвращает объект запроса списка возвратов магазина |
| public | [setCreatedAtGt()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setCreatedAtGt) |  | Устанавливает дату создания от которой выбираются возвраты |
| public | [setCreatedAtGte()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setCreatedAtGte) |  | Устанавливает дату создания от которой выбираются возвраты |
| public | [setCreatedAtLt()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setCreatedAtLt) |  | Устанавливает дату создания до которой выбираются возвраты |
| public | [setCreatedAtLte()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setCreatedAtLte) |  | Устанавливает дату создания до которой выбираются возвраты |
| public | [setCursor()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setCursor) |  | Устанавливает токен следующей страницы выборки |
| public | [setLimit()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setLimit) |  | Устанавливает ограничение количества объектов возвратов |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| public | [setPaymentId()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setPaymentId) |  | Устанавливает идентификатор платежа или null, если требуется его удалить |
| public | [setStatus()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_setStatus) |  | Устанавливает статус выбираемых возвратов |
| protected | [initCurrentObject()](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md#method_initCurrentObject) |  | Инициализирует новый инстанс собираемого объекта |

---
### Details
* File: [lib/Request/Refunds/RefundsRequestBuilder.php](../../lib/Request/Refunds/RefundsRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\testottest\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
  * \testottest\Request\Refunds\RefundsRequestBuilder

---
## Properties
<a name="property_currentObject"></a>
#### protected $currentObject : \testottest\Request\Refunds\RefundsRequest
---
**Summary**

Инстанс собираемого запроса

**Type:** <a href="../classes/YooKassa-Request-Refunds-RefundsRequest.html"><abbr title="\testottest\Request\Refunds\RefundsRequest">RefundsRequest</abbr></a>
Инстанс собираемого объекта запроса
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
#### public build() : \testottest\Request\Refunds\RefundsRequestInterface|\testottest\Common\AbstractRequest

```php
public build(array|null $options = null) : \testottest\Request\Refunds\RefundsRequestInterface|\testottest\Common\AbstractRequest
```

**Summary**

Собирает и возвращает объект запроса списка возвратов магазина

**Details:**
* Inherited From: [\testottest\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | options  | Массив с настройками запроса |

**Returns:** \testottest\Request\Refunds\RefundsRequestInterface|\testottest\Common\AbstractRequest - Инстанс объекта запроса к API для получения списка возвратов магазина


<a name="method_setCreatedAtGt" class="anchor"></a>
#### public setCreatedAtGt() : \testottest\Request\Refunds\RefundsRequestBuilder

```php
public setCreatedAtGt(\DateTime|string|int|null $value) : \testottest\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает дату создания от которой выбираются возвраты

**Details:**
* Inherited From: [\testottest\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (не включая) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCreatedAtGte" class="anchor"></a>
#### public setCreatedAtGte() : \testottest\Request\Refunds\RefundsRequestBuilder

```php
public setCreatedAtGte(\DateTime|string|int|null $value) : \testottest\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает дату создания от которой выбираются возвраты

**Details:**
* Inherited From: [\testottest\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCreatedAtLt" class="anchor"></a>
#### public setCreatedAtLt() : \testottest\Request\Refunds\RefundsRequestBuilder

```php
public setCreatedAtLt(\DateTime|string|int|null $value) : \testottest\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает дату создания до которой выбираются возвраты

**Details:**
* Inherited From: [\testottest\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (не включая) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCreatedAtLte" class="anchor"></a>
#### public setCreatedAtLte() : \testottest\Request\Refunds\RefundsRequestBuilder

```php
public setCreatedAtLte(\DateTime|string|int|null $value) : \testottest\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает дату создания до которой выбираются возвраты

**Details:**
* Inherited From: [\testottest\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setCursor" class="anchor"></a>
#### public setCursor() : \testottest\Request\Refunds\RefundsRequestBuilder

```php
public setCursor(string $value) : \testottest\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает токен следующей страницы выборки

**Details:**
* Inherited From: [\testottest\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Токен следующей страницы выборки или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \testottest\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setLimit" class="anchor"></a>
#### public setLimit() : \testottest\Request\Refunds\RefundsRequestBuilder

```php
public setLimit(string $value) : \testottest\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает ограничение количества объектов возвратов

**Details:**
* Inherited From: [\testottest\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Ограничение количества объектов возвратов или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод было передана не целое число |

**Returns:** \testottest\Request\Refunds\RefundsRequestBuilder - Инстанс текущего билдера


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


<a name="method_setPaymentId" class="anchor"></a>
#### public setPaymentId() : \testottest\Request\Refunds\RefundsRequestBuilder

```php
public setPaymentId(string|null $value) : \testottest\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает идентификатор платежа или null, если требуется его удалить

**Details:**
* Inherited From: [\testottest\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | value  | Идентификатор платежа |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если длина переданной строки не равна 36 символам |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \testottest\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : \testottest\Request\Refunds\RefundsRequestBuilder

```php
public setStatus(string $value) : \testottest\Request\Refunds\RefundsRequestBuilder
```

**Summary**

Устанавливает статус выбираемых возвратов

**Details:**
* Inherited From: [\testottest\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус выбираемых платежей или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение не является валидным статусом |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \testottest\Request\Refunds\RefundsRequestBuilder - Инстанс текущего объекта билдера


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \testottest\Request\Refunds\RefundsRequest

```php
protected initCurrentObject() : \testottest\Request\Refunds\RefundsRequest
```

**Summary**

Инициализирует новый инстанс собираемого объекта

**Details:**
* Inherited From: [\testottest\Request\Refunds\RefundsRequestBuilder](../classes/YooKassa-Request-Refunds-RefundsRequestBuilder.md)

**Returns:** \testottest\Request\Refunds\RefundsRequest - Инстанс собираемого запроса



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
