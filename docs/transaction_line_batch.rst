.. _top:
.. title:: Transaction line batch

`Back to index <index.rst>`_

======================
Transaction line batch
======================

.. contents::
    :local:


Get transaction line batch
``````````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->transactionLineBatch->get($id);


Create / update transaction line batch
``````````````````````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    // generate a uuid4 when creating a new transaction line batch or use an existing batch id to update
    $id = Utils::uuid4();
    $results = $client->transactionLineBatch->save($id, [[
        'account' => [
            'id' => '4010',
            'scheme' => 'MINOX',
            'type' => 'ledger_account'
        ],
        'cost_center' => [
            'id' => 12
        ],
        'credit' => 0,
        'debit' => 1289172.12,
        'document_date' => '2018-12-01',
        'due_date' => '2018-12-14',
        'entry_number' => 66047,
        'invoice_number' => 66047,
        'journal' => [
            'id' => 'ZZZZ'
        ],
        'payment_term' => [
            'id' => 9999
        ],
        'period' => [
            'id' => 14,
            'fiscal_year' => 2050
        ],
        'description' => 'Transaction line description',
        'vat' => [
            'id' => 9999,
            'amount' => 0
        ],
        'currency' => [
            'id' => 'string'
        ]
    ]]);


Delete transaction line batch
`````````````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->transactionLineBatch->delete($id);


`Back to top <#top>`_