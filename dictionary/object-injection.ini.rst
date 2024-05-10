.. _object-injection:
.. _deserialize-injection:

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
