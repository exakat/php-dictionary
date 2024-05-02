.. _directive:

Directives
----------

Directives are the configuration option of PHP. They may be set in the ``php.ini`` file, in HTTP server files like ``.htaccess``, or accessed via the ini_get() and ini_set() native calls. 

Directives are also set by PHP extensions or by PHP applications.


.. code-block:: php
   
   <?php
   
   echo 'display_errors = ' . ini_get('display_errors') . "\n";
   echo 'register_globals = ' . ini_get('register_globals') . "\n";
   echo 'post_max_size = ' . ini_get('post_max_size') . "\n";
   echo 'post_max_size+1 = ' . (ini_get('post_max_size')+1) . "\n";
   echo 'post_max_size in bytes = ' . return_bytes(ini_get('post_max_size'));
   
   ?>


`Documentation <https://www.php.net/manual/en/ini.list.php>`__

Related : :ref:`Extensions <extension>`, :ref:`php.ini <php.ini>`, :ref:`.htaccess <htaccess>`
