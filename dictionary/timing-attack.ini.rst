.. _timing-attack:
.. meta::
	:description:
		Timing Attack: A timing attack is a type of side-channel attack where an attacker exploits variations in the time it takes for a system to perform operations to infer secret information.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Timing Attack
	:twitter:description: Timing Attack: A timing attack is a type of side-channel attack where an attacker exploits variations in the time it takes for a system to perform operations to infer secret information
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Timing Attack
	:og:type: article
	:og:description: A timing attack is a type of side-channel attack where an attacker exploits variations in the time it takes for a system to perform operations to infer secret information
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/timing-attack.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Timing Attack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 19 May 2026 05:03:04 +0000","dateModified":"Tue, 19 May 2026 05:03:04 +0000","description":"A timing attack is a type of side-channel attack where an attacker exploits variations in the time it takes for a system to perform operations to infer secret information","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Timing Attack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Timing Attack
-------------

A timing attack is a type of side-channel attack where an attacker exploits variations in the time it takes for a system to perform operations to infer secret information. Instead of directly breaking cryptographic algorithms, the attacker analyzes how long a system takes to respond to different inputs, revealing clues about the internal state or data.

Timing attacks may be mitigated by using the ``hash_equals()`` function, instead of comparing values with ``===`` or ``==``. 

The attack relies on trying various strings, and detecting when the comparison fails early or late to infer which part of the string is valid or not. 


See also `PHP Vulnerabilities: Assessment, Prevention, and Mitigation <https://www.zend.com/blog/php-vulnerabilities>`_ and `Timing Attack in Laravel (2022) <https://ephort.dk/blog/laravel-timing-attack-vulnerability>`_.

Related : :ref:`Vulnerability <vulnerability>`, :ref:`Attack <attack>`, :ref:`hash_equals() <hash_equals>`
