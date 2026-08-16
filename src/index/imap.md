# IMAP
``IMAP``, for Internet Message Access Protocol, is a PHP extension that provides functions to connect to mail servers over IMAP, POP3, and NNTP, list and search mailboxes, fetch message headers and bodies, and manage flags such as read, deleted, or flagged.

The extension is built on the c-client library. A connection is opened with ``imap_open()`` against a mailbox specification that includes the server, port, and protocol, for example ``{imap.example.com:993/imap/ssl}INBOX``. Once connected, functions such as ``imap_search()``, ``imap_fetchbody()``, and ``imap_headerinfo()`` are used to read mail, while ``imap_mail_move()`` and ``imap_delete()`` manage messages.

The IMAP extension has been removed from the PHP core distribution as of PHP 8.4 and moved to PECL, reflecting both its declining use, most projects now talk to mail providers over an HTTP API, and the fact that the underlying c-client library is largely unmaintained. Projects that still need IMAP access on PHP 8.4+ must install the PECL package explicitly or switch to a pure-PHP IMAP client library.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imap.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/imap.html","name":"IMAP","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 15:03:56 +0000","dateModified":"Wed, 05 Aug 2026 15:03:56 +0000","description":"IMAP, for Internet Message Access Protocol, is a PHP extension that provides functions to connect to mail servers over IMAP, POP3, and NNTP, list and search mailboxes, fetch message headers and bodies, and manage flags such as read, deleted, or flagged","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/IMAP.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"imap"}]}]}</script>
```php
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
```

**[Documentation](https://www.php.net/manual/en/book.imap.php)**
## See Also

+ [IMAP moved to PECL in PHP 8.4](https://www.php.net/manual/en/migration84.deprecated.php)

## Related

+ [Client URL (CURL)](curl.html)
+ [File Transfer Protocol (FTP)](ftp.html)
+ [Socket](socket.html)

## Related packages

+ [webklex/php-imap](https://packagist.org/packages/webklex/php-imap)
