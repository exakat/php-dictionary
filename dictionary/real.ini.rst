.. _real:
.. meta::
	:description:
		Real Numbers: Real numbers are represented using the ``float`` data type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Real Numbers
	:twitter:description: Real Numbers: Real numbers are represented using the ``float`` data type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Real Numbers
	:og:type: article
	:og:description: Real numbers are represented using the ``float`` data type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/real.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot modify readonly property Test::$prop.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot modify readonly property Test::$prop.html","name":"Real Numbers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Feb 2026 08:57:27 +0000","dateModified":"Tue, 10 Feb 2026 08:57:27 +0000","description":"Real numbers are represented using the ``float`` data type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Real Numbers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Real Numbers
------------

Real numbers are represented using the ``float`` data type. 

They are also commonly referred to as ``floating-point numbers`` or ``double-precision numbers``. Floats are used to represent decimal numbers, including both whole numbers and fractions, with a certain degree of precision. Real numbers are used for performing mathematical calculations that require decimal accuracy.

There used to be ``real`` dedicated structures in PHP (like is_real() or (real)), though, they were removed in PHP 7.0. In case of doubt, refer to ``float``. 

It's important to be aware of potential rounding errors or precision issues when working with real numbers (floats) in PHP or any other programming language that uses floating-point representation. If exact decimal precision, it is recommended to use specialized libraries or techniques to handle arbitrary precision arithmetic, such as ``bcmath`` or ``gmp``.

.. code-block:: php
   
   <?php
   $a = 1.234; 
   ?>


`Documentation <https://www.php.net/manual/en/language.types.float.php>`__

See also https://www.digitalocean.com/community/tutorials/how-to-work-with-numbers-in-php

Related : :ref:`Floating Point Numbers <float>`, :ref:`Bcmath <bcmath>`, :ref:`GNU Multiple Precision (GMP) <gmp>`
