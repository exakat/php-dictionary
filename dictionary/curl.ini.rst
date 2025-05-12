.. _curl:
.. meta::
	:description:
		Client URL (CURL): Curl is both a PHP extension and a multiprotocol file transfer library.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Client URL (CURL)
	:twitter:description: Client URL (CURL): Curl is both a PHP extension and a multiprotocol file transfer library
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Client URL (CURL)
	:og:type: article
	:og:description: Curl is both a PHP extension and a multiprotocol file transfer library
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/curl.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Client URL (CURL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 05 May 2025 11:21:19 +0000","dateModified":"Mon, 05 May 2025 11:21:19 +0000","description":"Curl is both a PHP extension and a multiprotocol file transfer library","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Client URL (CURL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Client URL (CURL)
-----------------

Curl is both a PHP extension and a multiprotocol file transfer library. 

The cURL (Client URL) extension is a powerful library that allows to transfer data to and from servers using various protocols. It enables to make HTTP requests, handle responses, and perform various network-related tasks from within PHP code.

The cURL extension provides a set of functions that can be used to perform different tasks, such as making GET and POST requests, sending custom headers, handling cookies, and more. 

cURL is used to access remote resources, using various protocols such as DICT, FILE, FTP, FTPS, GOPHER, GOPHERS, HTTP, HTTPS, IMAP, IMAPS, LDAP, LDAPS, MQTT, POP3, POP3S, RTMP, RTMPS, RTSP, SCP, SFTP, SMB, SMBS, SMTP, SMTPS, TELNET and TFTP. 

.. code-block:: php
   
   <?php
   
   // Example from the PHP manual
   $ch = curl_init("http://www.example.com/");
   $fp = fopen("example_homepage.txt", "w");
   
   curl_setopt($ch, CURLOPT_FILE, $fp);
   curl_setopt($ch, CURLOPT_HEADER, 0);
   
   curl_exec($ch);
   if(curl_error($ch)) {
       fwrite($fp, curl_error($ch));
   }
   curl_close($ch);
   fclose($fp);
   ?>


`Documentation <https://www.php.net/manual/en/book.curl.php>`__

See also `curl.se <https://curl.se/>`_, `How to use cURL in PHP <https://dev.to/serpapi/how-to-use-curl-in-php-2aga>`_, `Batch curl requests in PHP using multi handles <https://dev.to/danrot90/batch-curl-requests-in-php-using-multi-handles-3jg6>`_

Related : :ref:`Webscraping <webscraping>`

Related packages : `symfony/panther <https://packagist.org/packages/symfony/panther>`_, `roach-php/core <https://packagist.org/packages/roach-php/core>`_
