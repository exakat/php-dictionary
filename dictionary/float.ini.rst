.. _float:
.. _double:

Floating Point Numbers
----------------------

 Floating point numbers (also known as "floats", "doubles", or "real numbers") can be specified using a decimal dot and a mantis.

They may also use a number separator ``_``.

Floats used be called ``real``, though this was abandoned progressively, since PHP 7.0.

.. code-block:: php
   
   
   <?php
   $a = 1.234; 
   $b = 1.2e3; 
   $c = 7E-10;
   $d = 1_234.567; // as of PHP 7.4.0
   ?>
   


`Documentation <https://www.php.net/manual/en/language.types.float.php>`__

See also `Floating Dangers in PHP <https://medium.com/@dotcom.software/floating-dangers-in-php-c4a2220bd8dc>`_

Related : :ref:`Real Numbers <real>`, :ref:`Addition <addition>`, :ref:`Multiplication <multiplication>`
