.. _never:
.. _never-type:

Never Type
----------

``never`` is a special return type that signals a method that never returns : it only dies or throws an exception.

.. code-block:: php
   
   <?php
   
   function headers() : never {
       headers('Location: https://www.exakat.io/');
       die();
   }
   
   ?>


`Documentation <https://wiki.php.net/rfc/noreturn_type>`__

See also `The "never" Return Type for PHP <https://betterprogramming.pub/the-never-return-type-for-php-802fbe2fa303>`_

Related : :ref:`Type System <type>`, :ref:`Type System <type>`

Added in PHP 8.1+
