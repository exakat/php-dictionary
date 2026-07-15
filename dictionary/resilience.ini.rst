.. _resilience:
.. _resiliency:
.. meta::
	:description:
		Resilience: Resilience is the ability of a system to absorb failures and disturbances and continue providing acceptable service, or recover quickly when a failure does occur.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Resilience
	:twitter:description: Resilience: Resilience is the ability of a system to absorb failures and disturbances and continue providing acceptable service, or recover quickly when a failure does occur
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Resilience
	:og:type: article
	:og:description: Resilience is the ability of a system to absorb failures and disturbances and continue providing acceptable service, or recover quickly when a failure does occur
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/resilience.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/resilience.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/resilience.ini.html","name":"Resilience","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 04:46:54 +0000","dateModified":"Tue, 07 Jul 2026 04:46:54 +0000","description":"Resilience is the ability of a system to absorb failures and disturbances and continue providing acceptable service, or recover quickly when a failure does occur","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Resilience.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Resilience
----------

Resilience is the ability of a system to absorb failures and disturbances and continue providing acceptable service, or recover quickly when a failure does occur. A resilient system degrades gracefully rather than failing completely.

Resilience is achieved through a combination of patterns: redundancy, with multiple instances, fault isolation, so that failures don't cascade, retries with exponential backoff, when transient failures are retried intelligently, circuit breakers, to stop hammering a failing service, timeouts, that prevent indefinite blocking, fallbacks, which serve cached or degraded content, and graceful degradation, which disable non-critical features when dependencies are unavailable.

Resilience patterns are applied at the HTTP client level, for example Guzzle retry middleware, the queue level, for example dead-letter queues and retry policies, the cache level, for example serve stale on cache miss, and the infrastructure level, for example load balancing, health checks and auto-scaling.

Resilience is distinct from reliability, which is never failing, and availability, which is always being up. A resilient system is not necessarily always available, but it recovers quickly and limits the blast radius of failures.

.. code-block:: php
   
   <?php
   
       // Retry with exponential backoff using Guzzle middleware
       use GuzzleHttp\Client;
       use GuzzleHttp\HandlerStack;
       use GuzzleHttp\Middleware;
       use GuzzleHttp\Psr7\Request;
       use GuzzleHttp\Psr7\Response;
       use GuzzleHttp\Exception\ConnectException;
       
       $stack = HandlerStack::create();
       $stack->push(Middleware::retry(
           decider: function (int $retries, Request $req, ?Response $res, ?\Throwable $e): bool {
               return $retries < 3 && ($e instanceof ConnectException || ($res && $res->getStatusCode() >= 500));
           },
           delay: fn(int $retries): int => (int) (100 * 2 ** $retries), // 100ms, 200ms, 400ms
       ));
       
       $client = new Client(['handler' => $stack, 'timeout' => 5.0]);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Resilience_(engineering_and_construction)>`__

See also `Building a Resilient and Scalable PHP Backend: Practical Strategies <https://yusufbiberoglu.medium.com/building-a-resilient-and-scalable-php-backend-practical-strategies-212381ffd9a6>`_.

Related : :ref:`Fault Isolation <fault-isolation>`, :ref:`Circuit Breaker <circuit-breaker>`, :ref:`Distributed Systems <distributed-systems>`, :ref:`Availability <availability>`, :ref:`Reliability <reliability>`, :ref:`Retry <retry>`, :ref:`Monitoring <monitoring>`
