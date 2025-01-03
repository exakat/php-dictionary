.. _unhandledmatcherror:
.. meta::
	:description:
		UnhandledMatchError: An ``UnhandledMatchError`` error is thrown when the subject passed to a match expression is not handled by any case of the match expression.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: UnhandledMatchError
	:twitter:description: UnhandledMatchError: An ``UnhandledMatchError`` error is thrown when the subject passed to a match expression is not handled by any case of the match expression
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: UnhandledMatchError
	:og:type: article
	:og:description: An ``UnhandledMatchError`` error is thrown when the subject passed to a match expression is not handled by any case of the match expression
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unhandledmatcherror.ini.html
	:og:locale: en


UnhandledMatchError
-------------------

An ``UnhandledMatchError`` error is thrown when the subject passed to a match expression is not handled by any case of the match expression. This means that all the cases have been exhausted, and then, the ``default`` case is missing. 

Instead of finishing the ``match`` expression without any returned value, it throws an exception and stops the execution. This is a different behavior than ``switch``, which will continue the processing, even if nothing was found, potentially leading to unexpected situations.

.. code-block:: php
   
   <?php
   
   $b = match(3) {
       1 => "A",
       2 => "b";
   };
   
   
   ?>


`Documentation <https://www.php.net/manual/en/class.unhandledmatcherror.php>`__

Related : :ref:`Exception <exception>`, :ref:`Error <error>`, :ref:`Match <match>`
