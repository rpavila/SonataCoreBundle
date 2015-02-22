<?php

namespace Sonata\CoreBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;

class WysiHtml5Type extends AbstractType {

    /**
     * @return string
     */
    public function getName()
    {
        return 'sonata_type_wysihtml5';
    }

    /**
     * @return null|string|\Symfony\Component\Form\FormTypeInterface
     */
    public function getParent()
    {
        return 'textarea';
    }

    /**
     * @param FormView $view
     * @param FormInterface $form
     * @param array $options
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $wy_options = array();
        $view->vars['wy_options'] = $wy_options;
    }
}