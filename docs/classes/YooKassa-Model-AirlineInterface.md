# [YooKassa API SDK](../home.md)

# Interface: AirlineInterface
### Namespace: [\Testottest\Model](../namespaces/yookassa-model.md)
---
---
### Constants
* No constants found

---
### Methods
| Visibility | Name | Flag | Summary |
| ----------:| ---- | ---- | ------- |
| public | [getBookingReference()](../classes/YooKassa-Model-AirlineInterface.md#method_getBookingReference) |  | Номер бронирования. Обязателен на этапе создания платежа. |
| public | [getLegs()](../classes/YooKassa-Model-AirlineInterface.md#method_getLegs) |  | Список объектов-контейнеров с данными о маршруте |
| public | [getPassengers()](../classes/YooKassa-Model-AirlineInterface.md#method_getPassengers) |  | Список объектов-контейнеров с данными пассажиров |
| public | [getTicketNumber()](../classes/YooKassa-Model-AirlineInterface.md#method_getTicketNumber) |  | Уникальный номер билета. Обязателен на этапе подтверждения платежа |

---
### Details
* File: [lib/Model/AirlineInterface.php](../../lib/Model/AirlineInterface.php)
* Package: \Default

---
## Methods
<a name="method_getBookingReference" class="anchor"></a>
#### public getBookingReference() : string

```php
public getBookingReference() : string
```

**Summary**

Номер бронирования. Обязателен на этапе создания платежа.

**Details:**
* Inherited From: [\Testottest\Model\AirlineInterface](../classes/YooKassa-Model-AirlineInterface.md)

**Returns:** string - 


<a name="method_getTicketNumber" class="anchor"></a>
#### public getTicketNumber() : string

```php
public getTicketNumber() : string
```

**Summary**

Уникальный номер билета. Обязателен на этапе подтверждения платежа

**Details:**
* Inherited From: [\Testottest\Model\AirlineInterface](../classes/YooKassa-Model-AirlineInterface.md)

**Returns:** string - 


<a name="method_getPassengers" class="anchor"></a>
#### public getPassengers() : \Testottest\Model\PassengerInterface[]

```php
public getPassengers() : \Testottest\Model\PassengerInterface[]
```

**Summary**

Список объектов-контейнеров с данными пассажиров

**Details:**
* Inherited From: [\Testottest\Model\AirlineInterface](../classes/YooKassa-Model-AirlineInterface.md)

**Returns:** \Testottest\Model\PassengerInterface[] - 


<a name="method_getLegs" class="anchor"></a>
#### public getLegs() : \Testottest\Model\LegInterface[]

```php
public getLegs() : \Testottest\Model\LegInterface[]
```

**Summary**

Список объектов-контейнеров с данными о маршруте

**Details:**
* Inherited From: [\Testottest\Model\AirlineInterface](../classes/YooKassa-Model-AirlineInterface.md)

**Returns:** \Testottest\Model\LegInterface[] - 




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
