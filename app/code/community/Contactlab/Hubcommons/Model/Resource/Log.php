<?php

/**
 * Log resource.
 */
class Contactlab_Hubcommons_Model_Resource_Log extends Mage_Core_Model_Mysql4_Abstract {

    /**
     * Construct.
     */
    public function _construct() {
        $this->_init("contactlab_hubcommons/log", "log_id");
    }

    /**
     * Truncate the table.
     */
    public function truncateTable() {
        $this->_getWriteAdapter()->truncateTable($this->getMainTable());
    }

}
