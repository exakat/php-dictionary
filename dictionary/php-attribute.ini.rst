.. _php-attribute:
.. meta::
	:description:
		PHP Native Attributes: PHP defines its own native attributes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Native Attributes
	:twitter:description: PHP Native Attributes: PHP defines its own native attributes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Native Attributes
	:og:type: article
	:og:description: PHP defines its own native attributes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-attribute.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PHP Native Attributes","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"PHP defines its own native attributes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP Native Attributes.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP Native Attributes
---------------------

PHP defines its own native attributes.

+ Attribute
+ ReturnTypeWillChange
+ SensitiveParameter
+ AllowDynamicProperties
+ Override
+ Deprecated
+ NoDiscard
+ DelayedTargetValidation.

.. code-block:: php
   
   <?php
   
   #[Deprecated]
   class X {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.interfaces.php>`__

Related : :ref:`Attribute Class <attribute-class>`, :ref:`Return Type Will Change <returntypewillchange>`, :ref:`Sensitive Parameter <sensitiveparameter>`, :ref:`Allow Dynamic Properties <allowdynamicproperties>`, :ref:`Override Attribute <override>`, :ref:`Deprecated <deprecated>`, :ref:`NoDiscard <nodiscard>`, :ref:`delayedtargetvalidation <delayedtargetvalidation>`
