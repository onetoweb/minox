.. _top:
.. title:: Budget

`Back to index <index.rst>`_

======
Budget
======

.. contents::
    :local:


List budgets
````````````

.. code-block:: php
    
    $results = $client->budget->list();


Create / update budget
``````````````````````

.. code-block:: php
    
    $results = $client->budget->save([
        'cost_type' => [
            'id' => 41
        ],
        'cost_center' => [
            'id' => 9
        ],
        'budget_division' => [
            'id' => 1
        ],
        'year_budget' => 43000
    ]);


`Back to top <#top>`_