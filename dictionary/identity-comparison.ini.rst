.. _identity-comparison:
.. meta::
	:description:
		Identity Comparison: The identity comparison ``===`` compares two values, using their respective types, and then, their value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Identity Comparison
	:twitter:description: Identity Comparison: The identity comparison ``===`` compares two values, using their respective types, and then, their value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Identity Comparison
	:og:type: article
	:og:description: The identity comparison ``===`` compares two values, using their respective types, and then, their value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/identity-comparison.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/identity-comparison.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/identity-comparison.ini.html","name":"Identity Comparison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:15 +0000","dateModified":"Fri, 19 Jun 2026 21:24:15 +0000","description":"The identity comparison ``===`` compares two values, using their respective types, and then, their value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Identity Comparison.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Identity Comparison
-------------------

The identity comparison ``===`` compares two values, using their respective types, and then, their value. Both must be identical to pass.

There is also the ``!==`` operator, for distinct values: either the type, or the value.

.. code-block:: php
   
   <?php
   
   var_dump(1 === 1);    // true
   
   var_dump(1 === true); // false
   var_dump(1 == true);  // true
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.comparison.php>`__

Related : :ref:`Comparison <comparison>`, :ref:`Hash Comparisons <hash-comparison>`, :ref:`Identity <identity>`
