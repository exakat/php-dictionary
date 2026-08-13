# Software Bill Of Material (SBOM)
A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project. It lists every piece of code, directly included or indirectly pulled in via dependencies, so one knows exactly what's in the application source code. It makes possible to track vulnerabilities, licenses, and outdated libraries.

For PHP projects, an SBOM typically contains:

+ Composer dependencies: these are the packages listed in composer.json, and their actual version in composer.lock
+ PHP version, core extensions and third party extensions
+ System dependencies versions: the underlying libraries that PHP extensions depend upon
+ Licenses for each component
+ Known vulnerabilities, if any, such as CVEs from the PHP Security Advisories Database

SBOM uses the Cyclone DX format as a standard.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sbom.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sbom.html","name":"Software Bill Of Material (SBOM)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:03 +0000","dateModified":"Sat, 08 Aug 2026 14:31:03 +0000","description":"A Software Bill of Materials, aka SBOM, is a formal, machine-readable inventory of all components, libraries, and dependencies used in a software project","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Software Bill Of Material (SBOM).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sbom"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Software_supply_chain)**
## See Also

+ [Syft](https://github.com/anchore/syft)
+ [CycloneDX PHP Composer Plugin](https://github.com/CycloneDX/cyclonedx-php-composer)

## Related

+ [Dependency](dependency.html)
+ [Specification](specification.html)
+ [Supply Chain Attack](supply-chain-attack.html)
