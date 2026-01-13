.. _declare:
.. meta::
	:description:
		declare(): declare() is a language construct.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: declare()
	:twitter:description: declare(): declare() is a language construct
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: declare()
	:og:type: article
	:og:description: declare() is a language construct
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/declare.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"declare()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"declare() is a language construct","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/declare().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


declare()
---------

declare() is a language construct. It is used to set execution directives for a block of code. 

declare() may set the following values : 

+ ``strict_types`` : strict typing in the block
+ ``ticks`` : generate a tick event 
+ ``encoding`` : per-file encoding directive

declare() affects some configuration for the next block of code. 


.. code-block:: php
   
   <?php
       declare(strict_types=1, encoding='UTF-8');
   ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.declare.php>`__

Related : :ref:`strict_types <strict_types>`, :ref:`Tick <tick>`, :ref:`declare Encoding <declare-encoding>`
