.. _day-in-seconds:
.. meta::
	:description:
		Day Are Not 86400 Seconds: Days in seconds is a classic bug when dealing with dates.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Day Are Not 86400 Seconds
	:twitter:description: Day Are Not 86400 Seconds: Days in seconds is a classic bug when dealing with dates
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Day Are Not 86400 Seconds
	:og:type: article
	:og:description: Days in seconds is a classic bug when dealing with dates
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/day-in-seconds.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Day Are Not 86400 Seconds","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 13:41:52 +0000","dateModified":"Mon, 26 Jan 2026 13:41:52 +0000","description":"Days in seconds is a classic bug when dealing with dates","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Day Are Not 86400 Seconds.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Day Are Not 86400 Seconds
-------------------------

Days in seconds is a classic bug when dealing with dates. It happens when adding 86400 seconds to a time to get the same time on the next day. 

The bug will happen most commonly twice a year, at the change of time from winter to summer time. Those days are one hour longer or shorter and lead to calculating the wrong time on the next day. 

This bug may also have impact when the internal clock of the server is updated, or when extra leap seconds are added, by December 31st or June 30th (it depends on the years).

When dealing with days, it is recommended to use an interval, or use relative expression like ``'``tomorrow'``.

.. code-block:: php
   
   <?php
   
       $tomorrow = new DateTime('tomorrow');
       $secondsLeft = $tomorrow->getTimestamp() - time();
       echo $secondsLeft;
   
   ?>


`Documentation <https://medium.com/@dotcom.software/a-day-is-not-86400-seconds-51d95848b622>`__

See also https://medium.com/@dotcom.software/a-day-is-not-86400-seconds-51d95848b622, https://bugs.php.net/bug.php?id=741

Related : :ref:`Days In Month <days-in-month>`
