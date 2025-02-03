.. _attribute:
.. meta::
	:description:
		Attributes: Attributes are machine readable options that may be added PHP code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Attributes
	:twitter:description: Attributes: Attributes are machine readable options that may be added PHP code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Attributes
	:og:type: article
	:og:description: Attributes are machine readable options that may be added PHP code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/attribute.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Attributes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"Attributes are machine readable options that may be added PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Attributes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Attributes
----------

Attributes are machine readable options that may be added PHP code. Since PHP 8.0, they are accessible from PHP. 

Attributes provide extra and customisable options for the PHP engine, static analysis tools and coders alike. 

Attributes are a modern version of the phpdoc comment blocks.

Attributes are backward compatible: they can be used in any PHP version, and are ignored when not supported. 

Attributes may or may not have a supporting class: attributes may be used for their semantic value, or with related code. 


.. code-block:: php
   
   <?php
   
       #[Attribute]
       class SetUp {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.attributes.overview.php>`__

See also `PHP Native Attributes <https://www.exakat.io/en/php-native-attributes-quick-reference/>`_, `Using PHP Attributes instead of Annotations for Static Analysis <https://www.linkedin.com/pulse/using-php-attributes-instead-annotations-static-carlos-granados-qanwe/>`_, `Unlocking the Power of Attributes in PHP <https://itsimiro.medium.com/unlocking-the-power-of-attributes-in-php-a6af57225bbf>`_, `PHP Language Extensions <https://github.com/DaveLiddament/php-language-extensionsf>`_

Related : :ref:`PHPdoc <phpdoc>`, :ref:`PHP Native Attribute <php-native-attribute>`

Added in PHP 8.0
