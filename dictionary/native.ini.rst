.. _native:
.. _native-function:
.. _native-class:
.. _native-constant:
.. _built-in:

Native
------

A feature is called 'native' or 'built-in' when it is part of the standard installation of PHP. For example, `.` (dot operator) or the `stdClass` class are native to PHP.

On the other hand, a feature is custom : that is, when defined by the developer or a PHP extension. 

.. code-block:: php
   
   <?php
   
   // This is a native function
   $s = strtolower($s);
   
   // This is not a native function : it comes from an extension
   $rar_arch = RarArchive::open('latest_winrar.rar');
   
   
   ?>


See also `The 100 PHP functions in 2022 <https://www.exakat.io/en/the-100-php-functions-in-2022/>`_

Related : :ref:`Native <built-in>`
