# Object Injection
Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker.

The general synopsis is the following: 

+ PHP serialize an object
+ The serialized string is transmitted to the user, then back to PHP, via cookies, hidden fields, or any storage
+ PHP deserialize the object

While in the hand of the user, the data was doctored to retain its format validity, but with values that are now controlled by the attacker.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object-injection.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/object-injection.ini.html","name":"Object Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 08:28:02 +0000","dateModified":"Mon, 20 Jul 2026 08:28:02 +0000","description":"Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Object Injection.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://owasp.org/www-community/vulnerabilities/PHP_Object_Injection)**
## See Also

+ [PHP Object Injection Exploitation Notes](https://snoopysecurity.github.io/posts/02_php_object_injection_exploitation-notes/)

## Related

+ [Serialization](serialization.ini.html)
+ [Insecure Deserialization](insecure-deserialization.ini.html)
