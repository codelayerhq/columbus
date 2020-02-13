# Columbus: Provider agnostic address lookup for laravel

This package allowes access the address lookup api from different geocoding providers using a unified interface.

## Installation

You can install the package using composer:

```
composer require codelayer/columbus
```

After that you can load the default config and modify if you need to:

```
php artisan vendor:publish --provider="Codelayer\Columbus\ColumbusServiceProvider"
```

By default the required api tokens will be loaded from the `LOCATION_SEARCH_ID` and `LOCATION_SEARCH_SECRET` env variables

## Usage

Currently only autocomplete suggestion is implemented:

```
Columbus::suggest($request->input('q'));
```

### Supported providers

 * [here.com](https://here.com)

To create a new provider implement the `Codelayer\Columbus\Contracts\AddressSearchProvider` interface and update the `columbus.provider` key in your config.

## About Us

[codelayer](https://codelayer.de) is a web development agency based in Karlsruhe, Germany. This package was developed for use in our product [likvi](https://likvi.de).

## License

The MIT License (MIT).
