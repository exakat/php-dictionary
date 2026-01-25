.. _throw:
.. meta::
	:description:
		throw: Throw is the keyword which raise an exception.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: throw
	:twitter:description: throw: Throw is the keyword which raise an exception
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: throw
	:og:type: article
	:og:description: Throw is the keyword which raise an exception
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/throw.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"throw","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:49:55 +0000","dateModified":"Thu, 22 Jan 2026 12:49:55 +0000","description":"Throw is the keyword which raise an exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/throw.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


throw
-----

Throw is the keyword which raise an exception. 

When an exception is thrown, the normal flow of the program is interrupted, and PHP starts looking for an exception handler to catch and handle the exception.

.. code-block:: php
   
   <?php
   try{
       throw new Exception('Error');
   } catch (\Exception $e) {
       print 'Warning : error was identified!';
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.exceptions.php>`__

See also `Exceptions - PHP Advance <https://jobtensor.com/Tutorial/PHP/en/Exceptions>`_

Related : :ref:`Try-catch <try-catch>`, :ref:`Exception <exception>`, :ref:`ArgumentCountError <argumentcounterror>`, :ref:`ArithmeticError Error <arithmeticerror>`, :ref:`Error <error>`, :ref:`Chaining Exceptions <exception-chain>`, :ref:`mysqli_sql_exception <mysqli_sql_exception>`, :ref:`PHP Predefined Exception <predefined-exception>`
