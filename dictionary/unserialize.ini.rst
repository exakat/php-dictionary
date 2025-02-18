.. _unserialization:
.. _unserialize:
.. _deserialize:
.. meta::
	:description:
		Unserialization: Unserialization is the extraction of an object from a string representation of an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unserialization
	:twitter:description: Unserialization: Unserialization is the extraction of an object from a string representation of an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Unserialization
	:og:type: article
	:og:description: Unserialization is the extraction of an object from a string representation of an object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unserialization.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Unserialization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Feb 2025 01:43:56 +0000","dateModified":"Tue, 18 Feb 2025 01:43:56 +0000","description":"Unserialization is the extraction of an object from a string representation of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Unserialization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Unserialization
---------------

Unserialization is the extraction of an object from a string representation of an object.

The reverse process is serialization. 

In PHP, there are different ways to implement serialization. The native way is to rely on the serialize() and unserialize(), which, in turn, rely on the __serialize() and __unserialize() magic method. Then, var_export() and require() make another serialization method. WDDX, XML, JSON or YAML all work as serialization, yet they usually are not considered, over speed or performance issues. 



.. code-block:: php
   
   <?php
   
   class X {
       private const X = 1;
       
       function foo() {
           // same as \X::C;
           return self::C;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.serialization.php>`__

See also `Benchmarking serialization <https://peakd.com/hive-168588/@crell/benchmarking-serialization>`_, `The Dangers of PHP’s unserialize and How to stay safe <https://heera.it/the-dangers-of-phps-unserialize-and-how-to-stay-safe>`_

Related : :ref:`__serialize() Method <-__serialize>`, :ref:`__unserialize() Method <-__unserialize>`

Related packages : `xkerman/restricted-unserialize <https://packagist.org/packages/xkerman/restricted-unserialize>`_
