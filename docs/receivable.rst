.. _top:
.. title:: Receivable

`Back to index <index.rst>`_

==========
Receivable
==========

.. contents::
    :local:


List receivables
````````````````

.. code-block:: php
    
    $results = $client->accrual->list();


Get receivable
``````````````

.. code-block:: php
    
    $accountId = 42;
    $invoiceId = 42;
    $results = $client->payable->get($accountId, $invoiceId);


Update receivable
`````````````````

.. code-block:: php
    
    $accountId = 42;
    $invoiceId = 42;
    $results = $client->payable->update($accountId, $invoiceId, [
        'type' => 'payable',
        'account_id' => 999999,
        'account' => [
            'id' => '4010',
            'scheme' => 'MINOX',
            'type' => 'ledger_account',
            'description' => 'string'
        ],
        'invoice_number' => 0,
        'invoice_date' => '2019-12-31T00:00:00.000Z',
        'due_date' => '2019-12-31T00:00:00.000Z',
        'total' => 0,
        'paid' => 0,
        'balance' => 0,
        'blocked' => 0,
        'memo' => 'string',
        'reminder' => [
            'last_sent' => '2019-12-31T00:00:00.000Z',
            'number_sent' => 0
        ],
        'currency' => [
            'id' => 'string',
            'exchange_rate' => 0,
            'description' => 'string'
        ],
        'age' => 0,
        'payment_id' => 'string',
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
        'collection_date' => '2019-12-31T00:00:00.000Z',
        'document_id' => '3fa85f64-5717-4562-b3fc-2c963f66afa6.pdf'
    ]);


`Back to top <#top>`_