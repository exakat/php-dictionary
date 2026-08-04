# Class Getter Method
Getters are methods used to access the values of a property. Getters may include formatting, or not. 

Getters are usually created with a setter method.

Getters are build on top of private properties: that way, the getter is main way to reach the data. 

Getters may be replaced by a property hook.

Getters generates a lot of boilerplate code, as they must be created for each property, and are often reduced to returning the property itself. This does not help performances too, as a call to a property is now replaced by a method call.

```php
<?php

    class X {
        private $property;
        
        public function getProperty() {
            return $this->property;
        }
    }

?>
```

Related : [Class](Class), [Class Setter Method](Class Setter Method), [Class Wither Method](Class Wither Method), [Property Hook](Property Hook), [Visibility](Visibility), [Boilerplate](Boilerplate), [Encapsulation](Encapsulation), [implements](implements)
