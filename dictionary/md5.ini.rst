.. _md5:

MD5
---

MD5 is a hash function, that produce a 128-bit footprint for a value. 

MD5 was used a lot for secure hashing and control. Nowadays, it may be useful for hashing and comparing data, though it is not considered secure. 


.. code-block:: php
   
   <?php
   
   //Generate a MD5 hash with the history md5() native function
   echo hash('md5', 'Le rapide goupil brun sauta par dessus le chien paresseux.');
   
   //Generate a MD5 hash with the history md5() native function
   print md5("Some text.")
   
   ?>


`Documentation <https://www.php.net/manual/fr/function.hash.php>`__

See also `PHP md5() function <https://www.php.net/manual/en/function.md5.php>`_

Related : :ref:`Cryptography <cryptography>`, :ref:`Hash <hashing>`
