.. _dynamic-loading:
.. meta::
	:description:
		Dynamic Loading: Dynamic Loading is related to the loading of PHP extensions, at execution time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Dynamic Loading
	:twitter:description: Dynamic Loading: Dynamic Loading is related to the loading of PHP extensions, at execution time
	:twitter:creator: @exakat
	:og:title: Dynamic Loading
	:og:type: article
	:og:description: Dynamic Loading is related to the loading of PHP extensions, at execution time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dynamic-loading.ini.html
	:og:locale: en


Dynamic Loading
---------------

Dynamic Loading is related to the loading of PHP extensions, at execution time. 

Most of the time, the extensions are compiled with PHP, and loaded at startup. For development purposes, or for distribution purposes, some libraries may be loaded at execution time, with the dl() function.

Dl() calls are considered bad for performances and for security. 



.. code-block:: php
   
   <?php
       // add extra features to PHP
       dl('ldap.so');
   ?>
   


`Documentation <https://www.php.net/manual/en/function.dl.php>`__
