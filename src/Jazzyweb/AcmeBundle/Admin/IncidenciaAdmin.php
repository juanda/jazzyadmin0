<?php

namespace Jazzyweb\AcmeBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class IncidenciaAdmin extends Admin{

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('usuario', 'entity', array('label' => 'Informador', 'class' => 'Jazzyweb\UserBundle\Entity\User'))
            ->add('departamento', 'entity', array('label' => 'Departamento','class' => 'Jazzyweb\UserBundle\Entity\Group'))
            ->add('descripcion', 'textarea')
            ->add('observaciones', 'textarea')
            ->add('estado', 'text')
            ->add('prioridad', 'text')
            ->add('importancia', 'text')
            ->add('reincidente', null, array('required' => false))
            ->add('fechaApertura', 'datetime')
            ->add('fechaCierre', 'datetime')
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('descripcion')
            ->add('estado')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('usuario', 'text', array('label' => 'Informador'))
            ->add('departamento', 'text')
            ->add('estado', 'text')
            ->add('fechaApertura', 'datetime')
            ->add('fechaCierre', 'datetime')
        ;
    }

}