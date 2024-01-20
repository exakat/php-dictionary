.. _pharexception:

PharException
-------------

The PharException class is a phar-specific exception. It is raised my many Phar-related methods, and are generally differentiated based on their message, rather than having different types of exception. For example, ``'Cannot call constructor twice'`` or ``'Phar creation or opening failed'``.

.. code-block:: php
   
   <?php
   
   $phar = new Phar($myPhar);
   try {
     $phar->extractTo($directory, 'directory/', true);
   } catch (PharException $ex) {
       print "An error happened while extracting the phar";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.pharexception.php>`__

Related : :ref:`Exception <exception>`
