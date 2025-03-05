.. _namespace-name:
.. meta::
	:description:
		Namespace Name: Namespaces names are strings of characters that can be used as namespaces names.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Namespace Name
	:twitter:description: Namespace Name: Namespaces names are strings of characters that can be used as namespaces names
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Namespace Name
	:og:type: article
	:og:description: Namespaces names are strings of characters that can be used as namespaces names
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/namespace-name.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Namespace Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"Namespaces names are strings of characters that can be used as namespaces names","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Namespace Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Namespace Name
--------------

Namespaces names are strings of characters that can be used as namespaces names. Such names may be validated with the following regex: ``/^(?:[a-zA-Z_\x80-\xff][a-zA-Z_\x80-\xff0-9]*)(?:\\[a-zA-Z_\x80-\xff][a-zA-Z_\x80-\xff]*)*$/``.

In particular, namespaces names accept ``\`` character, and allows vast ranges of Unicode characters.

.. code-block:: php
   
   <?php
   
   namespace A\B {}
   
   namespace 我\是\PHP {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.rationale.php>`__

Related : :ref:`Namespaces <namespace>`, :ref:`Name <name>`
