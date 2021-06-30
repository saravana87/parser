<?php

namespace App\Feeds\Vendors\CPC;

use App\Feeds\Feed\FeedItem;
use App\Feeds\Processor\HttpProcessor;

class Vendor extends HttpProcessor
{
    public const CATEGORY_LINK_CSS_SELECTORS = [ 'nav.woocommerce-pagination ul.page-numbers a' ];
    public const PRODUCT_LINK_CSS_SELECTORS = [ 'li.type-product a:first-child' ];

    protected array $first = [ 'https://carolinapetcompany.com/shop/' ];

    public function isValidFeedItem( FeedItem $fi ): bool
    {
        return !empty( $fi->getMpn() );
    }
}
