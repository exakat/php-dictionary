.. _array-spread:

Array Spread
------------

Array spread is the ellipsis operator, applied to an array. Then, the array itself is replaced by each of its own element, as if each element was spread from the array.


.. code-block:: php
   
   <?php
   
   $a = [1,2,3];
   $b = [...$a, 4,5];
   
   // $b === [1,2,3,4,5];
   
   ?>


`Documentation <https://www.php.net/manual/en/migration74.new-features.php#migration74.new-features.standard.array-merge-no-args>`__

See also `PHP Spread Operator <https://www.phptutorial.net/php-tutorial/php-spread-operator/>`_

Related : :ref:`Ellipsis <ellipsis>`

Added in PHP 7.4
