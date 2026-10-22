# [YooKassa API SDK](../home.md)

# Namespace: \testottest\Model

## Parent: [\YooKassa](../namespaces/yookassa.md)

### Namespaces

* [\testottest\Model\Confirmation](../namespaces/yookassa-model-confirmation.md)
* [\testottest\Model\ConfirmationAttributes](../namespaces/yookassa-model-confirmationattributes.md)
* [\testottest\Model\Deal](../namespaces/yookassa-model-deal.md)
* [\testottest\Model\Notification](../namespaces/yookassa-model-notification.md)
* [\testottest\Model\PaymentData](../namespaces/yookassa-model-paymentdata.md)
* [\testottest\Model\PaymentMethod](../namespaces/yookassa-model-paymentmethod.md)
* [\testottest\Model\Payout](../namespaces/yookassa-model-payout.md)
* [\testottest\Model\Receipt](../namespaces/yookassa-model-receipt.md)
* [\testottest\Model\Webhook](../namespaces/yookassa-model-webhook.md)

### Interfaces

| Name | Summary |
| ---- | ------- |
| [\testottest\Model\AirlineInterface](../classes/YooKassa-Model-AirlineInterface.md) |  |
| [\testottest\Model\AmountInterface](../classes/YooKassa-Model-AmountInterface.md) | Interface AmountInterface |
| [\testottest\Model\AuthorizationDetailsInterface](../classes/YooKassa-Model-AuthorizationDetailsInterface.md) | Interface AuthorizationDetailsInterface - Данные об авторизации платежа |
| [\testottest\Model\CancellationDetailsInterface](../classes/YooKassa-Model-CancellationDetailsInterface.md) | Interface CancellationDetailsInterface |
| [\testottest\Model\DealInterface](../classes/YooKassa-Model-DealInterface.md) | Interface DealInterface |
| [\testottest\Model\LegInterface](../classes/YooKassa-Model-LegInterface.md) |  |
| [\testottest\Model\PassengerInterface](../classes/YooKassa-Model-PassengerInterface.md) |  |
| [\testottest\Model\PaymentInterface](../classes/YooKassa-Model-PaymentInterface.md) | Interface PaymentInterface |
| [\testottest\Model\PayoutInterface](../classes/YooKassa-Model-PayoutInterface.md) | Interface DealInterface |
| [\testottest\Model\ReceiptCustomerInterface](../classes/YooKassa-Model-ReceiptCustomerInterface.md) | Interface ReceiptCustomerInterface |
| [\testottest\Model\ReceiptInterface](../classes/YooKassa-Model-ReceiptInterface.md) | Interface ReceiptInterface |
| [\testottest\Model\ReceiptItemInterface](../classes/YooKassa-Model-ReceiptItemInterface.md) | Interface ReceiptItemInterface |
| [\testottest\Model\RecipientInterface](../classes/YooKassa-Model-RecipientInterface.md) | Интерфейс получателя платежа. |
| [\testottest\Model\RefundInterface](../classes/YooKassa-Model-RefundInterface.md) | Interface RefundInterface |
| [\testottest\Model\RequestorInterface](../classes/YooKassa-Model-RequestorInterface.md) | Interface RequestorInterface |
| [\testottest\Model\SettlementInterface](../classes/YooKassa-Model-SettlementInterface.md) | Interface PostReceiptResponseSettlementInterface |
| [\testottest\Model\SourceInterface](../classes/YooKassa-Model-SourceInterface.md) | Interface TransferInterface |
| [\testottest\Model\SupplierInterface](../classes/YooKassa-Model-SupplierInterface.md) | Interface SupplierInterface |
| [\testottest\Model\TransferInterface](../classes/YooKassa-Model-TransferInterface.md) | Interface TransferInterface |

### Classes

