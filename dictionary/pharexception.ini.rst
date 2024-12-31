.. _pharexception:
.. meta::
	:description:
		PharException: The PharException class is a phar-specific exception.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PharException
	:twitter:description: PharException: The PharException class is a phar-specific exception
	:twitter:creator: @exakat
	:og:title: PharException
	:og:type: article
	:og:description: The PharException class is a phar-specific exception
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pharexception.ini.html
	:og:locale: en


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
