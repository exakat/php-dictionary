# Object Injection
Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker.

The general synopsis is the following: 

+ PHP serialize an object
+ The serialized string is transmitted to the user, then back to PHP, via cookies, hidden fields, or any storage
+ PHP deserialize the object

While in the hand of the user, the data was doctored to retain its format validity, but with values that are now controlled by the attacker.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-injection.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-injection.html","name":"Object Injection","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Object Injection.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"object-injection"}]}]}</script>
**[Documentation](https://owasp.org/www-community/vulnerabilities/PHP_Object_Injection)**
## See Also

+ [PHP Object Injection Exploitation Notes](https://snoopysecurity.github.io/posts/02_php_object_injection_exploitation-notes/)

## Related

+ [Serialization](serialization.html)
+ [Insecure Deserialization](insecure-deserialization.html)
