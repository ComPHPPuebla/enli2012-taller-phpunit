<?php
namespace ComPHPPuebla\Database;

/**
 * Very simple PDO adapter
 */
class   PDOAdapter
extends \PDO
{
	/**
	 * @param string $table
	 * @param string $fields
	 * @param string $where
	 * @param array $values
	 * @return array
	 */
	public function select($table, $fields, $where, array $values) 
	{
        $sql = sprintf(
        	'SELECT %s FROM %s WHERE %s', $table, $fields, $where
		);
        $statement = $this->prepare($sql);
        $statement->execute($values);
        return $statement->fetchAll();
	}
}