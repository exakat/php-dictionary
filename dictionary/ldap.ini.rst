.. _ldap:
.. meta::
	:description:
		Lightweight Directory Access Protocol (LDAP): LDAP, acronym of Lightweight Directory Access Protocol, is an open, vendor-neutral, industry standard application protocol for accessing and maintaining distributed directory information services over an Internet Protocol, IP network.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Lightweight Directory Access Protocol (LDAP)
	:twitter:description: Lightweight Directory Access Protocol (LDAP): LDAP, acronym of Lightweight Directory Access Protocol, is an open, vendor-neutral, industry standard application protocol for accessing and maintaining distributed directory information services over an Internet Protocol, IP network
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Lightweight Directory Access Protocol (LDAP)
	:og:type: article
	:og:description: LDAP, acronym of Lightweight Directory Access Protocol, is an open, vendor-neutral, industry standard application protocol for accessing and maintaining distributed directory information services over an Internet Protocol, IP network
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/ldap.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ldap.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ldap.ini.html","name":"Lightweight Directory Access Protocol (LDAP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"LDAP, acronym of Lightweight Directory Access Protocol, is an open, vendor-neutral, industry standard application protocol for accessing and maintaining distributed directory information services over an Internet Protocol, IP network","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Lightweight Directory Access Protocol (LDAP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Lightweight Directory Access Protocol (LDAP)
--------------------------------------------

LDAP, acronym of Lightweight Directory Access Protocol, is an open, vendor-neutral, industry standard application protocol for accessing and maintaining distributed directory information services over an Internet Protocol, IP network.

.. code-block:: php
   
   <?php
   
       // LDAP server details
       $ldapServer = "ldap://your-ldap-server.com"; // or "ldaps://" for SSL
       $ldapPort = 389; // 636 for LDAPS
       $ldapDn = "cn=admin,dc=example,dc=com"; // Admin DN (Distinguished Name)
       $ldapPassword = "your-password";
       
       // Connect to the LDAP server
       $ldapConn = ldap_connect($ldapServer, $ldapPort);
       if (!$ldapConn) {
           die("Could not connect to LDAP server.");
       }
       
       // Set LDAP options (e.g., for protocol version)
       ldap_set_option($ldapConn, LDAP_OPT_PROTOCOL_VERSION, 3);
       ldap_set_option($ldapConn, LDAP_OPT_REFERRALS, 0);
       
       // Bind (authenticate) to the LDAP server
       $ldapBind = @ldap_bind($ldapConn, $ldapDn, $ldapPassword);
       if (!$ldapBind) {
           die("LDAP bind failed: " . ldap_error($ldapConn));
       }
       
       // Search for a user
       $searchBase = "ou=People,dc=example,dc=com";
       $searchFilter = "(cn=Damien Seguy)";
       $attributes = ["cn", "mail", "uid"]; // Attributes to retrieve
       
       $searchResult = ldap_search($ldapConn, $searchBase, $searchFilter, $attributes);
       if (!$searchResult) {
           die("LDAP search failed: " . ldap_error($ldapConn));
       }
       
       // Get the first entry
       $entry = ldap_first_entry($ldapConn, $searchResult);
       if (!$entry) {
           die("No entries found.");
       }
       
       // Retrieve attributes
       $attrs = ldap_get_attributes($ldapConn, $entry);
       echo "<pre>";
       print_r($attrs);
       echo "</pre>";
   
       // Close the connection
       ldap_unbind($ldapConn);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Lightweight_Directory_Access_Protocol>`__

See also `LDAP site <https://ldap.com/>`_.

Related : :ref:`Internet Protocol (IP) <ip>`, :ref:`Server <server>`, :ref:`Service <service>`, :ref:`Query <query>`, :ref:`Secure Shell (SSH) <ssh>`, :ref:`Single Sign On (SSO) <sso>`
