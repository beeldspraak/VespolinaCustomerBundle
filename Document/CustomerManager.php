<?php
/**
 * (c) Vespolina Project http://www.vespolina-project.org
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vespolina\CustomerBundle\Document;

use Symfony\Component\DependencyInjection\Container;

use Vespolina\CustomerBundle\Document\Customer;
use Vespolina\CustomerBundle\Model\CustomerInterface;
use Vespolina\CustomerBundle\Model\CustomerManager as BaseCustomerManager;
/**
 * @author Daniel Kucharski <daniel@xerias.be>
 * @author Richard Shank <develop@zestic.com>
 */
class CustomerManager extends BaseCustomerManager
{
    protected $dm;
    protected $primaryIdentifier;
    protected $salesCustomerRepo;
    
    public function __construct(Container $container)
    {
        $this->dm = $container->get('doctrine.odm.mongodb.default_document_manager');
        $this->salesCustomerRepo = $this->dm->getRepository('Vespolina\CustomerBundle\Document\Customer'); // TODO make configurable

        parent::__construct($container);
    }

    /**
     * @inheritdoc
     */
    public function createCustomer($customerType = 'default')
    {
        // TODO: this will be using factories to allow for a number of different types of CCustomer classes
        $customer = new Customer();
        $this->init($customer);

        return $customer;
    }

    /**
     * @inheritdoc
     */
    public function findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        return $this->customerRepo->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * @inheritdoc
     */
    public function findCustomerById($id)
    {

        return $this->customerRepo->find($id);
    }

    /**
     * @inheritdoc
     */
    public function findCustomerByIdentifier($name, $code)
    {

    }

    /**
     * @inheritdoc
     */
    public function updateCustomer(CustomerInterface $customer, $andFlush = true)
    {
        $this->dm->persist($customer);
        if ($andFlush) {
            $this->dm->flush();
        }
    }
}
