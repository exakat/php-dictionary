.. _payload:
.. meta::
	:description:
		Payload: A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Payload
	:twitter:description: Payload: A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Payload
	:og:type: article
	:og:description: A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/payload.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/payload.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/payload.ini.html","name":"Payload","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 17 Jun 2026 16:07:43 +0000","dateModified":"Wed, 17 Jun 2026 16:07:43 +0000","description":"A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Payload.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Payload
-------

A payload is the data carried by a request or response, distinct from its envelope: headers, routing information, and metadata. In an HTTP context, the payload is the body of the message: a JSON object, an XML document, form data, or a binary stream.

The term is also used outside HTTP: a queue message has a payload, a JWT has a payload, and a webhook notification carries a payload describing the event.

The request payload is typically read from ``php://input`` for raw bodies, or accessed through framework helpers that parse and validate it.

.. code-block:: php
   
   <?php
   
       $payload = json_decode(file_get_contents('php://input'), true);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Payload_(computing)>`__

Related : :ref:`Hyper Text Transfer Protocol (HTTP) <http>`, :ref:`HTTP Headers <http-header>`, :ref:`JavaScript Object Notation (JSON) <json>`, :ref:`Webhook <webhook>`, :ref:`JSON Web Token (JWT) <jwt>`, :ref:`Request <request>`, :ref:`Response <response>`, :ref:`php://input <php-input>`, :ref:`Request <request>`
