.. _hash-table:
.. _hashtable:
.. meta::
	:description:
		Hash Table: A hash table is a data structure that stores key-value pairs, and uses a hash function to compute an index, called a bucket, from the key, so that a value can be inserted, looked up, or deleted in average constant time ``O(1)``, regardless of the size of the table.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Hash Table
	:twitter:description: Hash Table: A hash table is a data structure that stores key-value pairs, and uses a hash function to compute an index, called a bucket, from the key, so that a value can be inserted, looked up, or deleted in average constant time ``O(1)``, regardless of the size of the table
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Hash Table
	:og:type: article
	:og:description: A hash table is a data structure that stores key-value pairs, and uses a hash function to compute an index, called a bucket, from the key, so that a value can be inserted, looked up, or deleted in average constant time ``O(1)``, regardless of the size of the table
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hash-table.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Hash Table","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 19:55:00 +0000","dateModified":"Sun, 12 Jul 2026 19:55:00 +0000","description":"A hash table is a data structure that stores key-value pairs, and uses a hash function to compute an index, called a bucket, from the key, so that a value can be inserted, looked up, or deleted in average constant time ``O(1)``, regardless of the size of the table","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Hash Table.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Hash Table
----------

A hash table is a data structure that stores key-value pairs, and uses a hash function to compute an index, called a bucket, from the key, so that a value can be inserted, looked up, or deleted in average constant time ``O(1)``, regardless of the size of the table. It is one of the most used data structures in computing, backing associative arrays, sets, caches, and database indexes alike.

Collisions, two keys hashing to the same bucket, are unavoidable once the table grows, and are resolved either through chaining, where each bucket holds a small list, or through open addressing, which probes for the next free slot. A hash table's performance degrades if the hash function distributes keys poorly, or if the table is not resized as it fills up.

Every PHP array is, internally, an ordered hash table: the Zend Engine's ``HashTable`` C structure maps both integer and string keys to a bucket, while a separate doubly linked list preserves insertion order. This is why PHP arrays iterate in a deterministic, insertion order, unlike hash tables in many other languages.

.. code-block:: php
   
   <?php
   
       // PHP's associative array is a hash table
       $ages = [];
       $ages['Alice'] = 30; // 'Alice' is hashed to find its bucket
       $ages['Bob']   = 25;
   
       echo $ages['Alice']; // O(1) average lookup
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Hash_table>`__

Related : :ref:`Hash <hash>`, :ref:`Array, [] <array>`, :ref:`Random Access <random-access>`, :ref:`Rainbow Table <rainbow-table>`, :ref:`Bucket <bucket>`
