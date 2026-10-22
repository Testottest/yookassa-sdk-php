# [YooKassa API SDK](../home.md)

# Class: \testottest\Request\Receipts\CreatePostReceiptRequestBuilder
### Namespace: [\testottest\Request\Receipts](../namespaces/yookassa-request-receipts.md)
---
**Summary:**

Класс билдера объектов запросов к API на создание чека


---
### Examples
Пример использования билдера

```php
try {
    $receiptBuilder = \testottest\Request\Receipts\CreatePostReceiptRequest::builder();
    $receiptBuilder->setType(\testottest\Model\ReceiptType::PAYMENT)
        ->setObjectId('24b94598-000f-5000-9000-1b68e7b15f3f', \testottest\Model\ReceiptType::PAYMENT) // payment_id
        ->setCustomer(array(
            'email' => 'john.doe@merchant.com',
            'phone' => '71111111111',
        ))
        ->setItems(array(
            array(
                'description' => 'Платок Gucci',
                'quantity' => '1.00',
                'amount' => array(
                    'value' => '3000.00',
                    'currency' => 'RUB',
                ),
                'vat_code' => 2,
                'payment_mode' => 'full_payment',
                'payment_subject' => 'commodity',
            ),
        ))
        ->setSettlements(array(
            array(
                'type' => 'prepayment',
                'amount' => array(
                    'value' => 100.00,
                    'currency' => 'RUB',
                ),
            ),
        ))
        ->setSend(true);

    // Создаем объект запроса
    $request = $receiptBuilder->build();

    // Можно изменить данные, если нужно
    $request->setOnBehalfOf('159753');
    $request->addItem(new \testottest\Model\ReceiptItem(array(
        'description' => 'Платок Gucci Новый',
        'quantity' => '1.00',
        'amount' => array(
            'value' => '3500.00',
            'currency' => 'RUB',
        ),
        'vat_code' => 2,
        'payment_mode' => 'full_payment',
        'payment_subject' => 'commodity',
    )));

    $idempotenceKey = uniqid('', true);
    $response = $client->createReceipt($request, $idempotenceKey);
} catch (Exception $e) {
    $response = $e;
}

var_dump($response);

```

---
### Constants
* No constants found

