# Compensation Logic
Compensation logic refers to the set of actions taken to undo or neutralise the effects of a previously completed step when a subsequent step in a distributed process fails. It is the rollback mechanism for operations that cannot be part of a single ACID transaction.

The concept originates in the Saga pattern: a long-running business process is split into a sequence of local transactions. If transaction N fails, compensation transactions are executed in reverse order, N-1, N-2, ... to restore the system to a consistent state. Compensation is not always a perfect undo, a sent email cannot be unsent, a payment refunded is not the same as a payment never made.

Because compensation logic is domain-specific, it must be designed and tested explicitly. The failure modes of compensation steps themselves must also be handled.

Compensation logic is typically implemented as event handlers or command handlers that react to failure events published by downstream services.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compensation-logic.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compensation-logic.html","name":"Compensation Logic","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:15:27 +0000","dateModified":"Tue, 14 Jul 2026 06:15:27 +0000","description":"Compensation logic refers to the set of actions taken to undo or neutralise the effects of a previously completed step when a subsequent step in a distributed process fails","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Compensation Logic.html"]}],"alternateName":["compensating-transaction","saga-compensation"],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/distributed-transactions.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-sourcing.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/event-driven.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/microservice.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/idempotent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/acid.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/microservices.io\/patterns\/data\/saga.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"compensation-logic"}]}]}</script>
```php
<?php

// Compensation handler: listens for PaymentFailed and cancels the order
class CancelOrderOnPaymentFailed {
    public function __construct(
        private OrderRepository  $orders,
        private EventBus         $bus,
    ) {}

    public function handle(PaymentFailed $event): void {
        $order = $this->orders->findById($event->orderId);

        if ($order === null || $order->isCancelled()) {
            return; // idempotent — safe to call multiple times
        }

        $order->cancel(reason: 'payment_failed');
        $this->orders->save($order);
        $this->bus->publish(new OrderCancelled($order->id));
    }
}

?>
```

**[Documentation](https://microservices.io/patterns/data/saga.html)**
## Related

+ [Distributed Transactions](distributed-transactions.html)
+ [Event Sourcing](event-sourcing.html)
+ [Event Driven](event-driven.html)
+ [Microservice](microservice.html)
+ [Idempotent](idempotent.html)
+ [ACID](acid.html)
