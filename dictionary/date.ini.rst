.. _date:
.. meta::
	:description:
		Dates: These functions allow to get the date and time from the server where the application is running.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dates
	:twitter:description: Dates: These functions allow to get the date and time from the server where the application is running
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dates
	:og:type: article
	:og:description: These functions allow to get the date and time from the server where the application is running
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/date.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dates","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 09 Feb 2026 15:37:21 +0000","dateModified":"Mon, 09 Feb 2026 15:37:21 +0000","description":"These functions allow to get the date and time from the server where the application is running","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dates.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dates
-----

These functions allow to get the date and time from the server where the application is running. These functions format the date and time in many different ways.

.. code-block:: php
   
   <?php
   $dt = new DateTimeImmutable('2015-11-01 00:00:00', new DateTimeZone('America/New_York'));
   echo 'Start: ', $dt->format('Y-m-d H:i:s P'), PHP_EOL;
   $dt = $dt->add(new DateInterval('PT3H'));
   echo 'End:   ', $dt->format('Y-m-d H:i:s P'), PHP_EOL;
   ?>


`Documentation <https://www.php.net/datetime>`__

See also https://alexwebdevelop.com/php-time-handling-part-1/, https://alexwebdevelop.com/php-time-handling-part-2/, https://alexwebdevelop.com/php-time-handling-part-3/
