.. _oracle:
.. _oci:
.. meta::
	:description:
		Oracle: Oracle is a relational database management system developed by Oracle Corporation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Oracle
	:twitter:description: Oracle: Oracle is a relational database management system developed by Oracle Corporation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Oracle
	:og:type: article
	:og:description: Oracle is a relational database management system developed by Oracle Corporation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/oracle.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/oracle.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/oracle.ini.html","name":"Oracle","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:13:30 +0000","dateModified":"Fri, 10 Jul 2026 09:13:30 +0000","description":"Oracle is a relational database management system developed by Oracle Corporation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Oracle.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Oracle
------

Oracle is a relational database management system developed by Oracle Corporation. It is one of the most widely used enterprise databases, known for its robustness, advanced SQL features, and scalability.

PHP connects to Oracle databases via the OCI8 extensionm called ``ext/oci8``, which provides functions prefixed with ``oci_`` such as ``oci_connect()``, ``oci_parse()``, ``oci_execute()``, and ``oci_fetch_array()``. Oracle can also be accessed via PDO using the ``pdo_oci`` driver.

Oracle-specific features that PHP developers encounter include: sequences in lieu of auto-increment, ``ROWNUM`` for pagination, PL/SQL stored procedures, and CLOB/BLOB handling for large data.

The term ``oracle`` is also used in testing to describe the mechanism by which a test determines whether its output is correct, and in cryptography for an attacker-accessible function that reveals partial information about a secret.

.. code-block:: php
   
   <?php
   
       $conn = oci_connect('user', 'password', 'localhost/XE');
       $stmt = oci_parse($conn, 'SELECT id, name FROM users WHERE id = :id');
       oci_bind_by_name($stmt, ':id', $userId);
       oci_execute($stmt);
       
       while ($row = oci_fetch_array($stmt, OCI_ASSOC)) {
           echo $row['NAME'];
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/book.oci8.php>`__

See also `PDO_OCI — PHP Manual <https://www.php.net/manual/en/ref.pdo-oci.php>`_.

Related : :ref:`Database <database>`, :ref:`PHP Data Objects (PDO) <pdo>`, :ref:`MySQL <mysql>`, :ref:`Database Abstraction Layer (DBA) Extension <dba>`, :ref:`SQL Database <sql-database>`
