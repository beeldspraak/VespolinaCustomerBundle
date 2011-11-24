<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\CustomerBundle\Model;

use Vespolina\CustomerBundle\Model\CustomerAddressInterface;

/**
 * @author Daniel Kucharski <daniel@xerias.be>
 */
abstract class CustomerAddress implements CustomerAddressInterface
{

    protected $city;
    protected $country;
    protected $street;
    protected $state;

    public function getCity()
    {

        return $this->city;
    }

    public function getCountry()
    {

        return $this->country;
    }

    public function getStreet()
    {
        
        return $this->street;
    }


    public function getState()
    {

        return $this->state;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function setState($state)
    {
        $this->state = $state;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

}
