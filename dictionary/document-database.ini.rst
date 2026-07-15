.. _document-database:
.. _document-store:
.. meta::
	:description:
		Document Database: A document database is a type of NoSQL database that stores data as semi-structured documents, typically in JSON, BSON, or XML format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Document Database
	:twitter:description: Document Database: A document database is a type of NoSQL database that stores data as semi-structured documents, typically in JSON, BSON, or XML format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Document Database
	:og:type: article
	:og:description: A document database is a type of NoSQL database that stores data as semi-structured documents, typically in JSON, BSON, or XML format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/document-database.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/document-database.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/document-database.ini.html","name":"Document Database","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A document database is a type of NoSQL database that stores data as semi-structured documents, typically in JSON, BSON, or XML format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Document Database.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Document Database
-----------------

A document database is a type of NoSQL database that stores data as semi-structured documents, typically in JSON, BSON, or XML format. Each document is a self-contained record with a flexible schema, unlike the fixed rows and columns of relational databases.

Common document databases used with PHP include MongoDB and CouchDB. PHP drivers and libraries such as the official MongoDB extension or Doctrine ODM provide integration.

Document databases are well suited to hierarchical or varying-structure data, but lack the relational joins and strict consistency guarantees of SQL databases.

.. code-block:: php
   
   <?php
   
       // MongoDB PHP driver example
       $client = new MongoDB\Client('mongodb://localhost:27017');
       $collection = $client->mydb->users;
       
       $collection->insertOne([
           'name'  => 'Alice',
           'email' => 'alice@example.com',
           'roles' => ['admin', 'editor'],
       ]);
       
       $user = $collection->findOne(['name' => 'Alice']);
       echo $user['email'];
   
   ?>


`Documentation <https://www.mongodb.com/>`__

See also `MongoDB PHP Library <https://www.mongodb.com/docs/php-library/current/>`_.

Related : :ref:`Nosql Database <nosql-database>`, :ref:`Database <database>`, :ref:`SQL Database <sql-database>`, :ref:`Key-value Stores <key-value-store>`, :ref:`JavaScript Object Notation (JSON) <json>`, :ref:`Extensible Markup Language (XML) <xml>`, :ref:`Schema <schema>`

Related packages : `mongodb/mongodb <https://packagist.org/packages/mongodb/mongodb>`_
