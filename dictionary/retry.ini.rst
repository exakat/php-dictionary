.. _retry:
.. _retry-logic:
.. meta::
	:description:
		Retry: A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Retry
	:twitter:description: Retry: A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Retry
	:og:type: article
	:og:description: A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/retry.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/retry.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/retry.ini.html","name":"Retry","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Retry.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Retry
-----

A retry is the act of re-attempting an operation that previously failed, typically due to a transient error such as a network timeout, a temporarily unavailable service, or a rate-limit response.

Retry strategies differ in how they space repeated attempts: immediate retry, fixed delay, or exponential backoff, often combined with jitter to avoid thundering herd problems. A maximum attempt count or deadline prevents infinite loops.

Because retries re-send the same request, the server-side operation must be idempotent to avoid unintended side effects such as duplicate charges or duplicate records. Idempotency keys are a common mechanism for making retried requests safe on the server side.

`Documentation <https://en.wikipedia.org/wiki/Exponential_backoff>`__

Related : :ref:`Idempotent <idempotent>`, :ref:`Circuit Breaker <circuit-breaker>`, :ref:`Webhook <webhook>`, :ref:`Deduplication <deduplication>`, :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`Reliability <reliability>`, :ref:`Error Handling <error-handling>`, :ref:`Queue <queue>`
