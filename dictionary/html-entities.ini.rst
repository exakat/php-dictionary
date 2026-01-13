.. _html-entities:
.. meta::
	:description:
		HTML Entities: HTML entities are a way to write special characters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: HTML Entities
	:twitter:description: HTML Entities: HTML entities are a way to write special characters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: HTML Entities
	:og:type: article
	:og:description: HTML entities are a way to write special characters
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/html-entities.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"HTML Entities","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"HTML entities are a way to write special characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/HTML Entities.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


HTML Entities
-------------

HTML entities are a way to write special characters. For example, the superior and inferior characters have a special meaning in HTML. To be able to display them correctly, it is recommended to use the following writing : ``&gt;``  and ``&lt;``.

This protection is extended to many characters. They have a numerical entity, such as ``&38;`` and a literal entity, such as ``&amp;``, for the ampersand. 

Such entities are typical of HTML. They are different in different languages. 

PHP uses htmlentities() and html_entities_decode() to convert those characters from and to their entities.

HTML entities are useful in the HTML code, but they are confusing in a text file, which has no special entity.



.. code-block:: php
   
   <?php
   
   // echo &amp;
   echo htmlentities("&");
   
   ?>


`Documentation <https://www.freeformatter.com/html-entities.html>`__

Related : :ref:`Entities <entity>`
