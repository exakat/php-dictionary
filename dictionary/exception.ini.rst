.. _exception:
.. meta::
	:description:
		Exception: Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or die() statements.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Exception
	:twitter:description: Exception: Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or die() statements
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Exception
	:og:type: article
	:og:description: Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or die() statements
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/exception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Exception","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 18:29:07 +0000","dateModified":"Fri, 16 Jan 2026 18:29:07 +0000","description":"Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or die() statements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Exception.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Exception
---------

Exceptions are a mechanism for handling errors and exceptional situations in a more structured and controlled way compared to traditional error handling methods like using error codes or die() statements. Exceptions provide a way to separate the normal flow of code from error-handling code, making it easier to manage errors and maintain clean and readable code.

Exceptions are thrown at the point of detection of the issue, and processed somewhere else in the code, when they are caught by a try-catch statement. Ultimately, exceptions block the execution of the application when they are not caught.

.. code-block:: php
   
   <?php
   
   class x {
       final const X = 1;
       
       final function method() { }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.exceptions.php>`__

See also https://netgen.io/blog/modern-error-handling-in-php, https://benjamincrozat.com/php-exceptions, https://blog.airbrake.io/blog/php-exception-handling/the-php-exception-class-hierarchy, https://dev.to/devmahfuz/mastering-exception-handling-in-php-ensuring-code-resilience-3pk5

Related : :ref:`throw <throw>`, :ref:`Try-catch <try-catch>`, :ref:`Chaining Exceptions <exception-chain>`, :ref:`RangeException <rangeexception>`, :ref:`Anonymous Catch <anonymous-catch>`, :ref:`BadFunctioncallException <badfunctioncallexception>`, :ref:`Chaining <chaining>`, :ref:`DomainException <domainexception>`, :ref:`Error Handling <error-handling>`, :ref:`Error <error>`, :ref:`Chaining Exceptions <chaining-exception>`, :ref:`ImagickException <imagickexception>`, :ref:`LengthException <lengthexception>`, :ref:`PharException <pharexception>`, :ref:`PHP Predefined Exception <predefined-exception>`, :ref:`SVMException <svmexception>`, :ref:`Throwable <throwable>`, :ref:`Traversable <traversable>`, :ref:`Type Error <typerror>`, :ref:`UnexpectedValueException <unexpectedvalueexception>`, :ref:`UnhandledMatchError <unhandledmatcherror>`
