.. _null-byte:
.. _null-character:
.. meta::
	:description:
		Null Byte: The null character, also called null byte, is a control character with the ASCII value ``0``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Null Byte
	:twitter:description: Null Byte: The null character, also called null byte, is a control character with the ASCII value ``0``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Null Byte
	:og:type: article
	:og:description: The null character, also called null byte, is a control character with the ASCII value ``0``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/null-byte.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Null Byte","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Apr 2026 08:25:00 +0000","dateModified":"Thu, 02 Apr 2026 08:25:00 +0000","description":"The null character, also called null byte, is a control character with the ASCII value ``0``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Null Byte.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Null Byte
---------

The null character, also called null byte, is a control character with the ASCII value ``0``. It is represented in strings as ``\0`` or ``chr(0)``.

Unlike in the C programming language, where a null byte marks the end of a string, PHP strings are binary-safe: they can contain null bytes anywhere, and the string’s length is stored separately. This means PHP itself will not truncate a string when it encounters a ``\0``.

However, problems arise when PHP passes such strings to underlying C librariesm, i.e. for file system operations, network functions, and certain extensions such as LDAP. Those C functions treat the null byte as a terminator, causing them to ignore everything after it. This discrepancy can lead to security vulnerabilities, like path truncation, bypassing file extension checks or directory traversal filters; hostname truncation, like circumventing SSRF protections;

.. code-block:: php
   
   <?php
   
       echo chr(0);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Null_character>`__

See also https://www.php.net/manual/en/security.filesystem.nullbytes.php, https://hadrian.io/blog/cve-2025-1220-null-byte-trickery-bypasses-hostname-allowlists-in-php

Related : :ref:`Null <null>`, :ref:`Character <character>`
