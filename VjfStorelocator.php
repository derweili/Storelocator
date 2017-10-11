<?php

namespace VjfStorelocator;

use Doctrine\ORM\Tools\SchemaTool;
use Doctrine\Common\Collections\ArrayCollection;
use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;
use Shopware\Components\Plugin\Context\UninstallContext;
use Shopware\Components\Theme\LessDefinition;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use VjfStorelocator\Models\Store\Store;
use VjfStorelocator\Models\Store\StoreRank;

class VjfStorelocator extends Plugin {
  public function getBackendController(\Enlight_Event_EventArgs $args)
  {
    Shopware()->Template()->addTemplateDir($this->getPath().'/Views');
    return $this->getPath() . '/Controllers/Backend/VjfStorelocator.php';
  }

  public function getFrontendController(\Enlight_Event_EventArgs $args)
  {
    Shopware()->Template()->addTemplateDir($this->getPath().'/Views');
    return $this->getPath() . '/Controllers/Frontend/VjfStorelocator.php';
  }

  public function addCssFiles(\Enlight_Event_EventArgs $args)
  {
      $cssFiles = [
        $this->getPath() . '/Views/frontend/_public/src/js/jlocator/jlocator.min.css',
      ];
      return new ArrayCollection($cssFiles);
  }

  public function addLessFiles(\Enlight_Event_EventArgs $args)
  {
      $lessFiles = new LessDefinition([], [
          $this->getPath() . '/Views/frontend/_public/src/less/all.less',
      ], $this->getPath());
      return new ArrayCollection([$lessFiles]);
  }

  public function addJsFiles(\Enlight_Event_EventArgs $args)
  {
      $jsFiles = [
        $this->getPath() . '/Views/frontend/_public/src/js/jlocator/json2.min.js',
        $this->getPath() . '/Views/frontend/_public/src/js/jlocator/jplist.min.js',
        $this->getPath() . '/Views/frontend/_public/src/js/jlocator/jlocator.min.js',
      ];
      return new ArrayCollection($jsFiles);
  }

  public static function getSubscribedEvents()
  {
      return [
          'Enlight_Controller_Dispatcher_ControllerPath_Backend_VjfStorelocator' => 'getBackendController',
          'Enlight_Controller_Dispatcher_ControllerPath_Frontend_VjfStorelocator' => 'getFrontendController',
          'Theme_Compiler_Collect_Plugin_Css' => 'addCssFiles',
          'Theme_Compiler_Collect_Plugin_Less' => 'addLessFiles',
          'Theme_Compiler_Collect_Plugin_Javascript' => 'addJsFiles',
      ];
  }

  public function afterInit()
  {
      parent::afterInit();
  }

  /**
  * @inheritdoc
  */
  public function install(InstallContext $context)
  {
     $this->createSchema();
     parent::install($context);
  }
  /**
  * @inheritdoc
  */
  public function uninstall(UninstallContext $context)
  {
     $this->removeSchema();
     parent::uninstall($context);
  }
  /**
  * creates database tables on base of doctrine models
  */
  private function createSchema()
  {
     $tool = new SchemaTool($this->container->get('models'));
     $classes = [
         $this->container->get('models')->getClassMetadata(Store::class),
     ];
     $tool->updateSchema($classes, true);
  }
  private function removeSchema()
  {
     $tool = new SchemaTool($this->container->get('models'));
     $classes = [
       $this->container->get('models')->getClassMetadata(Store::class),
     ];
     $tool->dropSchema($classes);
  }

  private function createConfig() {
      $this->Form()->setElement(
          'select',
          'font-size',
          array(
              'label' => 'Font size',
              'store' => array(
                  array(12, '12px'),
                  array(18, '18px'),
                  array(25, '25px')
              ),
              'value' => 12
          )
      );

      $this->Form()->setElement('boolean', 'italic', array(
          'value' => true,
          'label' => 'Italic'
      ));
  }
}
