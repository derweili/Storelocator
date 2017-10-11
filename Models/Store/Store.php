<?php

namespace VjfStorelocator\Models\Store;
use Shopware\Components\Model\ModelEntity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="vjf_storelocator_store")
 */

class Store extends ModelEntity {
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


  /**
   * @return int
   */
  public function getId()
  {
      return $this->id;
  }

  /**
   * @return string
   */
  public function getName()
  {
      return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName($name)
  {
      $this->name = $name;
  }

  /**
   * @return string
   */
  public function getType()
  {
      return $this->type;
  }

  /**
   * @param string $type
   */
  public function setType($type)
  {
      $this->type = $type;
  }

  /**
   * @return string
   */
  public function getRank()
  {
      return $this->rank;
  }

  /**
   * @param string $rank
   */
  public function setRank($rank)
  {
      $this->rank = $rank;
  }

  /**
   * @return string
   */
  public function getStreet()
  {
      return $this->street;
  }

  /**
   * @param string $street
   */
  public function setStreet($street)
  {
      $this->street = $street;
  }

  /**
   * @return string
   */
  public function getZip()
  {
      return $this->zip;
  }

  /**
   * @param string $zip
   */
  public function setZip($zip)
  {
      $this->zip = $zip;
  }

  /**
   * @return string
   */
  public function getCity()
  {
      return $this->city;
  }

  /**
   * @param string $city
   */
  public function setCity($city)
  {
      $this->city = $city;
  }

  /**
   * @return string
   */
  public function getCountry()
  {
      return $this->country;
  }

  /**
   * @param string $country
   */
  public function setCountry($country)
  {
      $this->country = $country;
  }

  /**
   * @return string
   */
  public function getLatitude()
  {
      return $this->city;
  }

  /**
   * @param string $latitude
   */
  public function setLatitude($latitude)
  {
      $this->country = $this->city;
  }

}
