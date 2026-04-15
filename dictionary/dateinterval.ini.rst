.. _dateinterval:
.. meta::
	:description:
		DateInterval: ``DateInterval`` is a class for the representation of period of time, or stretch of time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DateInterval
	:twitter:description: DateInterval: ``DateInterval`` is a class for the representation of period of time, or stretch of time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: DateInterval
	:og:type: article
	:og:description: ``DateInterval`` is a class for the representation of period of time, or stretch of time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dateinterval.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"DateInterval","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"``DateInterval`` is a class for the representation of period of time, or stretch of time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/DateInterval.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


DateInterval
------------

``DateInterval`` is a class for the representation of period of time, or stretch of time. It may be added to ``DateTimeImmutable`` and ``DateTime`` objects. It is only created as a time duration. 


.. code-block:: php
   
   <?php
   
   // Create a specific date
   $someDate = \DateTime::createFromFormat('Y-m-d H:i', '2022-08-25 14:18');
   
   // Create interval
   $interval = new \DateInterval('P7D');
   
   // Add interval
   $someDate->add($interval);
   
   // Convert interval to string
   echo $interval->format('%d');
   
   ?>


`Documentation <https://www.php.net/manual/en/class.dateinterval.php>`__

See also https://www.webfx.com/blog/web-design/php-dateinterval-class/, https://darkghosthunter.medium.com/php-dominate-dates-with-intervals-and-periods-7e66351e6ce2

Related : :ref:`DateTime <datetimeimmutable>`, :ref:`DateTime <datetime>`
