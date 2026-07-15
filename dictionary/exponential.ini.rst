.. _exponential:
.. _exp:
.. meta::
	:description:
		Exponential: The exponential is a mathematical function.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Exponential
	:twitter:description: Exponential: The exponential is a mathematical function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Exponential
	:og:type: article
	:og:description: The exponential is a mathematical function
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/exponential.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/exponential.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/exponential.ini.html","name":"Exponential","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The exponential is a mathematical function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Exponential.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Exponential
-----------

The exponential is a mathematical function. It satisfies the expressions: ``exp($a + $b) = exp($a) * exp($b)``, and ``exp(0) === 1``.

There is a special ``expm1()`` function, which calculates the exponential value of ``$x - 1``. When ``$x`` is close to 0, this function provides more siginficant digits than using the expression ``exp($x) - 1``.

Exponential calculations may also be lead with the constant ``M_E`` and the operator ``**`` or the function ``pow()``, although there is a slight difference.

.. code-block:: php
   
   <?php
   
       $e = exp(1); // also known as the contant M_E
       
       var_dump(exp(2) === M_E ** 2); // false
       var_dump(exp(2) - M_E ** 2);   // float(8.881784197001252E-16)
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Exponential_function>`__

See also `PHP Math Functions: A Comprehensive Guide with Examples <https://codingeasypeasy.com/blog/php-math-functions-a-comprehensive-guide-with-examples/>`_.

Related : :ref:`Exponent <**>`, :ref:`Exponent <pow>`, :ref:`E <e>`, :ref:`Logarithm <logarithm>`, :ref:`sqrt() <sqrt>`, :ref:`Star * <star>`

Added in PHP 8.1
