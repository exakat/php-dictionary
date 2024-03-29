.. _extract:

extract()
---------

extract() is a native PHP function, which creates arrays from an array containing variables and their values.

extract() has option to handle situations where the variables are already existing, and how those conflicts should be handled : by default, it overwrites the local variables.

Options are :  ``EXTR_OVERWRITE``, ``EXTR_SKIP``, ``EXTR_PREFIX_SAME``, ``EXTR_PREFIX_ALL``, ``EXTR_PREFIX_INVALID``, ``EXTR_IF_EXISTS``, ``EXTR_PREFIX_IF_EXISTS``, ``EXTR_REFS``.

This function is the opposite of compact().


.. code-block:: php
   
   <?php
   
   $a = 0; // $a is getting overwritten
   $array = extract(['a' => 1, 'b' => 2]);
   
   echo $a + $b; // 2
   ?>
   


`Documentation <https://www.php.net/manual/en/function.extract.php>`__

Related : :ref:`compact() <compact>`, :ref:`Variable Variables <variable-variable>`
