.. _defensive-programming:
.. meta::
	:description:
		Defensive Programming: Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Defensive Programming
	:twitter:description: Defensive Programming: Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Defensive Programming
	:og:type: article
	:og:description: Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/defensive-programming.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Defensive Programming","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 09:53:20 +0000","dateModified":"Fri, 06 Feb 2026 09:53:20 +0000","description":"Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Defensive Programming.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Defensive Programming
---------------------

Defensive programming is a programming approach where the code is written assuming that things can go wrong, even when they shouldn't, and it should actively guard against incorrect input, unexpected states, or misuse.

.. code-block:: php
   
   <?php
   
   try {
       $number = random_int(0, 10);
   } catch (Random\RandomException $e) {
       // This handle cases where no entropy sources are found 
       // This is very rare
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Defensive_programming>`__

Related : :ref:`Offensive Programming <offensive-programming>`, :ref:`Paradigm <paradigm>`
