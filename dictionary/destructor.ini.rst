.. _destructor:
.. _-__destruct:
.. meta::
	:description:
		Destructor: The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Destructor
	:twitter:description: Destructor: The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Destructor
	:og:type: article
	:og:description: The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/destructor.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Destructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 17:03:50 +0000","dateModified":"Tue, 31 Mar 2026 17:03:50 +0000","description":"The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Destructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Destructor
----------

The destructor is a magic method in a class, which is called at shutdown of an object, in order to do any last minute cleaning. It is called ``__destruct``.

Most of the time, the destructor is automatic: removing scalar values may be sufficient. In cases of resources, or other objects, it is recommended to issue the graceful commands to shut them down in turn. 

Destructors are usually called after the end of the script, and has no access to any display, including stdout. As such, calls to echo are ineffective, and it is recommended to store the needed logs in another system.

.. code-block:: php
   
   <?php
   
   class X {
       private $file;
   
       function __construct($path) {
           $this->file = fopen($path, 'w');
       }
       
       function __destruct() {
           fwrite($this->file, 'End');
           fclose($this->file);
       }
   }
   
   $x = new X('/tmp/test.txt');
   unset($x);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.decon.php>`__

See also https://www.educba.com/destructor-in-php/

Related : :ref:`Constructor <constructor>`
