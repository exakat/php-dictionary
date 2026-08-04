.. _cascading-failure:
.. _cascading-failures:
.. meta::
	:description:
		Cascading Failure: A cascading failure is a failure that starts in one component and propagates to dependent components, each overload or error triggering the next, until a localized problem becomes a system-wide outage.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cascading Failure
	:twitter:description: Cascading Failure: A cascading failure is a failure that starts in one component and propagates to dependent components, each overload or error triggering the next, until a localized problem becomes a system-wide outage
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cascading Failure
	:og:type: article
	:og:description: A cascading failure is a failure that starts in one component and propagates to dependent components, each overload or error triggering the next, until a localized problem becomes a system-wide outage
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cascading-failure.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cascading-failure.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/cascading-failure.ini.html","name":"Cascading Failure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 06:12:01 +0000","dateModified":"Tue, 04 Aug 2026 06:12:01 +0000","description":"A cascading failure is a failure that starts in one component and propagates to dependent components, each overload or error triggering the next, until a localized problem becomes a system-wide outage","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cascading Failure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Cascading Failure
-----------------

A cascading failure is a failure that starts in one component and propagates to dependent components, each overload or error triggering the next, until a localized problem becomes a system-wide outage. A single slow downstream service, for example, can exhaust the connection pool of every caller waiting on it, taking down services that had nothing wrong with them.

Cascading failures are common in tightly coupled, or distributed, systems: a database that slows down backs up application servers, which back up the load balancer, which starts timing out healthy requests too. The same pattern shows up in data pipelines: a single bad record, or an unhandled locale code, can silently drop, or corrupt, every dependent row downstream, so a small conversion bug is amplified into the majority of a migration failing without a loud error.

Cascading failures are mitigated with the same patterns as fault isolation: circuit breakers, that stop calling a failing dependency; timeouts, that prevent one slow call from blocking a thread pool indefinitely; bulkheads, that isolate resource pools between consumers; and retries with backoff, so a recovering service is not immediately overwhelmed again.

`Documentation <https://en.wikipedia.org/wiki/Cascading_failure>`__

See also `CircuitBreaker <https://martinfowler.com/bliki/CircuitBreaker.html>`_.

Related : :ref:`Cascading <cascading>`, :ref:`Fault Isolation <fault-isolation>`, :ref:`Circuit Breaker <circuit-breaker>`, :ref:`Resilience <resilience>`, :ref:`Distributed Systems <distributed-systems>`, :ref:`Referential Integrity <referential-integrity>`, :ref:`Foreign Key <foreign-key>`, :ref:`Retry <retry>`
