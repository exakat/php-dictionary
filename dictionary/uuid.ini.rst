.. _uuid:
.. meta::
	:description:
		Universally Unique IDentifier (UUID): UUID is a Universally Unique IDentifier.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Universally Unique IDentifier (UUID)
	:twitter:description: Universally Unique IDentifier (UUID): UUID is a Universally Unique IDentifier
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Universally Unique IDentifier (UUID)
	:og:type: article
	:og:description: UUID is a Universally Unique IDentifier
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/uuid.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Universally Unique IDentifier (UUID)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"UUID is a Universally Unique IDentifier","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Universally Unique IDentifier (UUID).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Universally Unique IDentifier (UUID)
------------------------------------

UUID is a Universally Unique IDentifier. It is an identifier that anyone can generate, and that has a near certainty that it identify something unique, in the universe. 

UUID are in contrast to classic integer ids, such as auto-increment primary keys, which usually start at 0, and are incrementally generated. Not only this means connecting to a database, and querying the right table, but also means that there are multiple usage of 1, in each of these tables.

UUID are a standard. The standard has versions from 1 to 5, each with improvements.



.. code-block:: php
   
   
   123e4567-e89b-12d3-a456-426614174000
   


`Documentation <https://en.wikipedia.org/wiki/Universally_unique_identifier>`__

See also `Introducing ramsey/uuid <https://benramsey.com/blog/2016/04/ramsey-uuid/>`_
