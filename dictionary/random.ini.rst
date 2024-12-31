.. _random:
.. meta::
	:description:
		Random: Random generators generates numbers or strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Random
	:twitter:description: Random: Random generators generates numbers or strings
	:twitter:creator: @exakat
	:og:title: Random
	:og:type: article
	:og:description: Random generators generates numbers or strings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/random.ini.html
	:og:locale: en


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
