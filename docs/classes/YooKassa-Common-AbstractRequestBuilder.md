# [YooKassa API SDK](../home.md)

# Abstract Class: \Testottest\Common\AbstractRequestBuilder
### Namespace: [\Testottest\Common](../namespaces/yookassa-common.md)
---
**Summary:**

Базовый класс билдера запросов


---
### Constants
* No constants found

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$currentObject](../classes/YooKassa-Common-AbstractRequestBuilder.md#property_currentObject) |  | Инстанс собираемого запроса |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [build()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_build) |  | Строит запрос, валидирует его и возвращает, если все прошло нормально |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| protected | [initCurrentObject()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_initCurrentObject) |  | Инициализирует пустой запрос |

---
### Details
* File: [lib/Common/AbstractRequestBuilder.php](../../lib/Common/AbstractRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy:
  * \Testottest\Common\AbstractRequestBuilder

---
## Properties
<a name="property_currentObject"></a>
#### protected $currentObject : \Testottest\Common\AbstractRequest
---
**Summary**

Инстанс собираемого запроса

**Type:** <a href="../classes/YooKassa-Common-AbstractRequest.html"><abbr title="\Testottest\Common\AbstractRequest">AbstractRequest</abbr></a>

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
* Inherited From: [\Testottest\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)

**Returns:** mixed - 


<a name="method_build" class="anchor"></a>
#### public build() : \Testottest\Common\AbstractRequest

```php
public build(array $options = null) : \Testottest\Common\AbstractRequest
```

**Summary**

Строит запрос, валидирует его и возвращает, если все прошло нормально

**Details:**
* Inherited From: [\Testottest\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | options  | Массив свойств запроса, если нужно их установить перед сборкой |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \Testottest\Common\Exceptions\InvalidRequestException | Выбрасывается если при валидации запроса произошла ошибка |
| \Testottest\Common\Exceptions\InvalidPropertyException | Выбрасывается если не удалось установить один из параметров, переданных в массиве настроек |

**Returns:** \Testottest\Common\AbstractRequest - Инстанс собранного запроса


<a name="method_setOptions" class="anchor"></a>
#### public setOptions() : \Testottest\Common\AbstractRequestBuilder

```php
public setOptions(array|\Traversable $options) : \Testottest\Common\AbstractRequestBuilder
```

**Summary**

Устанавливает свойства запроса из массива

**Details:**
* Inherited From: [\Testottest\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR \Traversable</code> | options  | Массив свойств запроса |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \InvalidArgumentException | Выбрасывается если аргумент не массив и не итерируемый объект |
| \Testottest\Common\Exceptions\InvalidPropertyException | Выбрасывается если не удалось установить один из параметров, переданныч в массиве настроек |

**Returns:** \Testottest\Common\AbstractRequestBuilder - Инстанс текущего билдера запросов


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \Testottest\Common\AbstractRequest

```php
Abstract protected initCurrentObject() : \Testottest\Common\AbstractRequest
```

**Summary**

Инициализирует пустой запрос

**Details:**
* Inherited From: [\Testottest\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)

**Returns:** \Testottest\Common\AbstractRequest - Инстанс запроса, который будем собирать



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
