# ETL
ETL, for Extract, Transform, Load, is a three-stage process used to move data from one or more source systems into a target system. Extract reads data from the source, for example a legacy database, a CSV export, or an API; transform converts, cleans, and reshapes that data to match the target's schema and rules, such as mapping locale codes or resolving foreign keys; load writes the transformed data into the destination.

ETL is the backbone of data migrations, data warehousing, and platform-to-platform migrations, such as moving a store from one e-commerce platform to another. The transform stage is where most silent bugs live: a lookup that returns null instead of raising an error on an unmapped value, a string replacement that only handles the common case, or a locale code that does not match any entry in a mapping table, will quietly drop or nullify data instead of failing the migration.

A variant, ELT, for Extract, Load, Transform, loads raw data first and transforms it inside the target system, often using its own query engine. ETL steps are commonly implemented as CLI scripts or queued jobs, reading from one data source and writing through an ORM, or direct SQL, into another, with row counts and conversion rates tracked to detect when a stage silently drops far more rows than expected.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/etl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/etl.html","name":"ETL","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:03:25 +0000","dateModified":"Tue, 04 Aug 2026 11:03:25 +0000","description":"ETL, for Extract, Transform, Load, is a three-stage process used to move data from one or more source systems into a target system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/etl.html"]}],"alternateName":["extract-transform-load"],"keywords":["architecture","acronym","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/migration.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/referential-integrity.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/foreign-key.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pipeline.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/silent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Extract,_transform,_load"},{"@type":"CreativeWork","name":"Manipulating Data with PHP: performing ETL operations","url":"https:\/\/dev.to\/ecourtial\/manipulating-data-with-php-performing-etl-operations-g4j"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"etl"}]}]}</script>
```php
<?php

    // A minimal ETL step: extract, transform, load
    foreach ($source->fetchProducts() as $row) {          // extract
        $locale = $localeMap[$row['locale_code']] ?? null; // transform

        if ($locale === null) {
            $errors[] = $row['locale_code']; // don't fail silently
            continue;
        }

        $target->insertProduct($row, $locale);             // load
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Extract,_transform,_load)**
## See Also

+ [Manipulating Data with PHP: performing ETL operations](https://dev.to/ecourtial/manipulating-data-with-php-performing-etl-operations-g4j)

## Related

+ [Migration](migration.html)
+ [Database](database.html)
+ [Referential Integrity](referential-integrity.html)
+ [Foreign Key](foreign-key.html)
+ [Pipeline](pipeline.html)
+ [Silent Behavior](silent.html)
+ [Validation](validation.html)

## Related packages

+ [flow-php/etl](https://packagist.org/packages/flow-php/etl)
+ [fr3on/php-etl](https://packagist.org/packages/fr3on/php-etl)
