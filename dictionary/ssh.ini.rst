.. _ssh:
.. _sftp:
.. meta::
	:description:
		Secure Shell (SSH): SSH, acronym of Secure Shell, is a cryptographic network protocol for operating network services securely over an unsecured network.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Secure Shell (SSH)
	:twitter:description: Secure Shell (SSH): SSH, acronym of Secure Shell, is a cryptographic network protocol for operating network services securely over an unsecured network
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Secure Shell (SSH)
	:og:type: article
	:og:description: SSH, acronym of Secure Shell, is a cryptographic network protocol for operating network services securely over an unsecured network
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ssh.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Secure Shell (SSH)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:19:39 +0000","dateModified":"Sat, 11 Jul 2026 14:19:39 +0000","description":"SSH, acronym of Secure Shell, is a cryptographic network protocol for operating network services securely over an unsecured network","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Secure Shell (SSH).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Secure Shell (SSH)
------------------

SSH, acronym of Secure Shell, is a cryptographic network protocol for operating network services securely over an unsecured network. It is most commonly used for remote login and command-line execution.

PHP provides the ``ssh2`` extension to connect to SSH servers, execute commands, transfer files via SCP or SFTP, and create tunnels. For environments without the native extension, the ``phpseclib`` library offers a pure PHP alternative.

.. code-block:: php
   
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


`Documentation <https://en.wikipedia.org/wiki/Secure_Shell>`__

See also `PHP: SSH2 extension <https://www.php.net/manual/en/book.ssh2.php>`_, `phpseclib, a pure-PHP alternative <https://phpseclib.com/>`_ and `SSH Academy: SSH Protocol <https://www.ssh.com/academy/ssh/protocol>`_.

Related : :ref:`Server <server>`, :ref:`Port <port>`, :ref:`shell_exec() <shell_exec>`, :ref:`Lightweight Directory Access Protocol (LDAP) <ldap>`, :ref:`Task Runner <task-runner>`

Related packages : `phpseclib/phpseclib <https://packagist.org/packages/phpseclib/phpseclib>`_
