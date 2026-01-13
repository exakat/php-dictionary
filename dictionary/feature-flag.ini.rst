.. _feature-switch:
.. meta::
	:description:
		feature-flag: A feature flag, also known as a feature toggle or feature switch, is a software development technique used to enable or disable certain features or functionalities in an application or system.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: feature-flag
	:twitter:description: feature-flag: A feature flag, also known as a feature toggle or feature switch, is a software development technique used to enable or disable certain features or functionalities in an application or system
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: feature-flag
	:og:type: article
	:og:description: A feature flag, also known as a feature toggle or feature switch, is a software development technique used to enable or disable certain features or functionalities in an application or system
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/feature-switch.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"feature-flag","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"A feature flag, also known as a feature toggle or feature switch, is a software development technique used to enable or disable certain features or functionalities in an application or system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/feature-flag.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


feature-flag
------------

A feature flag, also known as a feature toggle or feature switch, is a software development technique used to enable or disable certain features or functionalities in an application or system. Instead of deploying new features directly to all users, developers can use feature flags to control the visibility and activation of these features.

Feature flags are typically implemented as conditional statements in the codebase, allowing developers to selectively enable or disable features based on various criteria such as user roles, user segments, environment conditions, or A/B testing groups. This allows for gradual feature rollouts, experimentation, and controlled releases, which can help mitigate risks associated with introducing new features or changes to a system.

.. code-block:: php
   
   <?php
   
   // feature flag implemented via PHP directives
   if (ini_get('date_is_visible')) {
   	echo date('r');
   }
   ?>


`Documentation <https://en.wikipedia.org/wiki/Feature_toggle>`__

See also https://configcat.com/blog/2022/09/16/how-to-use-feature-flags-in-php/, https://chrastecky.dev/programming/unleash-feature-flags-in-php

Related packages : `ylsideas/feature-flags <https://packagist.org/packages/ylsideas/feature-flags>`_
