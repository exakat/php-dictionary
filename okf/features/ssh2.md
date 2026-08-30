---
type: "extension"
title: "SSH2"
description: "``ssh2`` is a PIE extension, built on ``libssh2``, that provides functions to open SSH connections from PHP and use them to execute remote commands, transfer files over ``SFTP`` or ``SCP``, forward ports, and manage host authentication."
resource: "https://www.php.net/manual/en/book.ssh2.php"
tags: ["extension", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# SSH2

``ssh2`` is a PIE extension, built on ``libssh2``, that provides functions to open SSH connections from PHP and use them to execute remote commands, transfer files over ``SFTP`` or ``SCP``, forward ports, and manage host authentication.

A connection is opened with ``ssh2_connect()``, then authenticated with one of several methods: password, public key, or keyboard-interactive, via ``ssh2_auth_password()`` or ``ssh2_auth_pubkey_file()``. Once authenticated, the extension exposes a stream for running remote shell commands with ``ssh2_exec()``, and separate stream wrappers for SFTP file operations through ``ssh2_sftp()``.

The extension has historically had inconsistent packaging across distributions and PHP versions, which pushed many projects toward the pure-PHP ``phpseclib`` library instead, since it requires no compiled extension and works identically across environments.

```php
<?php

    $connection = ssh2_connect('example.com', 22);
    ssh2_auth_pubkey_file(
        $connection,
        'user',
        '/home/user/.ssh/id_rsa.pub',
        '/home/user/.ssh/id_rsa'
    );

    $stream = ssh2_exec($connection, 'uptime');
    stream_set_blocking($stream, true);
    echo stream_get_contents($stream);

    $sftp = ssh2_sftp($connection);
    $remote = fopen('ssh2.sftp://' . $sftp . '/remote/path/file.txt', 'r');

?>
```

## Documentation
- [https://www.php.net/manual/en/book.ssh2.php](https://www.php.net/manual/en/book.ssh2.php)

## See Also
- [phpseclib, a pure-PHP alternative](https://phpseclib.com/)
- [libssh2](https://libssh2.org/)

## Related
- [File Transfer Protocol (FTP)](/features/ftp.md)
- [Socket](/features/socket.md)
- [OpenSSL](/features/openssl.md)

## Details
- Packagist: [phpseclib/phpseclib](https://packagist.org/packages/phpseclib/phpseclib)
- Extension: ext-ssh2

