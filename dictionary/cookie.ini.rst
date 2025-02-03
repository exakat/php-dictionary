.. _cookie:
.. meta::
	:description:
		Cookie: Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cookie
	:twitter:description: Cookie: Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Cookie
	:og:type: article
	:og:description: Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/cookie.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Cookie","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Cookie.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
