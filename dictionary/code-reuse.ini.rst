.. _code-reuse:

Code Reuse
----------

Code reuse, as in any programming language, refers to the practice of writing code that can be used in multiple parts of an application or across different projects. This approach offers several benefits, including:

+ Efficiency: Instead of writing the same functionality multiple times, the code is written once and used wherever needed.
+ Consistency: Reusing code promotes consistency across the application and projects, as the same logic is used in multiple places.
+ Maintenance: When the code needs to be updated or fixed, there is only one place to do it, reducing the time to spread the fix.

In PHP, code reuse can be achieved through various techniques, including functions, classes, file inclusions and composer components.

.. code-block:: php
   
   <?php
   
   // list elements like humans.
   function implodeWithAnd(array $array) : string {
   	$last = array_pop($array);
   	return implode(', ', $array).' and '.$last;
   }
   
   print implodeWithAnd(['Alice', 'Bob', 'Eve']);
   
   print implodeWithAnd(['Tom', 'Jerry']);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Code_reuse>`__

See also `What is code reuse and why is it important? <https://www.opslevel.com/resources/what-is-code-reuse-and-why-is-it-important>`_
