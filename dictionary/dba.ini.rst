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
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Database Abstraction Layer (DBA) extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 28 Jan 2025 15:14:39 +0000","dateModified":"Tue, 28 Jan 2025 15:14:39 +0000","description":"This is a general abstraction layer for accessing Berkeley DB style databases, with a unified API","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Database Abstraction Layer (DBA) extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


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
