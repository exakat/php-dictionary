.. _fgetc:
.. meta::
	:description:
		fgetc(): ``fgetc()`` is a PHP native function that reads a single character from an open file pointer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: fgetc()
	:twitter:description: fgetc(): ``fgetc()`` is a PHP native function that reads a single character from an open file pointer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: fgetc()
	:og:type: article
	:og:description: ``fgetc()`` is a PHP native function that reads a single character from an open file pointer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fgetc.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fgetc.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fgetc.ini.html","name":"fgetc()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 20:09:34 +0000","dateModified":"Wed, 15 Jul 2026 20:09:34 +0000","description":"``fgetc()`` is a PHP native function that reads a single character from an open file pointer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fgetc().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


fgetc()
-------

``fgetc()`` is a PHP native function that reads a single character from an open file pointer. It returns a string containing one byte, or ``false`` when the end of the file, EOF, is reached.

Key characteristics:

+ Reads exactly one byte per call, making it the slowest way to read a file, but the finest-grained
+ Returns ``false`` on EOF, which must be checked with ``===`` since ``"0"`` or an empty string are otherwise valid, falsy-looking results
+ Binary-safe, like the other stream functions

``fgetc()`` is typically used to build custom character-by-character parsers, for instance for CSV-like formats with unusual quoting rules, or for reading protocols where the message boundary is not a newline. For line-based reading, ``fgets()`` is far more efficient; for reading arbitrary chunks, ``fread()`` is preferred.

.. code-block:: php
   
   <?php
   
       $fp = fopen('data.txt', 'r');
       if ($fp) {
           while (($char = fgetc($fp)) !== false) {
               echo $char;
           }
           fclose($fp);
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.fgetc.php>`__

See also `Filesystem functions <https://www.php.net/manual/en/ref.filesystem.php>`_.

Related : :ref:`fgets() <fgets>`, :ref:`fread() <fread>`, :ref:`fopen() <fopen>`, :ref:`fclose() <fclose>`, :ref:`Stream <stream>`, :ref:`File <file>`, :ref:`Binary <binary>`
