.. _wrapper-php:

PHP Wrapper
-----------

A Wrapper is a custom way to access remote resources. It is designed to look like accessing to file, on the file system, but using other drivers than the ones of the hard drive. It is based on a configuration string, which looks like a URL : `ftp://www.site.com/file.txt`, where the part before the `://` is the protocol.

Among the predefined PHP wrapper, there are http://, ftp://, zlib://, phar://, rar://, expect://. 


.. code-block:: php
   
   <?php
   
   $html = file_get_content('http://www.php.net/');
   
   ?>


`Documentation <https://www.php.net/manual/en/class.streamwrapper.php>`__

See also `Laravel wrapper around OAuth 1 & OAuth 2 libraries. <https://packagist.org/packages/laravel/socialite>`_, `Protocols and Wrapper in PHP <https://www.geeksforgeeks.org/protocols-and-wrapper-in-php/>`_

Related : :ref:`Protocol <protocol>`, :ref:`Wrapper <wrapper>`
