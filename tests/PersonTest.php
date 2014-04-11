<?php
use \ComPHPPuebla\Person;
use \ComPHPPuebla\Database\PDOAdapter;

class PersonTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var \ComPHPPuebla\Person
     */
    protected $person;

    /**
     * @var array
     */
    protected $maleAdults = array(
        array(
            'name' => 'Misraim',
            'last_name' => 'Mendoza',
            'age' => 25
        ),
        array(
            'name' =>'Luis',
            'last_name' => 'Montealgre',
            'age' => 32
        ),
    );

    /**
     * @see PHPUnit_Framework_TestCase::setUp()
     */
    public function setUp()
    {
        $this->person = $this->getPersonWithMockAdapter();
        //$this->person = $this->getPerson();
    }

    /**
     * @return Person
     */
    public function getPerson()
    {
        $credentials = $this->getDatabaseCredentials();
        $adapter = new PDOAdapter($credentials[0], $credentials[1], $credentials[2]);

        return new Person($adapter);
    }

    /**
     * @return Person
     */
    protected function getPersonWithMockAdapter()
    {
        $adapter = $this->getMock(
            '\ComPHPPuebla\Database\PDOAdapter',
            array('select'),
            $this->getDataBaseCredentials()
        );
        $adapter->expects($this->once())
                ->method('select')
                ->will($this->returnValue($this->maleAdults));

        return new Person($adapter);
    }

    /**
     * @return array
     */
    protected function getDatabaseCredentials()
    {
        $dsn = 'mysql:host=localhost;dbname=address_book';
        $username = 'abook_user';
        $password = 'address_b00k_us3r';

        return array($dsn, $username, $password);
    }

    public function testCanRetrieveMaleAdults()
    {
        $this->assertEquals($this->maleAdults, $this->person->retrieveMaleAdults());
    }
}
