.. _strpos-syndrom:

Strpos() Syndrome
-----------------

The strpos() syndrome is a classic bug : strpos() searches for a string inside another string. It reports its index upon finding it, or false, if the string was not found.

PHP's string are indexed starting with 0, so the found string might be in an index from 0 to the size of the string. 

PHP also cast 0 to false. And false is also the value that is returned when the string is not found. So, if the found string is at the very beginning of the searched string, it might be confused for its absence.

To avoid confusion, it is recommended to make an explicit comparison with false, using ``===`` or ``!==``.

Note that many PHP native functions behave that way, and should be treated with the same precaution.

In the case of strpos(), it may be replaced with str_contains() (since PHP 8.0) or a regex, to get safer results.


.. code-block:: php
   
   <?php
   
   $haystack = 'abcdef';
   
   if (strpos($haystack, 'b')) {
   	print "The haystack contains a 'b'\n";
   }
   
   if (strpos($haystack, 'a')) {
   	print "The haystack contains an 'a'\n";
   } else {
   	print "The haystack doesn't contain an 'a'\n";
   }
   
   
   ?>


See also `Strpos Function Issue In Php Not Finding The Needle <https://www.learn-codes.net/php/strpos-function-issue-in-php-not-finding-the-needle/>`_
