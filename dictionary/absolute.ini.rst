.. _absolute:
.. meta::
	:description:
		Absolute: An ``absolute`` value is independant from the context in which it operates.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Absolute
	:twitter:description: Absolute: An ``absolute`` value is independant from the context in which it operates
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Absolute
	:og:type: article
	:og:description: An ``absolute`` value is independant from the context in which it operates
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/absolute.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Absolute","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"An ``absolute`` value is independant from the context in which it operates","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Absolute.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Absolute
--------

An ``absolute`` value is independant from the context in which it operates. 

The notion of ``absolute``` has several usages:

+ There are absolute names, also known as fully qualified name
+ There are absolute path, which are path that starts at the root of the file system
+ There are absolute values, supported by ``abs()`` math function
+ The ``absolute`` parameter, when processing a ``DateTimeInterface`` difference

The notion of absolute is the opposite of the notion of relative, which depends on a local context.



.. code-block:: php
   
   <?php
   
   // global namespace
   namespace {
       // first definition
       function bar() { echo "in the global scope."; }
   }
   
   namespace foo{
       // second definition
       function bar() { echo "in the foo scope."; }
   
       bar(); // relative call: it goes to the second definition
       \bar(); // absolute call: it goes to the first definition
       \foo\bar(); // absolute call: it goes to the second definition
   }
   
   ?>


Related : :ref:`Fully Qualified Name <fully-qualified-name>`, , :ref:`Path <path>`, :ref:`Relative <relative>`
