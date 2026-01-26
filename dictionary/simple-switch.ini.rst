.. _simple-switch:
.. meta::
	:description:
		Simple Switch: A simple switch is a switch where all the cases are simple literals.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Simple Switch
	:twitter:description: Simple Switch: A simple switch is a switch where all the cases are simple literals
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Simple Switch
	:og:type: article
	:og:description: A simple switch is a switch where all the cases are simple literals
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/simple-switch.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","name":"Simple Switch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:47:20 +0000","dateModified":"Thu, 22 Jan 2026 12:47:20 +0000","description":"A simple switch is a switch where all the cases are simple literals","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Simple Switch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Simple Switch
-------------

A simple switch is a switch where all the cases are simple literals. This helps PHP optimize the command and finds the correct case immediately, instead of checking them one by one.

.. code-block:: php
   
   <?php
   
   switch ($i) {
       case 0:
           echo \i equals 0\;
           break;
       case 1:
           echo \i equals 1\;
           break;
       case 2:
           echo \i equals 2\;
           break;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.switch.php>`__

See also https://derickrethans.nl/php7.2-switch.html

Related : :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`If Then Else <if-then>`, :ref:`Compact Array <compact-array>`

Added in PHP 4.0
