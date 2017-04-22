<b>Parse HTML</b>

Parse HTML website


Example:

```php
require_once('./vendor/autoload.php');

$parser = new Piffek\WebsiteParser\Parser(new GuzzleHttp\Client, new Piffek\WebsiteParser\HtmlParser);
$page = $parser->parse('https://www.gpw.pl');
$element = $page->getElementById('mainMenu');

echo $element->textContent;

```
