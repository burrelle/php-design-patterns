<?php

require 'bootstrap.php';

class CustomerRepositoryTest extends \PHPUnit\Framework\TestCase 
{

    protected $customers;

    function setUp()
    {
        $this->customers = $customers = new CustomersRepository(
            [
                new Customer('gold'),
                new Customer('bronze'),
                new Customer('silver'),
                new Customer('gold')
            ]
        );
    }
    
    function test_it_fetches_all_customers()
    {
        $results = $this->customers->all();
        $this->assertCount(4, $results);
    }

    function test_it_fetches_all_customers_who_match_a_given_specification()
    {
        $results = $this->customers->bySpecification(new CustomerIsGold);
        $this->assertCount(2, $results);
    }
}
