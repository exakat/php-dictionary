.. _type-erasure:
.. _erased-type:
.. _erasing-type:
.. meta::
	:description:
		Types Erasure: Type Erasure is the removal of type annotations from the source code when going to production.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Types Erasure
	:twitter:description: Types Erasure: Type Erasure is the removal of type annotations from the source code when going to production
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Types Erasure
	:og:type: article
	:og:description: Type Erasure is the removal of type annotations from the source code when going to production
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/type-erasure.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Types Erasure","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 07 May 2026 05:47:53 +0000","dateModified":"Thu, 07 May 2026 05:47:53 +0000","description":"Type Erasure is the removal of type annotations from the source code when going to production","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Types Erasure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Types Erasure
-------------

Type Erasure is the removal of type annotations from the source code when going to production. 

There may be several goals with this operation: 

+ Handle unsupported types, such as generics. They are supported by tooling, but not by the PHP engine, so after using them during development phase, they are removed
+ Speed up production code by removing execution-time checks. This requires that types are safe and sound

Type erasure is a transformation tool, akin to transpiling, that convert the developed code into production code: it is run at deployment stage.

One alternative to type erasure is monomorphization, where every needed type is created.

`Documentation <https://en.wikipedia.org/wiki/Type_erasure>`__

See also https://github.com/mrsuh/php-generics, https://wiki.php.net/rfc/bound_erased_generic_types

Related : :ref:`Type System <type>`, :ref:`Deployment <deployment>`, , , :ref:`Generics <generics>`, :ref:`Performance <performance>`
