.. _security:

Security
--------

Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities.

Security risks may be of different nature: data privacy, identity usurpation, resource abuse, privilege escalation, resource access. 

Security applies to PHP itself, and also to the application written with it. 


.. code-block:: php
   
   
   <?php
      // classic example of a XSS injection
      $a = echo $_GET['a'];
   ?>
   


`Documentation <https://www.php.net/manual/en/security.php>`__
