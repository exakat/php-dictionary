.. _inf:
.. meta::
	:description:
		INF: Infinite is a PHP constant, called ``INF``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: INF
	:twitter:description: INF: Infinite is a PHP constant, called ``INF``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: INF
	:og:type: article
	:og:description: Infinite is a PHP constant, called ``INF``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/inf.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"INF","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"Infinite is a PHP constant, called ``INF``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/INF.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


INF
---

Infinite is a PHP constant, called ``INF``. It is also possible to generate such a value, with calls to math functions such as ``log(0)`` or ``1e308 * 2``.

While the infinite is a float, it is possible to test a number with ``is_infinite()``.

.. code-block:: php
   
   <?php
   
   $infinite = 1e308 * 2;
   
   var_dump(is_infinite($infinite)); // true 
   
   var_dump(INF === $infinite);      // true 
   
   echo str_repeat('1', 1000) + 0;  // INF
   
   ?>


`Documentation <https://www.php.net/manual/en/math.constants.php>`__

See also https://www.php.net/manual/en/function.is-infinite.php

Related : :ref:`Infinite <infinite>`
