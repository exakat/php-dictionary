.. _weak-cryptography:
.. meta::
	:description:
		Weak Cryptography: A weak cryptography vulnerability occurs when an application uses outdated, poorly designed, or insufficient cryptographic algorithms, protocols, or implementations to protect sensitive data.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Weak Cryptography
	:twitter:description: Weak Cryptography: A weak cryptography vulnerability occurs when an application uses outdated, poorly designed, or insufficient cryptographic algorithms, protocols, or implementations to protect sensitive data
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Weak Cryptography
	:og:type: article
	:og:description: A weak cryptography vulnerability occurs when an application uses outdated, poorly designed, or insufficient cryptographic algorithms, protocols, or implementations to protect sensitive data
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/weak-cryptography.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Weak Cryptography","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Apr 2026 16:37:05 +0000","dateModified":"Fri, 10 Apr 2026 16:37:05 +0000","description":"A weak cryptography vulnerability occurs when an application uses outdated, poorly designed, or insufficient cryptographic algorithms, protocols, or implementations to protect sensitive data","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Weak Cryptography.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Weak Cryptography
-----------------

A weak cryptography vulnerability occurs when an application uses outdated, poorly designed, or insufficient cryptographic algorithms, protocols, or implementations to protect sensitive data. This makes it easier for attackers to break encryption, steal data, or compromise systems.

Weak cryptography refers to the use of:

+ Outdated algorithms, such as MD5, SHA-1, DES, RC4
+ Short or predictable keys, such as 40-bit encryption, hardcoded keys
+ Insecure protocols, such as SSLv2, SSLv3, early TLS versions
+ Poor randomness, such as using rand() instead of random\random_bytes()
+ Improper implementations, such as ECB mode in block ciphers, custom crypto.

See also https://derscanner.com/vulnerability-database/PHP-:-Weak-mode-for-encrypting-algorithm, https://docs.datadoghq.com/fr/security/code_security/static_analysis/static_analysis_rules/php-security/weak-hash-algorithm/

Related : :ref:`Cryptography <cryptography>`, :ref:`Message Digest Algorithm 5 (MD5) <md5>`, :ref:`Vulnerability <vulnerability>`
