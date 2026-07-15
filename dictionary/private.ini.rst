.. _private:
.. meta::
	:description:
		Private Visibility: The private keyword is part of the three keywords to define visibility of a method, property or class constant.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Private Visibility
	:twitter:description: Private Visibility: The private keyword is part of the three keywords to define visibility of a method, property or class constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Private Visibility
	:og:type: article
	:og:description: The private keyword is part of the three keywords to define visibility of a method, property or class constant
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/private.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/private.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/private.ini.html","name":"Private Visibility","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:28:00 +0000","dateModified":"Tue, 14 Jul 2026 06:28:00 +0000","description":"The private keyword is part of the three keywords to define visibility of a method, property or class constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Private Visibility.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Private Visibility
------------------

The private keyword is part of the three keywords to define visibility of a method, property or class constant. It is the strictest level of visibility: it restricts usage to the current class only. A child class can redefine it, but it cannot the parent's: the reverse is also true.

The private keyword cannot be used with the ``final`` keyword: a private method is not visible in the child classes, and can't also be overriden.

The private keyword cannot be used with the ``abstract`` keyword: a private method is not visible in the child classes, and can't also be overriden.


.. code-block:: php
   
   <?php
   
       class X {
           private const X = 1;
           
           final public function method() { 
               echo self::X;
           }
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.visibility.php>`__

Related : :ref:`Final Keyword <final>`, :ref:`Visibility <visibility>`, :ref:`Protected Visibility <protected>`, :ref:`Public Visibility <public>`, :ref:`Var <var>`, :ref:`Overwrite <overwrite>`, :ref:`Abstract Keyword <abstract>`, :ref:`Data Hiding <data-hiding>`, :ref:`Modifier <modifier>`, :ref:`Package-Level <package-visibility>`
