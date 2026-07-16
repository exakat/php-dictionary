.. _fread:
.. meta::
	:description:
		fread(): ``fread()`` is a PHP native function that reads up to ``length`` bytes from the file pointer referenced by ``stream``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: fread()
	:twitter:description: fread(): ``fread()`` is a PHP native function that reads up to ``length`` bytes from the file pointer referenced by ``stream``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: fread()
	:og:type: article
	:og:description: ``fread()`` is a PHP native function that reads up to ``length`` bytes from the file pointer referenced by ``stream``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fread.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fread.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fread.ini.html","name":"fread()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 13:52:13 +0000","dateModified":"Wed, 15 Jul 2026 13:52:13 +0000","description":"``fread()`` is a PHP native function that reads up to ``length`` bytes from the file pointer referenced by ``stream``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fread().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


fread()
-------

``fread()`` is a PHP native function that reads up to ``length`` bytes from the file pointer referenced by ``stream``. It is one of the fundamental file reading functions.

Key characteristics:

+ Returns a string of up to ``length`` bytes, or ``false`` on failure
+ Reads binary-safe data, making it suitable for both text and binary files
+ Stops reading when EOF, end of file, is reached or the specified length is reached
+ For character encodings like UTF-8, reading by byte length may split multi-byte characters; consider using ``fgetc()`` or ``fgets()`` for text files

``fread()`` is typically used after ``fopen()`` and should be paired with ``fclose()`` to free resources. For reading entire files at once, ``file_get_contents()`` is more convenient. For line-by-line reading, ``fgets()`` is preferred.

.. code-block:: php
   
   <?php
   
       $fp = fopen('data.txt', 'r');
       if ($fp) {
           // Read first 100 bytes
           $content = fread($fp, 100);
           echo $content;
   
           // Read remaining content
           $remaining = fread($fp, filesize('data.txt') - 100);
           echo $remaining;
   
           fclose($fp);
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.fread.php>`__

See also `Filesystem functions <https://www.php.net/manual/en/ref.filesystem.php>`_.

Related : :ref:`fopen() <fopen>`, :ref:`fgets() <fgets>`, :ref:`fgetc() <fgetc>`, :ref:`file_get_contents() <file_get_contents>`, :ref:`File <file>`, :ref:`Stream <stream>`, :ref:`fclose() <fclose>`, :ref:`fwrite() <fwrite>`, :ref:`fseek() <fseek>`, :ref:`ftell() <ftell>`, :ref:`rewind() <rewind>`, :ref:`Readable <readable>`, :ref:`Binary <binary>`, :ref:`Resource Leak <resource-leak>`
