.. _generics:

Generics
--------

Generics are a style of types, where the type of a property, parameter or return is specified at the declaration level. 

The generics syntax looks like : `$users = new List<User>();` where `List` is a class that holds a list of items, and those items are of the type between brackets. Here, it is `User`.

Generics allows the creation of general classes, that can process several types of data. The actual application's type is declared in the type itself. This is similar to configure an array to only handle one type of elements.

Generics have been submitted as RFC since 2016, and are currently not implemented, in the foreseeable future. 

One implementation of generics is available, with transpiling : see ``mrsuh/php-generics``.


`Documentation <https://stitcher.io/blog/generics-in-php-1>`__

See also `Why we can't have generics in PHP <https://stitcher.io/blog/generics-in-php-3>`_, `PHP RFC: Generic Types and Functions <https://wiki.php.net/rfc/generics>`_, `mrsuh/php-generics <https://github.com/mrsuh/php-generics>`_
