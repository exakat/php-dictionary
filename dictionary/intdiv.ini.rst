.. _intdiv:
.. meta::
	:description:
		intdiv(): ``intdiv()`` is a PHP native function, that computes the integer division between two integer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: intdiv()
	:twitter:description: intdiv(): ``intdiv()`` is a PHP native function, that computes the integer division between two integer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: intdiv()
	:og:type: article
	:og:description: ``intdiv()`` is a PHP native function, that computes the integer division between two integer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/intdiv.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"intdiv()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"``intdiv()`` is a PHP native function, that computes the integer division between two integer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/intdiv().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


intdiv()
--------

``intdiv()`` is a PHP native function, that computes the integer division between two integer. The integer division of ``a`` by ``b`` express the number ``a`` as a function of ``b``, such as ``a = k * b + c``.

``intdiv()`` returns the ``k`` value, which is the quotient. It is an integer. The remainder, ``c`` is accessible with the modulo operator ``%``. There is no operator equivalent to ``intdiv()``.

The integer division is a special case of the division, which works on decimal numbers.

.. code-block:: php
   
   <?php
   
   $a = 15;
   
   $b = 6;
   
   $k = intdiv($a, $b); // 2 
   $c = $a % $b; // 3
   
   echo $k * $b + $c;
   
   ?>


`Documentation <https://www.php.net/manual/en/function.intdiv.php>`__

Related : :ref:`Modulo <modulo>`, :ref:`Division <division>`
