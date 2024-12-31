.. _security:
.. meta::
	:description:
		Security: Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Security
	:twitter:description: Security: Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Security
	:og:type: article
	:og:description: Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/security.ini.html
	:og:locale: en


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
