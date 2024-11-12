.. _top:
.. title:: Customer

`Back to index <index.rst>`_

========
Customer
========

.. contents::
    :local:


List customers
``````````````

.. code-block:: php
    
    $results = $client->customer->list();


Create customer type
````````````````````

.. code-block:: php
    
    $results = $client->customer->create([
        'id' => 12345,
        'aggregation' => [
            'aggregation_level' => 5,
            'description' => 'TOTAAL DEBITEUREN BINNENLAND'
        ],
        'is_one_time' => true,
        'addresses' => [[
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
            'phone_numbers' => [[
                'phone_number_type' => 'phone',
                'phone_number' => '06-12345678'
            ]],
            'email_addresses' => [[
                'email_address_type' => 'string',
                'email_address' => 'test@example.nl'
            ]]
        ]],
        'search' => [[
            'id' => 'key1',
            'value' => 'string'
        ]],
        'language' => 'string',
        'vat' => [
            'active' => true,
            'suggested_vat_id' => 0,
            'suggested_gl_account' => 0,
            'vat_in_europe_gl_account' => 0,
            'vat_registration_number' => 'string'
        ],
        'currency' => [
            'id' => 'string',
            'exchange_rate' => 0,
            'description' => 'string'
        ],
        'block_sending_reminders' => true,
        'block_collection' => true,
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
        'chamber_of_commerce' => 'string',
        'bank_accounts' => [[
            'is_default' => true,
            'iban' => 'string',
            'name' => 'string',
            'city' => 'string',
            'bic' => 'string',
            'description' => 'string'
        ]],
        'bank' => [
            'iban' => 'string',
            'bic' => 'string',
            'name' => 'string',
            'city' => 'string',
            'account_number' => 'string'
        ],
        'custom_fields' => [[
            'id' => 'string',
            'value' => 'string'
        ]],
        'memo' => [
            'active' => true,
            'text' => 'string'
        ],
        'sales' => [
            'pricecode' => 9,
            'statistics_code' => 'string',
            'vat_inclusive' => true,
            'track_sales_history' => true,
            'g_rekening_percentage' => 0,
            'invoice_discount_percentage' => 0,
            'credit_limit' => 0,
            'revenue_category' => 0,
            'discount_group' => [
                'id' => 0,
                'description' => 'string'
            ],
            'delivery_terms' => [
                'id' => 0,
                'description' => 'string'
            ],
            'carrier' => [
                'id' => 0,
                'description' => 'string'
            ],
            'representative' => [
                'id' => 0,
                'description' => 'string'
            ],
            'region' => [
                'id' => 0,
                'description' => 'string'
            ],
            'customer_type' => [
                'id' => 0,
                'description' => 'string'
            ],
            'delivery_address' => [
                'id' => 0,
                'description' => 'string'
            ],
            'invoice_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'email_with_ubl' => true,
                'attachment' => true,
                'email' => 'string'
            ],
            'reminder_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'email' => 'string'
            ],
            'quotation_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'attachment' => true,
                'email' => 'string'
            ],
            'order_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'attachment' => true,
                'email' => 'string'
            ],
            'packinglist_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'attachment' => true,
                'email' => 'string'
            ],
            'billoflading_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'attachment' => true,
                'email' => 'string'
            ],
            'subscription_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'attachment' => true,
                'email' => 'string'
            ]
        ],
        'externalid' => 'string'
    ]);


Update customer type
````````````````````

.. code-block:: php
    
    $id = 12345;
    $results = $client->customer->update($id, [
        'id' => 12345,
        'aggregation' => [
            'aggregation_level' => 5,
            'description' => 'TOTAAL DEBITEUREN BINNENLAND'
        ],
        'is_one_time' => true,
        'addresses' => [[
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
            'phone_numbers' => [[
                'phone_number_type' => 'phone',
                'phone_number' => '06-12345678'
            ]],
            'email_addresses' => [[
                'email_address_type' => 'string',
                'email_address' => 'test@example.nl'
            ]]
        ]],
        'search' => [[
            'id' => 'key1',
            'value' => 'string'
        ]],
        'language' => 'string',
        'vat' => [
            'active' => true,
            'suggested_vat_id' => 0,
            'suggested_gl_account' => 0,
            'vat_in_europe_gl_account' => 0,
            'vat_registration_number' => 'string'
        ],
        'currency' => [
            'id' => 'string',
            'exchange_rate' => 0,
            'description' => 'string'
        ],
        'block_sending_reminders' => true,
        'block_collection' => true,
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
        'chamber_of_commerce' => 'string',
        'bank_accounts' => [[
            'is_default' => true,
            'iban' => 'string',
            'name' => 'string',
            'city' => 'string',
            'bic' => 'string',
            'description' => 'string'
        ]],
        'bank' => [
            'iban' => 'string',
            'bic' => 'string',
            'name' => 'string',
            'city' => 'string',
            'account_number' => 'string'
        ],
        'custom_fields' => [[
            'id' => 'string',
            'value' => 'string'
        ]],
        'memo' => [
            'active' => true,
            'text' => 'string'
        ],
        'sales' => [
            'pricecode' => 9,
            'statistics_code' => 'string',
            'vat_inclusive' => true,
            'track_sales_history' => true,
            'g_rekening_percentage' => 0,
            'invoice_discount_percentage' => 0,
            'credit_limit' => 0,
            'revenue_category' => 0,
            'discount_group' => [
                'id' => 0,
                'description' => 'string'
            ],
            'delivery_terms' => [
                'id' => 0,
                'description' => 'string'
            ],
            'carrier' => [
                'id' => 0,
                'description' => 'string'
            ],
            'representative' => [
                'id' => 0,
                'description' => 'string'
            ],
            'region' => [
                'id' => 0,
                'description' => 'string'
            ],
            'customer_type' => [
                'id' => 0,
                'description' => 'string'
            ],
            'delivery_address' => [
                'id' => 0,
                'description' => 'string'
            ],
            'invoice_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'email_with_ubl' => true,
                'attachment' => true,
                'email' => 'string'
            ],
            'reminder_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'email' => 'string'
            ],
            'quotation_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'attachment' => true,
                'email' => 'string'
            ],
            'order_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'attachment' => true,
                'email' => 'string'
            ],
            'packinglist_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'attachment' => true,
                'email' => 'string'
            ],
            'billoflading_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'attachment' => true,
                'email' => 'string'
            ],
            'subscription_type' => [
                'pdf_download' => true,
                'email_with_pdf' => true,
                'attachment' => true,
                'email' => 'string'
            ]
        ],
        'externalid' => 'string'
    ]);


Get customer by external id
```````````````````````````

.. code-block:: php
    
    $externalId = 'externalid';
    $results = $client->customer->getByExternalId($externalId);


Get customer by email
`````````````````````

.. code-block:: php
    
    $email = 'test@example.nl';
    $results = $client->customer->getByEmail($email);


`Back to top <#top>`_