<?php

namespace FaaPz\PDO\Statement;

use FaaPz\PDO\Database;

class DropStatement extends StatementContainer
{
    /**
     * Constructor.
     *
     * @param Database $dbh
     * @param $table
     */
    public function __construct(Database $dbh, $table)
    {
        parent::__construct($dbh);

        $this->setTable($table);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        if (empty($this->table)) {
            trigger_error('No table is set for selection', E_USER_ERROR);
        }

        $sql = $this->getDrop().' '.$this->table;

        return $sql;
    }

    protected function getDrop()
    {
        return 'DROP TABLE IF EXISTS';
    }

    /**
     * @return \PDOStatement
     */
    public function execute()
    {
        return parent::execute();
    }
}
