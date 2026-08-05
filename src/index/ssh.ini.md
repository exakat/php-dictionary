# Secure Shell (SSH)
SSH, acronym of Secure Shell, is a cryptographic network protocol for operating network services securely over an unsecured network. It is most commonly used for remote login and command-line execution.

PHP provides the ``ssh2`` extension to connect to SSH servers, execute commands, transfer files via SCP or SFTP, and create tunnels. For environments without the native extension, the ``phpseclib`` library offers a pure PHP alternative.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ssh.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ssh.ini.html","name":"Secure Shell (SSH)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:19:39 +0000","dateModified":"Sat, 11 Jul 2026 14:19:39 +0000","description":"SSH, acronym of Secure Shell, is a cryptographic network protocol for operating network services securely over an unsecured network","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Secure Shell (SSH).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Server](server.ini.html)
+ [Port](port.ini.html)
+ [shell\_exec()](shell_exec.ini.html)
+ [Lightweight Directory Access Protocol (LDAP)](ldap.ini.html)
+ [Task Runner](task-runner.ini.html)

## Related packages

+ [phpseclib/phpseclib](https://packagist.org/packages/phpseclib/phpseclib)
