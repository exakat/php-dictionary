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
	:og:title: Object Injection
	:og:type: article
	:og:description: Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/object-injection.ini.html
	:og:locale: en


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
