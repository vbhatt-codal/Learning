<?php


//namespace Learning\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class User extends \Phalcon\Mvc\Model
{
    public function initialize()
    {
        $this->setSource('users');
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

    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    public $password;


    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }
}
