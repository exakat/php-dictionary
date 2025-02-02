.. _dba:
.. meta::
	:description:
		Database Abstraction Layer (DBA) extension: This is a general abstraction layer for accessing Berkeley DB style databases, with a unified API.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Database Abstraction Layer (DBA) extension
	:twitter:description: Database Abstraction Layer (DBA) extension: This is a general abstraction layer for accessing Berkeley DB style databases, with a unified API
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Database Abstraction Layer (DBA) extension
	:og:type: article
	:og:description: This is a general abstraction layer for accessing Berkeley DB style databases, with a unified API
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dba.ini.html
	:og:locale: en


Database Abstraction Layer (DBA) extension
------------------------------------------

This is a general abstraction layer for accessing Berkeley DB style databases, with a unified API.

.. code-block:: php
   
   <?php
   
   // Example from the PHP manual
   
   $id = dba_open("/tmp/test.db", "n", "db2");
   
   if (!$id) {
       echo "dba_open failed\n";
       exit;
   }
   
   dba_replace("key", "This is an example!", $id);
   
   if (dba_exists("key", $id)) {
       echo dba_fetch("key", $id);
       dba_delete("key", $id);
   }
   
   dba_close($id);
   ?>


`Documentation <https://www.php.net/manual/en/book.dba.php>`__
