.. _centralization:
.. _federation:
.. meta::
	:description:
		Centralization: Centralization is the concept to bring all identical elements at the same place.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Centralization
	:twitter:description: Centralization: Centralization is the concept to bring all identical elements at the same place
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Centralization
	:og:type: article
	:og:description: Centralization is the concept to bring all identical elements at the same place
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/centralization.ini.html
	:og:locale: en


Centralization
--------------

Centralization is the concept to bring all identical elements at the same place.

For example, if a literal value is used throughout the code, it may be turned into a global constant, defined in one place, and used everywhere else. 

Constants are a tool of centralization for values; functions and classes are a tool of centralization for commands. 

Centralization helps the code, as changing one definition propagates the change to different and unrelated parts of the code. 

Centralization is sometimes planned, and sometimes discovered with the tide. Then, it has to be extracted from the current code, as some minor local adaption may make it difficult to adapt.

Centralization is a necessary first step to standardisation. 

It is also called federation.

`Documentation <https://en.wikipedia.org/wiki/Logic_centralization_pattern>`__

Related : :ref:`Don't Repeat Yourself (DRY) <dry>`, :ref:`Constants <constant>`
