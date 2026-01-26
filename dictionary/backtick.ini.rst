.. _backtick:
.. _back-tick:
.. meta::
	:description:
		Back-tick: Back-ticks are only used in PHP to execute a command with the underlying operating system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Back-tick
	:twitter:description: Back-tick: Back-ticks are only used in PHP to execute a command with the underlying operating system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Back-tick
	:og:type: article
	:og:description: Back-ticks are only used in PHP to execute a command with the underlying operating system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/backtick.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Back-tick","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:21:39 +0000","dateModified":"Sun, 25 Jan 2026 20:21:39 +0000","description":"Back-ticks are only used in PHP to execute a command with the underlying operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Back-tick.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Back-tick
---------

Back-ticks are only used in PHP to execute a command with the underlying operating system. They are the equivalent of ``shell_exec()``. 

Since PHP 8.5, they are deprecated, and should be replaced with a call to ``shell_exec()`` or ``exec()``.

.. code-block:: php
   
   <?php
   
   $dir = `ls`;
   
   ?>


Related : :ref:`shell_exec() <shell_exec>`, 
