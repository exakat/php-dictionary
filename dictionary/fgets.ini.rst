.. _fgets:
.. meta::
	:description:
		fgets(): ``fgets()`` is a PHP native function that reads a single line from an open file pointer, up to and including the next newline character, or until an optional ``length`` limit of bytes is reached.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: fgets()
	:twitter:description: fgets(): ``fgets()`` is a PHP native function that reads a single line from an open file pointer, up to and including the next newline character, or until an optional ``length`` limit of bytes is reached
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: fgets()
	:og:type: article
	:og:description: ``fgets()`` is a PHP native function that reads a single line from an open file pointer, up to and including the next newline character, or until an optional ``length`` limit of bytes is reached
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fgets.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fgets.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fgets.ini.html","name":"fgets()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 20:09:43 +0000","dateModified":"Wed, 15 Jul 2026 20:09:43 +0000","description":"``fgets()`` is a PHP native function that reads a single line from an open file pointer, up to and including the next newline character, or until an optional ``length`` limit of bytes is reached","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fgets().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


fgets()
-------

``fgets()`` is a PHP native function that reads a single line from an open file pointer, up to and including the next newline character, or until an optional ``length`` limit of bytes is reached. It returns the line as a string, or ``false`` when the end of file, EOF, is reached.

Key characteristics:

+ Stops at the first ``\n`` found, or after ``length - 1`` bytes if a length is provided
+ The trailing newline is kept in the returned string, and often needs to be trimmed with ``rtrim()`` or ``trim()``
+ Binary-safe

``fgets()`` is the standard way to process a text file line by line, for instance log files or CSV files, without loading the whole file into memory, unlike ``file()`` or ``file_get_contents()``. It is commonly combined with ``feof()`` to detect the end of the stream.

.. code-block:: php
   
   <?php
   
       $fp = fopen('access.log', 'r');
       if ($fp) {
           while (($line = fgets($fp)) !== false) {
               echo trim($line) . PHP_EOL;
           }
           fclose($fp);
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.fgets.php>`__

See also `Filesystem functions <https://www.php.net/manual/en/ref.filesystem.php>`_.

Related : :ref:`fgetc() <fgetc>`, :ref:`fread() <fread>`, , :ref:`fopen() <fopen>`, :ref:`fclose() <fclose>`, :ref:`File <file>`, :ref:`Stream <stream>`, :ref:`Comma Secparated Values (CSV) <csv>`
