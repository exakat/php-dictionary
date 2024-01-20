.. _hash:
.. _hashing:

Hash
----

Hash has several meanings : 

+ PHP extension
+ PHP function
+ a general computer science concept, that transforms data into another value
+ a general computer science concept, that turns a string into another fixed-sized string, in a way that is difficult to revert
+ a synonym for arrays with arbitrary keys, also known as map or associative array

Hash allows direct or incremental processing of arbitrary length messages using a variety of hashing algorithms. 

While the extension 'hash' only process hashes, there are other extensions which offer these features : openssl, sodium and password hashing. Mhash and mcrypt are older PHP extensions, which are now discontinued. 


.. code-block:: php
   
   
   <?php
   
   echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
   // produces ec457d0a974c48d5685a7efa03d137dc8bbde7e3
   
   ?>
   


`Documentation <https://www.php.net/manual/en/intro.hash.php>`__

Related : :ref:`hash() Function <hash-function>`, :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Array <array>`, :ref:`Map <map>`
