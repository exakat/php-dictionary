# \_\_CLASS\_\_
``__CLASS__`` holds the current class name: this is the class of definition, not the called class. It is not the same as ``self::class``, which may change depending on the calling context.

The class name includes the namespace it was declared in, such as  ``N\X``. It does not include the leading ``\``. 

When used inside a trait method or property default, ``__CLASS__`` is the name of the class the trait is used in. When used outside a function, this constant holds an empty string, and does not emit any warning.

This constant is written in uppercase, by convention. It is case-insensitive, and may be used with any combination of uppercase and lowercase. 
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__class__.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__class__.html","name":"__CLASS__","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:42:45 +0000","dateModified":"Tue, 11 Aug 2026 14:42:45 +0000","description":"__CLASS__ holds the current class name: this is the class of definition, not the called class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__CLASS__.html"]}],"keywords":["magic-constant","case-sensitive"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__function__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__method__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__trait__.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/magic-constant.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.constants.magic.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__class__"}]}]}</script>
```php
<?php

    namespace N; 
    
    class X {
        function foo() {
            echo __CLASS__;  // N\X
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## Related

+ [\_\_FUNCTION\_\_](__function__.html)
+ [\_\_METHOD\_\_](__method__.html)
+ [\_\_TRAIT\_\_](__trait__.html)
+ [get\_class()](get_class.html)
+ [Magic Constants](magic-constant.html)
