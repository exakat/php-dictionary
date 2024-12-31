.. _vo:
.. meta::
	:description:
		Value Object: VO stands for Value Object : a simple object whose equality is not based on identity.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Value Object
	:twitter:description: Value Object: VO stands for Value Object : a simple object whose equality is not based on identity
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Value Object
	:og:type: article
	:og:description: VO stands for Value Object : a simple object whose equality is not based on identity
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/vo.ini.html
	:og:locale: en


Value Object
------------

VO stands for Value Object : a simple object whose equality is not based on identity. This means that two value objects are equal when they have the same values. They do not have to be the same object. 

VO is a class, with properties, constants and methods. 

VO may be confused with Data Transfert Object: the former's role is to carry data inside the application, the first one holds data, and can only be compared by its values.

`Documentation <https://en.wikipedia.org/wiki/Data_transfer_object>`__

See also `Writing value objects in PHP <https://dev.to/ianrodrigues/writing-value-objects-in-php-4acg>`_, `Understanding Value Objects in PHP <https://wendelladriel.com/blog/understanding-value-objects-in-php>`_

Related : :ref:`Domain Design Driven <ddd>`, :ref:`Class Entities <class-entity>`
