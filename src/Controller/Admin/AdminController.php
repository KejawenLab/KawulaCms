<?php

declare(strict_types=1);

namespace KejawenLab\Application\KawulaCms\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as EasyAdmin;
use Symfony\Component\HttpFoundation\Request;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
class AdminController extends EasyAdmin
{
    const DEFAULT_ROLE = 'ROLE_USER';

    /**
     * @param Request $request
     */
    protected function initialize(Request $request)
    {
        parent::initialize($request);

        $this->denyAccessUnlessGranted($this->entity['role'] ?? self::DEFAULT_ROLE);
        $action = $request->query->get('action', 'list');
        $this->denyAccessUnlessGranted($this->entity[$action]['role'] ?? self::DEFAULT_ROLE);
    }
}
