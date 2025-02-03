.. _file-extension:
.. meta::
	:description:
		File Extension: File extensions are the suffixes at the end of file names that indicate the type or format of the file.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: File Extension
	:twitter:description: File Extension: File extensions are the suffixes at the end of file names that indicate the type or format of the file
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: File Extension
	:og:type: article
	:og:description: File extensions are the suffixes at the end of file names that indicate the type or format of the file
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/file-extension.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"File Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 28 Jan 2025 15:14:39 +0000","dateModified":"Tue, 28 Jan 2025 15:14:39 +0000","description":"File extensions are the suffixes at the end of file names that indicate the type or format of the file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/File Extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


File Extension
--------------

File extensions are the suffixes at the end of file names that indicate the type or format of the file. They typically come after a period ``.`` in the file name. 

File extensions help PHP recognize the file type and determine which program should be used to open it. They should not be used as security feature, but rather has a hint of the content.

.. code-block:: php
   
   <?php
   
   $files = glob(directory/*.ini);
   
   foreach($files as $file) {
       // displays the file name, without the file extension
       print basename($file, '.ini').PHP_EOL;
   }
   
   ?>


Related : :ref:`File <file>`
