.. _true:
.. meta::
	:description:
		True: true has two usages, as PHP keyword : the opposite of false, as a boolean value and a special type for functions that may return a boolean, but not false.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: True
	:twitter:description: True: true has two usages, as PHP keyword : the opposite of false, as a boolean value and a special type for functions that may return a boolean, but not false
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: True
	:og:type: article
	:og:description: true has two usages, as PHP keyword : the opposite of false, as a boolean value and a special type for functions that may return a boolean, but not false
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/true.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"True","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:49:55 +0000","dateModified":"Thu, 22 Jan 2026 12:49:55 +0000","description":"true has two usages, as PHP keyword : the opposite of false, as a boolean value and a special type for functions that may return a boolean, but not false","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/True.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


True
----

true has two usages, as PHP keyword : the opposite of false, as a boolean value and a special type for functions that may return a boolean, but not false. 

``true`` as a type was introduced in PHP 8.2.

.. code-block:: php
   
   <?php
   
   function foo($a) : true|A {
       if ($a == 1) {
           return true;
       } else {
           return new A();
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.boolean.php>`__

See also https://flatcoding.com/tutorials/php/php-boolean-true-and-false/

Related : :ref:`Boolean <boolean>`, :ref:`Type System <type>`, :ref:`False <false>`, :ref:`Logical Operators <logical-operator>`
