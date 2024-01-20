.. _password-ext:

Password API
------------

The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around crypt() and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner.

.. code-block:: php
   
   <?php
   
   echo password_hash(PHP is alive, PASSWORD_DEFAULT);
   ?>


`Documentation <https://www.php.net/manual/en/ref.password.php>`__

See also `How to hash passwords in PHP <https://alexwebdevelop.com/php-password-hashing/>`_
