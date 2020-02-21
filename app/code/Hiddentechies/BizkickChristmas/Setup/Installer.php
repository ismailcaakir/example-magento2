<?php

/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Hiddentechies\BizkickChristmas\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface {

    /**
     * @var \Magento\CmsSampleData\Model\Page
     */
    private $page;

    /**
     * @var \Magento\CmsSampleData\Model\Block
     */
    private $block;

    /**
     * @param \Hiddentechies\BizkickChristmas\Model\Page $page
     * @param \Hiddentechies\BizkickChristmas\Model\Block $block
     */
    public function __construct(
    \Hiddentechies\BizkickChristmas\Model\Page $page, 
            \Hiddentechies\BizkickChristmas\Model\Block $block
    ) {
        $this->page = $page;
        $this->block = $block;
    }

    /**
     * {@inheritdoc}
     */
    public function install() {

        //$this->page->install(['Hiddentechies_BizkickChristmas::fixtures/pages/pages.csv']);
        $this->page->install(
                [

                    'Hiddentechies_BizkickChristmas::DemoPages/pages.csv',
                ]
        );
        $this->block->install(
                [

                    'Hiddentechies_BizkickChristmas::DemoBlocks/blocks.csv',
                ]
        );
    }

}
