# Self
``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition. It relates to the current written class.

``self`` is traditionally written lower-case, although it is case-insensitive. ``self`` is a PHP keyword.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/self.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/self.ini.html","name":"Self","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``self`` is one of the three special keywords that are used to access properties or methods from inside the class definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Self.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [static](static.ini.html)
+ [parent](parent.ini.html)
+ [Keyword](keyword.ini.html)
+ [Child Class](child-class.ini.html)
+ [Language Construct](language-construct.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Special Types](special-typehint.ini.html)
+ [Late Static Binding](late-static-binding.ini.html)
+ [Relative Types](relative-types.ini.html)
