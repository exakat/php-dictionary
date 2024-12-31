.. _reflectionexception:
.. meta::
	:description:
		ReflectionException: ReflectionException is thrown whenever the Reflection API encounters an error.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ReflectionException
	:twitter:description: ReflectionException: ReflectionException is thrown whenever the Reflection API encounters an error
	:twitter:creator: @exakat
	:og:title: ReflectionException
	:og:type: article
	:og:description: ReflectionException is thrown whenever the Reflection API encounters an error
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reflectionexception.ini.html
	:og:locale: en


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
