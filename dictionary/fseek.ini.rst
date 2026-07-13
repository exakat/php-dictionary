.. _fseek:
.. meta::
	:description:
		fseek(): ``fseek()`` is a native PHP function that sets the file position indicator for a file pointer.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: fseek()
	:twitter:description: fseek(): ``fseek()`` is a native PHP function that sets the file position indicator for a file pointer
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: fseek()
	:og:type: article
	:og:description: ``fseek()`` is a native PHP function that sets the file position indicator for a file pointer
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fseek.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"fseek()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:12:58 +0000","dateModified":"Sun, 12 Jul 2026 20:12:58 +0000","description":"``fseek()`` is a native PHP function that sets the file position indicator for a file pointer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/fseek().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


fseek()
-------

``fseek()`` is a native PHP function that sets the file position indicator for a file pointer.

It moves the file pointer to a specified position, allowing random access to file content. This is useful for reading or writing specific parts of a file without processing the entire file.

.. code-block:: php
   
   <?php
   
       $fp = fopen('/tmp/test.txt', 'r');
       
       // Skip first 10 bytes
       fseek($fp, 10);
       
       // Move to end of file
       fseek($fp, 0, SEEK_END);
       
       // Move back 5 bytes from current position
       fseek($fp, -5, SEEK_CUR);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.fseek.php>`__

Related : :ref:`File <file>`, :ref:`fopen() <fopen>`, , :ref:`rewind() <rewind>`, :ref:`File Mode <file-mode>`
