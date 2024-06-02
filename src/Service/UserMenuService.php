<?php

namespace App\Service;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Config\Menu\MenuItem;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserMenuService extends AbstractController
{
    public function getUserMenu(): UserMenu
    {
        $user = $this->getUser();
        
        if (!$user instanceof User) {
            throw new \Exception('Wrong user');
        }
        
        return UserMenu::new()
            ->setName($user->getNombre())
            ->setAvatarUrl($user->getAvatarUrl()) // Ajusta esto según tu entidad de usuario
            ->setMenuItems([
            ]);
    }
}