.. _asymmetric-property:
.. meta::
	:description:
		Asymmetric Property: An asymmetric property is a property that specify the asymmetric visibility.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Asymmetric Property
	:twitter:description: Asymmetric Property: An asymmetric property is a property that specify the asymmetric visibility
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Asymmetric Property
	:og:type: article
	:og:description: An asymmetric property is a property that specify the asymmetric visibility
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/asymmetric-property.ini.html
	:og:locale: en


Asymmetric Property
-------------------

An asymmetric property is a property that specify the asymmetric visibility. This means that the property has a different visibility for read and for write. By default, visibility is symetric: identical to write and read.

.. code-block:: php
   
   <?php
   
   class x {
   	public private(set) int $property;
   }
   
   ?>


Related : :ref:`Asymetric Visibility <asymmetric-visibility>`
