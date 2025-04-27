.. _destructor:
.. meta::
	:description:
		Destructor: The destructor is a special method in a class, which is called at shutdown of an object, in order to do any last minute cleaning.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Destructor
	:twitter:description: Destructor: The destructor is a special method in a class, which is called at shutdown of an object, in order to do any last minute cleaning
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Destructor
	:og:type: article
	:og:description: The destructor is a special method in a class, which is called at shutdown of an object, in order to do any last minute cleaning
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/destructor.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Destructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"The destructor is a special method in a class, which is called at shutdown of an object, in order to do any last minute cleaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Destructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Destructor
----------

The destructor is a special method in a class, which is called at shutdown of an object, in order to do any last minute cleaning. 

Most of the time, the destructor is automatic : removing scalar values may be sufficient. In cases of resources, or other objects, it is recommended to issue the graceful commands to shut them down in turn. 

Destructors are usually called after the end of the script, and will not have access to any display. As such, calls to echo are ineffective.



.. code-block:: php
   
   <?php
   
   class X {
       private $file;
   
       function __construct($path) {
           $this->file = fopen($path, 'w');
       }
       
       function __destruct() {
           fwrite($this->file, "End");
           fclose($this->file);
       }
   }
   
   $x = new X("/tmp/test.txt");
   unset($x);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.decon.php>`__

See also `Introduction to Destructor in PHP <https://www.educba.com/destructor-in-php/>`_

Related : :ref:`constructor <constructor>`
