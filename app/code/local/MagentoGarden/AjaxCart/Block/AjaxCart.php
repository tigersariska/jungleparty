<?php
/**
 * MagentoGarden
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentogarden.com so we can send you a copy immediately.
 *
 * @category    block
 * @package     magentogarden_ajaxcartlite
 * @copyright   Copyright (c) 2012 MagentoGarden Inc. (http://www.magentogarden.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 * @version     1.1
 * @author      Alan Marcus (alan.marcus@magentogarden.com);
 */
class MagentoGarden_AjaxCart_Block_AjaxCart extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getAjaxCart()     
     { 
        if (!$this->hasData('ajaxcart')) {
            $this->setData('ajaxcart', Mage::registry('ajaxcart'));
        }
        return $this->getData('ajaxcart');
        
    }
}