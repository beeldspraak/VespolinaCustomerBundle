<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\CustomerBundle\Model;

use Vespolina\CustomerBundle\Model\CustomerInterface;

/**
 * @author Daniel Kucharski <daniel@xerias.be>
 */
abstract class Customer implements CustomerInterface
{

    protected $addresses;
    protected $createdAt;
    protected $customerId;
    protected $language;
    protected $name;
    protected $type;    // person or organization
    protected $updatedAt;
    
    public function addAddress(CustomerAddressInterface $address)
    {

        $this->addresses[] = $address;
    }
    
    public function getAddresses()
    {

        return $this->addresses;
    }

    public function getCustomerId()
    {

        return $this->customerId;
    }

    public function getLanguage()
    {

        return $this->language;
    }

    public function getName()
    {

        return $this->name;
    }

    public function getType()
    {

        return $this->type;
    }


    /**
     * @inheritdoc
     */
    public function incrementCreatedAt()
    {
        if (null === $this->createdAt) {
            $this->createdAt = new \DateTime();
        }
        $this->updatedAt = new \DateTime();
    }

    /**
     * @inheritdoc
     */
    public function incrementUpdatedAt()
    {
        $this->updatedAt = new \DateTime();
    }

    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }
    
    public function setLanguage($language)
    {

        $this->language = $language;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}

