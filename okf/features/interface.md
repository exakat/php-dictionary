---
type: "keyword"
title: "Interface"
description: "Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented."
resource: "https://www.php.net/manual/en/language.oop5.interfaces.php"
tags: ["keyword", "cite", "structure"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Interface

Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented.

Interfaces may have methods signatures, without a body, constants. Since version 8.4, they may also have properties, as long as the property is public, and the hooks are abstract, or without body.

```php
<?php

    // Declare the interface 'Template'
    interface Template
    {
        public const A = 1;

        public string $p {
            get;
        }

        public function setVariable($name, $var);
        public function getHtml($template);
    }
    
    // Implement the interface
    class WorkingTemplate implements Template
    {
        private $vars = [];
      
        public string $p {
            get => 2;
        }

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

## Documentation
- [https://www.php.net/manual/en/language.oop5.interfaces.php](https://www.php.net/manual/en/language.oop5.interfaces.php)

## See Also
- [Interfaces vs Abstract Classes in PHP](https://ashallendesign.co.uk/blog/interfaces-vs-abstract-classes-in-php)
- [Interfaces - the misunderstood concept](http://radify.io/blog/interfaces-the-misunderstood-concept/)
- [Granular interfaces](https://sebastiandedeyne.com/granular-interfaces/)
- [When to add an interface to a class](https://matthiasnoback.nl/2018/08/when-to-add-an-interface-to-a-class/)
- [Code to an interface!](https://blog.oussama-mater.tech/code-to-an-interface/)
- [Interfaces](https://phplang.org/spec/15-interfaces.html)

## Related
- [Fluent Interface](/features/fluent-interface.md)
- [BackedEnum](/features/backedenum.md)
- [Class Interface Trait Enumeration (CITE)](/features/cite.md)
- [Object](/features/object.md)
- [UnitEnum](/features/unitenum.md)
- [Countable Interface](/features/countable.md)
- [Expressive Interface](/features/expressive-interface.md)
- [Flexibility](/features/flexibility.md)
- [Polymorphism](/features/polymorphism.md)
- [Program To Interface](/features/program-to-interface.md)
- [Direct Output](/features/direct-output.md)
- [Interoperability](/features/interoperability.md)
- [Intersection Type](/features/intersection-type.md)
- [Proxy](/features/proxy.md)
- [Facade](/features/facade.md)
- [Proxy Class](/features/proxy-class.md)
- [SplObserver](/features/splobserver.md)
- [SplSubject](/features/splsubject.md)
- [Base Class](/features/base-class.md)
- [class_implements()](/features/class_implements.md)
- [DateTimeInterface](/features/datetimeinterface.md)
- [Decorator Pattern](/features/decorator.md)
- [DOMChildNode](/features/domchildnode.md)
- [DOMParentNode](/features/domparentnode.md)
- [IteratorAggregate](/features/iteratoraggregate.md)
- [Random\CryptoSafeEngine](/features/random_cryptosafeengine.md)
- [Random\Engine](/features/random_engine.md)
- [Reflector](/features/reflector.md)
- [SeekableIterator](/features/seekableiterator.md)
- [SessionHandlerInterface](/features/sessionhandlerinterface.md)
- [SessionIdInterface](/features/sessionidinterface.md)
- [SessionUpdateTimestampHandlerInterface](/features/sessionupdatetimestamphandlerinterface.md)
- [Dependency Inversion (DIP)](/features/dependency-inversion.md)
- [Existential Type](/features/existential-type.md)
- [Ports And Adapters](/features/ports-and-adapters.md)
- [Row Polymorphism](/features/row-polymorphism.md)
- [First-Class Module](/features/first-class-module.md)
- [Pattern](/features/pattern.md)
- [Abstract Class](/features/abstract-class.md)
- [Structural Typing](/features/structural-typing.md)
- [Type Class](/features/type-class.md)
- [Marker Interface](/features/marker-interface.md)

