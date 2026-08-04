.. _pcre:
.. meta::
	:description:
		Perl Compatible Regular Expressions (PCRE): PCRE is the library that supports regular expressions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Perl Compatible Regular Expressions (PCRE)
	:twitter:description: Perl Compatible Regular Expressions (PCRE): PCRE is the library that supports regular expressions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Perl Compatible Regular Expressions (PCRE)
	:og:type: article
	:og:description: PCRE is the library that supports regular expressions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pcre.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pcre.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pcre.ini.html","name":"Perl Compatible Regular Expressions (PCRE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:16:54 +0000","dateModified":"Tue, 04 Aug 2026 11:16:54 +0000","description":"PCRE is the library that supports regular expressions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Perl Compatible Regular Expressions (PCRE).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Perl Compatible Regular Expressions (PCRE)
------------------------------------------

PCRE is the library that supports regular expressions. It offers functions to search and replace in strings, and arrays of strings.

PHP exposes PCRE through the ``preg_*`` family of functions: ``preg_match()`` and ``preg_match_all()`` search for a pattern, ``preg_replace()`` and ``preg_replace_callback()`` substitute matches, ``preg_split()`` breaks a string apart using a pattern as the delimiter, and ``preg_quote()`` escapes special characters in user-supplied strings so they can be safely embedded in a pattern. Patterns are written as delimited strings, most commonly with ``/`` as the delimiter, and support modifiers such as ``i`` for case-insensitive matching or ``m`` for multiline mode.

PCRE patterns are considerably more expressive than the simpler POSIX regular expressions PHP used to support, via the now-removed ``ereg`` functions, offering features like lookahead and lookbehind assertions, named capture groups, and non-greedy quantifiers. Because complex patterns can be slow or, in pathological cases, exhibit catastrophic backtracking, patterns built from untrusted input deserve particular care.

.. code-block:: php
   
   <?php
   
       preg_match('/PHP is (.*?)\./', 'PHP is fantastic.', $r);
   
       print $r[1]; // fantastic
   
   ?>


`Documentation <https://www.php.net/manual/en/book.pcre.php>`__

See also `PCRE - Perl Compatible Regular Expressions <https://www.pcre.org/>`_.

Related : :ref:`Regular Expression <regex>`
