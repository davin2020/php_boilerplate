# php_boilerplate
This is a template repo for doing framework-free small PHP projects with Unit Tests, like code challenges or katas.


## To Setup & Run Locally

1. Clone repo locally `git clone git@github.com:davin2020/php_boilerplate.git` then `cd` to the new directory
2. `composer install`
3. `composer start`
4. open `localhost:8091` in a browser

Don't forget to rename the files locally with suitable Class and Test names etc

## To Run Unit Tests

`composer test`

NB: this is setup in `composer.json` to run with the `--testdox` option to give more readable test output, like this -
```
> phpunit tests --testdox

BoilerPlate
 ✔ Success AddSomething
 ✔ Failure example numbers not equals
 ✔ Malformed adding int to array returns error

Time: 177 ms, Memory: 4.00 MB

OK (3 tests, 3 assertions)
```

Without `--testdox`, the test output looks like this - 
```
> phpunit tests

...                                                                 3 / 3 (100%)

Time: 241 ms, Memory: 4.00 MB

OK (3 tests, 3 assertions)
```
