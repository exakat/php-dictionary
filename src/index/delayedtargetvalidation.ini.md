# delayedtargetvalidation
The DelayedTargetValidation attribute is meant to make other PHP engine attributes optional. It will shut down complains from the PHP engine for attributes, allowing for future compatibility.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/delayedtargetvalidation.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/delayedtargetvalidation.ini.html","name":"delayedtargetvalidation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:39:21 +0000","dateModified":"Fri, 17 Jul 2026 08:39:21 +0000","description":"The DelayedTargetValidation attribute is meant to make other PHP engine attributes optional","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/delayedtargetvalidation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Attribute](attribute.ini.html)
+ [PHP Native Attributes](php-attribute.ini.html)
+ [Forward Compatible](forward-compatible.ini.html)
+ [PHP Native Attribute](php-native-attribute.ini.html)
