.. _zip:
.. meta::
	:description:
		zip Extension: The zip extension provides functions to handle the zip compression format: read, write and access arbitrary part of files.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: zip Extension
	:twitter:description: zip Extension: The zip extension provides functions to handle the zip compression format: read, write and access arbitrary part of files
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: zip Extension
	:og:type: article
	:og:description: The zip extension provides functions to handle the zip compression format: read, write and access arbitrary part of files
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/zip.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"zip Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 20:59:42 +0000","dateModified":"Wed, 18 Feb 2026 20:59:42 +0000","description":"The zip extension provides functions to handle the zip compression format: read, write and access arbitrary part of files","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/zip Extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


zip Extension
-------------

The zip extension provides functions to handle the zip compression format: read, write and access arbitrary part of files. It also provides a compression format for the output of PHP.

The functions, defined by this extension, are deprecated, and shall be removed in PHP 9. It is recommended to use the OOP API, and its ``ZipArchive`` class.

.. code-block:: php
   
   <?php
   
       // Example from the PHP manual 
       // https://www.php.net/manual/en/zip.examples.php
       
       $zip = new ZipArchive();
       $filename = "./test112.zip";
       
       if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
           exit("cannot open <$filename>\n");
       }
       
       $zip->addFromString("testfilephp.txt" . time(), "#1 This is a test string added as testfilephp.txt.\n");
       $zip->addFromString("testfilephp2.txt" . time(), "#2 This is a test string added as testfilephp2.txt.\n");
       $zip->addFile($thisdir . "/too.php","/testfromfile.php");
       echo "numfiles: " . $zip->numFiles . "\n";
       echo "status:" . $zip->status . "\n";
       $zip->close();
   
   ?>


`Documentation <https://www.php.net/manual/en/book.zip.php>`__

Related : :ref:`zlib extension <zlib>`, :ref:`bzip2 Extension <bzip2>`
