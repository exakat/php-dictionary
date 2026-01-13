.. _microsecond:
.. meta::
	:description:
		Micro-second: Micro-seconds are one thousandth of a second.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Micro-second
	:twitter:description: Micro-second: Micro-seconds are one thousandth of a second
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Micro-second
	:og:type: article
	:og:description: Micro-seconds are one thousandth of a second
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/microsecond.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Micro-second","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 28 Jun 2025 08:51:19 +0000","dateModified":"Sat, 28 Jun 2025 08:51:19 +0000","description":"Micro-seconds are one thousandth of a second","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Micro-second.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Micro-second
------------

Micro-seconds are one thousandth of a second. They are accessible in different ways: 

+ Datetime and DateTimeImmutable objects, for dates
+ microtime() for dates
+ hrtime() for intervals

Do not use ``date()`` to get micro-seconds, as the function always returns 0.



.. code-block:: php
   
   <?php
   
   $ms = (new Datetime()->format('u'));
   
   $ms = microtime(true);
   
   ?>


Related : :ref:`microtime() <microtime>`, :ref:`hrtime() <hrtime>`, :ref:`DateTime <datetime>`, :ref:`DateTime <datetimeimmutable>`
