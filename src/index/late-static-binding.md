# Late Static Binding
PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance.

Before PHP 5.3, the ``self`` keyword always referred to the class where it was written, regardless of which child class actually made the call. This made it impossible for a static method inherited by a subclass to refer to that subclass reliably: calling a parent's static method that used ``new self()``, for example, always instantiated the parent class, even when invoked through a child. Late static binding solves this by introducing the ``static::`` keyword, which resolves at call time, hence "late", to the class that was actually used to make the call, rather than the class where the method was defined.

The mechanism keeps track of the "called class" as execution moves through the call stack: a static call, an instance method call, or a ``parent::`` / ``self::`` forwarding call all propagate that information, unless it is reset by an explicit ``ClassName::`` call, which starts a new binding scope. The special function ``get_called_class()`` returns the same class name that ``static::class`` would resolve to.

Late static binding is heavily used to implement patterns such as the Active Record pattern, fluent factory methods, or the Singleton pattern, where a base class needs to instantiate or refer to whichever subclass is actually being used, without hardcoding that subclass's name.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/late-static-binding.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/late-static-binding.html","name":"Late Static Binding","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:21:41 +0000","dateModified":"Fri, 14 Aug 2026 08:21:41 +0000","description":"PHP implements a feature called late static bindings which can be used to reference the called class in a context of static inheritance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/late-static-binding.html"]}],"alternateName":["late-binding"],"keywords":["concept","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/early-binding.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/child-class.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile-time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution-time.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mro.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.late-static-bindings.php"},{"@type":"CreativeWork","name":"Late static binding in PHP - What, How & When","url":"https:\/\/www.amitmerchant.com\/late-static-binding-php-what-how-when\/"},{"@type":"CreativeWork","name":"A real life example of using Late Static Binding in PHP","url":"https:\/\/dev.to\/asifzcpe\/a-real-life-example-of-using-late-static-binding-in-php-h6b\/"},{"@type":"CreativeWork","name":"Example of using Late Static Binding in PHP","url":"https:\/\/dev.to\/developeralamin\/example-of-using-late-static-binding-in-php-18kh"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"late-static-binding"}]}]}</script>
```php
<?php

class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        static::who(); // Here comes Late Static Bindings
    }
}

class B extends A {
    public static function who() {
        echo __CLASS__;
    }
}

B::test();

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.late-static-bindings.php)**
## See Also

+ [Late static binding in PHP - What, How & When](https://www.amitmerchant.com/late-static-binding-php-what-how-when/)
+ [A real life example of using Late Static Binding in PHP](https://dev.to/asifzcpe/a-real-life-example-of-using-late-static-binding-in-php-h6b/)
+ [Example of using Late Static Binding in PHP](https://dev.to/developeralamin/example-of-using-late-static-binding-in-php-18kh)

## Related

+ [Self](self.html)
+ [static](static.html)
+ [parent](parent.html)
+ [Early Binding](early-binding.html)
+ [Child Class](child-class.html)
+ [Compile Time](compile-time.html)
+ [Execution Time](execution-time.html)
+ [Method Resolution Order (MRO)](mro.html)
