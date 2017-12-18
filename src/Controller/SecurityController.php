<?php

declare(strict_types=1);

namespace KejawenLab\Application\KawulaCms\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="security_login")
     *
     * @param AuthenticationUtils $authenticationUtils
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $data = [
            'username' => $authenticationUtils->getLastUsername(),
            'error' => $authenticationUtils->getLastAuthenticationError(),
        ];

        return $this->render('security/login.html.twig', $data);
    }

    /**
     * @Route("/logout", name="security_logout")
     *
     * @throws
     */
    public function logout(): void
    {
        throw new \Exception('This should never be reached!');
    }
}