---
### Properties
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| protected | [$amount](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#property_amount) |  | Сумма чека |
| protected | [$currentObject](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#property_currentObject) |  | Собираемый объект запроса |
| protected | [$customer](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#property_customer) |  | Информация о плательщике |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [addItem()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_addItem) |  | Добавляет товар в чек |
| public | [build()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_build) |  | Строит и возвращает объект запроса для отправки в API ЮKassa |
| public | [setAmount()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setAmount) |  | Устанавливает сумму |
| public | [setCurrency()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setCurrency) |  | Устанавливает валюту в которой будет происходить подтверждение оплаты заказа |
| public | [setCustomer()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setCustomer) |  | Устанавливает информацию о пользователе |
| public | [setItems()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setItems) |  | Устанавливает список товаров чека |
| public | [setObjectId()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setObjectId) |  | Устанавливает Id объекта чека |
| public | [setObjectType()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setObjectType) |  | Устанавливает тип объекта чека |
| public | [setOnBehalfOf()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setOnBehalfOf) |  | Устанавливает идентификатор магазина, от имени которого нужно отправить чек. |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| public | [setSend()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setSend) |  | Устанавливает признак отложенной отправки чека. |
| public | [setSettlements()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setSettlements) |  | Устанавливает массив оплат, обеспечивающих выдачу товара. |
| public | [setTaxSystemCode()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setTaxSystemCode) |  | Устанавливает код системы налогообложения |
| public | [setType()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_setType) |  | Устанавливает тип чека в онлайн-кассе |
| protected | [initCurrentObject()](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md#method_initCurrentObject) |  | Инициализирует объект запроса, который в дальнейшем будет собираться билдером |

---
### Details
* File: [lib/Request/Receipts/CreatePostReceiptRequestBuilder.php](../../lib/Request/Receipts/CreatePostReceiptRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy: 
  * [\testottest\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
  * \testottest\Request\Receipts\CreatePostReceiptRequestBuilder

---
## Properties
<a name="property_amount"></a>
#### protected $amount : \testottest\Model\AmountInterface
---
**Summary**

Сумма чека

**Type:** <a href="../classes/YooKassa-Model-AmountInterface.html"><abbr title="\testottest\Model\AmountInterface">AmountInterface</abbr></a>

**Details:**


<a name="property_currentObject"></a>
#### protected $currentObject : \testottest\Request\Receipts\CreatePostReceiptRequest
---
**Summary**

Собираемый объект запроса

**Type:** <a href="../classes/YooKassa-Request-Receipts-CreatePostReceiptRequest.html"><abbr title="\testottest\Request\Receipts\CreatePostReceiptRequest">CreatePostReceiptRequest</abbr></a>

**Details:**


<a name="property_customer"></a>
#### protected $customer : \testottest\Model\ReceiptCustomer
---
**Summary**

Информация о плательщике

**Type:** <a href="../classes/YooKassa-Model-ReceiptCustomer.html"><abbr title="\testottest\Model\ReceiptCustomer">ReceiptCustomer</abbr></a>

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


<a name="method_addItem" class="anchor"></a>
#### public addItem() : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public addItem(\testottest\Model\ReceiptItemInterface|array $value) : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Добавляет товар в чек

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\ReceiptItemInterface OR array</code> | value  | Информация о товаре |

**Returns:** \testottest\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_build" class="anchor"></a>
#### public build() : \testottest\Request\Receipts\CreatePostReceiptRequest|\testottest\Common\AbstractRequest

```php
public build(array|null $options = null) : \testottest\Request\Receipts\CreatePostReceiptRequest|\testottest\Common\AbstractRequest
```

**Summary**

Строит и возвращает объект запроса для отправки в API ЮKassa

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | options  | Массив параметров для установки в объект запроса |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidRequestException | Выбрасывается если собрать объект запроса не удалось |

**Returns:** \testottest\Request\Receipts\CreatePostReceiptRequest|\testottest\Common\AbstractRequest - Инстанс объекта запроса


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : self

```php
public setAmount(\testottest\Model\AmountInterface|array|string $value) : self
```

**Summary**

Устанавливает сумму

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\AmountInterface OR array OR string</code> | value  | Сумма оплаты |

**Returns:** self - Инстанс билдера запросов


<a name="method_setCurrency" class="anchor"></a>
#### public setCurrency() : self

```php
public setCurrency(string $value) : self
```

**Summary**

Устанавливает валюту в которой будет происходить подтверждение оплаты заказа

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Валюта в которой подтверждается оплата |

**Returns:** self - Инстанс билдера запросов


<a name="method_setCustomer" class="anchor"></a>
#### public setCustomer() : self

```php
public setCustomer(\testottest\Model\ReceiptCustomerInterface|array $value) : self
```

**Summary**

Устанавливает информацию о пользователе

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\ReceiptCustomerInterface OR array</code> | value  | Информация о плательщике |

**Returns:** self - Инстанс билдера запросов


<a name="method_setItems" class="anchor"></a>
#### public setItems() : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setItems(\testottest\Model\ReceiptItemInterface[]|array $value) : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает список товаров чека

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\ReceiptItemInterface[] OR array</code> | value  | Список товаров чека |

**Returns:** \testottest\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setObjectId" class="anchor"></a>
#### public setObjectId() : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setObjectId(string $value, string|null $type = null) : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает Id объекта чека

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Id объекта чека |
| <code lang="php">string OR null</code> | type  | Тип объекта чека |

**Returns:** \testottest\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setObjectType" class="anchor"></a>
#### public setObjectType() : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setObjectType(string $value) : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает тип объекта чека

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип объекта чека |

**Returns:** \testottest\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setOnBehalfOf" class="anchor"></a>
#### public setOnBehalfOf() : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setOnBehalfOf(string $value) : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает идентификатор магазина, от имени которого нужно отправить чек.

**Description**

Выдается ЮKassa, отображается в разделе Продавцы личного кабинета (столбец shopId).
Необходимо передавать, если вы используете решение ЮKassa для платформ.

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор магазина, от имени которого нужно отправить чек |

**Returns:** \testottest\Request\Receipts\CreatePostReceiptRequestBuilder - 


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


<a name="method_setSend" class="anchor"></a>
#### public setSend() : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setSend(bool $value) : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает признак отложенной отправки чека.

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Признак отложенной отправки чека. |

**Returns:** \testottest\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setSettlements" class="anchor"></a>
#### public setSettlements() : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setSettlements(\testottest\Model\SettlementInterface[]|array $value) : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает массив оплат, обеспечивающих выдачу товара.

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\SettlementInterface[] OR array</code> | value  | Массив оплат, обеспечивающих выдачу товара |

**Returns:** \testottest\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setTaxSystemCode" class="anchor"></a>
#### public setTaxSystemCode() : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setTaxSystemCode(int $value) : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает код системы налогообложения

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | value  | Код системы налогообложения. Число 1-6. |

**Returns:** \testottest\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_setType" class="anchor"></a>
#### public setType() : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder

```php
public setType(string $value) : \testottest\Request\Receipts\CreatePostReceiptRequestBuilder
```

**Summary**

Устанавливает тип чека в онлайн-кассе

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Тип чека в онлайн-кассе: приход "payment" или возврат "refund". |

**Returns:** \testottest\Request\Receipts\CreatePostReceiptRequestBuilder - 


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \testottest\Request\Receipts\CreatePostReceiptRequest

```php
protected initCurrentObject() : \testottest\Request\Receipts\CreatePostReceiptRequest
```

**Summary**

Инициализирует объект запроса, который в дальнейшем будет собираться билдером

**Details:**
* Inherited From: [\testottest\Request\Receipts\CreatePostReceiptRequestBuilder](../classes/YooKassa-Request-Receipts-CreatePostReceiptRequestBuilder.md)

**Returns:** \testottest\Request\Receipts\CreatePostReceiptRequest - Инстанс собираемого объекта запроса к API



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
