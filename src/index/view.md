# View
A view may be several things in PHP.

+ In MVC architecture: a view is the presentation layer of the Model-View-Controller pattern. It is responsible for rendering the data provided by the controller into HTML, JSON, or any other output format. In frameworks, views are typically template files, in Twig, Blade, Smarty, etc. that contain a mix of HTML and control structures.
+ In SQL databases: a view is a stored query that acts as a virtual table. It does not store data itself but provides a way to simplify complex queries, restrict access to specific columns or rows, and present a consistent interface even when the underlying schema changes. Views can be read-only or updateable depending on the database engine and query complexity.
+ In templating: the ``view()`` pattern refers to any mechanism that renders output to the user, including template engines, the ``View`` class in MVC frameworks, or even direct ``echo`` statements in simpler applications.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/view.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/view.html","name":"View","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 12 Aug 2026 08:55:59 +0000","dateModified":"Wed, 12 Aug 2026 08:55:59 +0000","description":"A view may be several things in PHP","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/view.html"]}],"keywords":["concept","disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mvc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/view-presentation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/view-sql.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/render.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/controller.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/model.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/twig.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/middleware.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/direct-output.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Model%E2%80%93view%E2%80%93controller"},{"@type":"CreativeWork","name":"PHP MVC Architecture","url":"https:\/\/webreference.com\/php\/web-development\/mvc\/"},{"@type":"CreativeWork","name":"SQL Views","url":"https:\/\/www.php.net\/manual\/pdo.transactions.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"view"}]}]}</script>
```php
<?php

    // MVC View example (simplified)
    class UserView {
        public function render(array $user): string {
            return '<h1>' . htmlspecialchars($user['name']) . '</h1>'
                 . '<p>' . htmlspecialchars($user['email']) . '</p>';
        }
    }

    // SQL View creation
    // CREATE VIEW active_users AS
    // SELECT id, name, email FROM users WHERE status = 'active';

    // PHP PDO access to a SQL view
    $pdo = new PDO('mysql:host=localhost;dbname=test', 'user', 'pass');
    $stmt = $pdo->query('SELECT * FROM active_users');
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)**
## See Also

+ [PHP MVC Architecture](https://webreference.com/php/web-development/mvc/)
+ [SQL Views](https://www.php.net/manual/pdo.transactions.php)

## Related

+ [Model - View - Controller (MVC)](mvc.html)
+ [View In Presentation](view-presentation.html)
+ [SQL Views](view-sql.html)
+ [Render](render.html)
+ [Controller](controller.html)
+ [Model](model.html)
+ [Template](template.html)
+ [Twig](twig.html)
+ [Middleware Pattern](middleware.html)
+ [Direct Output](direct-output.html)
+ [HyperText Markup Language (HTML)](html.html)
