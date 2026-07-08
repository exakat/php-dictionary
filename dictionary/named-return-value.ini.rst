.. _named-return-value:
.. meta::
	:description:
		Named Return Values: Go lets a function declare names for its return values as part of its signature, such as ``func divmod(a, b int) (q, r int)``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Named Return Values
	:twitter:description: Named Return Values: Go lets a function declare names for its return values as part of its signature, such as ``func divmod(a, b int) (q, r int)``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Named Return Values
	:og:type: article
	:og:description: Go lets a function declare names for its return values as part of its signature, such as ``func divmod(a, b int) (q, r int)``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/named-return-value.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Named Return Values","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 08 Jul 2026 15:19:42 +0000","dateModified":"Wed, 08 Jul 2026 15:19:42 +0000","description":"Go lets a function declare names for its return values as part of its signature, such as ``func divmod(a, b int) (q, r int)``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Named Return Values.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Named Return Values
-------------------

Go lets a function declare names for its return values as part of its signature, such as ``func divmod(a, b int) (q, r int)``. Those names act as ordinary local variables, pre-initialized to their zero value, that the function can assign to throughout its body; a bare ``return`` statement, with no expression, returns their current values. Combined with ``defer``, a named return value can even be modified after the ``return`` statement has been reached but before the function actually exits, which is how Go idiomatically attaches an error to a return value from within a deferred recovery.

Naming the return values also documents, directly in the signature, what each returned position represents, which plain positional return types do not.

PHP has no named return values. A ``return`` statement always requires an explicit expression, PHP's return type declaration only names a type, never the value itself, and a returned array or object's fields are named through the value itself, not through the function's signature. The closest equivalent is documenting the meaning of each key in a returned array or object through PHPDoc, which conveys names to the reader but is not enforced or usable as an implicit accumulator the way Go's named returns are.

`Documentation <https://go.dev/tour/basics/7>`__

Related : :ref:`Return <return>`, :ref:`Return Type <return-type>`, :ref:`Defer Statement <defer>`, :ref:`Multiple Return Values <multiple-return-value>`
