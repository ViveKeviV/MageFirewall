<?php
    class Mage_Wall_Model_Mysql4_Rules extends Mage_Core_Model_Mysql4_Abstract
    {
        public function _construct()
        {   
            $this->_init('wall/rules', 'rules_id');
        }
    }
