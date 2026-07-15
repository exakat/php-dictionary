.. _assignment:
.. _affectation:
.. meta::
	:description:
		Assignment: Assignment is the fundamental operation of binding a value to a variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Assignment
	:twitter:description: Assignment: Assignment is the fundamental operation of binding a value to a variable
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Assignment
	:og:type: article
	:og:description: Assignment is the fundamental operation of binding a value to a variable
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/assignment.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/assignment.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/assignment.ini.html","name":"Assignment","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:12:54 +0000","dateModified":"Tue, 14 Jul 2026 06:12:54 +0000","description":"Assignment is the fundamental operation of binding a value to a variable","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Assignment.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Assignment
----------

Assignment is the fundamental operation of binding a value to a variable. The ``=`` operator copies the value from the right-hand side to the left-hand side variable.

PHP supports several assignment forms:

+ Simple assignment: ``$a = 1;``
+ Compound assignment operators: ``+=``, ``-=``, ``*=``, ``/=``, ``%=``. ``**=``, ``.=``, ``&=``, ``|=``, ``^=``, ``<<=``, ``>>=``, ``??=``
+ Reference assignment: ``$b = &$a;`` makes ``$b`` an alias of ``$a``
+ List assignment: ``[$a, $b] = [1, 2];`` unpacks values into multiple variables

PHP 7.4 introduced the null coalescing assignment operator ``??=``, which assigns a value only if the variable is not set or is null. PHP 8.0 added the named arguments feature, but assignment semantics remain unchanged.

.. code-block:: php
   
   <?php
   
       // Simple assignment
       $a = 42;
   
       // Compound assignment
       $b = 10;
       $b += 5; // $b is now 15
   
       // Reference assignment
       $c = &$a;
       $c = 99;
       echo $a; // 99, because $c is an alias of $a
   
       // Null coalescing assignment (PHP 7.4+)
       $d ??= 'default';
   
       // List assignment
       [$x, $y] = ['hello', 'world'];
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.assignment.php>`__

See also `PHP Assignment Operators <https://www.php.net/manual/en/language.operators.assignment.php>`_ and `PHP Reference <https://www.php.net/manual/en/language.oop5.references.php>`_.

Related : :ref:`Assignations <assignation>`, :ref:`Short Assignations <short-assignation>`, :ref:`Overwrite <overwrite>`, :ref:`Variables <variable>`, :ref:`References <reference>`, :ref:`Passing By Reference <by-reference>`, :ref:`Passing By Value <by-value>`, :ref:`List <list>`, :ref:`Short Syntax <short-syntax>`, :ref:`Iffectation <iffectation>`
