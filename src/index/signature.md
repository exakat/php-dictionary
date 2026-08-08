# Signature
Signature has several meanings:  

+ Method signature: the name, arguments, attributes and return type of a method or function
+ Digital signature: a piece of data that gives a recipient confidence that the message came from a specific sender
+ Email signature: a suffix for email messages, to conclude a email message with coordinates and social greetings.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.15","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/signature.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/signature.html","name":"Signature","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Signature has several meanings:  ","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Signature.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Signature"}]}]}</script>
```php
<?php

    // The line below is the function signature
    function foo(string $message): string {

        // adapted from the PHP manual
        // fetch private key from file and ready it
        $pkeyid = openssl_pkey_get_private(file://src/openssl-0.9.6/php/sign/key.pem);

        // compute signature
        openssl_sign($message, $signature, $pkeyid);

        // free the key from memory
        openssl_free_key($pkeyid);        
        
        // This returns the signature of the message for 'php' user.
        // It may be checked with the public key
        return $signature;
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Digital_signature)**
## Related

+ [Method Signature](method-signature.html)
+ [Digital Signature](digital-signature.html)
