.. _top:
.. title:: VAT declaration

`Back to index <index.rst>`_

===============
VAT declaration
===============

.. contents::
    :local:


List VAT declarations
`````````````````````

.. code-block:: php
    
    $results = $client->vatDeclaration->list();


Get VAT declaration
```````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->vatDeclaration->get($id);


Update VAT declaration
``````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->vatDeclaration->update($id, [
        'header' => [
            'OBNummer' => 'string',
            'Valutacode' => 'string',
            'Aangiftejaar' => 0,
            'Tijdvak' => 'string',
            'MessageID' => 'string',
            'LevCode' => 'string',
            'VersieApplicatie' => 'string',
            'TijdstipAanmaak' => '2024-11-12T08:54:02.825Z',
            'Mediumsoort' => 'string',
            'Communicatiegegevens' => [[
                'SoortContactpersoon' => 'string',
                'ContactpersoonID' => 'string',
                'NaamContactpersoon' => 'string',
                'TelefoonContactpersoon' => 'string'
            ]],
            'Boekjaar' => 0,
            'DatumVanAangifte' => '2024-11-12',
            'VanafPeriode' => 0,
            'TotEnMetPeriode' => 0,
            'MissingOBCodes' => true,
            'FailsElfProef' => true,
            'Omschrijving' => 'string',
            'Verrekenen' => true,
            'Kenmerk' => 'string'
        ],
        'content' => [
            'overrides' => [
                'TeVorderen' => 0,
                'BetaaldEnOntvangen' => 0,
                'AfdragenHoogGS' => 0,
                'AfdragenHoogAB' => 0,
                'AfdragenLaagGS' => 0,
                'AfdragenLaagAB' => 0,
                'AfdragenOverigeGS' => 0,
                'AfdragenOverigeAB' => 0,
                'AfdragenPriveGS' => 0,
                'AfdragenPriveAB' => 0,
                'AfdragenNulProcentGS' => 0,
                'VerwervingBinnenlandGS' => 0,
                'VerwervingBinnenlandBB' => 0,
                'LeveringNaarBuitenEUGS' => 0,
                'LeveringNaarBinnenEUGS' => 0,
                'AfstandsVerkopenBinnenEUGS' => 0,
                'LeveringVanuitBuitenEUGS' => 0,
                'LeveringVanuitBuitenEUBB' => 0,
                'LeveringVanuitBinnenEUGS' => 0,
                'LeveringVanuitBinnenEUBB' => 0,
                'VerschuldigdeOmzetbelasting' => 0,
                'HandmatigeVoorbelasting' => 0,
                'Voorbelasting' => 0,
                'Subtotaal' => 0,
                'VerminderingKleinOnderneming' => 0,
                'SchattingVorigeAangifte' => 0,
                'SchattingDezeAangifte' => 0,
                'Totaal' => 0,
                'Suppletie' => 0,
                'SuppletieTotaal' => 0
            ]
        ]
    ]);


Delete VAT declaration
``````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->vatDeclaration->delete($id);


Finalize VAT declaration
````````````````````````

.. code-block:: php
    
    $id = 'aaaaaaaa-aaaa-aaaa-aaaa-aaaaaaaaaaaa';
    $results = $client->vatDeclaration->finalize($id);


Get VAT declaration settings
````````````````````````````

.. code-block:: php
    
    $results = $client->vatDeclaration->settings($id);


Update VAT declaration settings
```````````````````````````````

.. code-block:: php
    
    $results = $client->vatDeclaration->updateSettings([
        'country_code' => 'NL',
        'custom' => [
            'identification' => [
                'providedBy' => 'intermediary',
                'contactName' => 'string',
                'phoneNumber' => 'string',
                'beconNumber' => 'string'
            ],
            'method' => 'download',
            'supplierNrTaxDepartment' => 0,
            'declarationPeriod' => [
                'vat' => 'calendar_quarterly',
                'icp' => 'calendar_quarterly'
            ]
        ]
    ]);


Partially updates (patch) VAT declaration settings
``````````````````````````````````````````````````

.. code-block:: php
    
    $results = $client->vatDeclaration->patchSettings([
        'custom' => [
            'identification' => [
                'contactName' => 'Jonathan',
            ],
        ]
    ]);


`Back to top <#top>`_