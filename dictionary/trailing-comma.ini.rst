.. _trailing-comma:

Trailing Comma
--------------

The trailing comma is the possibility to leave the last element of a list empty. This is for presentation reasons. In particular, VCS will be able to treat the last line just like any another previous line, with a final comma. This reduces de amount of diff.

Trailing commas were introduced progressively in PHP. In PHP 7.2, in use statements; in PHP 7.3, in method calls; in PHP 8.0, in method declarations; in very old version, in array declarations.


.. code-block:: php
   
   <?php
   
   $a = array(1,
              2,
              3,
              // Adding a new element in this array only creates
              // a one line diff, when using the trailing comma
              )
   ?>


`Documentation <https://www.php.net/manual/en/functions.arguments.php#functions.arguments>`__

See also `How I learned to stop worrying and love the trailing comma <https://c-harrison.medium.com/how-i-learned-to-stop-worrying-and-love-the-trailing-comma-480f3a73d203>`_

Related : :ref:`Comma <comma>`, :ref:`Convention <convention>`
