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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Standard PHP Library (SPL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:52:45 +0000","dateModified":"Wed, 21 Jan 2026 08:52:45 +0000","description":"The Standard PHP Library (SPL) is a collection of interfaces and classes that are meant to solve common problems","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Standard PHP Library (SPL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
       print Can't count this;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/book.spl.php>`__

See also https://reintech.io/blog/php-spl-standard-library-functions-classes

Related : :ref:`Class Autoloading <autoload>`, :ref:`Datastack <datastack>`, :ref:`DirectoryIterator <directoryiterator>`, :ref:`Iterator <iterator>`, :ref:`UnexpectedValueException <unexpectedvalueexception>`
