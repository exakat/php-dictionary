.. _spl:
.. meta::
	:description:
		Standard PHP Library (SPL): The Standard PHP Library (SPL) is a collection of interfaces and classes that are meant to solve common problems.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Standard PHP Library (SPL)
	:twitter:description: Standard PHP Library (SPL): The Standard PHP Library (SPL) is a collection of interfaces and classes that are meant to solve common problems
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Standard PHP Library (SPL)
	:og:type: article
	:og:description: The Standard PHP Library (SPL) is a collection of interfaces and classes that are meant to solve common problems
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/spl.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Standard PHP Library (SPL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"The Standard PHP Library (SPL) is a collection of interfaces and classes that are meant to solve common problems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Standard PHP Library (SPL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Standard PHP Library (SPL)
--------------------------

The Standard PHP Library (SPL) is a collection of interfaces and classes that are meant to solve common problems.

SPL offers features, functions, classes and interfaces in many different fields : iterators, data structures, files, exceptions, and observers. 

One of the most famous SPL features is the function spl_autoload_register(), which register an autoload handler.


.. code-block:: php
   
   <?php
   
   // SPL and autoloading
   spl_autoload_register(function ($class) {
       include 'classes/' . $class . '.class.php';
   });
   
   if ($object instanceof Countable) {
       $count = count($object);
   } elseif ($object instanceof Traversable)
       $count = iterator_count($object);
   } else {
       print "Can't count this";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/book.spl.php>`__

See also `PHP and SPL: Standard PHP Library Functions and Classes <https://reintech.io/blog/php-spl-standard-library-functions-classes>`_

Related : :ref:`Class Autoloading <autoload>`
