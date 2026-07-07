.. _uuid:
.. meta::
	:description:
		Universally Unique IDentifier (UUID): UUID is a Universally Unique IDentifier.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Universally Unique IDentifier (UUID)
	:twitter:description: Universally Unique IDentifier (UUID): UUID is a Universally Unique IDentifier
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Universally Unique IDentifier (UUID)
	:og:type: article
	:og:description: UUID is a Universally Unique IDentifier
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/uuid.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Universally Unique IDentifier (UUID)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:31:02 +0000","dateModified":"Mon, 06 Jul 2026 19:31:02 +0000","description":"UUID is a Universally Unique IDentifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Universally Unique IDentifier (UUID).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Universally Unique IDentifier (UUID)
------------------------------------

UUID is a Universally Unique IDentifier. It is an identifier that anyone can generate, and that has a near certainty that it identify something unique, in the universe.

UUID are in contrast to classic integer ids, such as auto-increment primary keys, which usually start at 0, and are incrementally generated. Not only this means connecting to a database, and querying the right table, but also means that there are multiple usage of 1, in each of these tables.

UUID are a standard defined in RFC 9562 (which supersedes RFC 4122). The standard defines several versions, each with different generation strategies:

+ UUIDv1: time-based using the MAC address of the generating machine.
+ UUIDv3: deterministic, derived from a namespace and a name using MD5.
+ UUIDv4: randomly generated using 122 random bits; the most widely used version.
+ UUIDv5: deterministic, derived from a namespace and a name using SHA-1.
+ UUIDv6: reordered time-based UUID, optimised for database index locality.
+ UUIDv7: contains a 48-bit Unix timestamp in milliseconds followed by random bits, making it time-sortable and suitable for use as a database primary key.

UUIDv7 is the recommended version for new applications that use UUID as a database primary key, as its time-ordered structure avoids the B-tree page splits caused by random UUIDv4 values.

.. code-block:: php
   
   
   123e4567-e89b-12d3-a456-426614174000
   


`Documentation <https://en.wikipedia.org/wiki/Universally_unique_identifier>`__

See also `Introducing ramsey/uuid <https://benramsey.com/blog/2016/04/ramsey-uuid/>`_ and `RFC 9562 - Universally Unique IDentifiers (UUIDs) <https://www.rfc-editor.org/rfc/rfc9562>`_.

Related : :ref:`Identifier <identifier>`, :ref:`Identity <identity>`, :ref:`Unique Identifier <unique-identifier>`, :ref:`Correlation ID <correlation-id>`, :ref:`Idempotent <idempotent>`, :ref:`Index For SQL <index-sql>`, :ref:`Sqids <sqids>`, :ref:`Universally Unique Lexicographically Sortable Identifier (ULID) <ulid>`

Related packages : `ramsey/uuid <https://packagist.org/packages/ramsey/uuid>`_, `symfony/uid <https://packagist.org/packages/symfony/uid>`_
