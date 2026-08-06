# Relative
A ``relative`` value is dependent on the context in which it operates. 

The notion of ``relative`` has several usages:

+ There are relative names, which depends on the local namespace
+ There are relative path, which are path that starts at the current working directory
+ There are relative type, which are types that depends on the current class context, such as ``self``, ``static`` and ``parent``

The notion of relative is the opposite of the notion of absolute, which does not depend on a local context.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/relative.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/relative.html","name":"Relative","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:29:53 +0000","dateModified":"Fri, 19 Jun 2026 21:29:53 +0000","description":"A ``relative`` value is dependent on the context in which it operates","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Relative.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class x extends y {

    // relative type, that may be copy-pasted without a change
    function foo() : self {} 
    
    // absolute type, that represents the current class
    function goo() : x {} 
    
}
?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.basics.php)**
## Related

+ [Fully Qualified Name](fully-qualified-name.ini.html)
+ [Relative Types](relative-types.ini.html)
+ [Path](path.ini.html)
+ [Absolute](absolute.ini.html)
