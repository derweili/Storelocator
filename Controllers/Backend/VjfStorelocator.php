<?php

use Shopware\Components\CSRFWhitelistAware;

class Shopware_Controllers_Backend_VjfStorelocator extends \Shopware_Controllers_Backend_Application implements CSRFWhitelistAware {
  protected $model='VjfStorelocator\Models\Store\Store';
  protected $alias='store';

  public function getWhitelistedCSRFActions()
  {
      return [
          'index'
      ];
  }

  public function indexAction() {
    parent::indexAction();
  }
}
