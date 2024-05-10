.. _hash-function:

hash() Function
---------------

hash() is a PHP native function, that computes the cryptographic hash of strings, with a wide range of algorithms.

.. code-block:: php
   
   
   <?php
   
   echo hash('ripemd160', 'The quick brown fox jumped over the lazy dog.');
   // produces ec457d0a974c48d5685a7efa03d137dc8bbde7e3
   
   ?>
   


`Documentation <https://www.php.net/manual/en/intro.hash.php>`__

Related : :ref:`Cryptographic Hash <hash-crypto>`, :ref:`Hash <hash>`, :ref:`Map <map>`
