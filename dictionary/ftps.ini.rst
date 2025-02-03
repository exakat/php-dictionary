.. _ftps:
.. meta::
	:description:
		File Transfert Protocol Secure (FTPS): FTPS stands for File Transfert Protocol Secure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: File Transfert Protocol Secure (FTPS)
	:twitter:description: File Transfert Protocol Secure (FTPS): FTPS stands for File Transfert Protocol Secure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: File Transfert Protocol Secure (FTPS)
	:og:type: article
	:og:description: FTPS stands for File Transfert Protocol Secure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ftps.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"File Transfert Protocol Secure (FTPS)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"FTPS stands for File Transfert Protocol Secure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/File Transfert Protocol Secure (FTPS).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


File Transfert Protocol Secure (FTPS)
-------------------------------------

FTPS stands for File Transfert Protocol Secure. It is a protocol to transfert files between servers, over a secure connexion. 

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
