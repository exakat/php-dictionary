.. _fault-isolation:
.. _failure-isolation:
.. _blast-radius:
.. meta::
	:description:
		Fault Isolation: Fault isolation is the design property that limits the impact of a failure to the component or service where it originates, preventing it from cascading to other parts of the system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fault Isolation
	:twitter:description: Fault Isolation: Fault isolation is the design property that limits the impact of a failure to the component or service where it originates, preventing it from cascading to other parts of the system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fault Isolation
	:og:type: article
	:og:description: Fault isolation is the design property that limits the impact of a failure to the component or service where it originates, preventing it from cascading to other parts of the system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fault-isolation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fault-isolation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fault-isolation.ini.html","name":"Fault Isolation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 03 Jul 2026 07:40:41 +0000","dateModified":"Fri, 03 Jul 2026 07:40:41 +0000","description":"Fault isolation is the design property that limits the impact of a failure to the component or service where it originates, preventing it from cascading to other parts of the system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fault Isolation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fault Isolation
---------------

Fault isolation is the design property that limits the impact of a failure to the component or service where it originates, preventing it from cascading to other parts of the system.

In a tightly coupled system , such as monolith, distributed monolith, a failure in one subsystem can bring down the entire application. Fault isolation ensures that the failure of a payment service, for example, does not prevent users from browsing or adding items to their cart.

Common patterns that implement fault isolation: the circuit breaker, that stops sending requests to a failing service, the bulkhead which limits the resources a single consumer can use, preventing it from exhausting shared pools, and timeouts, that prevents a slow downstream from blocking threads indefinitely.

Microservices architecture promotes fault isolation by deploying each service independently. However, it requires explicit design: synchronous call chains without timeouts or circuit breakers produce the opposite: a single slow service that blocks all callers.

Fault isolation is implemented via timeout configuration on HTTP clients, circuit breaker libraries, and queue-based decoupling of non-critical side-effects.

.. code-block:: php
   
   <?php
   
       // Circuit breaker with a library (e.g., Ganesha or php-circuit-breaker)
       $circuitBreaker = Ackintosh\Ganesha\Builder::withRateStrategy()
           ->timeWindow(30)
           ->failureRateThreshold(50)
           ->build();
       
       if ($circuitBreaker->isAvailable('payment-service')) {
           try {
               $result = $paymentClient->charge($order);
               $circuitBreaker->success('payment-service');
           } catch (Exception $e) {
               $circuitBreaker->failure('payment-service');
               // Degrade gracefully — queue for retry, show user a message
               $retryQueue->push(new RetryPayment($order->id));
           }
       } else {
           // Circuit is open — skip the call entirely, don't block the user
           $retryQueue->push(new RetryPayment($order->id));
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Fault_isolation>`__

See also `PHP Monitoring: Using PHP Observability Tools to Improve Web Apps <https://www.zend.com/blog/php-monitoring>`_.

Related : :ref:`Circuit Breaker <circuit-breaker>`, :ref:`Resilience <resilience>`, :ref:`Microservice <microservice>`, :ref:`Distributed Monolith <distributed-monolith>`, :ref:`Distributed Systems <distributed-systems>`, :ref:`Coupling <coupling>`

Related packages : `ackintosh/ganesha <https://packagist.org/packages/ackintosh/ganesha>`_
