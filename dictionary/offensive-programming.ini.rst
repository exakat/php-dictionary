.. _offensive-programming:
.. meta::
	:description:
		Offensive Programming: Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Offensive Programming
	:twitter:description: Offensive Programming: Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Offensive Programming
	:og:type: article
	:og:description: Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/offensive-programming.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Invalid Numeric Literal.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Invalid Numeric Literal.html","name":"Offensive Programming","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 09:52:54 +0000","dateModified":"Fri, 06 Feb 2026 09:52:54 +0000","description":"Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Offensive Programming.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Offensive Programming
---------------------

Offensive programming is a programming approach where the code is written code assuming that internal states should never go wrong, and don't have to be guarded against. Only external input, such as user input, should be thoroughly validated before usage.

Offensive programming requires drawing a line between internal and external data: while user input is obviously to be validated, there must be a clear rule for data coming from connex services such as database, remote servers, API, file systems.

.. code-block:: php
   
   <?php
   
       $number = random_int(0, 10);
       // This handle cases where no entropy sources are found 
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Defensive_programming>`__

Related : :ref:`Defensive Programming <defensive-programming>`, :ref:`Paradigm <paradigm>`
