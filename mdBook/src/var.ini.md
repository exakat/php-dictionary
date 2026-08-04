# Var
``var`` keyword for introducing PHP properties in classes. It originates from PHP 4, where it was the only way to declare class properties. Since PHP 5, visibility keywords like ``public``, ``private``, ``protected`` replaced it as the idiomatic syntax.

``var`` is equivalent to ``public``: a property declared with ``var`` is publicly accessible. It is considered legacy syntax and is not recommended.

Modern property declarations support additional modifiers unavailable with ``var``, such as ``final``, ``static``, ``readonly``, and type declarations. 

``var`` may be omitted with other options such as ``final``, ``static``, ``readonly``, or asymmetric visibility: then, the property is publicly accessible.
```php
<?php

    class X {
        var $y;   // public $y
        final $z; // public final $z;
    }

?>
```

Related : [Visibility](Visibility), [Protected Visibility](Protected Visibility), [Private Visibility](Private Visibility), [Public Visibility](Public Visibility), [Properties](Properties), [static](static), [Final Keyword](Final Keyword), [Readonly](Readonly), [Property Type Declaration](Property Type Declaration), [Promoted Properties](Promoted Properties), [Asymmetric Visibility](Asymmetric Visibility), [OOP (Object Oriented Programming)](OOP (Object Oriented Programming)), [Dynamic Properties](Dynamic Properties), [Legacy](Legacy)
