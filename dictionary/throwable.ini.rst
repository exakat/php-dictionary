.. _throwable:
.. meta::
	:description:
		Throwable: Throwable is a PHP native interface, which is required for any object to be used with thrown, such as `Exception` and `Error`.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Throwable
	:twitter:description: Throwable: Throwable is a PHP native interface, which is required for any object to be used with thrown, such as `Exception` and `Error`
	:twitter:creator: @exakat
	:og:title: Throwable
	:og:type: article
	:og:description: Throwable is a PHP native interface, which is required for any object to be used with thrown, such as `Exception` and `Error`
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/throwable.ini.html
	:og:locale: en


Throwable
---------

Throwable is a PHP native interface, which is required for any object to be used with thrown, such as `Exception` and `Error`.

This interface may be used with catch clauses, to catch everything that is thrown. Yet, this interface cannot be implemented directly. It should be acquired by extending `Exception`.



.. code-block:: php
   
   <?php
   
   class x extends \Exception implements \Throwable {
   }
   
   throw new X();
   
   ?>


`Documentation <https://www.php.net/manual/en/class.throwable.php>`__

Related : :ref:`Catch <catch>`, :ref:`Exception <exception>`, :ref:`Error <error>`, :ref:`Type Error <typerror>`

Added in PHP 7.0
