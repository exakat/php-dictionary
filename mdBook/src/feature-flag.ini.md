# Feature Flag
A feature flag, also known as a feature toggle or feature switch, is a software development technique used to enable or disable certain features or functionalities in an application or system. Instead of deploying new features directly to all users, developers can use feature flags to control the visibility and activation of these features.

Feature flags are typically implemented as conditional statements in the codebase, allowing developers to selectively enable or disable features based on various criteria such as user roles, user segments, environment conditions, or A/B testing groups. This allows for gradual feature rollouts, experimentation, and controlled releases, which can help mitigate risks associated with introducing new features or changes to a system.
```php
<?php

    // feature flag implemented via PHP directives
    if (ini_get('date_is_visible')) {
        echo date('r');
    }

?>
```

## See Also

+ [How to use feature flags in a PHP application](https://configcat.com/blog/2022/09/16/how-to-use-feature-flags-in-php/)
+ [Unleash: Feature flags in PHP](https://chrastecky.dev/programming/unleash-feature-flags-in-php)

Related : [Configuration](Configuration), [Feature](Feature), [Feature Testing](Feature Testing), [Release](Release), [Switch](Switch), [Circuit Breaker](Circuit Breaker)
