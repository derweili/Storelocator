<?php

namespace VjfStorelocator\Models\Store;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="vjf_storelocator_store")
 */

class Store {
 /**
  * @var integer
  * @ORM\Column(name="store_id", type="integer", nullable=false)
  * @ORM\Id
  * @ORM\GeneratedValue(strategy="IDENTITY")
  */
  private $id;

  /**
   * @var string
   * @ORM\Column(name="name", type="string", length=255, nullable=false)
   */
  private $name;

  /**
   * @var string
   * @ORM\Column(name="type", type="string", length=80, nullable=false)
   */
  private $type;

  /**
   * @var string
   * @ORM\Column(name="rank", type="string", length=255, nullable=false)
   */
  private $rank;

  /**
   * @var string
   * @ORM\Column(name="street", type="string", length=255, nullable=true)
   */
  private $street;

  /**
   * @var string
   * @ORM\Column(name="zip", type="string", length=10, nullable=true)
   */
  private $zip;

  /**
   * @var string
   * @ORM\Column(name="city", type="string", length=255, nullable=true)
   */
  private $city;

  /**
   * @var string
   * @ORM\Column(name="country", type="string", length=80, nullable=true)
   */
  private $country;

  /**
   * @var decimal
   * @ORM\Column(name="latitude", type="decimal", precision=10, scale=8, nullable=true)
   */
  private $latitude;

  /**
   * @var decimal
   * @ORM\Column(name="longitude", type="decimal", precision=10, scale=8, nullable=true)
   */
  private $longitude;

  public function toArray() {
    return get_object_vars($this);
  }
}
