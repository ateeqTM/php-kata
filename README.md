# PHP 8 Kata

Practice repo for **PHP 8 for JavaScript developers**: types, classes, interfaces,
namespaces, Composer and PSR standards. Each topic is shown with working code and
tests, and compared with its JavaScript equivalent.

## Setup

Requires PHP 8.4.1 or newer (needed by PHPUnit 13) and Composer.

```bash
composer install
```

## Commands

```bash
composer test      # run the PHPUnit tests
composer lint      # check PSR-12 code style with phpcs
composer analyse   # run PHPStan at level 8
```

## JS vs PHP, one line per topic

| Topic | JavaScript | PHP | Where to look |
|---|---|---|---|
| Types | Types are optional (TypeScript adds them) | `declare(strict_types=1)` plus typed inputs and return types; a wrong type throws `TypeError` | `src/Calculator.php`, `tests/CalculatorTest.php` |
| Enums and `match` | TypeScript `enum`, `switch` | Backed `enum` with methods, and `match` that returns a value and throws if no case fits | `src/OrderStatus.php`, `tests/OrderStatusTest.php` |
| Classes | `this.name`, `constructor` | `$this->name`, `__construct`, `public` / `private` / `protected` | `src/Shop/Cart.php`, `src/ProductController.php` |
| Interfaces | TypeScript `interface` (structural: the shape is enough) | `interface` with `implements` (nominal: the class must declare it) | `src/PaymentGateway.php`, `src/StripeGateway.php`, `src/PayPalGateway.php` |
| Namespaces | Each file is a module, `import` picks the name | `namespace` gives a class its full name and `use` imports it; two `Cart` classes can live side by side | `src/Shop/Cart.php`, `src/Blog/Cart.php` |
| Composer | npm, `package.json`, `node_modules`, `package-lock.json` | Composer, `composer.json`, `vendor/`, `composer.lock`, and `scripts` for shortcuts | `composer.json` |
| PSR standards | ESLint and Prettier rules | PSR-1 and PSR-12 for style, PSR-4 for autoloading, PSR-7 for HTTP messages, PSR-11 for containers | see below |

## PSR standards used

| PSR | What it is | Where |
|---|---|---|
| PSR-1 | Basic coding standard | all files in `src/` |
| PSR-4 | Autoloading: namespace `Ateeq\PhpKata` maps to `src/` | `composer.json` |
| PSR-7 | Immutable HTTP request and response objects | `src/ProductController.php` (uses `nyholm/psr7`) |
| PSR-11 | Container interface | `src/SimpleContainer.php` |
| PSR-12 | Extended coding style, checked with `composer lint` | whole repo |

## Tests

Tests live in `tests/` and run with PHPUnit. They cover strict-type errors, enum
cases, the 400 and 200 responses of the product controller, the container returning
the same instance twice, and both payment gateways.
