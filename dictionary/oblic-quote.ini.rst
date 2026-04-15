.. _oblic-quote:
.. _backticks:
.. meta::
	:description:
		Oblic Quotes: Oblic quotes, also called backticks, `` \` `` were used to make a shell call to the operating system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Oblic Quotes
	:twitter:description: Oblic Quotes: Oblic quotes, also called backticks, `` \` `` were used to make a shell call to the operating system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Oblic Quotes
	:og:type: article
	:og:description: Oblic quotes, also called backticks, `` \` `` were used to make a shell call to the operating system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/oblic-quote.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Oblic Quotes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"Oblic quotes, also called backticks, `` \\` `` were used to make a shell call to the operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Oblic Quotes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Oblic Quotes
------------

Oblic quotes, also called backticks, `` \` `` were used to make a shell call to the operating system. They are deprecated in PHP 8.5, and they have no more specific usage.

`` \` `` is a character, that needs to be balanced, when used in PHP.


.. code-block:: php
   
   <?php
   
       echo `ls -hla`;
       
       // moder alternative
       echo shell_exec('ls -hla');
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.execution.php>`__

Related : :ref:`Balanced <balanced>`, :ref:`Double Quotes Strings <double-quote>`, :ref:`Single Quotes Strings <single-quote>`
