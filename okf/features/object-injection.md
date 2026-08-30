---
type: "classic bug"
title: "Object Injection"
description: "Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker."
resource: "https://owasp.org/www-community/vulnerabilities/PHP_Object_Injection"
tags: ["classic bug", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Object Injection

Object injection happens when a string is deserialized to recreate an object, inside PHP, while the string is controlled by the attacker.

The general synopsis is the following: 

+ PHP serialize an object
+ The serialized string is transmitted to the user, then back to PHP, via cookies, hidden fields, or any storage
+ PHP deserialize the object

While in the hand of the user, the data was doctored to retain its format validity, but with values that are now controlled by the attacker.

## Documentation
- [https://owasp.org/www-community/vulnerabilities/PHP_Object_Injection](https://owasp.org/www-community/vulnerabilities/PHP_Object_Injection)

## See Also
- [PHP Object Injection Exploitation Notes](https://snoopysecurity.github.io/posts/02_php_object_injection_exploitation-notes/)

## Related
- [Serialization](/features/serialization.md)
- [Insecure Deserialization](/features/insecure-deserialization.md)

