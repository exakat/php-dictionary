# Insteadof
The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class.

When a class uses multiple traits that have methods or properties with the same name, naming conflicts can arise. The insteadof operator helps to resolve these conflicts by specifying which trait's implementation should be used in the class.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/insteadof.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/insteadof.html","name":"Insteadof","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Insteadof.html"]}],"alternateName":["method-alias"],"keywords":["keyword","alias","naming conflict"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-collision.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.traits.php#language.oop5.traits.conflict"},{"@type":"CreativeWork","name":"How to Reuse PHP Code Effectively \u2013 Introduction to PHP traits","url":"https:\/\/linuxconfig.org\/how-to-reuse-php-code-effectively-introduction-to-php-traits"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"insteadof"}]}]}</script>
```php
<?php

// Example from the PHP documentation
trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.traits.php#language.oop5.traits.conflict)**
## See Also

+ [How to Reuse PHP Code Effectively – Introduction to PHP traits](https://linuxconfig.org/how-to-reuse-php-code-effectively-introduction-to-php-traits)

## Related

+ [Use](use.html)
+ [Alias](alias.html)
+ [Method Collision](method-collision.html)
