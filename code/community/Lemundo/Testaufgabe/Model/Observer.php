<?php
/**
 * Created by PhpStorm.
 * User: osama
 * Date: 24.09.15
 * Time: 22:13
 */

class Lemundo_Testaufgabe_Model_Observer
{

    /**
     *
     * @param  $observer observer object
     *
     * @return $product product object
     *
     */

    public function catalog_product_prepare_save($observer)
    {
        $product = $observer->getProduct();
        $product->setName($product->getName()."".Mage::getStoreConfig('lemundotab/general/text_field'));
        return $product;

    }
}