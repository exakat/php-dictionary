.. _assignation:
.. _assignement:
.. meta::
	:description:
		Assignations: Assignation refers to the process of assigning a value to a variable.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Assignations
	:twitter:description: Assignations: Assignation refers to the process of assigning a value to a variable
	:twitter:creator: @exakat
	:og:title: Assignations
	:og:type: article
	:og:description: Assignation refers to the process of assigning a value to a variable
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/assignation.ini.html
	:og:locale: en


Assignations
------------

Assignation refers to the process of assigning a value to a variable. It is a fundamental concept in programming that allows to store and manipulate data.

The main operator of assignation is `=`. There are secondary operators, such as `+=`, `*=`, ``??=``, ... which are called short assignation : they apply a specific operation while assigning.

Finally, there are some inherent assignations: foreach() loops, method calls and list() operator performs assignations without an explicit operator.

.. code-block:: php
   
   <?php
   
   $a = 'b';
   
   // $c is assigned by 
   foreach([1, 2, 3] as $c) {}
   echo $c; // $c is 3
   
   // list call that assigns values
   [$a, $b, $c] = ['a', 'b', 'C'];
   
   ?>


`Documentation <https://www.php.net/manual/en/language.operators.assignment.php>`__

Related : :ref:`Short Assignations <short-assignation>`
