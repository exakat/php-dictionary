.. _binary-not:
.. _~:
.. _tilde:
.. meta::
	:description:
		Binary Not Operator: The tilde ``~`` operator return the opposite value, bit by by.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Binary Not Operator
	:twitter:description: Binary Not Operator: The tilde ``~`` operator return the opposite value, bit by by
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Binary Not Operator
	:og:type: article
	:og:description: The tilde ``~`` operator return the opposite value, bit by by
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/binary-not.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Binary Not Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Dec 2025 07:20:29 +0000","dateModified":"Tue, 30 Dec 2025 07:20:29 +0000","description":"The tilde ``~`` operator return the opposite value, bit by by","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Binary Not Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Binary Not Operator
-------------------

The tilde ``~`` operator return the opposite value, bit by by. The value is first converted to an integer, then, negated. This operator returns an integer.

``~`` is often confused with ``!``, as some usage quite overlap. 


.. code-block:: php
   
   <?php
   
   $a = 3;     // 3 
   $b = ~$a;   // -4
   $c = !$a;   // false
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.bitwise.php>`__

Related : :ref:`Not Operator <not>`
