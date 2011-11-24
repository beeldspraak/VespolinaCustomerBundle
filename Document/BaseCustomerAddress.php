<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\CustomerBundle\Document;

use Vespolina\CustomerBundle\Model\CustomerAddress as AbstractCustomerAddress;
/**
 * @author Daniel Kucharski <daniel@xerias.be>
 */
abstract class BaseCustomerAddress extends AbstractCustomerAddress
{
    protected $id;
}