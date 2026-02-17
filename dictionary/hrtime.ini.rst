.. _hrtime:
.. meta::
	:description:
		hrtime(): ``hrtime()`` is a native PHP function and an PECL extension.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: hrtime()
	:twitter:description: hrtime(): ``hrtime()`` is a native PHP function and an PECL extension
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: hrtime()
	:og:type: article
	:og:description: ``hrtime()`` is a native PHP function and an PECL extension
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hrtime.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"hrtime()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 13 Feb 2026 12:42:52 +0000","dateModified":"Fri, 13 Feb 2026 12:42:52 +0000","description":"``hrtime()`` is a native PHP function and an PECL extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hrtime().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


hrtime()
--------

``hrtime()`` is a native PHP function and an PECL extension. As a function, ``hrtime()`` returns the high precision time of the system. 

``HRT`` represents an acronym of ``High Resolution Time``. 

The time is of high precision, but counted from an arbitrary point of time: the value of this function is in calculating differences between two ``hrtime()`` calls, rather than the obtained value.

hrtime() is a good replacement for microtime().

.. code-block:: php
   
   <?php
   $timeStart = hrtime(true);
   
   // Sleep some time
   usleep(100);
   
   $timeEnd = hrtime(true);
   $time = $timeEnd - $timeStart;
   
   echo "Slept for $time micro-seconds\n";
   ?>


`Documentation <https://www.php.net/manual/fr/function.hrtime.php>`__

Related : :ref:`microtime() <microtime>`
