# Include With Variables

This is a PHP library that allows you to include a file with variables. It is compatible with PHP versions 5.6 and above.

## Installation

You can install this package via Composer:

```bash
composer require codersalman/include-with-variables
```

## Usage
To use this library, you need to call the includeWithVariables function with the file path and the variables you want to include.  Here is an example:

```php 
$variables = ['var1' => 'value1', 'var2' => 'value2'];
$content = includeWithVariables('path/to/your/file.php', $variables);
```
In this example, path/to/your/file.php is the path to the file you want to include, and $variables is an associative array of the variables you want to include in the file.  The function will return the content of the file as a string.

If you want to include a file without any variables, you can simply call the include function:

```php 
$content = includeWithVariables('path/to/your/file.php');
```

## License
This library is open-sourced software licensed under the MIT license.

## Credits
- [Salman](https://github.com/codersalman)

