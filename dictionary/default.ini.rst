.. _default:

Default
-------

default is a PHP keyword, used with switch() and match() structures. It represents any case that was not already considered.

.. code-block:: php
   
   <?php
   
   switch ($i) {
       case 0:
           echo "i equals 0";
           break;
       case 1:
           echo "i equals 1";
           break;
       default 2:
           echo "i is not 0 nor 1";
           break;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.switch.php>`__

Related : :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`Case <case>`
