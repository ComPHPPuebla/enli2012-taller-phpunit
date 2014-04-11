<?php
namespace ComPHPPuebla;

use \ComPHPPuebla\Database\PDOAdapter;

/**
 * Person class that depends on our PDOAdapter implementation
 */
class Person
{
    /**
     * @var PDOAdapter
     */
    protected $adapter;

    /**
     * @param PDOAdapter $adapter
     */
    public function __construct(PDOAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * @return array
     */
    public function retrieveMaleAdults()
    {
        return $this->adapter->select(
            'person',
            'name, last_name, age',
            'gender = ? AND age > ?',
            array('M', 18)
        );
    }
}
