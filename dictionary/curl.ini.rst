.. _curl:
.. meta::
	:description:
		Curl: Curl is both a PHP extension and a multiprotocol file transfer library.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Curl
	:twitter:description: Curl: Curl is both a PHP extension and a multiprotocol file transfer library
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Curl
	:og:type: article
	:og:description: Curl is both a PHP extension and a multiprotocol file transfer library
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/curl.ini.html
	:og:locale: en


Curl
----

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

See also `curl.se <https://curl.se/>`_, `How to use cURL in PHP <https://dev.to/serpapi/how-to-use-curl-in-php-2aga>`_

Related : :ref:`Webscraping <webscraping>`

Related packages : `symfony/panther <https://packagist.org/packages/symfony/panther>`_, `roach-php/core <https://packagist.org/packages/roach-php/core>`_
