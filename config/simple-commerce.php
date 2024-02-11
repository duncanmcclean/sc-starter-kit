<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | You may configure a different currency & different shipping methods for each
    | of your 'multi-site' sites.
    |
    | https://simple-commerce.duncanmcclean.com/multi-site
    |
    */

    'sites' => [
        'default' => [
            'currency' => 'GBP',

            'shipping' => [
                'methods' => [
                    \DuncanMcClean\SimpleCommerce\Shipping\FreeShipping::class => [],
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Payment Gateways
    |--------------------------------------------------------------------------
    |
    | This is where you configure the payment gateways you wish to use across
    | your site. You may configure as many as you like.
    |
    | https://simple-commerce.duncanmcclean.com/gateways
    |
    */

    'gateways' => [
        \DuncanMcClean\SimpleCommerce\Gateways\Builtin\DummyGateway::class => [
            'display' => 'Card',
        ],

        // \DuncanMcClean\SimpleCommerce\Gateways\Builtin\StripeGateway::class => [
        //     'key' => env('STRIPE_KEY'),
        //     'secret' => env('STRIPE_SECRET'),
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Notifications
    |--------------------------------------------------------------------------
    |
    | Simple Commerce is able to send notifications after certain 'events' happen,
    | like an order being marked as paid. You may configure these notifications
    | below.
    |
    | https://simple-commerce.duncanmcclean.com/notifications
    |
    */

    'notifications' => [
        'order_paid' => [
            // \DuncanMcClean\SimpleCommerce\Notifications\CustomerOrderPaid::class => [
            //     'to' => 'customer',
            // ],

            // \DuncanMcClean\SimpleCommerce\Notifications\BackOfficeOrderPaid::class => [
            //     'to' => 'duncan@example.com',
            // ],
        ],

        'order_shipped' => [
            // \DuncanMcClean\SimpleCommerce\Notifications\CustomerOrderShipped::class => [
            //     'to' => 'customer',
            // ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Field Whitelist
    |--------------------------------------------------------------------------
    |
    | You may configure the fields you wish to be editable via front-end forms
    | below. Wildcards are not accepted due to security concerns.
    |
    | https://simple-commerce.duncanmcclean.com/tags#field-whitelisting
    |
    */

    'field_whitelist' => [
        'orders' => [
            'shipping_name', 'shipping_address', 'shipping_address_line1', 'shipping_address_line2', 'shipping_city',
            'shipping_region', 'shipping_postal_code', 'shipping_country', 'shipping_note', 'shipping_method',
            'use_shipping_address_for_billing', 'billing_name', 'billing_address', 'billing_address_line2',
            'billing_city', 'billing_region', 'billing_postal_code', 'billing_country',
        ],

        'line_items' => [],

        'customers' => ['name', 'email'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tax
    |--------------------------------------------------------------------------
    |
    | Configure the 'tax engine' you'd like to be used to calculate tax rates
    | throughout your site.
    |
    | https://simple-commerce.duncanmcclean.com/tax
    |
    */

    'tax_engine' => \DuncanMcClean\SimpleCommerce\Tax\BasicTaxEngine::class,

    'tax_engine_config' => [
        // Basic Engine
        'rate' => 20,
        'included_in_prices' => false,

        // Standard Tax Engine
        'address' => 'billing',

        'behaviour' => [
            'no_address_provided' => 'default_address',
            'no_rate_available' => 'prevent_checkout',
        ],

        'default_address' => [
            'address_line_1' => '',
            'address_line_2' => '',
            'city' => '',
            'region' => '',
            'country' => '',
            'zip_code' => '',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | And some more settings, that probably don't need much describing..
    |--------------------------------------------------------------------------
    */

    // Low Stock Threshold

    'low_stock_threshold' => 10,

    // Content Repositories

    'content' => [
        'customers' => [
            'repository' => \DuncanMcClean\SimpleCommerce\Customers\EntryCustomerRepository::class,
            'collection' => 'customers',
        ],

        'orders' => [
            'repository' => \DuncanMcClean\SimpleCommerce\Orders\EntryOrderRepository::class,
            'collection' => 'orders',
        ],

        'products' => [
            'repository' => \DuncanMcClean\SimpleCommerce\Products\EntryProductRepository::class,
            'collection' => 'products',
        ],
    ],

];
