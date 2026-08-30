---
type: "concept"
title: "View"
description: "A view may be several things in PHP."
resource: "https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller"
tags: ["concept", "disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# View

A view may be several things in PHP.

+ In MVC architecture: a view is the presentation layer of the Model-View-Controller pattern. It is responsible for rendering the data provided by the controller into HTML, JSON, or any other output format. In frameworks, views are typically template files, in Twig, Blade, Smarty, etc. that contain a mix of HTML and control structures.
+ In SQL databases: a view is a stored query that acts as a virtual table. It does not store data itself but provides a way to simplify complex queries, restrict access to specific columns or rows, and present a consistent interface even when the underlying schema changes. Views can be read-only or updateable depending on the database engine and query complexity.
+ In templating: the ``view()`` pattern refers to any mechanism that renders output to the user, including template engines, the ``View`` class in MVC frameworks, or even direct ``echo`` statements in simpler applications.

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

## Documentation
- [https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)

## See Also
- [PHP MVC Architecture](https://webreference.com/php/web-development/mvc/)
- [SQL Views](https://www.php.net/manual/pdo.transactions.php)

## Related
- [Model - View - Controller (MVC)](/features/mvc.md)
- [View In Presentation](/features/view-presentation.md)
- [SQL Views](/features/view-sql.md)
- [Render](/features/render.md)
- [Controller](/features/controller.md)
- [Model](/features/model.md)
- [Template](/features/template.md)
- [Twig](/features/twig.md)
- [Middleware Pattern](/features/middleware.md)
- [Direct Output](/features/direct-output.md)
- [HyperText Markup Language (HTML)](/features/html.md)

