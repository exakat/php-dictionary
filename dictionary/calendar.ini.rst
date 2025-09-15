.. _calendar:
.. meta::
	:description:
		Calendar: The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count (Not Julian calendar), Unixtimestamp, French Revolutionary, Jewish, and others.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Calendar
	:twitter:description: Calendar: The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count (Not Julian calendar), Unixtimestamp, French Revolutionary, Jewish, and others
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Calendar
	:og:type: article
	:og:description: The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count (Not Julian calendar), Unixtimestamp, French Revolutionary, Jewish, and others
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/calendar.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Calendar","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 14 Sep 2025 15:10:38 +0000","dateModified":"Sun, 14 Sep 2025 15:10:38 +0000","description":"The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count (Not Julian calendar), Unixtimestamp, French Revolutionary, Jewish, and others","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Calendar.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Calendar
--------

The calendar extension provides functions to convert dates between different calendars, such as Gregorian, Julian Day Count (Not Julian calendar), Unixtimestamp, French Revolutionary, Jewish, and others.

.. code-block:: php
   
   <?php
   
       $julian_date = gregoriantojd($m, $d, $y);
       $french = jdtofrench($julian_date);
       
       echo $french;
       
   ?>


`Documentation <https://www.php.net/manual/en/book.calendar.php>`__
