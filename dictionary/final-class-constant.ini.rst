.. _final-class-constant:
.. meta::
	:description:
		Final Class Constants: Using the final option with class constants, the constant cannot be redefined by a child class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Final Class Constants
	:twitter:description: Final Class Constants: Using the final option with class constants, the constant cannot be redefined by a child class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Final Class Constants
	:og:type: article
	:og:description: Using the final option with class constants, the constant cannot be redefined by a child class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/final-class-constant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Final Class Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 17 Jan 2026 06:56:36 +0000","dateModified":"Sat, 17 Jan 2026 06:56:36 +0000","description":"Using the final option with class constants, the constant cannot be redefined by a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Final Class Constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Final Class Constants
---------------------

Using the final option with class constants, the constant cannot be redefined by a child class. It is not possible to give it a new value or visibility. 

It yields a Fatal error : 'y::x cannot override final constant'.

.. code-block:: php
   
   <?php
   
   class x {
       final public const F = 1;
       public const C = 2;
   }
   
   class y extends x {
   	// 
       public const C = 3;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.constants.php>`__

Related : :ref:`Final Keyword <final>`

Added in PHP 8.1
