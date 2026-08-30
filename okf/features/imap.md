---
type: "extension"
title: "IMAP"
description: "``IMAP``, for Internet Message Access Protocol, is a PHP extension that provides functions to connect to mail servers over IMAP, POP3, and NNTP, list and search mailboxes, fetch message headers and bodies, and manage flags such as read, deleted, or flagged."
resource: "https://www.php.net/manual/en/book.imap.php"
tags: ["extension", "acronym", "deprecated"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# IMAP

``IMAP``, for Internet Message Access Protocol, is a PHP extension that provides functions to connect to mail servers over IMAP, POP3, and NNTP, list and search mailboxes, fetch message headers and bodies, and manage flags such as read, deleted, or flagged.

The extension is built on the c-client library. A connection is opened with ``imap_open()`` against a mailbox specification that includes the server, port, and protocol, for example ``{imap.example.com:993/imap/ssl}INBOX``. Once connected, functions such as ``imap_search()``, ``imap_fetchbody()``, and ``imap_headerinfo()`` are used to read mail, while ``imap_mail_move()`` and ``imap_delete()`` manage messages.

The IMAP extension has been removed from the PHP core distribution as of PHP 8.4 and moved to PECL, reflecting both its declining use, most projects now talk to mail providers over an HTTP API, and the fact that the underlying c-client library is largely unmaintained. Projects that still need IMAP access on PHP 8.4+ must install the PECL package explicitly or switch to a pure-PHP IMAP client library.

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

## Documentation
- [https://www.php.net/manual/en/book.imap.php](https://www.php.net/manual/en/book.imap.php)

## See Also
- [IMAP moved to PECL in PHP 8.4](https://www.php.net/manual/en/migration84.deprecated.php)

## Related
- [Client URL (CURL)](/features/curl.md)
- [File Transfer Protocol (FTP)](/features/ftp.md)
- [Socket](/features/socket.md)

## Details
- Deprecated: 8.4
- Packagist: [webklex/php-imap](https://packagist.org/packages/webklex/php-imap)
- Extension: ext-imap

