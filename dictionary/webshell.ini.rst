.. _webshell:
.. meta::
	:description:
		Webshell: A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Webshell
	:twitter:description: Webshell: A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Webshell
	:og:type: article
	:og:description: A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/webshell.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/webshell.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/webshell.ini.html","name":"Webshell","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:08:51 +0000","dateModified":"Tue, 04 Aug 2026 11:08:51 +0000","description":"A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Webshell.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Webshell
--------

A webshell is a malicious script uploaded to a web server that allows an attacker to remotely control the server using a web browser.

Webshells are typically dropped onto a server after an attacker exploits an unrelated vulnerability, such as an unrestricted file upload, a remote code execution bug, or leaked credentials. Once in place, the script accepts commands through HTTP parameters, cookies, or headers, and passes them to functions like ``shell_exec()``, ``system()``, ``exec()``, or ``eval()`` to run arbitrary code, browse the filesystem, exfiltrate data, or pivot to other systems on the network.

Because a webshell can be as small as a single line and disguised with an innocuous filename, obfuscated code, or a legitimate-looking extension, detecting them by sight is unreliable. Effective defenses combine restricting which directories can execute PHP, disabling dangerous functions such as ``shell_exec()`` where they are not needed, validating and re-checking uploaded files, and monitoring for the kind of code patterns static analyzers flag as security risks.

.. code-block:: php
   
   <?php
   
       echo shell_exec($_GET['cmd']);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Web_shell>`__

See also `Webshell collection <https://github.com/tennc/webshell>`_ and `An Introduction to Web Shells (Web Shells Part 1) <https://www.acunetix.com/blog/articles/introduction-web-shells-part-1/>`_.

Related : :ref:`System Call <system-call>`, :ref:`One Liner <one-liner>`
