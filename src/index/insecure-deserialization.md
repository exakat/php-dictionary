# Insecure Deserialization
Insecure deserialization, also called PHP object injection, is a vulnerability that occurs when untrusted data is deserialized without sufficient validation, allowing an attacker to manipulate the serialized object to execute arbitrary code.

The most common vector is the native ``unserialize()`` function. When user-controlled data is passed to ``unserialize()``, an attacker can craft a malicious serialized payload that instantiates arbitrary classes available in the application's scope. By targeting classes that implement magic methods such as ``__wakeup()``, ``__destruct()``, or ``__toString()``, the attacker can chain method calls, known as a Property Oriented Programming chain, to achieve remote code execution.

OWASP lists insecure deserialization as one of the Top 10 web application security risks.

Mitigations include: never deserializing untrusted data with native ``unserialize()``; using safer formats such as JSON; using the ``allowed_classes`` option to whitelist permitted classes; and using HMAC signatures to authenticate serialized payloads.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/insecure-deserialization.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/insecure-deserialization.html","name":"Insecure Deserialization","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 11:40:43 +0000","dateModified":"Sun, 30 Aug 2026 11:40:43 +0000","description":"Insecure deserialization, also called PHP object injection, is a vulnerability that occurs when untrusted data is deserialized without sufficient validation, allowing an attacker to manipulate the serialized object to execute arbitrary code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/insecure-deserialization.html"]}],"alternateName":["php-object-injection"],"keywords":["security","owasp"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/serialization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unserialize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__wakeup.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__unserialize.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attack.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/owasp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pop.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/www-community\/vulnerabilities\/PHP_Object_Injection"},{"@type":"CreativeWork","name":"OWASP Top 10 A8: Insecure Deserialization","url":"https:\/\/owasp.org\/www-project-top-ten\/2017\/A8_2017-Insecure_Deserialization"},{"@type":"CreativeWork","name":"Developing a custom gadget chain for PHP deserialization","url":"https:\/\/portswigger.net\/web-security\/deserialization\/exploiting\/lab-deserialization-developing-a-custom-gadget-chain-for-php-deserialization"},{"@type":"CreativeWork","name":"The Quiet Shift Reshaping PHP Security","url":"https:\/\/www.linkedin.com\/pulse\/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"insecure-deserialization"}]}]}</script>
```php
<?php

    // VULNERABLE: passing user input directly to unserialize()
    $data = $_GET['data'];
    $obj  = unserialize($data); // Dangerous!
    
    // SAFER: use JSON for untrusted data
    $obj = json_decode($_GET['data']);
    
    // SAFER: restrict allowed classes when unserialize is necessary
    $obj = unserialize($data, ['allowed_classes' => [MyValueObject::class]]);

?>
```

**[Documentation](https://owasp.org/www-community/vulnerabilities/PHP_Object_Injection)**
## See Also

+ [OWASP Top 10 A8: Insecure Deserialization](https://owasp.org/www-project-top-ten/2017/A8_2017-Insecure_Deserialization)
+ [Developing a custom gadget chain for PHP deserialization](https://portswigger.net/web-security/deserialization/exploiting/lab-deserialization-developing-a-custom-gadget-chain-for-php-deserialization)
+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

## Related

+ [Serialization](serialization.html)
+ [Unserialization](unserialize.html)
+ [Object Injection](object-injection.html)
+ [\_\_wakeup() Method](__wakeup.html)
+ [\_\_unserialize() Method](__unserialize.html)
+ [Attack](attack.html)
+ [Vulnerability](vulnerability.html)
+ [OWASP](owasp.html)
+ [Security](security.html)
+ [Pop](pop.html)
+ [Static Application Security Testing (SAST)](sast.html)
