.. _regex:
.. _preg:

Regular Expressions
-------------------

A regular expression is a sequence of characters that specifies a search pattern. PHP currently uses the PCRE library, and used to have 2 such libraries. 

.. code-block:: php
   
   <?php
     preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
     print_r($matches);
   ?>


`Documentation <https://www.php.net/preg_match>`__

See also `How to Use PHP Regular Expressions for Pattern Matching and Data Validation <https://medium.com/@olivia.j.01101001/how-to-use-php-regular-expressions-for-pattern-matching-and-data-validation-d58dacb06ea1>`_, `Getting Started with PHP Regular Expressions <https://www.jotform.com/blog/php-regular-expressions/>`_
