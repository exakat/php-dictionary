# Insteadof
The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class.

When a class uses multiple traits that have methods or properties with the same name, naming conflicts can arise. The insteadof operator helps to resolve these conflicts by specifying which trait's implementation should be used in the class.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/insteadof.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/insteadof.ini.html","name":"Insteadof","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The insteadof operator is used in the context of trait composition and resolving conflicts between methods or properties of multiple traits that are being used in a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Insteadof.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Use](use.ini.html)
+ [Alias](alias.ini.html)
+ [Method Collision](method-collision.ini.html)
