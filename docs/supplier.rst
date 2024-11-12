.. _top:
.. title:: Supplier

`Back to index <index.rst>`_

========
Supplier
========

.. contents::
    :local:


List suppliers
``````````````

.. code-block:: php
    
    $results = $client->supplier->list();


Get supplier
````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->supplier->get($id);


Get supplier by email
`````````````````````

.. code-block:: php
    
    $email = 'test@example.nl';
    $results = $client->supplier->getByEmail($email);


Get supplier by external id
```````````````````````````

.. code-block:: php
    
    $externalId = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->supplier->getByExternalId($externalId);


Create supplier
```````````````

.. code-block:: php
    
    $results = $client->supplier->create([
        'id' => 12345,
        'aggregation' => [
            'aggregation_level' => 5,
            'description' => 'TOTAAL CREDITEUREN BINNENLAND'
        ],
        'is_one_time' => true,
        'addresses' => [
            [
                'address_type' => 'postal',
                'id' => '1',
                'name' => 'River Vista B.V.',
                'extended_name' => 'River Vista B.V.',
                'contact_name' => 'Diane Kavanagh',
                'salutation' => 'Ms. Diane Kavanagh',
                'streetname_and_number' => 'Horseshoe Lane 430',
                'postal_code' => '1234 AA',
                'city' => 'Fort Chamby',
                'country_code' => 'NL',
                'search' => 'VISTA',
                'www' => 'www.yourwebsitehere.nl',
                'phone_numbers' => [
                    [
                        'phone_number_type' => 'phone',
                        'phone_number' => '06-12345678'
                    ]
                ],
                'email_addresses' => [
                    [
                        'email_address_type' => 'string',
                        'email_address' => 'test@example.nl'
                    ]
                ]
            ]
        ],
        'language' => 'string',
        'vat' => [
            'active' => true,
            'suggested_vat_id' => 0,
            'suggested_gl_account' => 0,
            'vat_registration_number' => 'string'
        ],
        'currency' => [
            'id' => 'string',
            'exchange_rate' => 0,
            'description' => 'string'
        ],
        'payment_term' => [
            'id' => 9999,
            'description' => 'string',
            'days' => 0,
            'mandate' => 'string',
            'start' => 'directly',
            'terms' => [
                'type' => 'none',
                'days' => 0,
                'percentage' => 0
            ]
        ],
        'blocked' => [
            'active' => true,
            'reason' => 'string'
        ],
        'block_automatic_payments' => true,
        'chamber_of_commerce' => 'string',
        'bank_accounts' => [
            [
                'is_default' => true,
                'iban' => 'string',
                'name' => 'string',
                'city' => 'string',
                'bic' => 'string',
                'description' => 'string'
            ]
        ],
        'bank' => [
            'iban' => 'string',
            'bic' => 'string',
            'name' => 'string',
            'city' => 'string',
            'account_number' => 'string'
        ],
        'custom_fields' => [
            [
                'id' => 'string',
                'value' => 'string'
            ]
        ],
        'memo' => [
            'active' => true,
            'text' => 'string'
        ],
        'externalid' => 'string',
        'default_payment_reference' => 'string',
        'search' => [
            [
                'id' => 'key1',
                'value' => 'string'
            ]
        ]
    ]);


Update supplier
```````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->supplier->update($id, [
        'id' => 12345,
        'aggregation' => [
            'aggregation_level' => 5,
            'description' => 'TOTAAL CREDITEUREN BINNENLAND'
        ],
        'is_one_time' => true,
        'addresses' => [
            [
                'address_type' => 'postal',
                'id' => '1',
                'name' => 'River Vista B.V.',
                'extended_name' => 'River Vista B.V.',
                'contact_name' => 'Diane Kavanagh',
                'salutation' => 'Ms. Diane Kavanagh',
                'streetname_and_number' => 'Horseshoe Lane 430',
                'postal_code' => '1234 AA',
                'city' => 'Fort Chamby',
                'country_code' => 'NL',
                'search' => 'VISTA',
                'www' => 'www.yourwebsitehere.nl',
                'phone_numbers' => [
                    [
                        'phone_number_type' => 'phone',
                        'phone_number' => '06-12345678'
                    ]
                ],
                'email_addresses' => [
                    [
                        'email_address_type' => 'string',
                        'email_address' => 'test@example.nl'
                    ]
                ]
            ]
        ],
        'language' => 'string',
        'vat' => [
            'active' => true,
            'suggested_vat_id' => 0,
            'suggested_gl_account' => 0,
            'vat_registration_number' => 'string'
        ],
        'currency' => [
            'id' => 'string',
            'exchange_rate' => 0,
            'description' => 'string'
        ],
        'payment_term' => [
            'id' => 9999,
            'description' => 'string',
            'days' => 0,
            'mandate' => 'string',
            'start' => 'directly',
            'terms' => [
                'type' => 'none',
                'days' => 0,
                'percentage' => 0
            ]
        ],
        'blocked' => [
            'active' => true,
            'reason' => 'string'
        ],
        'block_automatic_payments' => true,
        'chamber_of_commerce' => 'string',
        'bank_accounts' => [
            [
                'is_default' => true,
                'iban' => 'string',
                'name' => 'string',
                'city' => 'string',
                'bic' => 'string',
                'description' => 'string'
            ]
        ],
        'bank' => [
            'iban' => 'string',
            'bic' => 'string',
            'name' => 'string',
            'city' => 'string',
            'account_number' => 'string'
        ],
        'custom_fields' => [
            [
                'id' => 'string',
                'value' => 'string'
            ]
        ],
        'memo' => [
            'active' => true,
            'text' => 'string'
        ],
        'externalid' => 'string',
        'default_payment_reference' => 'string',
        'search' => [
            'key1' => 'string',
            'key2' => 'string',
            'key3' => 'string'
        ]
    ]);


`Back to top <#top>`_