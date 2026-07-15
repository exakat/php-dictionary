.. _imap:
.. meta::
	:description:
		IMAP: ``IMAP``, for Internet Message Access Protocol, is a PHP extension that provides functions to connect to mail servers over IMAP, POP3, and NNTP, list and search mailboxes, fetch message headers and bodies, and manage flags such as read, deleted, or flagged.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: IMAP
	:twitter:description: IMAP: ``IMAP``, for Internet Message Access Protocol, is a PHP extension that provides functions to connect to mail servers over IMAP, POP3, and NNTP, list and search mailboxes, fetch message headers and bodies, and manage flags such as read, deleted, or flagged
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: IMAP
	:og:type: article
	:og:description: ``IMAP``, for Internet Message Access Protocol, is a PHP extension that provides functions to connect to mail servers over IMAP, POP3, and NNTP, list and search mailboxes, fetch message headers and bodies, and manage flags such as read, deleted, or flagged
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/imap.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/imap.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/imap.ini.html","name":"IMAP","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:30:47 +0000","dateModified":"Sat, 11 Jul 2026 09:30:47 +0000","description":"``IMAP``, for Internet Message Access Protocol, is a PHP extension that provides functions to connect to mail servers over IMAP, POP3, and NNTP, list and search mailboxes, fetch message headers and bodies, and manage flags such as read, deleted, or flagged","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/IMAP.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


IMAP
----

``IMAP``, for Internet Message Access Protocol, is a PHP extension that provides functions to connect to mail servers over IMAP, POP3, and NNTP, list and search mailboxes, fetch message headers and bodies, and manage flags such as read, deleted, or flagged.

The extension is built on the c-client library. A connection is opened with ``imap_open()`` against a mailbox specification that includes the server, port, and protocol, for example ``{imap.example.com:993/imap/ssl}INBOX``. Once connected, functions such as ``imap_search()``, ``imap_fetchbody()``, and ``imap_headerinfo()`` are used to read mail, while ``imap_mail_move()`` and ``imap_delete()`` manage messages.

The IMAP extension has been removed from the PHP core distribution as of PHP 8.4 and moved to PECL, reflecting both its declining use, most projects now talk to mail providers over an HTTP API, and the fact that the underlying c-client library is largely unmaintained. Projects that still need IMAP access on PHP 8.4+ must install the PECL package explicitly or switch to a pure-PHP IMAP client library.

.. code-block:: php
   
   <?php
   
       $mailbox = '{imap.example.com:993/imap/ssl}INBOX';
       $inbox = imap_open($mailbox, 'user@example.com', 'password');
   
       $emails = imap_search($inbox, 'UNSEEN');
       if ($emails) {
           foreach ($emails as $id) {
               $header = imap_headerinfo($inbox, $id);
               echo $header->subject . PHP_EOL;
           }
       }
   
       imap_close($inbox);
   
   ?>


`Documentation <https://www.php.net/manual/en/book.imap.php>`__

See also `IMAP moved to PECL in PHP 8.4 <https://www.php.net/manual/en/migration84.deprecated.php>`_.

Related : :ref:`Client URL (CURL) <curl>`, :ref:`File Transfer Protocol (FTP) <ftp>`, :ref:`Socket <socket>`

Related packages : `webklex/php-imap <https://packagist.org/packages/webklex/php-imap>`_
