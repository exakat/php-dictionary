.. _sbom:
.. meta::
	:description:
		Software Bill Of Material (SBOM): A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Software Bill Of Material (SBOM)
	:twitter:description: Software Bill Of Material (SBOM): A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Software Bill Of Material (SBOM)
	:og:type: article
	:og:description: A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sbom.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Software Bill Of Material (SBOM)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 23 Mar 2026 15:33:46 +0000","dateModified":"Mon, 23 Mar 2026 15:33:46 +0000","description":"A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Software Bill Of Material (SBOM).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Software Bill Of Material (SBOM)
--------------------------------

A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project. It lists every piece of code, directly included or indirectly pulled in via dependencies, so one knows exactly what's in the application source code. It makes possible to track vulnerabilities, licenses, and outdated libraries.

For PHP projects, an SBOM typically contains:

+ Composer dependencies: these are the packages listed in composer.json, and their actual vesrion in composer.lock
+ PHP version, core extensions and third party extensions
+ System dependencies versions: the underlying librairies that PHP extensions depend upon
+ Licenses for each component
+ Known vulnerabilities, if any, such as CVEs from the PHP Security Advisories Database

SBOM uses the Cyclone DX format as a standard.


`Documentation <https://en.wikipedia.org/wiki/Software_supply_chain>`__

See also https://github.com/anchore/syft, https://github.com/CycloneDX/cyclonedx-php-composer
