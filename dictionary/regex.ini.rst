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
