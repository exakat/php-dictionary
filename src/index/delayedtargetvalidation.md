# delayedtargetvalidation
The DelayedTargetValidation attribute is meant to make other PHP engine attributes optional. It will shut down complains from the PHP engine for attributes, allowing for future compatibility.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/delayedtargetvalidation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/delayedtargetvalidation.html","name":"delayedtargetvalidation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:39:21 +0000","dateModified":"Fri, 17 Jul 2026 08:39:21 +0000","description":"The DelayedTargetValidation attribute is meant to make other PHP engine attributes optional","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/delayedtargetvalidation.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"delayedtargetvalidation"}]}]}</script>
```php
<?php
class Child extends Base {
    #[\DelayedTargetValidation]
        #[\Override]
        const NAME ='Child';
}
?>
```

**[Documentation](https://wiki.php.net/rfc/delayedtargetvalidation_attribute)**
## See Also

+ [#[\DelayedTargetValidation] Attribute Explained](https://scherzer.dev/Blog/20250820-delayed-target-validation)

## Related

+ [Attribute](attribute.html)
+ [PHP Native Attributes](php-attribute.html)
+ [Forward Compatible](forward-compatible.html)
+ [PHP Native Attribute](php-native-attribute.html)
