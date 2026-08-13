# SSH2
``ssh2`` is a PIE extension, built on libssh2, that provides functions to open SSH connections from PHP and use them to execute remote commands, transfer files over SFTP or SCP, forward ports, and manage host authentication.

A connection is opened with ``ssh2_connect()``, then authenticated with one of several methods: password, public key, or keyboard-interactive, via ``ssh2_auth_password()`` or ``ssh2_auth_pubkey_file()``. Once authenticated, the extension exposes a stream for running remote shell commands with ``ssh2_exec()``, and separate stream wrappers for SFTP file operations through ``ssh2_sftp()``.

The extension has historically had inconsistent packaging across distributions and PHP versions, which pushed many projects toward the pure-PHP ``phpseclib`` library instead, since it requires no compiled extension and works identically across environments.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssh2.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssh2.html","name":"SSH2","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:03:13 +0000","dateModified":"Mon, 13 Jul 2026 08:03:13 +0000","description":"ssh2 is a PIE extension, built on libssh2, that provides functions to open SSH connections from PHP and use them to execute remote commands, transfer files over SFTP or SCP, forward ports, and manage host authentication","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SSH2.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ssh2"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/book.ssh2.php)**
## See Also

+ [phpseclib, a pure-PHP alternative](https://phpseclib.com/)

## Related

+ [File Transfer Protocol (FTP)](ftp.html)
+ [Socket](socket.html)
+ [OpenSSL](openssl.html)

## Related packages

+ [phpseclib/phpseclib](https://packagist.org/packages/phpseclib/phpseclib)
