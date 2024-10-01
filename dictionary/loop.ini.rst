.. _loop:

Loops
-----

A loop is a control structure that allows you to execute a block of code repeatedly based on a specified condition. Loops are essential for automating repetitive tasks and processing arrays or collections of data. PHP provides several types of loops, including: for, while, do...while and foreach.

The most popular loop is foreach().

Loops may hide in certain functions : for example, array_map() and array_walk() apply a method to every element in an array. 

Generators are closely related to the foreach() loop. 


.. code-block:: php
   
   <?php
   
   foreach([11,12,13] as $id => $value) {
       print "$id => $value\n";
   }
   
   for ($i = 1; $i <= 10; $i++) {
       echo $i;
   }
   
   $i = 10;
   while ($i <= 10) {
       echo $i++;  
   }
   
   $i = 10;
   do {
       echo $i++;  
   } while ($i <= 10);
   
   ?>
   


`Documentation <https://www.php.net/manual/en/language.control-structures.php>`__

Related : :ref:`Do While <do-while>`, :ref:`While <while>`, :ref:`Break <break>`, :ref:`Control Flow <control-flow>`, :ref:`Dangling Reference <dangling-reference>`, :ref:`Do While <do-while>`, :ref:`For <for>`, :ref:`Foreach <foreach>`, :ref:`N+1 Query Problem <n-query>`
