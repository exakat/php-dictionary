# Primitive Obsession
Primitive Obsession a bias in the way the code is written. It happens when the code uses too many primitive types, even to represent complex concepts.
```php
<?php

class Person
{
    public string $id;

    public string $firstName;
    public string $lastName;

    public string $address;
    public string $postCode;
    public string $city;
    public string $country;
}

?>
```

## See Also

+ [Primitive Obsession](https://refactoring.guru/smells/primitive-obsession)

Related : [Scalar Types](Scalar Types)
