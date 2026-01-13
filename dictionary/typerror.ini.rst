.. _typerror:
.. meta::
	:description:
		Type Error: A ``TypeError`` is an error that occurs when there is a mismatch between the expected data type and the actual data type of a variable or value in your code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Type Error
	:twitter:description: Type Error: A ``TypeError`` is an error that occurs when there is a mismatch between the expected data type and the actual data type of a variable or value in your code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Type Error
	:og:type: article
	:og:description: A ``TypeError`` is an error that occurs when there is a mismatch between the expected data type and the actual data type of a variable or value in your code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/typerror.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Uncaught TypeError: Cannot assign string to class constant X::D of type int.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Uncaught TypeError: Cannot assign string to class constant X::D of type int.html","name":"Type Error","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"A ``TypeError`` is an error that occurs when there is a mismatch between the expected data type and the actual data type of a variable or value in your code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Type Error.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Type Error
----------

A ``TypeError`` is an error that occurs when there is a mismatch between the expected data type and the actual data type of a variable or value in your code. This applies to method arguments, property types and method return types. 

PHP is a dynamically typed language, which means that variable types are not explicitly declared, and PHP determines the data type at runtime. ``TypeError`` can occur when PHP encounters a situation where the expected data type does not match the actual data type.

``TypeError`` apply to typed custom methods, native PHP methods and operators. ``TypeError`` do not represent an invalid value: for example, an argument may be typed ``int``, and later used in a division, while being zero. This situation will yield a different exception.

``TypeError`` are a kind of ``Throwable``. 


.. code-block:: php
   
   <?php
   
   function foo(User $user) {
   
   }
   
   try {
       foo('a');
   } catch (TypeError $e) {
       print "Wrong type of data\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.typeerror.php>`__

See also `PHP Exception Handling - TypeError <https://blog.airbrake.io/blog/php-exception-handling/php-typeerror>`_

Related : :ref:`Exception <exception>`, :ref:`Throwable <throwable>`
