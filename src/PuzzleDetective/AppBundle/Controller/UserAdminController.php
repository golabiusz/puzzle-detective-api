<?php

namespace PuzzleDetective\AppBundle\Controller;

use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;
use PuzzleDetective\AppBundle\Entity\User;

/**
 * Controller for creating, retrieving, updating and deleting users.
 *
 * @author Dariusz Gołąbek <golabiusz@gmail.com>
 */
class UserAdminController extends BaseAdminController
{
    /**
     * Creates new user.
     *
     * @return User user entity
     */
    public function createNewUserEntity(): User
    {
        return $this->get('fos_user.user_manager')->createUser();
    }

    /**
     * Save changes using FOSUserBundle's user manager before persisting.
     *
     * @param User $user user entity
     */
    public function prePersistUserEntity(User $user): void
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }

    /**
     * Save changes using FOSUserBundle's user manager before updating.
     *
     * @param User $user user entity
     */
    public function preUpdateUserEntity($user): void
    {
        $this->get('fos_user.user_manager')->updateUser($user, false);
    }
}
