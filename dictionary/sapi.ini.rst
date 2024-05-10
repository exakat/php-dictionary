.. _sapi:

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
