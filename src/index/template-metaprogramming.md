# Template Metaprogramming (TMP)
Template metaprogramming, or ``TMP``, is a technique in which a language's template or generics system is used to perform computations at compile time, producing specialised code as output. The canonical example is C++ templates: because template instantiation is Turing-complete, arbitrarily complex algorithms, such as factorial, Fibonacci, type-list manipulation, policy-based design, etc. can be evaluated entirely by the compiler, with the results embedded in the binary. Rust's const generics and D's ``CTFE``, or compile-time function evaluation, extend the idea with explicit syntax and fewer sharp edges.

The key distinction from ordinary generics is that TMP uses the type-level computation machinery to generate specialised implementations, not merely to parameterise existing ones. Haskell's type families and Scala's implicit-resolution machinery are other instances of the same idea in functional and object-functional settings.

PHP does not support template metaprogramming. PHP has no template system, no compile-time generics, and no phase in which the PHP engine evaluates user-defined type-level computations before executing the program. The closest approximations available are:

+ Userland code generation: scripts that generate specialised PHP class files, e.g., Doctrine's proxy generator, running before the application starts.
+ PHP attributes, PHP 8.0+: metadata attached to declarations and read at runtime by tools such as Doctrine ORM or Symfony's DI container. Attributes drive code generation as a build step, not as a language-level compile-time facility.
+ Static analysis plugins: some tools offer generics-like type annotations in docblocks, ``@template``, ``@psalm-template``, allowing type checkers to enforce generic constraints. These are checked by external tools, not by PHP itself, and produce no runtime specialisation.
+ Runtime type enforcement: a typed collection class that checks ``instanceof`` on every insertion approximates a generic container, but the enforcement happens at runtime.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template-metaprogramming.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template-metaprogramming.html","name":"Template Metaprogramming (TMP)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 03 Sep 2026 14:37:48 +0000","dateModified":"Thu, 03 Sep 2026 14:37:48 +0000","description":"Template metaprogramming, or TMP, is a technique in which a language's template or generics system is used to perform computations at compile time, producing specialised code as output","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template-metaprogramming.html"]}],"alternateName":["tmp"],"keywords":["not supported","metaprogramming","generics","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/generics.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile-time-evaluation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/metaprogramming.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-generation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/attribute.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/homoiconicity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/const.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Template_metaprogramming"},{"@type":"CreativeWork","name":"PHPStan generics","url":"https:\/\/phpstan.org\/blog\/generics-in-php-using-phpdocs"},{"@type":"CreativeWork","name":"Psalm @template","url":"https:\/\/psalm.dev\/docs\/annotating_code\/templated_annotations\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"template-metaprogramming"}]}]}</script>
```php
<?php

    // PHP has no compile-time generics. Runtime type enforcement is the alternative.

    /**
     * @template T of object
     */
    final class TypedCollection {
        /** @var list<T> */
        private array $items = [];

        /** @param class-string<T> $type */
        public function __construct(private readonly string $type) {}

        /** @param T $item */
        public function add(mixed $item): void {
            if (!($item instanceof $this->type)) {
                throw new \TypeError("Expected {$this->type}, got " . get_debug_type($item));
            }
            $this->items[] = $item;
        }

        /** @return list<T> */
        public function all(): array { return $this->items; }
    }

    // SCA understand the @template annotation and enforce T at analysis time.
    // PHP itself enforces nothing until add() is called at runtime.
    $dates = new TypedCollection(\DateTime::class);
    $dates->add(new \DateTime());    // ok
    $dates->add(new \stdClass());    // throws at runtime, not compile time

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Template_metaprogramming)**
## See Also

+ [PHPStan generics](https://phpstan.org/blog/generics-in-php-using-phpdocs)
+ [Psalm @template](https://psalm.dev/docs/annotating_code/templated_annotations/)

## Related

+ [Generics](generics.html)
+ [Compile-time Evaluation](compile-time-evaluation.html)
+ [Metaprogramming](metaprogramming.html)
+ [Code Generation](code-generation.html)
+ [Attribute](attribute.html)
+ [Homoiconicity](homoiconicity.html)
+ [Const](const.html)
