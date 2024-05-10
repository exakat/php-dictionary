.. _json:

JSON
----

JSON (JavaScript Object Notation) is a lightweight data-interchange format. It is easy for humans to read and write. It is easy for machines to parse and generate. It is based on a subset of the JavaScript Programming Language Standard ECMA-262 3rd Edition - December 1999.

.. code-block:: php
   
   <?php
   $array = array('a' => 1, 'b' => "c", 'c' => [3, 4], 'd' => new stdclass());
   
   echo json_encode($arr);
   // displays {"a":1,"b":"c","c":[3,4],"d":{}}
   
   ?>


`Documentation <https://www.php.net/json>`__

See also `JSON home <https://www.json.org/json-en.html>`_

Added in PHP 5.0+
