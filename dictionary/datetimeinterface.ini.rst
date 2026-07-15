.. _datetimeinterface:
.. meta::
	:description:
		DateTimeInterface: ``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DateTimeInterface
	:twitter:description: DateTimeInterface: ``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: DateTimeInterface
	:og:type: article
	:og:description: ``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/datetimeinterface.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/datetimeinterface.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/datetimeinterface.ini.html","name":"DateTimeInterface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/DateTimeInterface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


DateTimeInterface
-----------------

``DateTimeInterface`` is a PHP interface implemented by both ``DateTime`` and ``DateTimeImmutable``. It defines the common API shared by both mutable and immutable date-time objects.

Using ``DateTimeInterface`` as a type hint in function signatures accepts either class, making code agnostic to mutability. It cannot be implemented by user-defined classes directly; it exists solely to type both built-in date-time classes.

``DateTimeInterface`` exposes methods such as ``format()``, ``getTimestamp()``, ``getTimezone()``, and ``diff()``.

.. code-block:: php
   
   <?php
   
       function formatDate(DateTimeInterface $date): string {
           return $date->format('Y-m-d');
       }
       
       // both classes satisfy the type hint
       echo formatDate(new DateTime('2024-01-15'));
       echo formatDate(new DateTimeImmutable('2024-06-03'));
   
   ?>


`Documentation <https://www.php.net/manual/en/class.datetimeinterface.php>`__

Related : :ref:`DateTime <datetime>`, :ref:`DateTime <datetimeimmutable>`, :ref:`Interface <interface>`, :ref:`Dates <date>`, :ref:`DateInterval <dateinterval>`, :ref:`PHP Native Interfaces <php-interface>`

Added in PHP 5.5
