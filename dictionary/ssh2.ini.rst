.. _ssh2:
.. meta::
	:description:
		SSH2: ``ssh2`` is a PIE extension, built on libssh2, that provides functions to open SSH connections from PHP and use them to execute remote commands, transfer files over SFTP or SCP, forward ports, and manage host authentication.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SSH2
	:twitter:description: SSH2: ``ssh2`` is a PIE extension, built on libssh2, that provides functions to open SSH connections from PHP and use them to execute remote commands, transfer files over SFTP or SCP, forward ports, and manage host authentication
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SSH2
	:og:type: article
	:og:description: ``ssh2`` is a PIE extension, built on libssh2, that provides functions to open SSH connections from PHP and use them to execute remote commands, transfer files over SFTP or SCP, forward ports, and manage host authentication
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ssh2.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ssh2.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ssh2.ini.html","name":"SSH2","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 08:03:13 +0000","dateModified":"Mon, 13 Jul 2026 08:03:13 +0000","description":"``ssh2`` is a PIE extension, built on libssh2, that provides functions to open SSH connections from PHP and use them to execute remote commands, transfer files over SFTP or SCP, forward ports, and manage host authentication","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SSH2.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SSH2
----

``ssh2`` is a PIE extension, built on libssh2, that provides functions to open SSH connections from PHP and use them to execute remote commands, transfer files over SFTP or SCP, forward ports, and manage host authentication.

A connection is opened with ``ssh2_connect()``, then authenticated with one of several methods: password, public key, or keyboard-interactive, via ``ssh2_auth_password()`` or ``ssh2_auth_pubkey_file()``. Once authenticated, the extension exposes a stream for running remote shell commands with ``ssh2_exec()``, and separate stream wrappers for SFTP file operations through ``ssh2_sftp()``.

The extension has historically had inconsistent packaging across distributions and PHP versions, which pushed many projects toward the pure-PHP ``phpseclib`` library instead, since it requires no compiled extension and works identically across environments.

.. code-block:: php
   
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


`Documentation <https://www.php.net/manual/en/book.ssh2.php>`__

See also `phpseclib, a pure-PHP alternative <https://phpseclib.com/>`_.

Related : :ref:`File Transfer Protocol (FTP) <ftp>`, :ref:`Socket <socket>`, :ref:`OpenSSL <openssl>`

Related packages : `phpseclib/phpseclib <https://packagist.org/packages/phpseclib/phpseclib>`_
