.. _sqids:
.. _hashids:
.. meta::
	:description:
		Sqids: Sqids (formerly known as Hashids) is an open-source library that encodes one or more non-negative integers into short, YouTube-like alphanumeric strings, and decodes them back.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sqids
	:twitter:description: Sqids: Sqids (formerly known as Hashids) is an open-source library that encodes one or more non-negative integers into short, YouTube-like alphanumeric strings, and decodes them back
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sqids
	:og:type: article
	:og:description: Sqids (formerly known as Hashids) is an open-source library that encodes one or more non-negative integers into short, YouTube-like alphanumeric strings, and decodes them back
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sqids.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sqids.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sqids.ini.html","name":"Sqids","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:03:05 +0000","dateModified":"Mon, 06 Jul 2026 19:03:05 +0000","description":"Sqids (formerly known as Hashids) is an open-source library that encodes one or more non-negative integers into short, YouTube-like alphanumeric strings, and decodes them back","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Sqids.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Sqids
-----

Sqids (formerly known as Hashids) is an open-source library that encodes one or more non-negative integers into short, YouTube-like alphanumeric strings, and decodes them back.

The generated strings are URL-safe, avoid common profanity by design, and can use a custom alphabet and a minimum length. Sqids is not a cryptographic function: the encoding is deterministic and reversible by anyone who knows the alphabet and salt used. It is therefore suited for obfuscating sequential integer IDs in URLs to prevent enumeration, not for security-sensitive encoding.

A key difference from ``UUID`` and ``ULID`` is that Sqids encode existing integers rather than generating new identifiers. They are most useful when a database already uses auto-increment primary keys and exposing those raw integers in URLs is undesirable.

The official PHP library is ``sqids/sqids``.

.. code-block:: php
   
   <?php
   
       use Sqids\Sqids;
   
       $sqids = new Sqids();
   
       $id = $sqids->encode([1, 2, 3]); // e.g. 'TmhB'
       $numbers = $sqids->decode($id);  // [1, 2, 3]
   
       // Custom alphabet and minimum length
       $sqids = new Sqids(alphabet: 'abcdefghij', minLength: 8);
       echo $sqids->encode([42]); // e.g. 'dfidbicd'
   
   ?>


`Documentation <https://sqids.org/php>`__

See also `Sqids specification <https://sqids.org>`_ and `sqids/sqids on Packagist <https://packagist.org/packages/sqids/sqids>`_.

Related : :ref:`Universally Unique IDentifier (UUID) <uuid>`, :ref:`Universally Unique Lexicographically Sortable Identifier (ULID) <ulid>`, :ref:`Unique Identifier <unique-identifier>`, :ref:`Identifier <identifier>`, :ref:`Obfuscation <obfuscation>`, :ref:`Slug <slug>`

Related packages : `sqids/sqids <https://packagist.org/packages/sqids/sqids>`_
