.. _replay:
.. _response-replay:
.. meta::
	:description:
		Replay: A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Replay
	:twitter:description: Replay: A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Replay
	:og:type: article
	:og:description: A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/replay.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Replay","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:30:19 +0000","dateModified":"Fri, 19 Jun 2026 21:30:19 +0000","description":"A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Replay.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Replay
------

A replay is the act of returning a previously stored result to a repeated request without re-executing the underlying operation. When a client retries a request that already succeeded, the server recognises the repeat via an idempotency key or fingerprint and replays the original response directly from cache.

Replay differs from a fresh response: the operation is not run again, no side effects are triggered, and the returned data is identical to the first response. A response header such as ``Idempotency-Replayed: true`` is often used to signal to the client that it received a cached replay rather than a live result.

The concept also applies in event sourcing, where replaying a stream of past events reconstructs application state.

`Documentation <https://en.wikipedia.org/wiki/Idempotence>`__

Related : :ref:`Idempotent <idempotent>`, :ref:`Cache <cache>`, :ref:`Retry <retry>`, :ref:`Deduplication <deduplication>`, :ref:`Fingerprint <fingerprint>`, :ref:`Time To Live (TTL) <ttl>`, :ref:`Event Sourcing <event-sourcing>`, :ref:`HTTP Headers <http-header>`
