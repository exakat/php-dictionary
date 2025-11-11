.. _false:
.. meta::
	:description:
		False: false has two usages, as PHP keyword : the opposite of true, as a boolean value and a special type for functions that may return a boolean, but not true.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: False
	:twitter:description: False: false has two usages, as PHP keyword : the opposite of true, as a boolean value and a special type for functions that may return a boolean, but not true
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: False
	:og:type: article
	:og:description: false has two usages, as PHP keyword : the opposite of true, as a boolean value and a special type for functions that may return a boolean, but not true
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/false.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"False","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 27 Sep 2025 14:38:44 +0000","dateModified":"Sat, 27 Sep 2025 14:38:44 +0000","description":"false has two usages, as PHP keyword : the opposite of true, as a boolean value and a special type for functions that may return a boolean, but not true","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/False.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


False
-----

false has two usages, as PHP keyword : the opposite of true, as a boolean value and a special type for functions that may return a boolean, but not true. 

.. code-block:: php
   
   <?php
   
   function foo($a) : false|A {
       if ($a == 1) {
           return false;
       } else {
           return new A();
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.boolean.php>`__

See also https://flatcoding.com/tutorials/php/php-boolean-true-and-false/

Related : :ref:`Boolean <boolean>`, :ref:`Type System <type>`, :ref:`True <true>`, :ref:`Falsy <falsy>`, :ref:`Truthy <truthy>`, :ref:`Underscore <underscore>`, :ref:`zero <zero>`, :ref:`Logical Operators <logical-operator>`
