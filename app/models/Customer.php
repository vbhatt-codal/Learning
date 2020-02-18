<?php


use Phalcon\Mvc\Model;

class Customer extends \Phalcon\Mvc\Model
{
    public function initialize()
    {
        $this->setSource('customers');
    }

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    public $id;


    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */

    public $cname;

    /**
     *
     * @var string
     * @Column(type="string", length=500, nullable=false)
     */
    public $address;

    /**
     *
     * @var string
     * @Column(type="integer", length=10, nullable=false)
     */
    public $contact;


    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }
}
