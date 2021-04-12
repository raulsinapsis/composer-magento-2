# PAYCOMET Magento 2 Module

Accept payments with PAYCOMET using Magento2. Suports Magento2 version 2.1 and higher.

## Description

Integrates the PAYCOMET platform in Magento2

## Requirements

* Magento 2.*
* PHP >= 5.6.0
* Magento version as specified in composer.json of this project
* PAYCOMET account ([Account registration](https://www.paycomet.com/crear-una-cuenta))

## Installation

### Install the PAYCOMET Magento 2 composer package

```composer require paycomet/payment```

### Enable the extension in Magento 2

```bin/magento module:enable Paycomet_Payment --clear-static-content```

### Setup the extension and refresh cache

```bin/magento setup:upgrade```

```bin/magento cache:flush```

```bin/magento setup:di:compile```

```bin/magento setup:static-content:deploy```


## Configuration

Once installed, this module can be configured in the usual way by logging into the Magento admin area and navigating to:

Stores > Configuration > Sales > Payment Methods > PAYCOMET

More details are available in the PAYCOMET:

https://docs.paycomet.com/es/modulos-de-pago/magento2


## Release Notes

> 2.4.0: 

- **API Key [OBLIGATORIA]**: Debe dar de alta una API Key en su área de cliente de PAYCOMET e indicarla en el Plugin para poder operar.
- Integración jetIframe: Se añade la integración jetIframe.
- Métodos de Pago alternativos: Se añade la posibilidad de activar diferentes métodos de pago alternativos que deberá tener configurados en su área de cliente de PAYCOMET.
