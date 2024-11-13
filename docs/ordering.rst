.. _top:
.. title:: Ordering

`Back to index <index.rst>`_

========
Ordering
========

.. contents::
    :local:


Get an order document
`````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->ordering->get($id);


Create / update a new order document
````````````````````````````````````

.. code-block:: php
    
    // generate a uuid4 when creating a new order document or use an existing order document id to update
    $id = Utils::uuid4();
    
    $results = $client->ordering->save($id, [
        @todo add order document data
    ]);


Delete a order document
```````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->ordering->delete($id);


Get order document
``````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->ordering->getOrderDocument($id);


Send order document
```````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->ordering->sendOrderDocument($id, [
        'pdf' => true,
        'ubl' => true,
        'attachment' => true
    ]);


Transition order document
`````````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->ordering->transitionOrderDocument($id, [
        'date' => 'string',
        'type' => 'invoice_draft',
        'override_default' => [
            'pdf' => true,
            'ubl' => true,
            'attachment' => true,
            'pdf_download' => true
        ],
        'mandate_date' => 'string',
        'period_number' => 0,
        'frequence' => 'one_week',
        'opening_text' => 'string'
    ]);


Unmerge order document
``````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->ordering->unmergeOrderDocument($id, [
        'restored_documents' => [
            [
                'id' => 'string',
                'type' => 'concept',
                'previous_type' => 'concept',
                'memo' => 'string',
                'document_number' => 0,
                'quotation_number' => 0,
                'subscription_number' => 0,
                'invoice_number' => 0,
                'mandate_date' => 'string',
                'invoice_date' => 'string',
                'next_invoice_date' => 'string',
                'orderresponse_date' => 'string',
                'quotation_date' => 'string',
                'packinglist_date' => 'string',
                'delivery_date' => 'string',
                'subscription_date' => 'string',
                'subscription_end_date' => 'string',
                'state_date' => 'string',
                'frequence' => 'one_week',
                'period_number' => 0,
                'vat_inclusive' => true,
                'vat_reverse_charged' => true,
                'discount_percentage' => 0,
                'credit_restriction_percent' => 0,
                'payment_discount_percent' => 0,
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
                'delivery_term' => [
                    'id' => 0,
                    'description' => 'string'
                ],
                'carrier' => [
                    'id' => 0,
                    'description' => 'string'
                ],
                'representative' => [
                    'id' => 0,
                    'name' => 'string'
                ],
                'region' => [
                    'id' => 0,
                    'description' => 'string'
                ],
                'customer_type' => [
                    'id' => 0,
                    'description' => 'string'
                ],
                'is_merge' => true,
                'currency' => [
                    'id' => 'string',
                    'description' => 'string'
                ],
                'mandate' => [
                    'code' => 'string',
                    'serial_number' => 0
                ],
                'is_g_account' => true,
                'customer' => [
                    'id' => 0,
                    'name' => 'string',
                    'contact_name' => 'string',
                    'salutation' => 'string',
                    'streetname_and_number' => 'string',
                    'postal_code' => 'string',
                    'city' => 'string',
                    'country_code' => 'string'
                ],
                'delivery_address' => [
                    'name' => 'string',
                    'contact_name' => 'string',
                    'extended_name' => 'string',
                    'streetname_and_number' => 'string',
                    'postal_code' => 'string',
                    'city' => 'string',
                    'country_code' => 'string'
                ],
                'reference' => 'string',
                'lines' => [
                    [
                        'item_id' => 'string',
                        'price' => 0,
                        'description' => 'string',
                        'unit_packaging' => 0,
                        'cost_center_id' => 999999999999999,
                        'is_g_account' => true,
                        'weight' => 0,
                        'delivery_quantity' => 0,
                        'price_per_quantity' => 0,
                        'quantity' => 0,
                        'content' => 0,
                        'date' => 'string',
                        'discount_percentage' => 0,
                        'totals' => [
                            'amount' => 0,
                            'vat_amount' => 0,
                            'excl_amount' => 0
                        ],
                        'vat' => [
                            'id' => 0,
                            'percentage' => 0,
                            'type' => 'string'
                        ]
                    ]
                ],
                'vat_totals' => [
                    [
                        'vat_id' => 0,
                        'percentage' => 0,
                        'taxable_amount' => 0,
                        'tax_amount' => 0,
                        'inclusive_amount' => 0,
                        'discount' => 0
                    ]
                ],
                'totals' => [
                    'quantity' => 0,
                    'delivery_quantity' => 0,
                    'amount' => 0,
                    'discount' => 0,
                    'payment_discount' => 0,
                    'credit_restriction' => 0,
                    'total' => 0
                ]
            ]
        ]
    ]);


Bulk delete order documents
```````````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->ordering->bulkDeleteOrderDocument($id, [
        'order_document_ids' => [
            '3fa85f64-5717-4562-b3fc-2c963f66afa6'
        ]
    ]);


List of order documents by type
```````````````````````````````

.. code-block:: php
    
    $type = 'concept'; // possible values: concept, invoice, invoice_draft, quotation, orderresponse, packinglist, billoflading, subscription
    $results = $client->ordering->getByType($type);


Merge list of order documents
`````````````````````````````

.. code-block:: php
    
    $results = $client->ordering->merge([
        'tag' => 'string',
        'order_document_ids' => [
            '3fa85f64-5717-4562-b3fc-2c963f66afa6'
        ],
        'group_by' => [
            'payment_term' => true,
            'delivery_term' => true,
            'delivery_address' => true,
            'invoice_date' => true,
            'delivery_date' => true,
            'reference' => true
        ]
    ]);


Get a list of order documents by type
`````````````````````````````````````

.. code-block:: php
    
    $type = 'concept'; // possible values: concept, invoice, invoice_draft, quotation, orderresponse, packinglist, billoflading, subscription
    $results = $client->ordering->getSummaryByType($type);


List tasks
``````````

.. code-block:: php
    
    $results = $client->ordering->listTask();


Get task
````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->ordering->get($id);


Delete task
```````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->ordering->deleteTask($id);


Transition order documents in bulk
``````````````````````````````````

.. code-block:: php
    
    $results = $client->ordering->transitionBulk([
        'order_document_ids' => [
            '3fa85f64-5717-4562-b3fc-2c963f66afa6'
        ],
        'tag' => 'string',
        'date' => 'string',
        'override_default' => [
            'pdf' => true,
            'ubl' => true,
            'attachment' => true,
            'pdf_download' => true
        ],
        'mandate_date' => 'string',
        'period_number' => 0,
        'opening_text' => 'string'
    ]);


`Back to top <#top>`_