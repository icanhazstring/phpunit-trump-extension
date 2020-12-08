# Phpunit Trump Extension  

The "Trump Extension" will act as if there are no tests. This
is because if you don't have tests, there is not possibility they could fail right?

## Installation

You can install Trump Extension via [Composer](http://getcomposer.org)

    composer require icanhazstring/phpunit-trump-extension:dev-main

## Usage

Just enable it by adding the following to your test suite's `phpunit.xml` file:

```xml
<phpunit bootstrap="vendor/autoload.php">
    ...
    <listeners>
        <listener class="icanhazstring\TrumpExtension\TrumpTestListener" />
    </listeners>
</phpunit>
```

Now run your test suite as normal.

In CI tools environments, test suites execution will end with `No Tests execute!` ( exit code 0)  whether or not your assertions are false or unwanted exceptions are thrown.

## License

phpunit-trump-extension is available under the MIT License.