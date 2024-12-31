.. _cookie:
.. meta::
	:description:
		Cookie: Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cookie
	:twitter:description: Cookie: Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users
	:twitter:creator: @exakat
	:og:title: Cookie
	:og:type: article
	:og:description: Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cookie.ini.html
	:og:locale: en


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
