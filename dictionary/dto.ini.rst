.. _dto:

DTO
---

DTO stands for Data Transfer Object : it is an object that carries data between methods and different part of the architecture. 

DTO is a class, with only properties. It replaces advantageously arrays. It may be used for typing, and do not hold methods.

DTO are easily confused with Value Object: the first one's role is to carry data inside the application, the second one holds data, and can only be compared by its values.


`Documentation <https://en.wikipedia.org/wiki/Data_transfer_object>`__

See also `Data Transfer Object V3 Modernizes DTOs With PHP 8 Features <https://laravel-news.com/data-transfer-object-v3-php-8>`_, `Is it a DTO or a Value Object? <https://matthiasnoback.nl/2022/09/is-it-a-dto-or-a-value-object/>`_

Related : :ref:`Value Object <vo>`
