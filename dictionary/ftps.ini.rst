.. _ftps:
.. meta::
	:description:
		File Transfer Protocol Secure (FTPS): FTPS stands for File Transfer Protocol Secure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: File Transfer Protocol Secure (FTPS)
	:twitter:description: File Transfer Protocol Secure (FTPS): FTPS stands for File Transfer Protocol Secure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: File Transfer Protocol Secure (FTPS)
	:og:type: article
	:og:description: FTPS stands for File Transfer Protocol Secure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ftps.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"File Transfer Protocol Secure (FTPS)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 13:49:04 +0000","dateModified":"Mon, 26 Jan 2026 13:49:04 +0000","description":"FTPS stands for File Transfer Protocol Secure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/File Transfer Protocol Secure (FTPS).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


File Transfer Protocol Secure (FTPS)
------------------------------------

FTPS stands for File Transfer Protocol Secure. It is a protocol to transfer files between servers, over a secure connection. 

PHP supports FTP and FTPS, through the ext/ftp extension, the ext/curl extension and the internal wrappers.

.. code-block:: php
   
   <?php
       $ftp = ftp_connect($ftpAddress); 
       
       $upload = ftp_put($ftp, $destinationPath, $sourceFile, FTP_BINARY); 
       
       if (!$upload) { 
           echo "FTPS upload has failed!";
       } else {
           echo "Uploaded $source_file to $ftp_server as $destination_file";
       }
       
       ftp_close($ftp);
   ?>


`Documentation <https://www.php.net/manual/en/book.ftp.php>`__

See also https://datatracker.ietf.org/doc/html/rfc959

Related : :ref:`Wrapper <wrapper>`, :ref:`File Transfert Protocol (FTP) <ftp>`
