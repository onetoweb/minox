.. _top:
.. title:: Journal

`Back to index <index.rst>`_

=======
Journal
=======

.. contents::
    :local:


List journals
`````````````

.. code-block:: php
    
    $results = $client->journal->list();


Create / update journal
```````````````````````

.. code-block:: php
    
    $id = 'TEST';
    $results = $client->journal->save($id, [
        'id' => 'string',
        'description' => 'string',
        'type' => 'general',
        'ledger_account_id' => 1000,
        'allow_linking_of_documents' => true,
        'currency' => [
            'id' => 'string',
            'exchange_rate' => 0,
            'description' => 'string'
        ],
        'entry_number' => 0,
        'check_for_negative_cash' => true,
        'iban' => 'string',
        'bic' => 'string',
        'check_closing_balance' => true,
        'next_invoice_number' => 0,
        'free_entry_number_input' => true,
        'ledger_account_differences' => 0,
        'terms' => [[
            'days' => 0,
            'translation_id' => 0
        ]],
        'range' => [
            'start' => 0,
            'end' => 0,
            'is_automatically_assigned' => true
        ]
    ]);


`Back to top <#top>`_