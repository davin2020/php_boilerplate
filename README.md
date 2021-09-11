# php_boilerplate
This is a template repo for doing framework-free small PHP projects with Unit Tests, like code challenges or katas.

## To Setup & Run Locally

1. Click the green button 'Use this template' and name your new repo
2. Then clone that repo locally and `cd` to the new directory
3. Run `composer install`
4. Run `composer start`
5. Open `localhost:8091` in a browser

Don't forget to rename the files locally with suitable Class and Test names etc. You can also update composer.json with your own `name/repo name` and change the port number if wanted.

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
