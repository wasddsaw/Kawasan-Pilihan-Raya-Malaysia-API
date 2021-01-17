# Kawasan Pilihan Raya Malaysia API
A library for list of Malaysian electoral districts

## Installation
Use [Composer](https://getcomposer.org/) for installation

```bash
composer require wasddsaw/pilihan-raya
```

## Usage
Import library inside project
```php
// import
require_once './vendor/autoload.php';

// create object
$object = new \PilihanRaya\PilihanRaya();

// print result
echo "<pre>";
print_r($object->constituencies()['constituencies']['Malaysia']['Perlis']);
echo "</pre>";
```

Sample Output
```json
Array
(
    [Padang Besar] => Array
        (
            [code] => P.001
            [name] => Padang Besar
            [duns] => Array
                (
                    [0] => Array
                        (
                            [code] => N.01
                            [name] => Titi Tinggi
                        )

                    [1] => Array
                        (
                            [code] => N.02
                            [name] => Beseri
                        )

                    [2] => Array
                        (
                            [code] => N.03
                            [name] => Chuping
                        )

                    [3] => Array
                        (
                            [code] => N.04
                            [name] => Mata Ayer
                        )

                    [4] => Array
                        (
                            [code] => N.05
                            [name] => Santan
                        )

                )

        )

)
```
## Changelog
Update 15/01/2021
- Initial project creation

## Support
1. Ashraf & Qayyum
2. Date : 15-01-2021

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.