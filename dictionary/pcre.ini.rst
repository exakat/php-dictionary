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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pcre.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pcre.ini.html","name":"Perl Compatible Regular Expressions (PCRE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:20:28 +0000","dateModified":"Thu, 02 Jul 2026 08:20:28 +0000","description":"PCRE is the library that supports regular expressions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Perl Compatible Regular Expressions (PCRE).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Perl Compatible Regular Expressions (PCRE)
------------------------------------------

PCRE is the library that supports regular expressions. It offers functions to search and replace in strings, and arrays of strings.

.. code-block:: php
   
   <?php
   
       preg_match('/PHP is (.*?)\./', 'PHP is fantastic.', $r);
   
       print $r[1]; // fantastic
   
   ?>


`Documentation <https://www.php.net/manual/en/book.pcre.php>`__

See also `PCRE - Perl Compatible Regular Expressions <https://www.pcre.org/>`_.

Related : :ref:`Regular Expression <regex>`