| Name | Summary |
| ---- | ------- |
| [\testottest\Model\Airline](../classes/YooKassa-Model-Airline.md) | Класс описывающий авиабилет |
| [\testottest\Model\AuthorizationDetails](../classes/YooKassa-Model-AuthorizationDetails.md) | AuthorizationDetails - Данные об авторизации платежа |
| [\testottest\Model\BaseDeal](../classes/YooKassa-Model-BaseDeal.md) | Базовый класс сделки |
| [\testottest\Model\CancellationDetails](../classes/YooKassa-Model-CancellationDetails.md) | CancellationDetails - Комментарий к отмене платежа |
| [\testottest\Model\CancellationDetailsPartyCode](../classes/YooKassa-Model-CancellationDetailsPartyCode.md) | CancellationDetailsPartyCode - Возможные инициаторы отмены платежа |
| [\testottest\Model\CancellationDetailsReasonCode](../classes/YooKassa-Model-CancellationDetailsReasonCode.md) | CancellationDetailsReasonCode - Возможные причины отмены платежа |
| [\testottest\Model\ConfirmationType](../classes/YooKassa-Model-ConfirmationType.md) | ConfirmationType - Тип пользовательского процесса подтверждения платежа |Код|Описание| --- | --- |redirect|Необходимо направить плательщика на страницу партнера| |external|Необходимо ождать пока плательщик самостоятельно подтвердит платеж| |code_verification|Необходимо получить одноразовый код от плательщика для подтверждения платежа| |embedded|Необходимо получить токен для checkout.js| |qr|Необходимо получить QR-код| |mobile_application|необходимо совершить действия в мобильном приложении| |
| [\testottest\Model\CurrencyCode](../classes/YooKassa-Model-CurrencyCode.md) | CurrencyCode - Код валюты, ISO-4217 3-alpha currency symbol |
| [\testottest\Model\Leg](../classes/YooKassa-Model-Leg.md) | Класс, описывающий маршрут |
| [\testottest\Model\Locale](../classes/YooKassa-Model-Locale.md) | Locale - Язык интерфейса, писем и смс, которые будет видеть или получать пользователь |Код|Описание| --- | --- |ru_RU|Русский| |en_US|English| |
| [\testottest\Model\Metadata](../classes/YooKassa-Model-Metadata.md) | Metadata - Метаданные платежа указанные мерчантом. |
| [\testottest\Model\MonetaryAmount](../classes/YooKassa-Model-MonetaryAmount.md) | MonetaryAmount - Сумма определенная в валюте |
| [\testottest\Model\NotificationEventType](../classes/YooKassa-Model-NotificationEventType.md) | NotificationEventType - Тип уведомления |Код|Описание| --- | --- |payment.waiting_for_capture|Успешно оплачен покупателем, ожидает подтверждения магазином (capture или aviso)| |payment.succeeded|Успешно оплачен и подтвержден магазином| |payment.canceled|Неуспех оплаты или отменен магазином| |refund.succeeded|Успешный возврат| |deal.closed|Сделка перешла в статус closed| |payout.canceled|Выплата перешла в статус canceled| |payout.succeeded|Выплата перешла в статус succeeded| |
| [\testottest\Model\NotificationType](../classes/YooKassa-Model-NotificationType.md) | Базовый класс генерируемых enum&#039;ов |
| [\testottest\Model\Passenger](../classes/YooKassa-Model-Passenger.md) | Класс описывающий данные пассажира |
| [\testottest\Model\Payment](../classes/YooKassa-Model-Payment.md) | Payment - Данные о платеже |
| [\testottest\Model\PaymentMethodType](../classes/YooKassa-Model-PaymentMethodType.md) | PaymentMethodType - Тип источника средств для проведения платежа |Код|Описание| --- | --- |yoo_money|Платеж из кошелька ЮMoney| |bank_card|Платеж с произвольной банковской карты| |sberbank|Платеж СбербанкОнлайн| |cash|Платеж наличными| |mobile_balance|Платеж с баланса мобильного телефона| |apple_pay|Платеж ApplePay| |google_pay|Платеж Google Pay| |qiwi|Платеж из кошелька Qiwi| |webmoney|Платеж из кошелька Webmoney| |alfabank|Платеж через Альфа-Клик| |b2b_sberbank|Сбербанк Бизнес Онлайн| |tinkoff_bank|Интернет-банк Тинькофф| |psb|ПромсвязьБанк| |installments|Заплатить по частям| |wechat|Платеж через WeChat| |wechat|Платеж через через сервис быстрых платежей| |
| [\testottest\Model\PaymentStatus](../classes/YooKassa-Model-PaymentStatus.md) | PaymentStatus - Состояние платежа |Код|Описание| --- | --- |pending|Ожидает оплаты покупателем| |waiting_for_capture|Успешно оплачен покупателем, ожидает подтверждения магазином (capture или aviso)| |succeeded|Успешно оплачен и подтвержден магазином| |canceled|Неуспех оплаты или отменен магазином (cancel)| |
| [\testottest\Model\Payout](../classes/YooKassa-Model-Payout.md) | Payout - Данные о выплате |
| [\testottest\Model\PayoutStatus](../classes/YooKassa-Model-PayoutStatus.md) | PayoutStatus - Статус выплаты |Код|Описание| --- | --- |pending|Выплата создана и ожидает подтверждения от эмитента| |succeeded|Выплата успешно завершена| |canceled|Выплата отменена| |
| [\testottest\Model\Receipt](../classes/YooKassa-Model-Receipt.md) | Класс данных для формирования чека в онлайн-кассе (для соблюдения 54-ФЗ) |
| [\testottest\Model\ReceiptCustomer](../classes/YooKassa-Model-ReceiptCustomer.md) | Информация о плательщике |
| [\testottest\Model\ReceiptItem](../classes/YooKassa-Model-ReceiptItem.md) | Информация о товарной позиции в заказе, позиция фискального чека |
| [\testottest\Model\ReceiptRegistrationStatus](../classes/YooKassa-Model-ReceiptRegistrationStatus.md) | Класс с перечислением статусов доставки данных для чека в онлайн-кассу (`pending`, `succeeded` или `canceled`) |
| [\testottest\Model\ReceiptType](../classes/YooKassa-Model-ReceiptType.md) | ReceiptType - Тип чека в онлайн-кассе. |
| [\testottest\Model\Recipient](../classes/YooKassa-Model-Recipient.md) | Класс получателя платежа. |
| [\testottest\Model\Refund](../classes/YooKassa-Model-Refund.md) | Класс объекта с информацией о возврате платежа |
| [\testottest\Model\RefundStatus](../classes/YooKassa-Model-RefundStatus.md) | RefundStatus - Состояние возврата платежа |Код|Описание| --- | --- |pending|Ожидает обработки| |succeeded|Успешно возвращен| |canceled|В проведении возврата отказано| |
| [\testottest\Model\Requestor](../classes/YooKassa-Model-Requestor.md) | Инициатор платежа или возврата. |
| [\testottest\Model\SafeDeal](../classes/YooKassa-Model-SafeDeal.md) | Class SafeBaseDeal |
| [\testottest\Model\Settlement](../classes/YooKassa-Model-Settlement.md) | Class Settlement |
| [\testottest\Model\Source](../classes/YooKassa-Model-Source.md) | Класс объекта распределения денег в магазин |
| [\testottest\Model\Supplier](../classes/YooKassa-Model-Supplier.md) | Информация о поставщике товара или услуги. |
| [\testottest\Model\ThreeDSecure](../classes/YooKassa-Model-ThreeDSecure.md) | ThreeDSecure - Данные о прохождении пользователем аутентификации по 3‑D Secure для подтверждения платежа. |
| [\testottest\Model\Transfer](../classes/YooKassa-Model-Transfer.md) | Класс объекта распределения денег в магазин |
| [\testottest\Model\TransferStatus](../classes/YooKassa-Model-TransferStatus.md) | PaymentStatus - Статус операции распределения средств конечному получателю |Код|Описание| --- | --- |pending|Ожидает оплаты покупателем| |waiting_for_capture|Успешно оплачен покупателем, ожидает подтверждения магазином (capture или aviso)| |succeeded|Успешно оплачен и получен магазином| |canceled|Неуспех оплаты или отменен магазином (cancel)| |

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
