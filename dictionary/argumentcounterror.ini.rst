.. _argumentcounterror:
.. meta::
	:description:
		ArgumentCountError: ``ArgumentCountError`` is thrown when too few arguments are passed to a user-defined or PHP native function or method.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ArgumentCountError
	:twitter:description: ArgumentCountError: ``ArgumentCountError`` is thrown when too few arguments are passed to a user-defined or PHP native function or method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ArgumentCountError
	:og:type: article
	:og:description: ``ArgumentCountError`` is thrown when too few arguments are passed to a user-defined or PHP native function or method
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/argumentcounterror.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"ArgumentCountError","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 21:18:18 +0000","dateModified":"Thu, 22 Jan 2026 21:18:18 +0000","description":"``ArgumentCountError`` is thrown when too few arguments are passed to a user-defined or PHP native function or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ArgumentCountError.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ArgumentCountError
------------------

``ArgumentCountError`` is thrown when too few arguments are passed to a user-defined or PHP native function or method. This is an error, not an exception.

No exception is raised for extra parameters, as those may still be processed by the method itself.

.. code-block:: php
   
   <?php
   
   function foo($a) {}
   
   // No error is raised here
   foo(1,2);
   
   // ArgumentCountError is catchable
   try {
       foo();
   } catch (ArgumentCountError) {
       print 'No enough parameters passed.';
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.argumentcounterror.php>`__

See also https://www.bestwebframeworks.com/tutorials/php/153/solve-php-uncaught-argumentcounterror-too-few-arguments-to-function/

Related : :ref:`throw <throw>`, :ref:`Try-catch <try-catch>`
