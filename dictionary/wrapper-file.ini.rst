.. _wrapper-file:
.. meta::
	:description:
		file://: The ``file://`` wrapper is a native PHP wrapper, to access files on a local files, on the host system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: file://
	:twitter:description: file://: The ``file://`` wrapper is a native PHP wrapper, to access files on a local files, on the host system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: file://
	:og:type: article
	:og:description: The ``file://`` wrapper is a native PHP wrapper, to access files on a local files, on the host system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/wrapper-file.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"file:\/\/","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:26:49 +0000","dateModified":"Sun, 25 Jan 2026 20:26:49 +0000","description":"The ``file:\/\/`` wrapper is a native PHP wrapper, to access files on a local files, on the host system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/file:\/\/.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


file://
-------

The ``file://`` wrapper is a native PHP wrapper, to access files on a local files, on the host system.

It may also be omitted, as the default behavior is to read files on the local system.

.. code-block:: php
   
   <?php
   
   // display the content of a file
   // 3 / : two for protocol, one for path
   print_r(file_get_content('file:///tmp/file.txt');
   
   // also possible
   print_r(file_get_content('/tmp/file.txt');
   
   ?>


`Documentation <https://www.php.net/manual/en/wrappers.file.php>`__

Related : :ref:`Wrapper <wrapper>`, :ref:`PHP Wrappers <php-wrapper>`
