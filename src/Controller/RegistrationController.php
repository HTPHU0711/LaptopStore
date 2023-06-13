<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    /**
     * @Route("/registration", name="app_registration")
     */
    public function RegisterAction(Request $request, UserPasswordHasherInterface $userPasswordHasher, ManagerRegistry $re): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form ->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $user->setPassword($userPasswordHasher->hashPassword($user, $form->get('password')->getData()));
<<<<<<< HEAD
            $user->setRoles(['Role_USER']);
=======
            $user->setRoles(['ROLE_USER']);
>>>>>>> 549bb062610408a1a0f861b9daea46ee4407f875
            $em =$re->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('app_login');
        }
        return $this->render('registration/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
