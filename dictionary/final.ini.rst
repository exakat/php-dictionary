.. _final:
.. meta::
	:description:
		Final Keyword: The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Final Keyword
	:twitter:description: Final Keyword: The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Final Keyword
	:og:type: article
	:og:description: The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/final.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Final Keyword","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 17 Jan 2026 06:56:36 +0000","dateModified":"Sat, 17 Jan 2026 06:56:36 +0000","description":"The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Final Keyword.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Final Keyword
-------------

The final keyword prevents child classes from overriding a method or a constant by prefixing the definition with final.

The final keyword cannot be used with the private keyword : a private method is not visible in the child classes, and can't also be redefined.

.. code-block:: php
   
   <?php
   
   class x {
       final const X = 1;
       
       final function method() { }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.final.php>`__

See also https://verraes.net/2014/05/final-classes-in-php/, https://tomasvotruba.com/blog/2019/03/28/how-to-mock-final-classes-in-phpunit/

Related : :ref:`Overwrite <overwrite>`, :ref:`Private Visibility <private>`, :ref:`Abstract Class <abstract-class>`, :ref:`Abstract Keyword <abstract>`, :ref:`Static Constant <class-constant>`, :ref:`Final Class Constants <final-class-constant>`, :ref:`Fluent Interface <fluent-interface>`, :ref:`Object <object>`, :ref:`Protected Visibility <protected>`, :ref:`Public Visibility <public>`

Added in PHP 7.0
