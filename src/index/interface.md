# Interface
Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented.

Interfaces may have methods signatures, without a body, constants. Since version 8.4, they may also have properties, as long as the property is public, and the hooks are abstract, or without body.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/interface.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/interface.html","name":"Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 16:23:55 +0000","dateModified":"Wed, 08 Jul 2026 16:23:55 +0000","description":"Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Fluent Interface](fluent-interface.ini.html)
+ [BackedEnum](backedenum.ini.html)
+ [Class Interface Trait Enumeration (CITE)](cite.ini.html)
+ [Object](object.ini.html)
+ [UnitEnum](unitenum.ini.html)
+ [Countable Interface](countable.ini.html)
+ [Expressive Interface](expressive-interface.ini.html)
+ [Flexibility](flexibility.ini.html)
+ [Polymorphism](polymorphism.ini.html)
+ [Program To Interface](program-to-interface.ini.html)
+ [Direct Output](direct-output.ini.html)
+ [Interoperability](interoperability.ini.html)
+ [Intersection Type](intersection-type.ini.html)
+ [Proxy](proxy.ini.html)
+ [Facade](facade.ini.html)
+ [Proxy Class](proxy-class.ini.html)
+ [SplObserver](splobserver.ini.html)
+ [SplSubject](splsubject.ini.html)
+ [Base Class](base-class.ini.html)
+ [class\_implements()](class_implements.ini.html)
+ [DateTimeInterface](datetimeinterface.ini.html)
+ [Decorator Pattern](decorator.ini.html)
+ [DOMChildNode](domchildnode.ini.html)
+ [DOMParentNode](domparentnode.ini.html)
+ [IteratorAggregate](iteratoraggregate.ini.html)
+ [Random\\CryptoSafeEngine](random_cryptosafeengine.ini.html)
+ [Random\\Engine](random_engine.ini.html)
+ [Reflector](reflector.ini.html)
+ [SeekableIterator](seekableiterator.ini.html)
+ [SessionHandlerInterface](sessionhandlerinterface.ini.html)
+ [SessionIdInterface](sessionidinterface.ini.html)
+ [SessionUpdateTimestampHandlerInterface](sessionupdatetimestamphandlerinterface.ini.html)
+ [Dependency Inversion (DIP)](dependency-inversion.ini.html)
+ [Existential Type](existential-type.ini.html)
+ [Ports And Adapters](ports-and-adapters.ini.html)
+ [Row Polymorphism](row-polymorphism.ini.html)
+ [First-Class Module](first-class-module.ini.html)
+ [Pattern](pattern.ini.html)
+ [Abstract Class](abstract-class.ini.html)
+ [Structural Typing](structural-typing.ini.html)
+ [Type Class](type-class.ini.html)
