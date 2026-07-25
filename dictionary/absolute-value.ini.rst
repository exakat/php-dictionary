.. _absolute-value:
.. meta::
	:description:
		Absolute Value: An ``absolute`` value is the positive value of a real number.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Absolute Value
	:twitter:description: Absolute Value: An ``absolute`` value is the positive value of a real number
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Absolute Value
	:og:type: article
	:og:description: An ``absolute`` value is the positive value of a real number
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/absolute-value.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/absolute-value.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/absolute-value.ini.html","name":"Absolute Value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:37:57 +0000","dateModified":"Fri, 24 Jul 2026 15:37:57 +0000","description":"An ``absolute`` value is the positive value of a real number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Absolute Value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Absolute Value
--------------

An ``absolute`` value is the positive value of a real number.

PHP offers the native function ``abs()`` to calculate this value.

The absolute value of ``PHP_INT_MIN`` is a float.


.. code-block:: php
   
   <?php
   
       $a = 10;
       echo abs($a); // 10
       
       $b = -12;
       echo abs($b); // 12
   
   ?>


`Documentation <https://www.php.net/abs>`__

Related : :ref:`Fully Qualified Name <fully-qualified-name>`, :ref:`Absolute <absolute>`, :ref:`PHP_INT_MIN <php_int_min>`, :ref:`PHP_INT_MAX <php_int_max>`
