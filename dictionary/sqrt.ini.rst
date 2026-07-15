.. _sqrt:
.. meta::
	:description:
		sqrt(): ``sqrt()`` is a PHP native function, that computes the square root of a number.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: sqrt()
	:twitter:description: sqrt(): ``sqrt()`` is a PHP native function, that computes the square root of a number
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: sqrt()
	:og:type: article
	:og:description: ``sqrt()`` is a PHP native function, that computes the square root of a number
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sqrt.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sqrt.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sqrt.ini.html","name":"sqrt()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``sqrt()`` is a PHP native function, that computes the square root of a number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sqrt().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


sqrt()
------

``sqrt()`` is a PHP native function, that computes the square root of a number. That function takes a integer or a float, and returns the same types, depending on the actual value of the result.

``sqrt()`` is not a particularly slow function. The opposite of ``sqrt()`` is ``** 2``, or ``pow($x, 2)``, or even ``$x * $x``, where ``$x`` is the result of ``sqrt()``.

.. code-block:: php
   
   <?php
   
       $a = 4;
       var_dump(sqrt($a));
       
       $b = 5;
       var_dump(sqrt($b));
   
   ?>


`Documentation <https://www.php.net/manual/en/function.sqrt.php>`__

See also `PHP Math Functions: Understanding the Basics <https://wpshout.com/php-math-functions/#gref>`_.

Related : :ref:`Exponent <power>`, :ref:`Exponential <exponential>`, :ref:`hypot() <hypot>`
