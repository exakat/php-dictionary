# Self
``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the current written class.

``self`` is traditionally written lower-case, although it is case-insensitive. ``self`` is a PHP keyword.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self.html","name":"Self","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"self is one of the three special keywords that are used to access properties or methods from inside the class definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self.html"]}],"keywords":["keyword"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/keyword.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/child-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/language-construct.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/special-typehint.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/late-static-binding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.paamayim-nekudotayim.php"},{"@type":"CreativeWork","name":"PHP self Vs this","url":"https:\/\/phppot.com\/php\/php-self-vs-this\/"},{"@type":"CreativeWork","name":"PHP $this Keyword","url":"https:\/\/www.studytonight.com\/php\/php-this-keyword"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"self"}]}]}</script>
```php
<?php

class X {
    private const X = 1;
    
    function foo() {
        // same as \X::C;
        return self::C;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)**
## See Also

+ [PHP self Vs this](https://phppot.com/php/php-self-vs-this/)
+ [PHP $this Keyword](https://www.studytonight.com/php/php-this-keyword)

## Related

+ [static](static.html)
+ [parent](parent.html)
+ [Keyword](keyword.html)
+ [Child Class](child-class.html)
+ [Language Construct](language-construct.html)
+ [PHP Natives](native-type.html)
+ [Special Types](special-typehint.html)
+ [Late Static Binding](late-static-binding.html)
+ [Relative Types](relative-types.html)
