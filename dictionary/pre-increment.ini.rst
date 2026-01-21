.. _pre-increment:
.. meta::
	:description:
		Pre-increment: Pre-increment is the ``++`` operator, used on a variable, when it is placed before the variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Pre-increment
	:twitter:description: Pre-increment: Pre-increment is the ``++`` operator, used on a variable, when it is placed before the variable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Pre-increment
	:og:type: article
	:og:description: Pre-increment is the ``++`` operator, used on a variable, when it is placed before the variable
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pre-increment.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Pre-increment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"Pre-increment is the ``++`` operator, used on a variable, when it is placed before the variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Pre-increment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Pre-increment
-------------

Pre-increment is the ``++`` operator, used on a variable, when it is placed before the variable. This means that the increment happens before the variable is read: in this case, the first echo displays 2, as the increment happens before the echo call. 

There is also a pre-decrement, which uses the operator ``--``, and reduces the variable of 1. 

Pre-increment and pre-decrement have a corresponding post-increment and post-decrement.

.. code-block:: php
   
   <?php
   
   $a = 1;
   echo ++$a; // displays 2
   echo $a;   // displays 2
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.increment.php>`__

See also https://flatcoding.com/tutorials/php/increment-and-decrement-operators-in-php/, https://deepsource.com/directory/php/issues/PHP-W1090

Related : :ref:`Post-increment <post-increment>`, :ref:`Variables <variable>`, :ref:`Increment <increment>`
