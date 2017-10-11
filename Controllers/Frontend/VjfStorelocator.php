<?php

use Shopware\Components\CSRFWhitelistAware;

class Shopware_Controllers_Frontend_VjfStorelocator extends Enlight_Controller_Action implements CSRFWhitelistAware {
  public function init() {
  }

  public function indexAction() {
    $stores=Shopware()->Models()->getRepository('VjfStorelocator\Models\Store\Store')->findAll();
    $vjfStores=[];
    foreach($stores as $store) {
      $vjfStores[]=$store->toArray();
    }
    $this->View()->assign('vjfStores',$vjfStores);
  }

  public function getWhitelistedCSRFActions()
  {
      return array(
        'index',
      );
  }
}
