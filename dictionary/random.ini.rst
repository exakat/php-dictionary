.. _random:

Random
------

Random generators generates numbers or strings. 

random_bytes(), random_int() and openssl_random_pseudo_bytes() produce pseudo-random data, suitable for cryptography. 

Traditional native functions, such as rand() and mt_rand() are not recommended for cryptography. 



.. code-block:: php
   
   <?php
   $bytes = random_bytes(5);
   var_dump(bin2hex($bytes));
   ?>


`Documentation <https://www.php.net/manual/en/function.random-bytes.php>`__

See also `How to Use the rand() Function in PHP <https://pimylifeup.com/php-rand/>`_
