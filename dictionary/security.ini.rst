.. _security:
.. meta::
	:description:
		Security: Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Security
	:twitter:description: Security: Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Security
	:og:type: article
	:og:description: Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/security.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Security","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 09:19:29 +0000","dateModified":"Mon, 13 Jul 2026 09:19:29 +0000","description":"Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Security.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Security
--------

Security is a whole matter: it involves implementing measures and best practices to protect your application and its data from malicious attacks and vulnerabilities.

Security risks may be of different nature: data privacy, identity usurpation, resource abuse, privilege escalation, resource access. 

Security applies to PHP itself, and also to the application written with it.

.. code-block:: php
   
   <?php
   
      // classic example of a XSS injection
      echo $_GET['a'];
   
   ?>


`Documentation <https://www.php.net/manual/en/security.php>`__

See also `PHP Security Best Practices, Vulnerabilities and Attacks <https://www.vaadata.com/en/blog/php-security-best-practices-vulnerabilities-and-attacks/>`_, `PHP Security <https://www.aquasec.com/cloud-native-academy/application-security/php-security/>`_, `Senior PHP Developers Make These Security Mistakes Too — And Nobody Talks About It <https://medium.com/@paunikarjayesh1/senior-php-developers-make-these-security-mistakes-too-and-nobody-talks-about-it-b6c581a30035>`_ and `The Quiet Shift Reshaping PHP Security <https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/>`_.

Related : :ref:`Audit Trail <audit-trail>`, :ref:`Attack Surface <attack-surface>`, :ref:`Framework <framework>`, :ref:`Taint Analysis <taint>`, :ref:`Time Of Check To Time Of Use (TOCTOU) <toctou>`, :ref:`Data Leak <data-leak>`, :ref:`Nonce <nonce>`, :ref:`OWASP <owasp>`, :ref:`Sensitive Parameter <sensitiveparameter>`, :ref:`Code Review <code-review>`, :ref:`Distributed Denial Of Service (DDOS) <ddos>`, :ref:`Race Condition <race-condition>`, :ref:`Zero Day Vulnerability <zero-day>`, :ref:`hash_equals() <hash_equals>`, :ref:`html_entity_decode <html_entity_decode>`, :ref:`htmlspecialchars <htmlspecialchars>`, :ref:`Insecure Deserialization <insecure-deserialization>`, :ref:`Privacy <privacy>`, :ref:`Access Control List (ACL) <acl>`, :ref:`Appeasement Pattern <appeasement-pattern>`, :ref:`Dynamic Loading <dynamic-loading>`, :ref:`Escape Character <escape-character>`, :ref:`php://filter <php-filter>`, :ref:`Poisoned Pipeline Execution (PPE) <poisoned-pipeline-execution>`, :ref:`Fuzzing <fuzzing>`, :ref:`Hard Coded <hard-coded>`, :ref:`Hash Comparisons <hash-comparison>`, :ref:`OAuth <oauth>`, :ref:`Shell Exec <shell-exec>`, :ref:`Capture The Flag (CTF) <ctf>`, :ref:`Multi-Factor Authentication (MFA) <mfa>`, :ref:`Obfuscation <obfuscation>`, :ref:`Rate Limiting <rate-limit>`, :ref:`CRLF Injection <crlf-injection>`, :ref:`escapeshellarg() <escapeshellarg>`, :ref:`Image Injection <image-injection>`, :ref:`LDAP Injection <ldap-injection>`, :ref:`escapeshellcmd() <escapeshellcmd>`, :ref:`Shell Injection <shell-injection>`, :ref:`Server-Side Request Forgery (SSRF) <ssrf>`, :ref:`Steganography <steganography>`
