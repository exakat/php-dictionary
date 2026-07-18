.. _ldap-injection:
.. meta::
	:description:
		LDAP Injection: LDAP injection is a security vulnerability that occurs when untrusted user input is incorporated into an LDAP query without proper sanitisation or escaping.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: LDAP Injection
	:twitter:description: LDAP Injection: LDAP injection is a security vulnerability that occurs when untrusted user input is incorporated into an LDAP query without proper sanitisation or escaping
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: LDAP Injection
	:og:type: article
	:og:description: LDAP injection is a security vulnerability that occurs when untrusted user input is incorporated into an LDAP query without proper sanitisation or escaping
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ldap-injection.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ldap-injection.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ldap-injection.ini.html","name":"LDAP Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 18 Jul 2026 05:16:36 +0000","dateModified":"Sat, 18 Jul 2026 05:16:36 +0000","description":"LDAP injection is a security vulnerability that occurs when untrusted user input is incorporated into an LDAP query without proper sanitisation or escaping","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/LDAP Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


LDAP Injection
--------------

LDAP injection is a security vulnerability that occurs when untrusted user input is incorporated into an LDAP query without proper sanitisation or escaping. An attacker can manipulate the LDAP filter or distinguished name, or DN, to bypass authentication, escalate privileges, or extract sensitive directory information.

LDAP filters use special characters such as ``*``, ``(``, ``)``, ``\``, and ``NUL``. Injecting these characters can alter the logic of a filter. For example, inserting ``*`` as a username may cause a wildcard match that returns all users.

Mitigation strategies include:

+ Escaping special characters with ``ldap_escape()``, available since PHP 5.6
+ Using allowlists to validate input before use in a query
+ Applying the principle of least privilege on the LDAP service account.

.. code-block:: php
   
   <?php
   
       $username = $_POST['username'] ?? '';
       
       // Vulnerable: attacker can inject LDAP metacharacters
       $filter = '(uid=' . $username . ')';
       
       // Safe: use ldap_escape() with LDAP_ESCAPE_FILTER
       $safe   = ldap_escape($username, '', LDAP_ESCAPE_FILTER);
       $filter = '(uid=' . $safe . ')';
       
       $result = ldap_search($conn, 'ou=People,dc=example,dc=com', $filter);
   
   ?>


`Documentation <https://cheatsheetseries.owasp.org/cheatsheets/LDAP_Injection_Prevention_Cheat_Sheet.html>`__

See also `ldap_escape() — PHP Manual <https://www.php.net/manual/en/function.ldap-escape.php>`_.

Related : :ref:`Lightweight Directory Access Protocol (LDAP) <ldap>`, :ref:`Injection <injection>`, :ref:`SQL Injection <sql-injection>`, :ref:`Escape Data <escape-data>`, :ref:`Taint Analysis <taint>`, :ref:`Static Application Security Testing (SAST) <sast>`, :ref:`Security <security>`
