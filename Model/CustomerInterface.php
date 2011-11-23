<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\CustomerBundle\Model;

/**
 * @author Daniel Kucharski <daniel@xerias.be>
 */
interface CustomerInterface
{

    /**
     * The (functional) customer id
     *
     * @abstract
     * @return void
     */
    public function getCustomerId();

    /**
     * Customer communication language
     *
     * @abstract
     * @return void
     */
    public function getLanguage();


    /**
     * Customer name
     *
     * @abstract
     * @return void
     */
    public function getName();

    public function setCustomerId($customerId);
    
    public function setLanguage($language);
    
    public function setName($name);

}
