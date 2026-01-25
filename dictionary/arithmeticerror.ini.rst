.. _arithmeticerror:
.. meta::
	:description:
		ArithmeticError Error: ``ArithmeticError`` is thrown when an error occurs while performing mathematical operations.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ArithmeticError Error
	:twitter:description: ArithmeticError Error: ``ArithmeticError`` is thrown when an error occurs while performing mathematical operations
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ArithmeticError Error
	:og:type: article
	:og:description: ``ArithmeticError`` is thrown when an error occurs while performing mathematical operations
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/arithmeticerror.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"ArithmeticError Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 24 Jan 2026 10:27:04 +0000","dateModified":"Sat, 24 Jan 2026 10:27:04 +0000","description":"``ArithmeticError`` is thrown when an error occurs while performing mathematical operations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ArithmeticError Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ArithmeticError Error
---------------------

``ArithmeticError`` is thrown when an error occurs while performing mathematical operations. These errors include attempting to perform a bitshift by a negative amount, and any call to intdiv() that would result in a value outside the possible bounds of an int. 

Currently, a bitshift is the main source for arithmetic exceptions. The other is division by zero, which is a child class.

``DivisionByZeroError`` is an ``ArithmeticError``. 

When ``ArithmeticError`` are not raised, PHP may return a ``NaN`` value, and ``INF`` value, or also 0.


.. code-block:: php
   
   <?php
   
   // ArithmeticError is catchable
   try {
       8 >> -1;
   } catch (ArithmeticError) {
       print 'Cannot do a negative shift';
   }
   
   try {
       10 / 0;
   } catch (DivisionByZeroError) { // or DivisionByZeroError
       print 'Cannot divide by 0';
   }
   
   print sqrt(-10); // NaN
   
   print log(0); // -INF
   
   ?>


`Documentation <https://www.php.net/manual/en/class.arithmeticerror.php>`__

See also https://blog.airbrake.io/blog/php-exception-handling/arithmeticerror

Related : :ref:`throw <throw>`, :ref:`Try-catch <try-catch>`, :ref:`DivisionByZeroError <divisionbyzeroerror>`, :ref:`Not A Number (NAN) <nan>`, :ref:`INF <inf>`
