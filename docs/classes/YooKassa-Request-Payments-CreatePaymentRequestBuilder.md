# [YooKassa API SDK](../home.md)

# Class: \testottest\Request\Payments\CreatePaymentRequestBuilder
### Namespace: [\testottest\Request\Payments](../namespaces/yookassa-request-payments.md)
---
**Summary:**

Класс билдера объектов запросов к API на создание платежа


---
### Examples
Пример использования билдера

```php
try {
    $builder = \testottest\Request\Payments\CreatePaymentRequest::builder();
    $builder->setAmount(100)
            ->setCurrency(\testottest\Model\CurrencyCode::RUB)
            ->setCapture(true)
            ->setDescription('Оплата заказа 112233')
            ->setMetadata(array(
                'cms_name'       => 'yoo_api_test',
                'order_id'       => '112233',
                'language'       => 'ru',
                'transaction_id' => '123-456-789',
            ));

    // Устанавливаем страницу для редиректа после оплаты
    $builder->setConfirmation(array(
        'type'      => \testottest\Model\ConfirmationType::REDIRECT,
        'returnUrl' => 'https://merchant-site.ru/payment-return-page',
    ));

    // Можем установить конкретный способ оплаты
    $builder->setPaymentMethodData(\testottest\Model\PaymentMethodType::BANK_CARD);

    // Составляем чек
    $builder->setReceiptEmail('john.doe@merchant.com');
    $builder->setReceiptPhone('71111111111');
    // Добавим товар
    $builder->addReceiptItem(
        'Платок Gucci',
        3000,
        1.0,
        2,
        'full_payment',
        'commodity'
    );
    // Добавим доставку
    $builder->addReceiptShipping(
        'Delivery/Shipping/Доставка',
        100,
        1,
        \testottest\Model\Receipt\PaymentMode::FULL_PAYMENT,
        \testottest\Model\Receipt\PaymentSubject::SERVICE
    );

    // Можно добавить распределение денег по магазинам
    $builder->setTransfers(array(
        array(
            'account_id' => 123456,
            'amount' => array(
                array(
                    'value' => 1000,
                    'currency' => \testottest\Model\CurrencyCode::RUB
                )
            ),
        ),
        array(
            'account_id' => 654321,
            'amount' => array(
                array(
                    'value' => 2000,
                    'currency' => \testottest\Model\CurrencyCode::RUB
                )
            ),
        )
    ));

    // Создаем объект запроса
    $request = $builder->build();

    // Можно изменить данные, если нужно
    $request->setDescription($request->getDescription() . ' - merchant comment');

    $idempotenceKey = uniqid('', true);
    $response = $client->createPayment($request, $idempotenceKey);
} catch (\Exception $e) {
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
| protected | [$amount](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#property_amount) |  | Сумма |
| protected | [$currentObject](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#property_currentObject) |  | Собираемый объект запроса |
| protected | [$receipt](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#property_receipt) |  | Объект с информацией о чеке |
| protected | [$transfers](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#property_transfers) |  | Массив платежей в пользу разных мерчантов |

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [__construct()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method___construct) |  | Конструктор, инициализирует пустой запрос, который в будущем начнём собирать |
| public | [addReceiptItem()](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#method_addReceiptItem) |  | Добавляет в чек товар |
| public | [addReceiptShipping()](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#method_addReceiptShipping) |  | Добавляет в чек доставку товара |
| public | [build()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_build) |  | Строит и возвращает объект запроса для отправки в API ЮKassa |
| public | [setAccountId()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setAccountId) |  | Устанавливает идентификатор магазина получателя платежа |
| public | [setAirline()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setAirline) |  | Устанавливает информацию об авиабилетах |
| public | [setAmount()](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#method_setAmount) |  | Устанавливает сумму |
| public | [setCapture()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setCapture) |  | Устанавливает флаг автоматического принятия поступившей оплаты |
| public | [setClientIp()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setClientIp) |  | Устанавливает IP адрес покупателя |
| public | [setConfirmation()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setConfirmation) |  | Устанавливает способ подтверждения платежа |
| public | [setCurrency()](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#method_setCurrency) |  | Устанавливает валюту в которой будет происходить подтверждение оплаты заказа |
| public | [setDeal()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setDeal) |  | Устанавливает данные о сделке, в составе которой проходит платеж. |
| public | [setDescription()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setDescription) |  | Устанавливает описание транзакции |
| public | [setGatewayId()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setGatewayId) |  | Устанавливает идентификатор шлюза |
| public | [setMerchantCustomerId()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setMerchantCustomerId) |  | Устанавливает идентификатор покупателя в вашей системе |
| public | [setMetadata()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setMetadata) |  | Устанавливает метаданные, привязанные к платежу |
| public | [setOptions()](../classes/YooKassa-Common-AbstractRequestBuilder.md#method_setOptions) |  | Устанавливает свойства запроса из массива |
| public | [setPaymentMethodData()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setPaymentMethodData) |  | Устанавливает объект с информацией для создания метода оплаты |
| public | [setPaymentMethodId()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setPaymentMethodId) |  | Устанавливает идентификатор записи о сохранённых данных покупателя |
| public | [setPaymentToken()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setPaymentToken) |  | Устанавливает одноразовый токен для проведения оплаты |
| public | [setReceipt()](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#method_setReceipt) |  | Устанавливает чек |
| public | [setReceiptEmail()](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#method_setReceiptEmail) |  | Устанавливает адрес электронной почты получателя чека |
| public | [setReceiptItems()](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#method_setReceiptItems) |  | Устанавлвиает список товаров для создания чека |
| public | [setReceiptPhone()](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#method_setReceiptPhone) |  | Устанавливает телефон получателя чека |
| public | [setRecipient()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setRecipient) |  | Устанавливает получателя платежа из объекта или ассоциативного массива |
| public | [setSavePaymentMethod()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_setSavePaymentMethod) |  | Устанавливает флаг сохранения платёжных данных. Значение true инициирует создание многоразового payment_method. |
| public | [setTaxSystemCode()](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#method_setTaxSystemCode) |  | Устанавливает код системы налогообложения. |
| public | [setTransfers()](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md#method_setTransfers) |  | Устанавливает трансферы |
| protected | [getConfirmationFactory()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_getConfirmationFactory) |  | Возвращает фабрику для создания методов подтверждения платежей |
| protected | [getPaymentDataFactory()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_getPaymentDataFactory) |  | Возвращает фабрику методов проведения платежей |
| protected | [initCurrentObject()](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md#method_initCurrentObject) |  | Инициализирует объект запроса, который в дальнейшем будет собираться билдером |

---
### Details
* File: [lib/Request/Payments/CreatePaymentRequestBuilder.php](../../lib/Request/Payments/CreatePaymentRequestBuilder.php)
* Package: YooKassa
* Class Hierarchy:  
  * [\testottest\Common\AbstractRequestBuilder](../classes/YooKassa-Common-AbstractRequestBuilder.md)
  * [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)
  * \testottest\Request\Payments\CreatePaymentRequestBuilder

---
## Properties
<a name="property_amount"></a>
#### protected $amount : \testottest\Model\MonetaryAmount
---
**Summary**

Сумма

**Type:** <a href="../classes/YooKassa-Model-MonetaryAmount.html"><abbr title="\testottest\Model\MonetaryAmount">MonetaryAmount</abbr></a>

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)


<a name="property_currentObject"></a>
#### protected $currentObject : \testottest\Request\Payments\CreatePaymentRequest
---
**Summary**

Собираемый объект запроса

**Type:** <a href="../classes/YooKassa-Request-Payments-CreatePaymentRequest.html"><abbr title="\testottest\Request\Payments\CreatePaymentRequest">CreatePaymentRequest</abbr></a>

**Details:**


<a name="property_receipt"></a>
#### protected $receipt : \testottest\Model\Receipt
---
**Summary**

Объект с информацией о чеке

**Type:** <a href="../classes/YooKassa-Model-Receipt.html"><abbr title="\testottest\Model\Receipt">Receipt</abbr></a>

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)


<a name="property_transfers"></a>
#### protected $transfers : \testottest\Model\TransferInterface[]
---
**Summary**

Массив платежей в пользу разных мерчантов

**Type:** <a href="../\testottest\Model\TransferInterface[]"><abbr title="\testottest\Model\TransferInterface[]">TransferInterface[]</abbr></a>

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)



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


<a name="method_addReceiptItem" class="anchor"></a>
#### public addReceiptItem() : self

```php
public addReceiptItem(string $title, string $price, float $quantity, int $vatCode, null|string $paymentMode = null, null|string $paymentSubject = null, mixed $productCode = null, mixed $countryOfOriginCode = null, mixed $customsDeclarationNumber = null, mixed $excise = null) : self
```

**Summary**

Добавляет в чек товар

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)
* See Also:
 * [](\testottest\Model\Receipt\PaymentSubject::class)
 * [](\testottest\Model\Receipt\PaymentMode::class)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | title  | Название или описание товара |
| <code lang="php">string</code> | price  | Цена товара в валюте, заданной в заказе |
| <code lang="php">float</code> | quantity  | Количество товара |
| <code lang="php">int</code> | vatCode  | Ставка НДС |
| <code lang="php">null OR string</code> | paymentMode  | значение перечисления PaymentMode |
| <code lang="php">null OR string</code> | paymentSubject  | значение перечисления PaymentSubject |
| <code lang="php">mixed</code> | productCode  |  |
| <code lang="php">mixed</code> | countryOfOriginCode  |  |
| <code lang="php">mixed</code> | customsDeclarationNumber  |  |
| <code lang="php">mixed</code> | excise  |  |

**Returns:** self - Инстанс билдера запросов


<a name="method_addReceiptShipping" class="anchor"></a>
#### public addReceiptShipping() : self

```php
public addReceiptShipping(string $title, string $price, int $vatCode, null|string $paymentMode = null, null|string $paymentSubject = null) : self
```

**Summary**

Добавляет в чек доставку товара

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)
* See Also:
 * [](\testottest\Model\Receipt\PaymentSubject::class)
 * [](\testottest\Model\Receipt\PaymentMode::class)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | title  | Название доставки в чеке |
| <code lang="php">string</code> | price  | Стоимость доставки |
| <code lang="php">int</code> | vatCode  | Ставка НДС |
| <code lang="php">null OR string</code> | paymentMode  | значение перечисления PaymentMode |
| <code lang="php">null OR string</code> | paymentSubject  | значение перечисления PaymentSubject |

**Returns:** self - Инстанс билдера запросов


<a name="method_build" class="anchor"></a>
#### public build() : \testottest\Request\Payments\CreatePaymentRequestInterface|\testottest\Common\AbstractPaymentRequest|\testottest\Common\AbstractRequest

```php
public build(array|null $options = null) : \testottest\Request\Payments\CreatePaymentRequestInterface|\testottest\Common\AbstractPaymentRequest|\testottest\Common\AbstractRequest
```

**Summary**

Строит и возвращает объект запроса для отправки в API ЮKassa

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array OR null</code> | options  | Массив параметров для установки в объект запроса |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidRequestException | Выбрасывается если собрать объект запроса не удалось |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestInterface|\testottest\Common\AbstractPaymentRequest|\testottest\Common\AbstractRequest - Инстанс объекта запроса


<a name="method_setAccountId" class="anchor"></a>
#### public setAccountId() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setAccountId(string $value) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает идентификатор магазина получателя платежа

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор магазина |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если было передано пустое значение |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если было передано не строковое значение |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - Инстанс текущего билдера


<a name="method_setAirline" class="anchor"></a>
#### public setAirline() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setAirline(\testottest\Model\AirlineInterface|array $value) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает информацию об авиабилетах

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\AirlineInterface OR array</code> | value  | Объект данных длинной записи или ассоциативный массив с данными |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - 


<a name="method_setAmount" class="anchor"></a>
#### public setAmount() : self

```php
public setAmount(\testottest\Model\AmountInterface|array|string $value) : self
```

**Summary**

Устанавливает сумму

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\AmountInterface OR array OR string</code> | value  | Сумма оплаты |

**Returns:** self - Инстанс билдера запросов


<a name="method_setCapture" class="anchor"></a>
#### public setCapture() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setCapture(bool $value) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает флаг автоматического принятия поступившей оплаты

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Автоматически принять поступившую оплату |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Генерируется если переданный аргумент не кастится в bool |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - Инстанс текущего билдера


<a name="method_setClientIp" class="anchor"></a>
#### public setClientIp() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setClientIp(string $value) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает IP адрес покупателя

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | IPv4 или IPv6-адрес покупателя |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданный аргумент не является строкой |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - Инстанс текущего билдера


<a name="method_setConfirmation" class="anchor"></a>
#### public setConfirmation() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setConfirmation(\testottest\Model\ConfirmationAttributes\AbstractConfirmationAttributes|string|array|null $value, array|null $options = null) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает способ подтверждения платежа

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\ConfirmationAttributes\AbstractConfirmationAttributes OR string OR array OR null</code> | value  | Способ подтверждения платежа |
| <code lang="php">array OR null</code> | options  | Настройки способа подтверждения платежа в виде массива |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является объектом типа AbstractConfirmationAttributes или null |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - Инстанс текущего билдера


<a name="method_setCurrency" class="anchor"></a>
#### public setCurrency() : self

```php
public setCurrency(string $value) : self
```

**Summary**

Устанавливает валюту в которой будет происходить подтверждение оплаты заказа

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Валюта в которой подтверждается оплата |

**Returns:** self - Инстанс билдера запросов


<a name="method_setDeal" class="anchor"></a>
#### public setDeal() : mixed

```php
public setDeal(\testottest\Model\Deal\PaymentDealInfo|array|null $value) : mixed
```

**Summary**

Устанавливает данные о сделке, в составе которой проходит платеж.

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\Deal\PaymentDealInfo OR array OR null</code> | value  | Данные о сделке, в составе которой проходит платеж |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданные данные не удалось интерпретировать как метаданные платежа |

**Returns:** mixed - 


<a name="method_setDescription" class="anchor"></a>
#### public setDescription() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setDescription(string $value) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает описание транзакции

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Описание транзакции |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение превышает допустимую длину |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - Инстанс текущего билдера


<a name="method_setGatewayId" class="anchor"></a>
#### public setGatewayId() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setGatewayId(string $value) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает идентификатор шлюза

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор шлюза |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\EmptyPropertyValueException | Выбрасывается если было передано пустое значение |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если было передано не строковое значение |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - Инстанс текущего билдера


<a name="method_setMerchantCustomerId" class="anchor"></a>
#### public setMerchantCustomerId() : mixed

```php
public setMerchantCustomerId(string $value) : mixed
```

**Summary**

Устанавливает идентификатор покупателя в вашей системе

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор покупателя в вашей системе, например электронная почта или номер телефона. Не более 200 символов |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданный аргумент не является строкой |

**Returns:** mixed - 


<a name="method_setMetadata" class="anchor"></a>
#### public setMetadata() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setMetadata(\testottest\Model\Metadata|array|null $value) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает метаданные, привязанные к платежу

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\Metadata OR array OR null</code> | value  | Метаданные платежа, устанавливаемые мерчантом |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданные данные не удалось интерпретировать как метаданные платежа |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - Инстанс текущего билдера


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


<a name="method_setPaymentMethodData" class="anchor"></a>
#### public setPaymentMethodData() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setPaymentMethodData(\testottest\Model\PaymentData\AbstractPaymentData|string|array|null $value, array $options = null) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает объект с информацией для создания метода оплаты

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\PaymentData\AbstractPaymentData OR string OR array OR null</code> | value  | Объект создания метода оплаты или null |
| <code lang="php">array</code> | options  | Настройки способа оплаты в виде ассоциативного массива |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если был передан объект невалидного типа |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - Инстанс текущего билдера


<a name="method_setPaymentMethodId" class="anchor"></a>
#### public setPaymentMethodId() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setPaymentMethodId(string $value) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает идентификатор записи о сохранённых данных покупателя

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Идентификатор записи о сохраненных платежных данных покупателя |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Генерируется если переданные значение не является строкой или null |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - Инстанс текущего билдера


<a name="method_setPaymentToken" class="anchor"></a>
#### public setPaymentToken() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setPaymentToken(string $value) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает одноразовый токен для проведения оплаты

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Одноразовый токен для проведения оплаты |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если переданное значение превышает допустимую длину |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если переданное значение не является строкой |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - Инстанс текущего билдера


<a name="method_setReceipt" class="anchor"></a>
#### public setReceipt() : self

```php
public setReceipt(\testottest\Model\ReceiptInterface|array $value) : self
```

**Summary**

Устанавливает чек

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\ReceiptInterface OR array</code> | value  | Инстанс чека или ассоциативный массив с данными чека |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Генерируется если было передано значение невалидного типа |

**Returns:** self - 


<a name="method_setReceiptEmail" class="anchor"></a>
#### public setReceiptEmail() : self

```php
public setReceiptEmail(string $value) : self
```

**Summary**

Устанавливает адрес электронной почты получателя чека

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Email получателя чека |

**Returns:** self - Инстанс билдера запросов


<a name="method_setReceiptItems" class="anchor"></a>
#### public setReceiptItems() : self

```php
public setReceiptItems(array $value) : self
```

**Summary**

Устанавлвиает список товаров для создания чека

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">array</code> | value  | Массив товаров в заказе |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueException | Выбрасывается если хотя бы один из товаров имеет неверную структуру |

**Returns:** self - Инстанс билдера запросов


<a name="method_setReceiptPhone" class="anchor"></a>
#### public setReceiptPhone() : self

```php
public setReceiptPhone(string $value) : self
```

**Summary**

Устанавливает телефон получателя чека

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">string</code> | value  | Телефон получателя чека |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если в качестве значения была передана не строка |

**Returns:** self - Инстанс билдера запросов


<a name="method_setRecipient" class="anchor"></a>
#### public setRecipient() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setRecipient(\testottest\Model\RecipientInterface|array $value) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает получателя платежа из объекта или ассоциативного массива

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\RecipientInterface OR array</code> | value  | Получатель платежа |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Выбрасывается если передан аргумент не валидного типа |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - 


<a name="method_setSavePaymentMethod" class="anchor"></a>
#### public setSavePaymentMethod() : \testottest\Request\Payments\CreatePaymentRequestBuilder

```php
public setSavePaymentMethod(bool $value) : \testottest\Request\Payments\CreatePaymentRequestBuilder
```

**Summary**

Устанавливает флаг сохранения платёжных данных. Значение true инициирует создание многоразового payment_method.

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">bool</code> | value  | Сохранить платежные данные для последующего использования |

##### Throws:
| Type | Description |
| ---- | ----------- |
| \testottest\Common\Exceptions\InvalidPropertyValueTypeException | Генерируется если переданный аргумент не кастится в bool |

**Returns:** \testottest\Request\Payments\CreatePaymentRequestBuilder - Инстанс текущего билдера


<a name="method_setTaxSystemCode" class="anchor"></a>
#### public setTaxSystemCode() : self

```php
public setTaxSystemCode(int $value) : self
```

**Summary**

Устанавливает код системы налогообложения.

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">int</code> | value  | Код системы налогообложения. Число 1-6. |

**Returns:** self - Инстанс билдера запросов


<a name="method_setTransfers" class="anchor"></a>
#### public setTransfers() : self

```php
public setTransfers(\testottest\Model\TransferInterface[]|array|null $value) : self
```

**Summary**

Устанавливает трансферы

**Details:**
* Inherited From: [\testottest\Common\AbstractPaymentRequestBuilder](../classes/YooKassa-Common-AbstractPaymentRequestBuilder.md)

##### Parameters:
| Type | Name | Description |
| ---- | ---- | ----------- |
| <code lang="php">\testottest\Model\TransferInterface[] OR array OR null</code> | value  | Массив трансферов |

**Returns:** self - Инстанс билдера запросов


<a name="method_getConfirmationFactory" class="anchor"></a>
#### protected getConfirmationFactory() : \testottest\Model\ConfirmationAttributes\ConfirmationAttributesFactory

```php
protected getConfirmationFactory() : \testottest\Model\ConfirmationAttributes\ConfirmationAttributesFactory
```

**Summary**

Возвращает фабрику для создания методов подтверждения платежей

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

**Returns:** \testottest\Model\ConfirmationAttributes\ConfirmationAttributesFactory - Фабрика объектов методов подтверждения платежей


<a name="method_getPaymentDataFactory" class="anchor"></a>
#### protected getPaymentDataFactory() : \testottest\Model\PaymentData\PaymentDataFactory

```php
protected getPaymentDataFactory() : \testottest\Model\PaymentData\PaymentDataFactory
```

**Summary**

Возвращает фабрику методов проведения платежей

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

**Returns:** \testottest\Model\PaymentData\PaymentDataFactory - Фабрика методов проведения платежей


<a name="method_initCurrentObject" class="anchor"></a>
#### protected initCurrentObject() : \testottest\Request\Payments\CreatePaymentRequest

```php
protected initCurrentObject() : \testottest\Request\Payments\CreatePaymentRequest
```

**Summary**

Инициализирует объект запроса, который в дальнейшем будет собираться билдером

**Details:**
* Inherited From: [\testottest\Request\Payments\CreatePaymentRequestBuilder](../classes/YooKassa-Request-Payments-CreatePaymentRequestBuilder.md)

**Returns:** \testottest\Request\Payments\CreatePaymentRequest - Инстанс собираемого объекта запроса к API



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
