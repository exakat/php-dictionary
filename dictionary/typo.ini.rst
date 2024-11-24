.. _typo:

Typo
----

A typo is short for ``typographical error``. It refers to a mistake made in the typing of the code. Typographical errors can include misspelled words, misplaced operators. Typos can occur in various contexts, such as types, expressions, naming. 

A typo can lead to a visible or invisible error. An typo in the function name of ``array_slice()``, like ``array_sloce()`` leads to a fatal error, as the function is not defined; On the other hand, a typo on the same function, written ``array_splice()`` (extra p), leads to 

Typo happen in any text based system.


.. code-block:: php
   
   <?php
   
   // The typo has placed the === false INSIDE the in_array(), and changes the behavior
   if (in_array($array, $value, $strict === false)) {
   
   }
   
   // the type and is not expected, instead of an integer
   function foo(ant $i) {
   
   }
   
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Typographical_error>`__
