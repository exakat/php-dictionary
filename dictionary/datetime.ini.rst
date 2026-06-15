.. _datetime:
.. _datetimeimmutable:
.. meta::
	:description:
		DateTime: ``DateTime`` and ``DateTimeImmutable`` is a class for the representation of date and time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DateTime
	:twitter:description: DateTime: ``DateTime`` and ``DateTimeImmutable`` is a class for the representation of date and time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: DateTime
	:og:type: article
	:og:description: ``DateTime`` and ``DateTimeImmutable`` is a class for the representation of date and time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/datetime.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"DateTime","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``DateTime`` and ``DateTimeImmutable`` is a class for the representation of date and time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/DateTime.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


DateTime
--------

``DateTime`` and ``DateTimeImmutable`` is a class for the representation of date and time. It has two variants: ``DateTimeImmutable`` cannot be modified after creation, while ``DateTime`` can. 

Both classes comes with the ``DateTimeInterface``, for typing purposes.

``DateTime`` objects may be created with the constructor, and with several specific methods, such as ``createFromInterface``, ``createFromFormat`` or ``createFromImmutable``.

.. code-block:: php
   
   <?php
   
       $date = new DateTimeImmutable('2024-02-24 11:45 America/Montreal');
       
       $mutable = DateTime::createFromInterface($date);
       
       $date = new DateTime('2014-06-20 11:45 Europe/Amsterdam');
   
   ?>


`Documentation <https://www.php.net/manual/en/class.datetime.php>`__

See also `The DateTime Class <https://www.phparch.com/2022/10/the-php-datetime-class/>`_, `Dates and periods in PHP <https://dev.to/xwero/dates-and-periods-in-php-46o1>`_ and `Tokei is a new PHP library dedicated to time-of-day <https://nyamsprod.com/blog/tokei-a-time-handling-library-for-php/>`_.

Related : :ref:`Dates <date>`, :ref:`Calendar <calendar>`, :ref:`DateInterval <dateinterval>`, :ref:`Days Are Not 86400 Seconds <day-in-seconds>`, :ref:`Micro-second <micro-second>`, :ref:`Clock <clock>`, :ref:`Datetime Trap <datetime-trap>`, :ref:`DateTimeInterface <datetimeinterface>`

Related packages : `bakame/tokei <https://packagist.org/packages/bakame/tokei>`_, `nesbot/carbon <https://packagist.org/packages/nesbot/carbon>`_, `cakephp/chronos <https://packagist.org/packages/cakephp/chronos>`_, `brick/date-time <https://packagist.org/packages/brick/date-time>`_
