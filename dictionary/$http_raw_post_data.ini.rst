.. _$HTTP_RAW_POST_DATA:

$HTTP_RAW_POST_DATA
-------------------

`$HTTP_RAW_POST_DATA` used to contain the raw POST data of an HTTP request. 

Since PHP 7.0, ``php://input`` should be used instead of `$HTTP_RAW_POST_DATA`.  

.. code-block:: php
   
   <?php
   
       // $a->file was filled with $_FILES at some point
       move_uploaded_file($a->file['tmp_name'], $target);
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.variables.files.php>`__

Removed in PHP 
