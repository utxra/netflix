<?php

namespace App\Controller\Admin;

use App\Entity\Actores;
use App\Entity\Categorias;
use App\Entity\Episodios;
use App\Entity\Peliculas;
use App\Entity\Series;
use App\Entity\Temporadas;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    #[IsGranted('ROLE_ADMIN')]
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
         $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
         return $this->redirect($adminUrlGenerator->setController(UserCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Netflix Admin Dashboard')
            ->setFaviconPath('images/favicon/favicon.ico')
            ->setTranslationDomain('my-custom-domain');
    }

    public function configureUserMenu(UserInterface $user): UserMenu
    {
        if (!$user instanceof User) {
            throw new \Exception('Wrong user');
        }

        return parent::configureUserMenu($user)
            ->setAvatarUrl($user->getAvatarUrl());
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-dashboard');
        yield MenuItem::linkToCrud('Usuarios', 'fa fa-user', User::class);
        yield MenuItem::linkToCrud('Peliculas', 'fa fa-film', Peliculas::class);
        yield MenuItem::linkToCrud('Series', 'fa fa-forward-step', Series::class);
        yield MenuItem::linkToCrud('Categorias', 'fa fa-list', Categorias::class);
        yield MenuItem::linkToCrud('Actores', 'fa fa-users', Actores::class);
        yield MenuItem::linkToCrud('Temporadas', 'fa fa-list-ol', Temporadas::class);
        yield MenuItem::linkToCrud('Episodios', 'fa fa-list-ol', Episodios::class);
        yield MenuItem::linkToUrl('Homepage', 'fas fa-home', $this->generateUrl('app_home'));
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }

    public function configureActions(): Actions
    {
        return parent::configureActions()
            ->add(Crud::PAGE_INDEX, Action::DETAIL);
    }
}
