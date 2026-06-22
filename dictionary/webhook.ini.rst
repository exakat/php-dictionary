.. _webhook:
.. _http-callback:
.. meta::
	:description:
		Webhook: A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Webhook
	:twitter:description: Webhook: A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Webhook
	:og:type: article
	:og:description: A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/webhook.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Webhook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Webhook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Webhook
-------

A webhook is an HTTP callback mechanism where a server notifies a client by sending an HTTP POST request to a pre-registered URL when a specific event occurs. Rather than polling for updates, the receiving application exposes an endpoint and waits for the provider to push data to it.

Webhooks are widely used for event-driven integrations: payment confirmations, repository push events, form submissions, or status updates from external services. Because the provider may retry delivery on failure, webhook consumers must be idempotent to avoid processing the same event twice.

A webhook endpoint typically reads the raw request body, validates a signature header to authenticate the sender, and dispatches the payload to a queue or handler.

`Documentation <https://en.wikipedia.org/wiki/Webhook>`__

See also `Webhook — Wikipedia <https://en.wikipedia.org/wiki/Webhook>`_ and `Handling Webhooks in PHP <https://blog.joe.codes/handling-webhooks-in-laravel>`_.

Related : :ref:`Idempotent <idempotent>`, :ref:`Event Driven <event-driven>`, :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`HTTP Headers <http-header>`, :ref:`Payload <payload>`, :ref:`Retry <retry>`, :ref:`Deduplication <deduplication>`, :ref:`Queue <queue>`, :ref:`Signature <signature>`

Related packages : `spatie/laravel-webhook-client <https://packagist.org/packages/spatie/laravel-webhook-client>`_
