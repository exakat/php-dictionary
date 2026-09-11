# Mass Assignment
Mass assignment is the practice of setting several properties of an object at once from an associative array, instead of assigning each property individually. It is a common convenience feature of ORMs and frameworks: ``Laravel``'s ``Eloquent`` models can be filled with ``Model::create($data)`` or ``$model->fill($data)``, and similar patterns exist in Doctrine, Symfony forms, and plain constructors that loop over an input array and set matching properties.

The convenience becomes a vulnerability when the array being assigned comes directly from user input, such as ``$request->all()``, without restricting which fields are allowed to be set. An attacker can then add extra keys to the submitted data, such as ``is_admin`` or ``role``, and have them silently written to the object alongside the fields the form actually intended to expose. This class of vulnerability is also known as auto-binding or over-posting, and was responsible for a well-known 2012 GitHub incident where a user added his own public key to any organization through a mass-assigned parameter.

The standard mitigation is allow-listing: explicitly declaring which properties may be mass-assigned, such as Eloquent's ``$fillable`` array, or the inverse deny-list ``$guarded``, which allow-listing is generally considered safer than. A stricter alternative is to avoid binding user input directly to domain or persistence objects altogether, and instead pass it through a dedicated Data Transfer Object that only exposes the fields the operation is meant to accept.

A related but distinct case is mass variable assignment, done directly in userland code rather than through an ORM. ``extract()`` takes an associative array and creates one local variable per key in a single call, and ``compact()`` performs the reverse, packing a list of variable names into an associative array. This carries the same class of risk as ORM mass assignment when the array comes from unfiltered input: ``extract($_GET)`` silently creates or overwrites any local variable named by a request parameter, which is why ``extract()`` on untrusted data is generally discouraged, in favor of naming the expected variables explicitly.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mass-assignment.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mass-assignment.html","name":"Mass Assignment","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 07 Sep 2026 09:21:50 +0000","dateModified":"Mon, 07 Sep 2026 09:21:50 +0000","description":"Mass assignment is the practice of setting several properties of an object at once from an associative array, instead of assigning each property individually","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mass-assignment.html"]}],"alternateName":["auto-binding","over-posting"],"keywords":["security","vulnerability","orm"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mass.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/orm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dto.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/laravel.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/validation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extract.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compact.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/Mass_Assignment_Cheat_Sheet.html"},{"@type":"CreativeWork","name":"Mass Assignment Cheat Sheet - OWASP","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/Mass_Assignment_Cheat_Sheet.html"},{"@type":"CreativeWork","name":"Eloquent: Getting Started - Mass Assignment","url":"https:\/\/laravel.com\/docs\/eloquent#mass-assignment"},{"@type":"CreativeWork","name":"What is mass assignment? - Snyk Learn","url":"https:\/\/learn.snyk.io\/lesson\/mass-assignment\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.35","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"mass-assignment"}]}]}</script>
```php
<?php

    // Vulnerable: any key in the request can set any Eloquent attribute
    class User extends Model {}
    User::create($request->all());
    // an attacker submitting ['name' => 'Bob', 'is_admin' => 1] becomes an admin

    // Mitigated: only the allow-listed fields can be mass-assigned
    class User extends Model
    {
        protected $fillable = ['name', 'email'];
    }
    User::create($request->all());
    // 'is_admin' is silently ignored

    // Mass variable assignment: extract() and compact()
    $data = ['name' => 'Bob', 'age' => 42];
    extract($data);
    echo $name; // 'Bob', now a local variable

    $packed = compact('name', 'age');
    // ['name' => 'Bob', 'age' => 42], the reverse of extract()

    // Vulnerable: any request parameter becomes a local variable
    extract($_GET);

?>
```

**[Documentation](https://cheatsheetseries.owasp.org/cheatsheets/Mass_Assignment_Cheat_Sheet.html)**
## See Also

+ [Mass Assignment Cheat Sheet - OWASP](https://cheatsheetseries.owasp.org/cheatsheets/Mass_Assignment_Cheat_Sheet.html)
+ [Eloquent: Getting Started - Mass Assignment](https://laravel.com/docs/eloquent#mass-assignment)
+ [What is mass assignment? - Snyk Learn](https://learn.snyk.io/lesson/mass-assignment/)

## Related

+ [Mass](mass.html)
+ [Object Relational Mapping (ORM)](orm.html)
+ [Data Transfer Object (DTO)](dto.html)
+ [Laravel](laravel.html)
+ [Validation](validation.html)
+ [extract()](extract.html)
+ [compact()](compact.html)

## Related packages

+ [illuminate/database](https://packagist.org/packages/illuminate/database)
