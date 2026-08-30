---
type: "PHP Feature"
title: "Secure Shell (SSH)"
description: "SSH, acronym of Secure Shell, is a cryptographic network protocol for operating network services securely over an unsecured network."
resource: "https://en.wikipedia.org/wiki/Secure_Shell"
tags: ["protocol", "server", "network", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Secure Shell (SSH)

SSH, acronym of Secure Shell, is a cryptographic network protocol for operating network services securely over an unsecured network. It is most commonly used for remote login and command-line execution.

PHP provides the ``ssh2`` extension to connect to SSH servers, execute commands, transfer files via SCP or SFTP, and create tunnels. For environments without the native extension, the ``phpseclib`` library offers a pure PHP alternative.

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

## Documentation
- [https://en.wikipedia.org/wiki/Secure_Shell](https://en.wikipedia.org/wiki/Secure_Shell)

## See Also
- [PHP: SSH2 extension](https://www.php.net/manual/en/book.ssh2.php)
- [phpseclib, a pure-PHP alternative](https://phpseclib.com/)
- [SSH Academy: SSH Protocol](https://www.ssh.com/academy/ssh/protocol)

## Related
- [Server](/features/server.md)
- [Port](/features/port.md)
- [shell_exec()](/features/shell_exec.md)
- [Lightweight Directory Access Protocol (LDAP)](/features/ldap.md)
- [Task Runner](/features/task-runner.md)

## Details
- Packagist: [phpseclib/phpseclib](https://packagist.org/packages/phpseclib/phpseclib)
- Extension: ext-ssh2

