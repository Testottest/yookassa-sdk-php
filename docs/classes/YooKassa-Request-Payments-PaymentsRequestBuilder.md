# [YooKassa API SDK](../home.md)

# Class: \testottest\Request\Payments\PaymentsRequestBuilder
### Namespace: [\testottest\Request\Payments](../namespaces/yookassa-request-payments.md)
---
**Summary:**

Класс билдера запросов к API для получения списка платежей магазина


---
### Constants
* No constants found

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$currentObject](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#property_currentObject) |  | Инстанс собираемого запроса |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [build()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_build) |  | Собирает и возвращает объект запроса списка платежей магазина |
| public | [setCapturedAtGt()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setCapturedAtGt) |  | Устанавливает дату подтверждения от которой выбираются платежи |
| public | [setCapturedAtGte()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setCapturedAtGte) |  | Устанавливает дату подтверждения от которой выбираются платежи |
| public | [setCapturedAtLt()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setCapturedAtLt) |  | Устанавливает дату подтверждения до которой выбираются платежи |
| public | [setCapturedAtLte()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setCapturedAtLte) |  | Устанавливает дату подтверждения до которой выбираются платежи |
| public | [setCreatedAtGt()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setCreatedAtGt) |  | Устанавливает дату создания от которой выбираются платежи |
| public | [setCreatedAtGte()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setCreatedAtGte) |  | Устанавливает дату создания от которой выбираются платежи |
| public | [setCreatedAtLt()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setCreatedAtLt) |  | Устанавливает дату создания до которой выбираются платежи |
| public | [setCreatedAtLte()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setCreatedAtLte) |  | Устанавливает дату создания до которой выбираются платежи |
| public | [setCursor()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setCursor) |  | Устанавливает страница выдачи результатов |
| public | [setLimit()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setLimit) |  | Устанавливает ограничение количества объектов платежа |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| public | [setPaymentMethod()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setPaymentMethod) |  | Устанавливает платежный метод выбираемых платежей |
| public | [setStatus()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_setStatus) |  | Устанавливает статус выбираемых платежей |
| protected | [initCurrentObject()](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md#method_initCurrentObject) |  | Возвращает новый объект запроса для получения списка платежей, который в дальнейшем будет собираться в билдере |

---
### Details
* File: [lib/Request/Payments/PaymentsRequestBuilder.php](../../lib/Request/Payments/PaymentsRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\testottest\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
  * \testottest\Request\Payments\PaymentsRequestBuilder

---
## Properties
<a name="property_currentObject"></a>
#### protected $currentObject : \testottest\Request\Payments\PaymentsRequest
---
**Summary**

Инстанс собираемого запроса

**Type:** <a href="../classes/YooKassa-Request-Payments-PaymentsRequest.html"><abbr title="\testottest\Request\Payments\PaymentsRequest">PaymentsRequest</abbr></a>
Собираемый объект запроса списка платежей магазина
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
#### public build() : \testottest\Common\AbstractRequest

```php
public build(array|null $options = null) : \testottest\Common\AbstractRequest
```

**Summary**

Собирает и возвращает объект запроса списка платежей магазина

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | options  | Массив с настройками запроса |

**Returns:** \testottest\Common\AbstractRequest - Инстанс объекта запроса к API для получения списка платежей магазина


<a name="method_setCapturedAtGt" class="anchor"></a>
#### public setCapturedAtGt() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setCapturedAtGt(\DateTime|string|int|null $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает дату подтверждения от которой выбираются платежи

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


<a name="method_setCapturedAtGte" class="anchor"></a>
#### public setCapturedAtGte() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setCapturedAtGte(\DateTime|string|int|null $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает дату подтверждения от которой выбираются платежи

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время подтверждения, от (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


<a name="method_setCapturedAtLt" class="anchor"></a>
#### public setCapturedAtLt() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setCapturedAtLt(\DateTime|string|int|null $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает дату подтверждения до которой выбираются платежи

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время подтверждения, до (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


<a name="method_setCapturedAtLte" class="anchor"></a>
#### public setCapturedAtLte() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setCapturedAtLte(\DateTime|string|int|null $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает дату подтверждения до которой выбираются платежи

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время подтверждения, до (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


<a name="method_setCreatedAtGt" class="anchor"></a>
#### public setCreatedAtGt() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setCreatedAtGt(\DateTime|string|int|null $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает дату создания от которой выбираются платежи

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (не включая) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


<a name="method_setCreatedAtGte" class="anchor"></a>
#### public setCreatedAtGte() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setCreatedAtGte(\DateTime|string|int|null $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает дату создания от которой выбираются платежи

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, от (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


<a name="method_setCreatedAtLt" class="anchor"></a>
#### public setCreatedAtLt() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setCreatedAtLt(\DateTime|string|int|null $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает дату создания до которой выбираются платежи

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (не включая) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


<a name="method_setCreatedAtLte" class="anchor"></a>
#### public setCreatedAtLte() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setCreatedAtLte(\DateTime|string|int|null $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает дату создания до которой выбираются платежи

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\DateTime OR string OR int OR null</code> | value  | Время создания, до (включительно) или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Генерируется если была передана дата в невалидном формате (была передана строка или число, которые не удалось преобразовать в валидную дату) |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException|\Exception | Генерируется если была передана дата с не тем типом (передана не строка, не число и не значение типа \DateTime) |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


<a name="method_setCursor" class="anchor"></a>
#### public setCursor() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setCursor(string|null $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает страница выдачи результатов

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string OR null</code> | value  | Страница выдачи результатов или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


<a name="method_setLimit" class="anchor"></a>
#### public setLimit() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setLimit(string $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает ограничение количества объектов платежа

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Ограничение количества объектов платежа или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод было передана не целое число |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


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


<a name="method_setPaymentMethod" class="anchor"></a>
#### public setPaymentMethod() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setPaymentMethod(string $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает платежный метод выбираемых платежей

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Платежный метод выбираемых платежей или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение не является валидным статусом |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


<a name="method_setStatus" class="anchor"></a>
#### public setStatus() : \testottest\Request\Payments\PaymentsRequestBuilder

```php
public setStatus(string $value) : \testottest\Request\Payments\PaymentsRequestBuilder
```

**Summary**

Устанавливает статус выбираемых платежей

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Статус выбираемых платежей или null, чтобы удалить значение |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение не является валидным статусом |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в метод была передана не строка |

**Returns:** \testottest\Request\Payments\PaymentsRequestBuilder - Инстанс текущего билдера


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \testottest\Request\Payments\PaymentsRequest

```php
protected initCurrentObject() : \testottest\Request\Payments\PaymentsRequest
```

**Summary**

Возвращает новый объект запроса для получения списка платежей, который в дальнейшем будет собираться в билдере

**Details:**
* Inherited From: [\testottest\Request\Payments\PaymentsRequestBuilder](../classes/YooKassa-Request-Payments-PaymentsRequestBuilder.md)

**Returns:** \testottest\Request\Payments\PaymentsRequest - Объект запроса списка платежей магазина



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
