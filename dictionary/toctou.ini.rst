.. _toctou:
.. meta::
	:description:
		Time Of Check To Time Of Use (TOCTOU): TOCTOU, which stands for Time Of Check To Time Of Use, is a class of bug where there is a time interval between checking a resource and then using it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Time Of Check To Time Of Use (TOCTOU)
	:twitter:description: Time Of Check To Time Of Use (TOCTOU): TOCTOU, which stands for Time Of Check To Time Of Use, is a class of bug where there is a time interval between checking a resource and then using it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Time Of Check To Time Of Use (TOCTOU)
	:og:type: article
	:og:description: TOCTOU, which stands for Time Of Check To Time Of Use, is a class of bug where there is a time interval between checking a resource and then using it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/toctou.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Time Of Check To Time Of Use (TOCTOU)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Apr 2026 19:54:33 +0000","dateModified":"Mon, 06 Apr 2026 19:54:33 +0000","description":"TOCTOU, which stands for Time Of Check To Time Of Use, is a class of bug where there is a time interval between checking a resource and then using it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Time Of Check To Time Of Use (TOCTOU).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Time Of Check To Time Of Use (TOCTOU)
-------------------------------------

TOCTOU, which stands for Time Of Check To Time Of Use, is a class of bug where there is a time interval between checking a resource and then using it. This interval may be used by an attacker to replace the checked resource, and fool the code.


.. code-block:: php
   
   <?php
   
   function foo($file) {
       // Checking is the file exists
       if (!file_exists($file)) {
           return false;
       }
       
       $fp = fopen($file, 'r');
       // $fp should be available, because it was checked just before
       // The TOCTOU is here
       $string = fget($fp, 1000);
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Time-of-check_to_time-of-use>`__

See also https://defuse.ca/race-conditions-in-web-applications.htm

Related : :ref:`Security <security>`
