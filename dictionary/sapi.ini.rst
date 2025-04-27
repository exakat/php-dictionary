.. _sapi:
.. meta::
	:description:
		Server Application Programming Interface (SAPI): SAPI stands for Server Application Programming Interface.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Server Application Programming Interface (SAPI)
	:twitter:description: Server Application Programming Interface (SAPI): SAPI stands for Server Application Programming Interface
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Server Application Programming Interface (SAPI)
	:og:type: article
	:og:description: SAPI stands for Server Application Programming Interface
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sapi.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Server Application Programming Interface (SAPI)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"SAPI stands for Server Application Programming Interface","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Server Application Programming Interface (SAPI).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Server Application Programming Interface (SAPI)
-----------------------------------------------

SAPI stands for Server Application Programming Interface. SAPI are the interface between PHP and a supporting platform, such as a web server (``nginx``, ``apache``, ``caddy``, ... ), a debugger (phpdbg, ...) or the command line interface (CLI).


.. code-block:: php
   
   <?php
   
   echo PHP_SAPI;
   echo php_sapi_name();
   
   ?>


`Documentation <https://docs.php.earth/php/sapi/>`__

Related : :ref:`Common Interface Gateway (CGI) <cgi>`
