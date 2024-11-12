.. _top:
.. title:: Reporting

`Back to index <index.rst>`_

=========
Reporting
=========

.. contents::
    :local:


Get columnbalance xlsx
``````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->columnbalanceXlsx($year);
    
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get columnbalance pdf
`````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->columnbalancePdf($year);
    
    $filename = '/path/to/file.pdf';
    Utils::saveFile($filename, $results);


Get cost specification per cost type
````````````````````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->costSpecificationPerCostType($year);
    
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get costcenter profitloss
`````````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->costcenterProfitloss($year);
    
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get countries xlsx
``````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->countriesXlsx($year);
    
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get countries pdf
`````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->countriesPdf($year);
    
    $filename = '/path/to/file.pdf';
    Utils::saveFile($filename, $results);


Get currencies xlsx
```````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
     
    $year = 2022;
    $results = $client->reporting->currenciesXlsx($year);
    
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get currencies pdf
``````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->currenciesPdf($year);
    
    $filename = '/path/to/file.pdf';
    Utils::saveFile($filename, $results);


Get journalbalance xlsx
```````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->journalbalanceXlsx($year);
    
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get journalbalance pdf
``````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->journalbalancePdf($year);
    
    $filename = '/path/to/file.pdf';
    Utils::saveFile($filename, $results);


Get payables xlsx
`````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->payablesXlsx($year);
    
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get payables pdf
````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->payablesPdf($year);
    
    $filename = '/path/to/file.pdf';
    Utils::saveFile($filename, $results);


Get period trialbalance
```````````````````````

.. code-block:: php
    
    $year = 2022;
    $results = $client->reporting->periodTrialbalance($year);


Get profitloss xlsx
```````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->profitlossXlsx($year);
    
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get profitloss pdf
``````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->profitlossPdf($year);
    
    $filename = '/path/to/file.pdf';
    Utils::saveFile($filename, $results);


Get receivables xlsx
````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->receivablesXlsx($year);
    
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get receivables pdf
```````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->receivablesPdf($year);
    
    $filename = '/path/to/file.pdf';
    Utils::saveFile($filename, $results);


Get rgs trialbalance
````````````````````

.. code-block:: php
    
    $year = 2022;
    $results = $client->reporting->rgsTrialbalance($year);


Get sales history
`````````````````

.. code-block:: php
    
    $year = 2022;
    $results = $client->reporting->salesHistory($year, [
        'print_all_lines' => false,
        'selection' => [
            'customer_id' => [
                'from' => 0,
                'to' => 999999
            ],
            'item_id' => [
                'from' => '0',
                'to' => '999999'
            ],
            'invoice_date' => [
                'from' => '2018-01-01',
                'to' => '2024-11-05'
            ]
        ],
        'columns' => [
            'customer' => [
                'customer_nr' => true,
                'name' => true,
                'name_extended' => true,
                'contact_name' => true,
                'address' => true,
                'postal_code' => true,
                'city' => true,
                'country' => true,
                'customer_vat_id' => true,
                'phone' => true,
                'email' => true,
                'shipping_name' => true,
                'shipping_name_extended' => true,
                'shipping_contact_name' => true,
                'shipping_address' => true,
                'shipping_postal_code' => true,
                'shipping_city' => true,
                'shipping_country' => true
            ],
            'item' => [
                'line_nr' => true,
                'item_id' => true,
                'date' => true,
                'description' => true,
                'quantity' => true,
                'price' => true,
                'unit' => true,
                'discount' => true,
                'amount' => true,
                'vat_code' => true,
                'cost_center_nr' => true,
                'purchasing_price' => true
            ],
            'invoice' => [
                'invoice_nr' => true,
                'order_nr' => true,
                'quotation_nr' => true,
                'invoice_date' => true,
                'expiration_date' => true,
                'delivery_date' => true,
                'billing_period' => true,
                'reference' => true,
                'currency_code' => true,
                'delivery_condition_code' => true,
                'payment_condition_code' => true,
                'shipping_method_nr' => true,
                'region_nr' => true,
                'representative_nr' => true,
                'customer_type_nr' => true,
                'invoice_subtotal' => true,
                'invoice_amount' => true
            ]
        ]
    ]);
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get trialbalance
````````````````

.. code-block:: php
    
    $year = 2022;
    $results = $client->reporting->trialbalance($year);


Get trialbalance xlsx
`````````````````````

.. code-block:: php
    
    $year = 2022;
    $results = $client->reporting->trialbalanceXlsx($year);
    
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get trialbalance pdf
````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->trialbalancePdf($year);
    
    $filename = '/path/to/file.pdf';
    Utils::saveFile($filename, $results);


Get yearoverview xlsx
`````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->yearoverviewXlsx($year);
    
    $filename = '/path/to/file.xlsx';
    Utils::saveFile($filename, $results);


Get yearoverview pdf
````````````````````

.. code-block:: php
    
    use Onetoweb\Minox\Utils;
    
    $year = 2022;
    $results = $client->reporting->yearoverviewPdf($year);
    
    $filename = '/path/to/file.pdf';
    Utils::saveFile($filename, $results);


`Back to top <#top>`_