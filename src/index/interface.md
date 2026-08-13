# Interface
Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented.

Interfaces may have methods signatures, without a body, constants. Since version 8.4, they may also have properties, as long as the property is public, and the hooks are abstract, or without body.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html","name":"Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Interface.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"interface"}]}]}</script>
```php
<?php

    // Declare the interface 'Template'
    interface Template
    {
        public const A = 1;

        private string $p {
            get;
        }

        public function setVariable($name, $var);
        public function getHtml($template);
    }
    
    // Implement the interface
    class WorkingTemplate implements Template
    {
        private $vars = [];
      
        public function setVariable($name, $var)
        {
            $this->vars[$name] = $var;
        }
      
        public function getHtml($template)
        {
            foreach($this->vars as $name => $value) {
                $template = str_replace('{' . $name . '}', $value, $template);
            }
     
            return $template;
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.interfaces.php)**
## See Also

+ [Interfaces vs Abstract Classes in PHP](https://ashallendesign.co.uk/blog/interfaces-vs-abstract-classes-in-php)
+ [Interfaces - the misunderstood concept](http://radify.io/blog/interfaces-the-misunderstood-concept/)
+ [Granular interfaces](https://sebastiandedeyne.com/granular-interfaces/)
+ [When to add an interface to a class](https://matthiasnoback.nl/2018/08/when-to-add-an-interface-to-a-class/)
+ [Code to an interface!](https://blog.oussama-mater.tech/code-to-an-interface/)

## Related

+ [Fluent Interface](fluent-interface.html)
+ [BackedEnum](backedenum.html)
+ [Class Interface Trait Enumeration (CITE)](cite.html)
+ [Object](object.html)
+ [UnitEnum](unitenum.html)
+ [Countable Interface](countable.html)
+ [Expressive Interface](expressive-interface.html)
+ [Flexibility](flexibility.html)
+ [Polymorphism](polymorphism.html)
+ [Program To Interface](program-to-interface.html)
+ [Direct Output](direct-output.html)
+ [Interoperability](interoperability.html)
+ [Intersection Type](intersection-type.html)
+ [Proxy](proxy.html)
+ [Facade](facade.html)
+ [Proxy Class](proxy-class.html)
+ [SplObserver](splobserver.html)
+ [SplSubject](splsubject.html)
+ [Base Class](base-class.html)
+ [class\_implements()](class_implements.html)
+ [DateTimeInterface](datetimeinterface.html)
+ [Decorator Pattern](decorator.html)
+ [DOMChildNode](domchildnode.html)
+ [DOMParentNode](domparentnode.html)
+ [IteratorAggregate](iteratoraggregate.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.html)
+ [Random\\Engine](random_engine.html)
+ [Reflector](reflector.html)
+ [SeekableIterator](seekableiterator.html)
+ [SessionHandlerInterface](sessionhandlerinterface.html)
+ [SessionIdInterface](sessionidinterface.html)
+ [SessionUpdateTimestampHandlerInterface](sessionupdatetimestamphandlerinterface.html)
+ [Dependency Inversion (DIP)](dependency-inversion.html)
+ [Existential Type](existential-type.html)
+ [Ports And Adapters](ports-and-adapters.html)
+ [Row Polymorphism](row-polymorphism.html)
+ [First-Class Module](first-class-module.html)
+ [Pattern](pattern.html)
+ [Abstract Class](abstract-class.html)
+ [Structural Typing](structural-typing.html)
+ [Type Class](type-class.html)
+ [Marker Interface](marker-interface.html)
