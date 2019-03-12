<?php
namespace BlogApp\Persistence;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use BlogApp\Persistence\AbstractDAO;
use BlogApp\Model\User;

class UserDAO extends AbstractDAO{

    public function __construct() {

        parent::__construct('BlogApp\Model\User');
    }
}