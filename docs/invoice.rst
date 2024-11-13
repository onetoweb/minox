.. _top:
.. title:: Invoice

`Back to index <index.rst>`_

=======
Invoice
=======

.. contents::
    :local:


List invoices
`````````````

.. code-block:: php
    
    $results = $client->invoice->list();


Get invoice
```````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->invoice->get($id);


Create / update invoice
```````````````````````

.. code-block:: php
    
    // generate a uuid4 when creating a new invoice or use an existing invoice id to update
    $id = Utils::uuid4();
    
    $results = $client->invoice->save($id, [
        'memo' => 'string',
        'invoice_number' => 1,
        'relation_number' => 1,
        'invoice_date' => 'yyyy-mm-dd',
        'blocked_for_payment' => true,
        'invoice' => [
            'invoice_identifier' => 'string',
            'currency_code' => 'string',
            'vat_inclusive' => true,
            'vat_reverse_charged' => true,
            'reference' => 'string',
            'customer' => [
                'name' => 'string',
                'contact_name' => 'string',
                'salutation' => 'string',
                'streetname_and_number' => 'string',
                'postal_code' => 'string',
                'city' => 'string',
                'country_code' => 'string'
            ],
            'supplier' => [
                'name' => 'string',
                'contact_name' => 'string',
                'salutation' => 'string',
                'streetname_and_number' => 'string',
                'postal_code' => 'string',
                'city' => 'string',
                'country_code' => 'string'
            ],
            'lines' => [
                [
                    'item_id' => 'string',
                    'price' => 0,
                    'description' => 'string',
                    'unit_packaging' => 0,
                    'accounting_cost_codes' => [
                        [
                            'id' => 'MINOX_COST_CENTER',
                            'value' => 'string'
                        ]
                    ],
                    'weight' => 0,
                    'quantity' => 0,
                    'content' => 0,
                    'date' => 'yyyy-mm-dd',
                    'charges' => [
                        [
                            'percentage' => 0,
                            'amount' => 0
                        ]
                    ],
                    'discounts' => [
                        [
                            'percentage' => 0,
                            'amount' => 0
                        ]
                    ],
                    'vat' => [
                        'id' => 0,
                        'percentage' => 0
                    ],
                    'totals' => [
                        'line_amount' => 0,
                        'discounts' => 0,
                        'charges' => 0,
                        'vat_exclusive_amount' => 0,
                        'vat_amount' => 0,
                        'vat_inclusive_amount' => 0
                    ]
                ]
            ],
            'payment_means' => [
                [
                    'id' => 'string',
                    'type' => 'cash',
                    'iban' => 'string',
                    'bic' => 'string'
                ]
            ],
            'payment_terms' => [
                [
                    'id' => '3fa85f64-5717-4562-b3fc-2c963f66afa6',
                    'payment_mean_id' => 'string',
                    'due_date' => 'yyyy-mm-dd',
                    'amount' => 0
                ]
            ],
            'vat_totals' => [
                [
                    'percentage' => 0,
                    'exclusive_amount' => 0,
                    'vat_amount' => 0,
                    'inclusive_amount' => 0
                ]
            ],
            'charges' => [
                [
                    'percentage' => 0,
                    'amount' => 0
                ]
            ],
            'discounts' => [
                [
                    'percentage' => 0,
                    'amount' => 0
                ]
            ],
            'totals' => [
                'line_amount' => 0,
                'discounts' => 0,
                'charges' => 0,
                'vat_exclusive_amount' => 0,
                'vat_amount' => 0,
                'vat_inclusive_amount' => 0
            ]
        ]
    ]);


Delete invoice
``````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->invoice->delete($id);


Get open item by invoice
````````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->invoice->openItemsByInvoice($id);


Get all open invoice item
`````````````````````````

.. code-block:: php
    
    $results = $client->invoice->openItems();


`Back to top <#top>`_