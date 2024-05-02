.. _cookie:

Cookie
------

Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. 

.. code-block:: php
   
   <?php
   
   setcookie("aCookieName", "Cookie value", time()+3600);  /* expire in 1 hour */
   
   ?>


`Documentation <https://www.php.net/manual/en/features.cookies.php>`__

Related : :ref:`Hyper Text Transfer Protocol (HTTP) <http>`

Related packages : `dflydev/fig-cookies <https://packagist.org/packages/dflydev/fig-cookies>`_
