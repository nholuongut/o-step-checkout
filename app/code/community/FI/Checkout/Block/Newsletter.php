<?php
/**
 * Zero Step Checkout Newsletter block
 *
 * @category    FI
 * @package     FI_Checkout
 * @author      Nho Luong <luongutnho@hotmail.com>
 * @copyright   Copyright (c) 2012 Sergiy Stotskiy (http://freaksidea.com)
 */
class FI_Checkout_Block_Newsletter extends Mage_Core_Block_Template
{
    /**
     * Convert block to html sting.
     * Checks is possible to show newsletter checkbox
     *
     * @return string
     */
    protected function _toHtml()
    {
        if (!$this->helper('fi_checkout')->isVisibleNewsletter()
            || Mage::helper('fi_checkout')->isCustomerSubscribed()
        ) {
            return '';
        }

        return parent::_toHtml();
    }
}
