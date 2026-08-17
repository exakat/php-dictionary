# Proprietary Source
Proprietary source code is software whose source code is not publicly available and is protected by copyright and licensing restrictions. Unlike open-source software, proprietary software cannot be freely studied, modified, or redistributed.

Proprietary PHP source may be distributed as encoded files, with ionCube, SourceGuardian, or Zend Guard; as compiled extensions, or simply as closed-source packages distributed through private Composer repositories.

Protecting PHP source code is challenging because PHP is an interpreted language. Encoding tools obfuscate the bytecode, but the original logic can sometimes be reverse-engineered. PHP extensions written in C can also ship precompiled as ``.so`` / ``.dll`` files and are harder to analyse.

The distinction between proprietary and open-source matters for security audits, license compliance, and vendor lock-in assessments.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proprietary-source.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/proprietary-source.html","name":"Proprietary Source","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 29 Jun 2026 09:38:51 +0000","dateModified":"Mon, 29 Jun 2026 09:38:51 +0000","description":"Proprietary source code is software whose source code is not publicly available and is protected by copyright and licensing restrictions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Proprietary Source.html"]}],"alternateName":["proprietary"],"keywords":["concept","license"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/open-source.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/license.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/obfuscation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/composer.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/free.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/licence.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Proprietary_software"},{"@type":"CreativeWork","name":"ionCube PHP Encoder","url":"https:\/\/www.ioncube.com\/php_encoder.php"},{"@type":"CreativeWork","name":"SourceGuardian","url":"https:\/\/www.sourceguardian.com\/"},{"@type":"CreativeWork","name":"Zend Guard","url":"https:\/\/www.zend.com\/products\/zend-guard"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"proprietary-source"}]}]}</script>
```php
<?php

    // Proprietary library loaded as an encoded file (ionCube example)
    // The actual source is not readable; only the encoded .php file is shipped.
    require 'licensed-module.php';

    $service = new ProprietaryService();
    $service->run();

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Proprietary_software)**
## See Also

+ [ionCube PHP Encoder](https://www.ioncube.com/php_encoder.php)
+ [SourceGuardian](https://www.sourceguardian.com/)
+ [Zend Guard](https://www.zend.com/products/zend-guard)

## Related

+ [Open Source](open-source.html)
+ [Licence](license.html)
+ [Obfuscation](obfuscation.html)
+ [Composer](composer.html)
+ [Free](free.html)
+ [Licence](licence.html)
