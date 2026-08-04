# Interface
Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented.

Interfaces may have methods signatures, without a body, constants. Since version 8.4, they may also have properties, as long as the property is public, and the hooks are abstract, or without body.
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

## See Also

+ [Interfaces vs Abstract Classes in PHP](https://ashallendesign.co.uk/blog/interfaces-vs-abstract-classes-in-php)
+ [Interfaces - the misunderstood concept](http://radify.io/blog/interfaces-the-misunderstood-concept/)
+ [Granular interfaces](https://sebastiandedeyne.com/granular-interfaces/)
+ [When to add an interface to a class](https://matthiasnoback.nl/2018/08/when-to-add-an-interface-to-a-class/)
+ [Code to an interface!](https://blog.oussama-mater.tech/code-to-an-interface/)

Related : [Fluent Interface](Fluent Interface), [BackedEnum](BackedEnum), [Class Interface Trait Enumeration (CITE)](Class Interface Trait Enumeration (CITE)), [Object](Object), [UnitEnum](UnitEnum), [Countable Interface](Countable Interface), [Expressive Interface](Expressive Interface), [Flexibility](Flexibility), [Polymorphism](Polymorphism), [Program To Interface](Program To Interface), [Direct Output](Direct Output), [Interoperability](Interoperability), [Intersection Type](Intersection Type), [Proxy](Proxy), [Facade](Facade), [Proxy Class](Proxy Class), [SplObserver](SplObserver), [SplSubject](SplSubject), [Base Class](Base Class), [class_implements()](class_implements()), [DateTimeInterface](DateTimeInterface), [Decorator Pattern](Decorator Pattern), [DOMChildNode](DOMChildNode), [DOMParentNode](DOMParentNode), [IteratorAggregate](IteratorAggregate), [Random\CryptoSafeEngine](Random\CryptoSafeEngine), [Random\Engine](Random\Engine), [Reflector](Reflector), [SeekableIterator](SeekableIterator), [SessionHandlerInterface](SessionHandlerInterface), [SessionIdInterface](SessionIdInterface), [SessionUpdateTimestampHandlerInterface](SessionUpdateTimestampHandlerInterface), [Dependency Inversion (DIP)](Dependency Inversion (DIP)), [Existential Type](Existential Type), [Ports And Adapters](Ports And Adapters), [Row Polymorphism](Row Polymorphism), [First-Class Module](First-Class Module), [Pattern](Pattern), [Abstract Class](Abstract Class), [Structural Typing](Structural Typing), [Type Class](Type Class)
