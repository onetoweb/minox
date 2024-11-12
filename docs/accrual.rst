.. _top:
.. title:: Accrual

`Back to index <index.rst>`_

=======
Accrual
=======

.. contents::
    :local:


List accruals
`````````````

.. code-block:: php
    
    $results = $client->accrual->list();


Create accrual
``````````````

.. code-block:: php
    
    $results = $client->accrual->create([
        'id' => 'string',
        'description' => 'string',
        'value' => 0,
        'debet_credit' => 'string',
        'booking_date' => 'string',
        'ledger_account_id' => 0,
        'transitoria_account_id' => 0,
        'cost_center_id' => 999999999999999,
        'start_period' => 0,
        'start_year' => 0,
        'periods' => 0,
        'explanation' => 'string',
        'transaction_line_id' => 'string',
        'entry_number' => 0,
        'belongs_to' => 'string',
        'currency_id' => 'string'
    ]);


Get accrual
```````````

.. code-block:: php
    
    $id = 42;
    $results = $client->accrual->list($id);


Create accrual
``````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->accrual->create($id, [
        'id' => 'string',
        'description' => 'string',
        'value' => 0,
        'debet_credit' => 'string',
        'booking_date' => 'string',
        'ledger_account_id' => 0,
        'transitoria_account_id' => 0,
        'cost_center_id' => 999999999999999,
        'start_period' => 0,
        'start_year' => 0,
        'periods' => 0,
        'explanation' => 'string',
        'transaction_line_id' => 'string',
        'entry_number' => 0,
        'belongs_to' => 'string',
        'currency_id' => 'string'
    ]);


Update accrual
``````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->accrual->update($id, [
        'id' => 'string',
        'description' => 'string',
        'value' => 0,
        'debet_credit' => 'string',
        'booking_date' => 'string',
        'ledger_account_id' => 0,
        'transitoria_account_id' => 0,
        'cost_center_id' => 999999999999999,
        'start_period' => 0,
        'start_year' => 0,
        'periods' => 0,
        'explanation' => 'string',
        'transaction_line_id' => 'string',
        'entry_number' => 0,
        'belongs_to' => 'string',
        'currency_id' => 'string'
    ]);


Process accrual
```````````````

.. code-block:: php
    
    $id = 42;
    $results = $client->distanceSale->process($id);


Get accrual settings
````````````````````

.. code-block:: php
    
    $results = $client->accrual->getSettings();


Update accrual settings
```````````````````````

.. code-block:: php
    
    $results = $client->accrual->updateSettings([
        'journal_id' => 'string',
        'debet_ledger_account_id' => 0,
        'credit_ledger_account_id' => 0
    ]);


`Back to top <#top>`_