.. _dynamic-method:
.. meta::
	:description:
		Dynamic Method: A dynamic method is a method which is defined at execution time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Method
	:twitter:description: Dynamic Method: A dynamic method is a method which is defined at execution time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Dynamic Method
	:og:type: article
	:og:description: A dynamic method is a method which is defined at execution time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-method.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Dynamic Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 17:01:22 +0000","dateModified":"Fri, 16 Jan 2026 17:01:22 +0000","description":"A dynamic method is a method which is defined at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Dynamic Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Dynamic Method
--------------

A dynamic method is a method which is defined at execution time. 

This is convenient for module systems or SOAP clients, where the actual methods are defined at the remote server.

PHP calls this overloading.

.. code-block:: php
   
   <?php
   
   class X {
       function __call($name, $args) {
           if ($name === 'aaa') { 
               echo 'OK';
               return;
           }
           
           if ($name === 'bbb') { 
               echo 'OK';
               return;
           }
   
           echo 'KO';
       }
   }
   
   $x = new X;
   $x->aaa(); // OK
   $x->bbb(); // OK
   $x->ccc(); // KO
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.overloading.php>`__

See also https://medium.com/@erlandmuchasaj/php-dynamic-method-calling-3c5dfbe816a2

Related : :ref:`Dynamic <dynamic>`
