# Obfuscation
Obfuscation refers to the practice of deliberately making something difficult to understand or obscure. 

In the context of web security, code obfuscation is a technique used to make source code more difficult to filter and identify as a threat. The primary goal is not to improve the program's functionality but rather to hinder reverse engineering, the extraction of sensitive information from the code.

In the context of development, obfuscation leads to making the code difficult to read, so that it cannot be maintained or modified for any purpose. This is a weak strategy to protect intellectual property for editors, which usually rely on encryption of the code. Obfuscation may be achieved by using very generic terms, abbreviations, unknown languages, abstract naming schemes.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/obfuscation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/obfuscation.ini.html","name":"Obfuscation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:03:02 +0000","dateModified":"Thu, 09 Jul 2026 09:03:02 +0000","description":"Obfuscation refers to the practice of deliberately making something difficult to understand or obscure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Obfuscation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // built with base64_encode($_GET); 
    $v = "X0dFVA=="; 

    // obfuscated code : this displays $_GET
    print_r($\{base64_decode($v)}); 
    
    // This function does not help its caller, unless the definition is read.
    echo foo('yes', 'no');
    
    function foo($cat, $dog) {
        // very simple feature, with misleading names
        return $cat . ' and ' . $dog;
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Obfuscation_(software))**
## See Also

+ [Obfuscate Your PHP Source Code](https://medium.com/@chidozieduru/obfuscate-your-php-source-code-da8fa6e5f3f9)
+ [unPHP](https://www.unphp.net/)

## Related

+ [Security](security.ini.html)
+ [Minification](minification.ini.html)
+ [Proprietary Source](proprietary-source.ini.html)
