.. _top:
.. title:: Ocr

`Back to index <index.rst>`_

===
Ocr
===

.. contents::
    :local:


List ocr history
````````````````

.. code-block:: php
    
    $results = $client->ocr->history();


List ocr proposals
``````````````````

.. code-block:: php
    
    $results = $client->ocr->history();


List ocr settings
`````````````````

.. code-block:: php
    
    $type = 'sales'; // possible values: sales, purchase
    $results = $client->ocr->settings($type);


Update ocr settings
```````````````````

.. code-block:: php
    
    $type = 'sales'; // possible values: sales, purchase
    $results = $client->ocr->updateSettings($type, [
        'use_external_invoice_number' => true,
        'automatically_save' => true,
        'subadministration' => [
            'name_supplier' => true,
            'search_name' => true,
            'external_invoice_number' => true,
            'own_text' => true,
            'own_text_input' => 'string'
        ],
        'ledger' => [
            'name_supplier' => true,
            'search_name' => true,
            'external_invoice_number' => true,
            'own_text' => true,
            'own_text_input' => 'string'
        ],
        'options' => [
            'supplement_journal_page' => true,
            'supplement_contra_account' => true,
            'take_over_chamber_of_commerce_number' => true
        ]
    ]);


`Back to top <#top>`_