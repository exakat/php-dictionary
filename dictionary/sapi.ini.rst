.. _sapi:
.. meta::
	:description:
		SAPI: SAPI stands for Server Application Programming Interface.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SAPI
	:twitter:description: SAPI: SAPI stands for Server Application Programming Interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SAPI
	:og:type: article
	:og:description: SAPI stands for Server Application Programming Interface
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sapi.ini.html
	:og:locale: en


SAPI
----

SAPI stands for Server Application Programming Interface. SAPI are the interface between PHP and a supporting platform, such as a web server (``nginx``, ``apache``, ``caddy``, ... ), a debugger (phpdbg, ...) or the command line interface (CLI).


.. code-block:: php
   
   <?php
   
   echo PHP_SAPI;
   echo php_sapi_name();
   
   ?>


`Documentation <https://docs.php.earth/php/sapi/>`__

Related : :ref:`CGI <cgi>`
