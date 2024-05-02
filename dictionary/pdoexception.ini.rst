.. _pdoexception:

PDOException
------------

PDOException represents an error raised by PDO. You should not throw a PDOException from your own code. 

.. code-block:: php
   
   <?php
       try {
         $pdo = new PDO('sqlite:myfile.sqlite');
       } catch(PDOException $e) {
           die('Unable to open database connection');
       } 
   ?>


`Documentation <https://www.php.net/manual/en/class.pdoexception.php>`__
