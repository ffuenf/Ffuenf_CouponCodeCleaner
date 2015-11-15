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

/**
 * @see Ffuenf_CouponCodeCleaner_Helper_Data
 *
 * @loadSharedFixture shared
 */
require_once 'abstract.php';

class Ffuenf_Shell_CouponcodeCleaner extends Mage_Shell_Abstract
{
    /**
     * Run script
     */
    public function run()
    {
        echo "Start Ffuenf_CouponCodeCleaner\r\n";
        $run = Mage::getModel("ffuenf_couponcodecleaner/cleaner")->clean();
        print_r($run);
        echo "End Ffuenf_CouponCodeCleaner\r\n";
    }

    /**
     * Retrieve Usage Help Message
     */
    public function usageHelp()
    {
        return <<<USAGE
Usage:  php -f ffuenf_couponcodecleaner.php -- [options]

  help                          This help

USAGE;
    }
}

//Run Ffuenf CouponCodeCleaner Script
$shell = new Ffuenf_Shell_CouponCodeCleaner();
$shell->run();