A very simple web app to show how to generate PHP code coverage reports from multiple pages/requests.

Run `composer install`

.htaccess sets the PHP prepend/append files to setup and dump out the code coverage data into /tmp/cov/

Make sure you have whitelisted all the class files you need in `src/cc_prepend.php`

In the browser request:
```
http://site.com/index.php?step=1
http://site.com/index.php?step=2
http://site.com/index.php?step=3
```

Run `./build-report.sh` to merge the *.cov files in /tmp/cov/ into an HTML report
