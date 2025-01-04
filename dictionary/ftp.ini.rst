.. _ftp:
.. meta::
	:description:
		File Transfert Protocol (FTP): FTP stands for File Transfert Protocol.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: File Transfert Protocol (FTP)
	:twitter:description: File Transfert Protocol (FTP): FTP stands for File Transfert Protocol
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: File Transfert Protocol (FTP)
	:og:type: article
	:og:description: FTP stands for File Transfert Protocol
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ftp.ini.html
	:og:locale: en


File Transfert Protocol (FTP)
-----------------------------

FTP stands for File Transfert Protocol. It is a protocol to transfert files between servers. 

PHP supports FTP and FTPS, through the ext/ftp extension, the ext/curl extension and the internal wrappers.


.. code-block:: php
   
   <?php
       $ftp = ftp_connect($ftpAddress); 
       
       $upload = ftp_put($ftp, $destinationPath, $sourceFile, FTP_BINARY); 
       
       if (!$upload) { 
           echo "FTP upload has failed!";
       } else {
           echo "Uploaded $source_file to $ftp_server as $destination_file";
       }
       
       ftp_close($ftp);
   ?>


`Documentation <https://www.php.net/manual/en/book.ftp.php>`__

See also https://datatracker.ietf.org/doc/html/rfc959

Related : :ref:`Wrapper <wrapper>`, :ref:`File Transfert Protocol Secure (FTPS) <ftps>`
