<?php

declare(strict_types=1);

namespace KejawenLab\Application\KawulaCms\Controller\Admin;

use KejawenLab\Application\KawulaCms\Form\DataTransformer\RoleTransformer;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
class UserController extends AdminController
{
    /**
     * @var RoleTransformer
     */
    private $transformer;

    public function __construct(RoleTransformer $transformer)
    {
        $this->transformer;
    }

    /**
     * @param object $entity
     * @param string $view
     *
     * @return \Symfony\Component\Form\FormBuilderInterface
     */
    protected function createEntityFormBuilder($entity, $view)
    {
        $builder = parent::createEntityFormBuilder($entity, $view);
        $builder->addModelTransformer($this->transformer);

        return $builder;
    }
}
