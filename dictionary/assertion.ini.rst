.. _assertion:
.. _assert:

Assertions
----------

Assertions are checks that take effect in development and testing environments, but are optimised away to have zero cost in production. 

Assertions are disabled in production, by using the `zend.assertions` directive. Then, they are said 'zero-cost' : they are completely removed from the code, and not executed.

Assertions are a development tool, and should not be used in production. Be aware that the removal of the assertion may leave the system running with unchecked data. 

There are packages providing assertions features and more.




.. code-block:: php
   
   <?php
   
   $a = foo();
   assert($a !== null, 'Sorry, we got a NULL from foo()!');
   
   ?>


`Documentation <https://www.php.net/manual/en/function.assert.php>`__

See also `PHP assertions and their usage <https://www.exakat.io/en/php-assertions-usage/>`_

Related packages : `webmozart/assert <https://packagist.org/packages/webmozart/assert>`_, `beberlei/assert <https://packagist.org/packages/beberlei/assert>`_
