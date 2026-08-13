# Build
A build is the automated process of transforming source code into a deployable artifact. Build steps typically include: installing dependencies, running static analysis, executing tests, generating assets, and packaging the application.

Build processes are commonly driven by tools such as Make, Phing, Composer scripts, or shell scripts, and are integrated into a Continuous Integration pipeline.

A reproducible build produces the same artifact from the same source code, which is essential for reliable deployments.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/build.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/build.html","name":"Build","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A build is the automated process of transforming source code into a deployable artifact","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Build.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"build"}]}]}</script>
```php
<?php

    // composer.json scripts section acts as a simple build runner
    // { "scripts": { "build": ["@lint", "@test", "@analyse"] } }
    
    // Phing build.xml target example:
    // <target name="build" depends="lint,test,package"/>

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Software_build)**
## See Also

+ [Phing — PHP build tool](https://www.phing.info/)
+ [Composer scripts](https://getcomposer.org/doc/articles/scripts.md)
+ [Deployer — PHP deployment tool](https://deployer.org/)

## Related

+ [Continuous Integration (CI)](ci.html)
+ [DevOps](devops.html)
+ [Composer](composer.html)
+ [Deployment](deploy.html)
+ [Test](test.html)
+ [Makefile](makefile.html)

## Related packages

+ [phing/phing](https://packagist.org/packages/phing/phing)
+ [deployer/deployer](https://packagist.org/packages/deployer/deployer)
