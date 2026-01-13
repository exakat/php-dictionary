.. _object-injection:
.. _deserialize-injection:
.. meta::
	:description:
		Object Injection: Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object Injection
	:twitter:description: Object Injection: Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Object Injection
	:og:type: article
	:og:description: Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/object-injection.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Object Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 28 Jul 2025 17:11:40 +0000","dateModified":"Mon, 28 Jul 2025 17:11:40 +0000","description":"Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Object Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Object Injection
----------------

Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker.

The general synopsis is the following : 

+ PHP serialize an object
+ The serialized string is transmitted to the user, then back to PHP (via cookies, hidden fields, or any storage)
+ PHP deserialize the object

While in the hand of the user, the data was doctored to retain its format validity, but with values that are now controlled by the attacker.



`Documentation <https://owasp.org/www-community/vulnerabilities/PHP_Object_Injection>`__

See also `PHP Object Injection Exploitation Notes <https://snoopysecurity.github.io/web-application-security/2021/01/08/02_php_object_injection_exploitation-notes.html>`_

Related : :ref:`Serialization <serialization>`
