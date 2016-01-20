<?php

namespace Blog\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\DiExtraBundle\Annotation as DI;

/**
 * Class AuthorController
 * @package Blog\CoreBundle\Controller
 */
class AuthorController extends Controller
{


    /**
     * @var EntityManager $em
     * @DI\Inject("doctrine.orm.entity_manager")
     */
    private $em;

    /**
     * @var string slug
     * @throws NotFoundHttpException
     *
     * @Route("/author/{slug}")
     * @Template()
     * @return array
     */
    public function showAction($slug)
    {

        $author = $this->em->getRepository('ModelBundle:Author')->findOneBy(
            array(
                'slug' => $slug
            )
        );

        if($author == null){
            throw $this->createNotFoundException('Author Not Found');
        } else {
            $posts = $this->em->getRepository('ModelBundle:Post')->findBy(

                array(

                    'author' => $author
                )
            );
        }

        return array(
                'author' => $author,
                'posts' => $posts
            );
    }

}
