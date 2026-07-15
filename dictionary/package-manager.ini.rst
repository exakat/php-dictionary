.. _package-manager:
.. _dependency-manager:
.. meta::
	:description:
		Package Manager: A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Package Manager
	:twitter:description: Package Manager: A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Package Manager
	:og:type: article
	:og:description: A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/package-manager.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/package-manager.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/package-manager.ini.html","name":"Package Manager","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:11:17 +0000","dateModified":"Thu, 09 Jul 2026 09:11:17 +0000","description":"A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Package Manager.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Package Manager
---------------

A package manager is a tool that automates the process of installing, upgrading, configuring, and removing software packages. Packages are reusable units of code, often called libraries or dependencies.

In the PHP ecosystem, Composer is the dominant package manager. It resolves dependency trees, downloads packages from Packagist, and generates an autoloader. The ``composer.json`` file declares direct dependencies, while ``composer.lock`` pins the exact versions of every resolved package.

Other ecosystems have their own package managers: npm and Yarn for JavaScript, pip for Python, gem for Ruby, and apt or brew at the OS level. PHP also has PEAR, older, mostly replaced by Composer, and PIE, a modern extension installer.

Package managers bring reproducibility, security auditability, and semantic versioning to dependency management.

`Documentation <https://getcomposer.org/>`__

See also `Composer documentation <https://getcomposer.org/doc/>`_.

Related : :ref:`Composer <composer>`, :ref:`Packagist <packagist>`, :ref:`PEAR <pear>`, :ref:`PHP Installer For Extensions (PIE) <pie>`, :ref:`Dependency <dependency>`, :ref:`Supply Chain <supply-chain>`, :ref:`Semantic Versioning <semantic-versioning>`, :ref:`Checksum <checksum>`
