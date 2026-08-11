# Secure Shell (SSH)
SSH, acronym of Secure Shell, is a cryptographic network protocol for operating network services securely over an unsecured network. It is most commonly used for remote login and command-line execution.

PHP provides the ``ssh2`` extension to connect to SSH servers, execute commands, transfer files via SCP or SFTP, and create tunnels. For environments without the native extension, the ``phpseclib`` library offers a pure PHP alternative.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssh.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssh.html","name":"Secure Shell (SSH)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:19:39 +0000","dateModified":"Sat, 11 Jul 2026 14:19:39 +0000","description":"SSH, acronym of Secure Shell, is a cryptographic network protocol for operating network services securely over an unsecured network","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Secure Shell (SSH).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ssh"}]}]}</script>
```php
<?php

// Connect to SSH server
$connection = ssh2_connect('ssh.example.com', 22);
if (!$connection) {
    die('Could not connect to server.');
}

// Authenticate with password
if (!ssh2_auth_password($connection, 'username', 'secret')) {
    die('Authentication failed.');
}

// Execute a remote command
$stream = ssh2_exec($connection, 'ls -la /var/www');
stream_set_blocking($stream, true);
echo stream_get_contents($stream);

// Transfer a file via SCP
ssh2_scp_send($connection, '/local/path/file.txt', '/remote/path/file.txt', 0644);

// Open an SFTP subsystem
$sftp = ssh2_sftp($connection);
file_put_contents('ssh2.sftp://' . intval($sftp) . '/remote/path/file.txt', 'content');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Secure_Shell)**
## See Also

+ [PHP: SSH2 extension](https://www.php.net/manual/en/book.ssh2.php)
+ [phpseclib, a pure-PHP alternative](https://phpseclib.com/)
+ [SSH Academy: SSH Protocol](https://www.ssh.com/academy/ssh/protocol)

## Related

+ [Server](server.html)
+ [Port](port.html)
+ [shell\_exec()](shell_exec.html)
+ [Lightweight Directory Access Protocol (LDAP)](ldap.html)
+ [Task Runner](task-runner.html)

## Related packages

+ [phpseclib/phpseclib](https://packagist.org/packages/phpseclib/phpseclib)
