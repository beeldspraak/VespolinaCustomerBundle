<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\CustomerBundle\Model;

use Symfony\Component\DependencyInjection\Container;

use Vespolina\CustomerBundle\Model\CustomerInterface;
use Vespolina\CustomerBundle\Model\CustomerManagerInterface;

/**
 * @author Daniel Kucharski <daniel@xerias.be>
 */
class CustomerManager {

    protected $container;

    public function __construct(Container $container) {

        $this->container = $container;
    }



    public function init(CustomerInterface $customer) {
        
    }

    public function initItem(CustomerItemInterface $customer) {

    }
}
