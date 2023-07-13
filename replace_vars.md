

To replace ${name} to $name, use the following:

* In PHPStorm search (and replace)  `\"(.*?)\$\{(.*?)\}(.*?)\"`(regex) and use replacement: `"$0\$$1$2"`


* Change the following in [src/OpenApi/ClientGenerator.php](src/OpenApi/ClientGenerator.php):
```php
// From
'${' . $argument['name'] . '}',

// To
'$' . $argument['name'],
```



