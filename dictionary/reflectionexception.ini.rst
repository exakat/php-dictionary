.. _reflectionexception:

ReflectionException
-------------------

ReflectionException is thrown whenever the Reflection API encounters an error.

Common reasons for encountering a ReflectionException include:

+ Class Not Found
+ Property Not Found
+ Method Not Found
+ Invalid Argument



.. code-block:: php
   
   <?php
   
       try
       {
           $ref = new ReflectionClass($class);
       }
       catch (ReflectionException $e)
       {
           var_dump($e->getMessage());
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.reflectionexception.php>`__
