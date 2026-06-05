.. _logarithm:
.. _log10:
.. _log1p:
.. meta::
	:description:
		Logarithm: The logarithm is a family of mathematical functions, where ``log($a * $b) == log($a) + log($b)``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Logarithm
	:twitter:description: Logarithm: The logarithm is a family of mathematical functions, where ``log($a * $b) == log($a) + log($b)``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Logarithm
	:og:type: article
	:og:description: The logarithm is a family of mathematical functions, where ``log($a * $b) == log($a) + log($b)``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/logarithm.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Logarithm","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"The logarithm is a family of mathematical functions, where ``log($a * $b) == log($a) + log($b)``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Logarithm.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Logarithm
---------

The logarithm is a family of mathematical functions, where ``log($a * $b) == log($a) + log($b)``. There are two logarithm functions in PHP: the natural logarithm, where ``log(M_E) == 1``, and the natural logarithm, where ``log(10) == 1``.

PHP also offers ``log1p($x) == log(1 + $x)``. This function exists because ``log($x)`` is very close to 0 when ``$x`` is close to 1. To avoid rounding errors, ``log1p()`` is dedicated to this calculations and immediately yields the decimal part of the logarithm.

The opposite function of the logarithm is exponential, ``exp()``, and the ``**`` operator. 

A logarithm is not the same as an algorithm, or a log file.


.. code-block:: php
   
   <?php
   
       echo log(M_E);
       print PHP_EOL;  // 1
       
       echo log(1); 
       print PHP_EOL;  // 0
       
       echo log(1.001); 
       print PHP_EOL;  // 0.00099950033308342
       
       echo log1p(0.001); //0.00099950033308353
       print PHP_EOL;
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Logarithm>`__

See also `PHP Math Functions: A Comprehensive Guide with Examples <https://codingeasypeasy.com/blog/php-math-functions-a-comprehensive-guide-with-examples/>`_.

Related : :ref:`Algorithm <algorithm>`, :ref:`Exponential <exponential>`, :ref:`Exponent <power>`, :ref:`Floating Point Numbers <float>`, :ref:`zero <zero>`, :ref:`one <one>`, :ref:`Log File <log-file>`, :ref:`E <e>`, :ref:`Log <log>`
