.. _ulid:
.. meta::
	:description:
		Universally Unique Lexicographically Sortable Identifier (ULID): ULID is a Universally Unique Lexicographically Sortable Identifier.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Universally Unique Lexicographically Sortable Identifier (ULID)
	:twitter:description: Universally Unique Lexicographically Sortable Identifier (ULID): ULID is a Universally Unique Lexicographically Sortable Identifier
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Universally Unique Lexicographically Sortable Identifier (ULID)
	:og:type: article
	:og:description: ULID is a Universally Unique Lexicographically Sortable Identifier
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ulid.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Universally Unique Lexicographically Sortable Identifier (ULID)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 10:29:22 +0000","dateModified":"Thu, 09 Jul 2026 10:29:22 +0000","description":"ULID is a Universally Unique Lexicographically Sortable Identifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Universally Unique Lexicographically Sortable Identifier (ULID).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Universally Unique Lexicographically Sortable Identifier (ULID)
---------------------------------------------------------------

ULID is a Universally Unique Lexicographically Sortable Identifier. It is a 128-bit identifier, compatible with ``UUID``, but designed to be sortable by creation time without any additional query.

A ULID is encoded as a 26-character Crockford's Base32 string. It is composed of two parts: a 10-character timestamp, with millisecond precision, and a 16-character random component. Because the timestamp comes first, ULIDs sort lexicographically in the order they were created, which makes them efficient as database primary keys with B-tree indexes.

ULIDs are URL-safe, case-insensitive, and contain no special characters. They avoid the hyphenated formatting of ``UUID`` while remaining compact and human-readable.

PHP support is available through libraries such as ``robinvdvleuten/ulid`` or ``symfony/uid``.

.. code-block:: php
   
   <?php
   
       use Symfony\Component\Uid\Ulid;
   
       $ulid = new Ulid();
       echo $ulid; // e.g. 01ARZ3NDEKTSV4RRFFQ69G5FAV
   
       // ULIDs generated in sequence sort correctly
       $first  = new Ulid();
       $second = new Ulid();
       assert((string) $first < (string) $second);
   
   ?>


`Documentation <https://github.com/ulid/spec>`__

See also `symfony/uid ULID <https://symfony.com/doc/current/components/uid.html#ulids>`_.

Related : :ref:`Universally Unique IDentifier (UUID) <uuid>`, :ref:`Unique Identifier <unique-identifier>`, :ref:`Identifier <identifier>`, :ref:`Database <database>`

Related packages : `robinvdvleuten/ulid <https://packagist.org/packages/robinvdvleuten/ulid>`_, `symfony/uid <https://packagist.org/packages/symfony/uid>`_
