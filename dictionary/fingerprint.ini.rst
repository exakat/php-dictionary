.. _fingerprint:
.. _request-fingerprint:
.. meta::
	:description:
		Fingerprint: A fingerprint is a compact, deterministic identifier derived by hashing a set of attributes that together describe something uniquely.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fingerprint
	:twitter:description: Fingerprint: A fingerprint is a compact, deterministic identifier derived by hashing a set of attributes that together describe something uniquely
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fingerprint
	:og:type: article
	:og:description: A fingerprint is a compact, deterministic identifier derived by hashing a set of attributes that together describe something uniquely
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fingerprint.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Y::C cannot override final constant X::C.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Y::C cannot override final constant X::C.html","name":"Fingerprint","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:24 +0000","dateModified":"Fri, 19 Jun 2026 21:25:24 +0000","description":"A fingerprint is a compact, deterministic identifier derived by hashing a set of attributes that together describe something uniquely","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fingerprint.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fingerprint
-----------

A fingerprint is a compact, deterministic identifier derived by hashing a set of attributes that together describe something uniquely. The same inputs always produce the same fingerprint; different inputs produce a different one.

In the context of HTTP request idempotency, a request fingerprint is computed from the method, route, query string, payload, and content type. It is stored alongside the idempotency key so that retried requests carrying the same key but a different payload can be detected and rejected.

More broadly, fingerprinting is used for cache keying, change detection, file integrity checks, and browser device identification.

.. code-block:: php
   
   <?php
   
   $fingerprint = hash('sha256', implode('|', [
       $request->method(),
       $request->path(),
       $request->getQueryString() ?? '',
       $request->getContent(),
       $request->header('Content-Type', ''),
   ]));
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Fingerprint_(computing)>`__

See also `How to generate a browser fingerprint with PHP <https://fingerprint.com/blog/browser-fingerprint-php/>`_.

Related : :ref:`hash() Function <hash-function>`, :ref:`Idempotent <idempotent>`, :ref:`Deduplication <deduplication>`, :ref:`Cache <cache>`, :ref:`Checksum <checksum>`, :ref:`Payload <payload>`
