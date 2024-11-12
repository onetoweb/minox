<?php

namespace Onetoweb\Minox\Endpoint\Endpoints;

use Onetoweb\Minox\Endpoint\AbstractEndpoint;

/**
 * Reporting Endpoint.
 */
class Reporting extends AbstractEndpoint
{
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function columnbalancePdf(int $year, array $query = []): ?array
    {
        return $this->columnbalance($year, $query, [
            'content-type' => 'application/pdf',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function columnbalanceXlsx(int $year, array $query = []): ?array
    {
        return $this->columnbalance($year, $query, [
            'content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * @param array $headers = []
     * 
     * @return array|null
     */
    private function columnbalance(int $year, array $query = [], array $headers = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/columnbalance/$year", $query, $headers);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function costSpecificationPerCostType(int $year, array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/cost_specification_per_cost_type/$year", $query, [
            'content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function costcenterProfitloss(int $year, array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/costcenter_profitloss/$year", $query, [
            'content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function countriesPdf(int $year, array $query = []): ?array
    {
        return $this->countries($year, $query, [
            'content-type' => 'application/pdf',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function countriesXlsx(int $year, array $query = []): ?array
    {
        return $this->countries($year, $query, [
            'content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * @param array $headers = []
     * 
     * @return array|null
     */
    private function countries(int $year, array $query = [], array $headers = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/countries/$year", $query, $headers);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function currenciesPdf(int $year, array $query = []): ?array
    {
        return $this->currencies($year, $query, [
            'content-type' => 'application/pdf',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function currenciesXlsx(int $year, array $query = []): ?array
    {
        return $this->currencies($year, $query, [
            'content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * @param array $headers = []
     * 
     * @return array|null
     */
    private function currencies(int $year, array $query = [], array $headers = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/currencies/$year", $query, $headers);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function journalbalancePdf(int $year, array $query = []): ?array
    {
        return $this->journalbalance($year, $query, [
            'content-type' => 'application/pdf',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function journalbalanceXlsx(int $year, array $query = []): ?array
    {
        return $this->journalbalance($year, $query, [
            'content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * @param array $headers = []
     * 
     * @return array|null
     */
    private function journalbalance(int $year, array $query = [], array $headers = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/journalbalance/$year", $query, $headers);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function payablesPdf(int $year, array $query = []): ?array
    {
        return $this->payables($year, $query, [
            'content-type' => 'application/pdf',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function payablesXlsx(int $year, array $query = []): ?array
    {
        return $this->payables($year, $query, [
            'content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * @param array $headers = []
     * 
     * @return array|null
     */
    private function payables(int $year, array $query = [], array $headers = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/payables/$year", $query, $headers);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function periodTrialbalance(int $year, array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/period_trialbalance/$year", $query);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function profitlossPdf(int $year, array $query = []): ?array
    {
        return $this->profitloss($year, $query, [
            'content-type' => 'application/pdf',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function profitlossXlsx(int $year, array $query = []): ?array
    {
        return $this->profitloss($year, $query, [
            'content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * @param array $headers = []
     * 
     * @return array|null
     */
    private function profitloss(int $year, array $query = [], array $headers = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/profitloss/$year", $query, $headers);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function receivablesPdf(int $year, array $query = []): ?array
    {
        return $this->receivables($year, $query, [
            'content-type' => 'application/pdf',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function receivablesXlsx(int $year, array $query = []): ?array
    {
        return $this->receivables($year, $query, [
            'content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * @param array $headers = []
     * 
     * @return array|null
     */
    private function receivables(int $year, array $query = [], array $headers = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/receivables/$year", $query, $headers);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function rgsTrialbalance(int $year, array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/rgs_trialbalance/$year/report_rgs_trialbalance", $query);
    }
    
    /**
     * @param int $year
     * @param array $data
     * 
     * @return array|null
     */
    public function salesHistory(int $year, array $data): ?array
    {
        return $this->client->post("/{$this->getBasePath()}/report/sales_history/$year", $data, [
            'accept' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function trialbalance(int $year, array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/trialbalance/$year", $query);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     *
     * @return array|null
     */
    public function trialbalancePdf(int $year, array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/trialbalance/$year", $query, [
            'content-type' => 'application/pdf',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     *
     * @return array|null
     */
    public function trialbalanceXlsx(int $year, array $query = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/trialbalance/$year", $query, [
            'content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function yearoverviewPdf(int $year, array $query = []): ?array
    {
        return $this->yearoverview($year, $query, [
            'content-type' => 'application/pdf',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * 
     * @return array|null
     */
    public function yearoverviewXlsx(int $year, array $query = []): ?array
    {
        return $this->yearoverview($year, $query, [
            'content-type' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        ]);
    }
    
    /**
     * @param int $year
     * @param array $query = []
     * @param array $headers = []
     * 
     * @return array|null
     */
    private function yearoverview(int $year, array $query = [], array $headers = []): ?array
    {
        return $this->client->get("/{$this->getBasePath()}/report/yearoverview/$year", $query, $headers);
    }
}
