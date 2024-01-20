.. _autovivification:

Autovivification
----------------

Autovivification is the automatic creation of an array when a value is dereferenced.

Autovivification from scalars, including true, is deprecated since PHP 7.4 and removed in PHP 8.0. 

Autovivification from false is deprecated since PHP 8.1. 

Autovivification from null is valid.

.. code-block:: php
   
   <?php
   
   $a = false;
   $a[1] = 2;
   
   $b = null;
   $b[3] = 4;
   
   ?>


`Documentation <https://www.php.net/manual/en/migration81.deprecated.php#migration81.deprecated.core.autovivification-false>`__
