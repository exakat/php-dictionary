.. _value-object:

Value Object
------------

A value object is a design pattern used to represent immutable objects that encapsulate a set of related values or attributes. Unlike entities, which are identified by their identity and can change over time, value objects are defined by their state and remain constant throughout their lifetime.

Value objects are typically used to model concepts that don't have a distinct identity but are important for the behavior and correctness of the system. For example, a Date value object can represent a specific date, and its attributes may include the year, month, and day. Another example is a Money value object that represents a monetary amount, including attributes such as the currency and the value.

.. code-block:: php
   
   
   <?php
   
   class person {
   	public $name;
   	public $lastName;
   }
   
   ?>
   


`Documentation <https://en.wikipedia.org/wiki/Value_object>`__

See also `Writing value objects in PHP <https://dev.to/ianrodrigues/writing-value-objects-in-php-4acg>`_, `Value objects in PHP <https://lessthan12ms.com/value-objects-in-php.html>`_, `Is it a DTO or a Value Object? <https://matthiasnoback.nl/2022/09/is-it-a-dto-or-a-value-object/>`_, `Bring Value to your code <https://notes.belgeek.dev/2023/11/05/bring-value-to-your-code/>`_, `Value Objects in PHP 8: Building a better code <https://dev.to/cnastasi/value-objects-in-php-8-building-a-better-code-38k8?ref=dailydev>`_, `Advanced Value Objects in PHP 8 <https://dev.to/cnastasi/advanced-value-objects-in-php-8-1lp0>`_

Related packages : `sebastian/type <https://packagist.org/packages/sebastian/type>`_, `cuyz/valinor <https://packagist.org/packages/cuyz/valinor>`_
