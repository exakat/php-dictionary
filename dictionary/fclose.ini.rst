.. _fclose:
.. meta::
	:description:
		fclose(): ``fclose()`` is a PHP native function that closes an open file pointer, previously created with ``fopen()``, ``fsockopen()``, or similar functions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: fclose()
	:twitter:description: fclose(): ``fclose()`` is a PHP native function that closes an open file pointer, previously created with ``fopen()``, ``fsockopen()``, or similar functions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: fclose()
	:og:type: article
	:og:description: ``fclose()`` is a PHP native function that closes an open file pointer, previously created with ``fopen()``, ``fsockopen()``, or similar functions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fclose.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fclose.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fclose.ini.html","name":"fclose()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 20:09:24 +0000","dateModified":"Wed, 15 Jul 2026 20:09:24 +0000","description":"``fclose()`` is a PHP native function that closes an open file pointer, previously created with ``fopen()``, ``fsockopen()``, or similar functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fclose().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


fclose()
--------

``fclose()`` is a PHP native function that closes an open file pointer, previously created with ``fopen()``, ``fsockopen()``, or similar functions. It returns ``true`` on success, ``false`` on failure.

Closing a stream releases the underlying resource, file descriptor, socket, back to the operating system. Forgetting to call ``fclose()`` leads to a resource leak: on long-running processes, such as CLI scripts, workers or daemons, this can exhaust the number of file descriptors available to the process.

In most short-lived web requests, PHP automatically closes any remaining open handles at the end of the script, but explicit ``fclose()`` calls remain good practice, and are mandatory as soon as many files are opened in a loop, or the process runs indefinitely.

.. code-block:: php
   
   <?php
   
       $fp = fopen('data.txt', 'r');
       if ($fp) {
           $content = fread($fp, filesize('data.txt'));
           fclose($fp);
           echo $content;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.fclose.php>`__

See also `Filesystem functions <https://www.php.net/manual/en/ref.filesystem.php>`_.

Related : :ref:`fopen() <fopen>`, :ref:`fread() <fread>`, :ref:`fwrite() <fwrite>`, :ref:`fgets() <fgets>`, :ref:`fgetc() <fgetc>`, :ref:`ftell() <ftell>`, :ref:`rewind() <rewind>`, :ref:`Resource Leak <resource-leak>`, :ref:`Stream <stream>`, :ref:`File <file>`
