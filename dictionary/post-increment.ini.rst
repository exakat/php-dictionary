.. _post-increment:
.. meta::
	:description:
		Post-increment: Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Post-increment
	:twitter:description: Post-increment: Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Post-increment
	:og:type: article
	:og:description: Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/post-increment.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Post-increment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 12 Jan 2026 09:43:10 +0000","dateModified":"Mon, 12 Jan 2026 09:43:10 +0000","description":"Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Post-increment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Post-increment
--------------

Post-increment is the ``++`` operator, used on a variable, when it is placed after the variable. This means that the increment happens after the variable is read: in this case, the first echo displays 1, as the increment happens after the echo call. 

There is also a post-decrement, which uses the operator ``--``, and reduces the variable of 1. 

Post-increment and post-decrement have a corresponding pre-increment and pre-decrement.

.. code-block:: php
   
   <?php
   
   $a = 1;
   echo $a++; // displays 2
   echo $a;   // displays 2
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.increment.php>`__

Related : :ref:`Pre-increment <pre-increment>`, :ref:`Variables <variable>`, :ref:`Increment <increment>`
