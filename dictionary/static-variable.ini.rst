.. _static-variable:
.. meta::
	:description:
		Static Variables: A static variable is a variable that retains its value across multiple function calls.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Variables
	:twitter:description: Static Variables: A static variable is a variable that retains its value across multiple function calls
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Static Variables
	:og:type: article
	:og:description: A static variable is a variable that retains its value across multiple function calls
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/static-variable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Static Variables","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"A static variable is a variable that retains its value across multiple function calls","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Static Variables.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Static Variables
----------------

A static variable is a variable that retains its value across multiple function calls. Unlike regular variables, which are created and destroyed each time a function is called, static variables are initialized only once and persist throughout the entire execution of the script. 

To declare a static variable in PHP, you need to use the static keyword inside a function. 

Static variables are commonly used when you want to keep track of certain information across function calls without the need to use global variables or properties. They are especially useful for counters, accumulators, caching, and memoization. However, it's essential to use them judiciously and avoid excessive reliance on them, as they can make code harder to maintain and understand if used indiscriminately.

Static variables may be refactored as a global variable or a property. 

Static variables may be declared only once, starting with PHP 8.3. Until that version, it is a best practice to only declare them once.

Static variables may use any PHP expressions to define their default value. That value is used when the variable is used for the first time. 


.. code-block:: php
   
   <?php
   
   function counter() {
       static $count = 0;
       
       return ++$count;
   }
   
   counter(); // print 1
   counter(); // print 2
   
   ?>


`Documentation <https://www.php.net/manual/en/language.variables.scope.php#language.variables.scope.static>`__

See also `Static Variables and Methods <https://brainbell.com/php/static.html>`_, `5 usages of static keyword in PHP <https://www.exakat.io/en/5-usages-of-static-keyword-in-php/>`_, `PHP Static Variables <https://www.scaler.com/topics/static-variable-in-php/>`_

Related : :ref:`Variables <variable>`, :ref:`Variable Variables <variable-variable>`, :ref:`Global Variables <global-variable>`, :ref:`global Scope <global>`, :ref:`$GLOBALS <globals>`, :ref:`Local Variable <local-variable>`, :ref:`Superglobal Variables <superglobal>`
