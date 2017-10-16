<?php

namespace VjfStorelocator\Models\Store;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Events;

/**
 * @category  VjfStorelocator
 * @package   VjfStorelocator\Models\Store
 */
class StoreSubscriber implements EventSubscriber
{
    /**
     * Returns an array of events this subscriber wants to listen to.
     *
     * @return array
     */
    public function getSubscribedEvents()
    {
        return array(Events::preUpdate);
    }

    /**
     * @param PreUpdateEventArgs $eventArgs
     */
    public function preUpdate(PreUpdateEventArgs $eventArgs)
    {
        $order = $eventArgs->getEntity();
        error_log('StoreSubscriber:preUpdate');
        if (!($order instanceof Store)) {
          error_log('Not instance of Store');

            return;
        }

        if ($eventArgs->getEntity() instanceof Store) {
            // if ($eventArgs->hasChangedField('street')) {
              error_log('hasChangedFieldName');
              // $eventArgs->setNewValue('street', 'Mannheim Straße');
              // $eventArgs->setNewValue('city', 'Heidelberg');
              // $eventArgs->setNewValue('rank', '20');
              // $eventArgs->setNewValue('country', 'USA');
                //$this->validateCreditCard($eventArgs->getNewValue('creditCard'));

            // }
        }
        $eventArgs->setNewValue('longitude', 20.303930);

        error_log('$properties');
        error_log(print_r($properties, true));

        $eventArgs->setNewValue('name', 'Jan Rössler');

        //street, zip, city or country changed?
        // if (
        //     !$eventArgs->hasChangedField('street') &&
        //     !$eventArgs->hasChangedField('zip') &&
        //     !$eventArgs->hasChangedField('city') &&
        //     !$eventArgs->hasChangedField('country')
        // ) {
        //   error_log('Field not changed');
        //
        //     return;
        // }
        // $eventArgs->setNewValue('name', 'Jan Rössler');

        error_log('Fields changed');

        $geoCoordinates = array();

        $service = Shopware()->Container()->get('VjfStorelocator_GeoCoordinates');
        // error_log('test');
        // error_log($eventArgs->getNewValue('street')->getId());
        // error_log($eventArgs->getNewValue('city')->getId());
        // error_log($eventArgs->getNewValue('zip')->getId());
        // error_log($eventArgs->getNewValue('country')->getId());
        // $coordinates = $service->getCoordinates('Mannheim');
        // $eventArgs->setNewValue('name', 'Jan Rössler');


    }

}
