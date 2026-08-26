# Extension Method
An extension method, as found in C#, Kotlin, and Swift, lets a developer add a method to a type without modifying that type's source and without subclassing it: ``fun String.shout() = this.uppercase() + '!'`` adds a ``shout()`` method callable on every ``String``, including strings from the standard library. The compiler resolves the call statically, based on the static type of the receiver, and injects it as if it were a real member.

Extension methods are typically used to attach domain-specific behavior to library or built-in types, or to gradually retrofit an interface's default methods onto existing implementations.

PHP has no extension method mechanism. Methods can only be added to a class by editing its source, extending it, or mixing in a trait, all of which require access to the class declaration or the willingness to create a subclass; a built-in type such as ``string`` or a final third-party class cannot receive new methods at all. The common workaround is a free function or a static helper class, called as ``Str::shout($value)`` instead of ``$value->shout()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extension-method.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extension-method.html","name":"Extension Method","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Aug 2026 13:27:44 +0000","dateModified":"Sun, 09 Aug 2026 13:27:44 +0000","description":"An extension method, as found in C#, Kotlin, and Swift, lets a developer add a method to a type without modifying that type's source and without subclassing it: fun String","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extension-method.html"]}],"keywords":["concept","not-supported"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/trait.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mixin.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static-method.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Extension_method"},{"@type":"CreativeWork","name":"Traits","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.traits.php"},{"@type":"CreativeWork","name":"Kotlin extension functions documentation","url":"https:\/\/kotlinlang.org\/docs\/extensions.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"extension-method"}]}]}</script>
```php
<?php

    // PHP has no way to add shout() to string itself.
    final class Str {
        public static function shout(string $s): string {
            return strtoupper($s) . '!';
        }
    }
    
    echo Str::shout('hello'); // HELLO!, not 'hello'->shout()

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Extension_method)**
## See Also

+ [Traits](https://www.php.net/manual/en/language.oop5.traits.php)
+ [Kotlin extension functions documentation](https://kotlinlang.org/docs/extensions.html)

## Related

+ [Trait](trait.html)
+ [Class](class.html)
+ [Mixin](mixin.html)
+ [Static Method](static-method.html)
