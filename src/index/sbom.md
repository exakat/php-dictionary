# Software Bill Of Material (SBOM)
A Software Bill of Materials, aka ``SBOM``, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project. It lists every piece of code, directly included or indirectly pulled in via dependencies, so one knows exactly what's in the application source code. It makes it possible to track vulnerabilities, licenses, and outdated libraries.

For PHP projects, a ``SBOM`` typically contains:

+ Composer dependencies: these are the packages listed in composer.json, and their actual version in composer.lock
+ PHP version, core extensions and third party extensions
+ System dependencies versions: the underlying libraries that PHP extensions depend upon
+ Licenses for each component
+ Known vulnerabilities, if any, such as CVEs from the PHP Security Advisories Database

``SBOM`` uses the CycloneDX format as a standard.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sbom.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sbom.html","name":"Software Bill Of Material (SBOM)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Nov 2026 11:37:54 +0000","dateModified":"Tue, 10 Nov 2026 11:37:54 +0000","description":"A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sbom.html"]}],"keywords":["security","acronym","software lifecycle"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dependency.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/specification.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/supply-chain-attack.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Software_supply_chain"},{"@type":"CreativeWork","name":"Syft","url":"https:\/\/github.com\/anchore\/syft"},{"@type":"CreativeWork","name":"CycloneDX PHP Composer Plugin","url":"https:\/\/github.com\/CycloneDX\/cyclonedx-php-composer"},{"@type":"CreativeWork","name":"PHP SBOM Guide: Composer Dependencies and Security","url":"https:\/\/sbomgenerator.com\/guides\/php"},{"@type":"CreativeWork","name":"SBOM Generation Guide for PHP - Composer","url":"https:\/\/sbomify.com\/guides\/php\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.41","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sbom"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Software_supply_chain)**
## See Also

+ [Syft](https://github.com/anchore/syft)
+ [CycloneDX PHP Composer Plugin](https://github.com/CycloneDX/cyclonedx-php-composer)
+ [PHP SBOM Guide: Composer Dependencies and Security](https://sbomgenerator.com/guides/php)
+ [SBOM Generation Guide for PHP - Composer](https://sbomify.com/guides/php/)

## Related

+ [Dependency](dependency.html)
+ [Specification](specification.html)
+ [Supply Chain Attack](supply-chain-attack.html)
