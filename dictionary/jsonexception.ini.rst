.. _jsonexception:

JsonException
-------------

Exception thrown if JSON_THROW_ON_ERROR option is set for json_encode() or json_decode(). code contains the error type, for possible values see json_last_error(). 

.. code-block:: php
   
   <?php
   
   use JsonException;
   
   try {
       $data = json_decode($incomingJSON, JSON_THROW_ON_ERROR);
   
       return base64_encode($data);
   } catch (JsonException $e) {
   
       print 'Could not decrypt the data.';
   
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.jsonexception.php>`__

Added in PHP 5.0+
