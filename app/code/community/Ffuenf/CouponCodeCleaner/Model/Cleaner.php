<?php

/**
 * Ffuenf_CouponCodeCleaner extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2015 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

class Ffuenf_CouponCodeCleaner_Model_Cleaner
{
    /**
     * Clean expired sales rule entries.
     * This method will be called via a Magento crontab task.
     *
     * @return null|String[]
     */
    public function clean()
    {
        if (!Mage::helper('ffuenf_couponcodecleaner')->isExtensionActive()) {
            return;
        }
        $report = array();
        $report['coupons']['deleted']['count'] = 0;
        
        $allCoupons = Mage::getModel('salesrule/rule')->getCollection()->load();
        $report['coupons']['count'] = count($allCoupons);
        $now = strtotime('now');
        $today = date('Y-m-d', $now);
        foreach ($allCoupons as $aCoupon) {
            $couponName = $aCoupon->getName();
            $expiryDate = $aCoupon->getToDate();
            if ($today > $expiryDate) {
                $aCoupon->delete();
                $report['coupons']['deleted']['codes'] .= $couponName.' / '
                $report['coupons']['deleted']['count']++;
            }
        }
        Mage::log('[COUPONCODECLEANER] Cleaning expired coupon codes (count: ' . $report['coupons']['count'] . ' | deleted: ' . $report['coupons']['deleted']['count'] . ' | codes: ' . $report['coupons']['deleted']['codes'] . ')');
        return $report;
    }
}