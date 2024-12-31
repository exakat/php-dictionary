.. _language-construct:
.. meta::
	:description:
		Language Construct: PHP has a notion of ``language construct``, which are special keywords, with an attached feature.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Language Construct
	:twitter:description: Language Construct: PHP has a notion of ``language construct``, which are special keywords, with an attached feature
	:twitter:creator: @exakat
	:og:title: Language Construct
	:og:type: article
	:og:description: PHP has a notion of ``language construct``, which are special keywords, with an attached feature
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/language-construct.ini.html
	:og:locale: en


Language Construct
------------------

PHP has a notion of ``language construct``, which are special keywords, with an attached feature. 

Language constructs are : echo, require, require_once, include, include_once, return, die, exit, unset, isset, print, empty.

Language constructs usually do not require parenthesis, and they are mostly known for that. The parenthesis is not necessary, but possible. It makes the language construct look like a function call. 

Also, language construct do not behave like a function, so they can't be used by their name, as a callback. 

There have some special behavior : echo accepts an arbitrary number of argument, while print only accepts one. die and exit work without arguments, but, in the event that an argument is provided, it must be enclosed in parenthesis.



.. code-block:: php
   
   <?php
   
   echo 'a', 'b', 'c';
   
   die;
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.keywords.php>`__

See also `PHP Language Constructs vs Built-in Functions <http://www.phpknowhow.com/basics/language-constructs-vs-built-in-functions/>`_

Related : :ref:`Self <self>`, :ref:`static <static>`, :ref:`parent <parent>`
