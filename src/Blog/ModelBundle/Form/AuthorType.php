<?php
namespace Blog\ModelBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
/**
 * Class AuthorType
 * @package Blog\ModelBundle\Form
 */
class AuthorType extends AbstractType
{
    /**
     * {@inheritDoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name');
    }
    /**
     * {@inheritDoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\ModelBundle\Entity\Author',
        ));
    }
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return 'blog_modelbundle_author';
    }
}