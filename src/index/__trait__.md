# \_\_TRAIT\_\_
``__TRAIT__`` holds the current trait name: this is the trait of definition, not the called class. It is not the same as ``self::class``, which may change depending on the calling context.

The trait name includes the namespace it was declared in, e.g. ``N\X``. It does not include the leading ``\``. 

When used outside a trait, ``__TRAIT__`` is empty. 

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combination of uppercase and lower case. 
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__trait__.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__trait__.html","name":"__TRAIT__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``__TRAIT__`` holds the current trait name: this is the trait of definition, not the called class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__TRAIT__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"__TRAIT__"}]}]}</script>
```php
<?php

namespace N; 

trait T {
    function foo() {
        echo __TRAIT__;  // N\T
        echo __CLASS__;  // N\X 
    }
}

class X {
    use T;
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.constants.magic.php)**
## Related

+ [\_\_FUNCTION\_\_](__function__.html)
+ [\_\_METHOD\_\_](__method__.html)
+ [\_\_CLASS\_\_](__class__.html)
