.. _man-in-the-middle:
.. meta::
	:description:
		Man In The Middle: A Man-in-the-Middle (MitM) attack is a cyberattack where a malicious actor intercepts and possibly alters communications between two parties without their knowledge.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Man In The Middle
	:twitter:description: Man In The Middle: A Man-in-the-Middle (MitM) attack is a cyberattack where a malicious actor intercepts and possibly alters communications between two parties without their knowledge
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Man In The Middle
	:og:type: article
	:og:description: A Man-in-the-Middle (MitM) attack is a cyberattack where a malicious actor intercepts and possibly alters communications between two parties without their knowledge
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/man-in-the-middle.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Man In The Middle","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"A Man-in-the-Middle (MitM) attack is a cyberattack where a malicious actor intercepts and possibly alters communications between two parties without their knowledge","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Man In The Middle.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Man In The Middle
-----------------

A Man-in-the-Middle (MitM) attack is a cyberattack where a malicious actor intercepts and possibly alters communications between two parties without their knowledge. In this attack, the attacker positions themselves between the communicating parties, acting as a relay for the messages exchanged between them.

Man-in-the-Middle attacks can be executed in various ways, such as by compromising public Wi-Fi networks, exploiting vulnerabilities in network protocols, or through techniques like ARP spoofing or DNS spoofing. The goal of these attacks can vary, from eavesdropping on sensitive information to injecting malware or conducting phishing scams.

To mitigate the risk of MitM attacks, encryption protocols like SSL/TLS are often used to secure communications between parties, making it difficult for attackers to intercept and decipher the data being transmitted. Additionally, users should be cautious when connecting to public Wi-Fi networks and ensure they are accessing websites over HTTPS to reduce the risk of interception and manipulation.

`Documentation <https://en.wikipedia.org/wiki/Man-in-the-middle_attack>`__

See also `VaultPress - Remote Code Execution via Man in The Middle attack <https://www.securify.nl/en/advisory/vaultpress-remote-code-execution-via-man-in-the-middle-attack/>`_

Related : :ref:`Session Hijacking <session-highjacking>`
