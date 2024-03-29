.. _password:
.. _secret:

Password
--------

A password is a secret or confidential string of characters that is used for authentication and access control to verify the identity of a user. Passwords are commonly employed in computer systems, online accounts, and various digital devices to protect sensitive information and restrict unauthorized access.

The primary purpose of a password is to ensure that only authorized users can access a particular system, network, application, or account. When a user attempts to log in, they are typically required to enter a username or user ID along with their corresponding password. If the entered password matches the stored or expected password for that user, access is granted.

Passwords are a fundamental component of security measures, and it's important for users to choose strong and unique passwords to enhance the security of their accounts. Strong passwords often include a combination of uppercase and lowercase letters, numbers, and special characters, making them more resistant to unauthorized access through brute-force attacks or other security breaches. Additionally, it's recommended to use different passwords for different accounts to minimize the impact of a potential security compromise.

In PHP, password is also an extension for hashing. 


.. code-block:: php
   
   <?php
   
   $ftp_server = "ftp.example.com";
   $ftp_user = "foo";
   $ftp_pass = "bar";
   
   // Mise en place d'une connexion basique
   $ftp = ftp_connect($ftp_server) or die("Couldn't connect to $ftp_server");
   
   ?>


See also `How to Generate a Secure Password with PHP <https://alexwebdevelop.com/php-generate-random-secure-password/>`_

Related : :ref:`Password API <password-ext>`
