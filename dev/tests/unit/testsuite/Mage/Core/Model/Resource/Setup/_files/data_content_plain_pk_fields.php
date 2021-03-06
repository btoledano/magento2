<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Core
 * @subpackage  unit_tests
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

return array(
    '$replaceRules' => array(
        array(
            'table',
            'collection',
            Mage_Core_Model_Resource_Setup_Migration::ENTITY_TYPE_RESOURCE,
            Mage_Core_Model_Resource_Setup_Migration::FIELD_CONTENT_TYPE_PLAIN,
            array('pk_field1', 'pk_field2')
        )
    ),
    '$tableData' => array(
        array('collection' => 'customer/attribute_collection', 'pk_field1' => 'pk_value1', 'pk_field2' => 'pk_value2'),
    ),
    '$expected' => array(
        'updates' => array(
            array(
                'table' => 'table',
                'field' => 'collection',
                'to'    => 'Mage_Customer_Model_Resource_Attribute_Collection',
                'from'  => array('`pk_field1` = ?' => 'pk_value1', '`pk_field2` = ?' => 'pk_value2')
            ),
        ),
        'aliases_map' => array(
            Mage_Core_Model_Resource_Setup_Migration::ENTITY_TYPE_RESOURCE => array(
                'customer/attribute_collection' => 'Mage_Customer_Model_Resource_Attribute_Collection'
            ),
        )
    ),
);
