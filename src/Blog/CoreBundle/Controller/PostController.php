<?php

namespace Blog\CoreBundle\Controller;

use Blog\ModelBundle\Entity\Comment;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blog\ModelBundle\Form\CommentType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;
use JMS\DiExtraBundle\Annotation as DI;

class PostController extends Controller
{

    /**
     * @var EntityManager $em
     * @DI\Inject("doctrine.orm.entity_manager")
     */
    private $em;

    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {

        $posts = $this->em->getRepository('ModelBundle:Post')->findAll();
        $latestPosts = $this->em->getRepository('ModelBundle:Post')->findLatest(5);

        //exit(\Doctrine\Common\Util\Debug::dump($posts));

        return array(
                'posts' => $posts,
                'latestPosts' => $latestPosts
            );

    }


    /**
     * Show a post
     *
     * @param string $slug
     * @throws NotFoundHttpException
     * @return array
     *
     * @Route("/{slug}")
     * @Template()
     */
    public function showAction($slug)
    {
        $post = $this->em->getRepository('ModelBundle:Post')->findOneBy(
            array(
                'slug' => $slug
            )
        );

        //exit(\Doctrine\Common\Util\Debug::dump($post));

        if($post == null){
            throw createNotFoundException('Post Was Not Found');
        }

        $form = $this->createForm(new CommentType());

        return array(
            'post' => $post,
            'form' => $form->createView()
        );

    }

    /**
    /**
     * Create comment
     *
     * @param Request $request
     * @param string  $slug
     * @throws NotFoundHttpException
     * @return array
     *
     * @Route("/{slug}/create-comment")
     * @Method("POST")
     * @Template("CoreBundle:Post:show.html.twig")
     */
    public function createCommentAction(Request $request, $slug)
    {
//        exit(\Doctrine\Common\Util\Debug::dump($slug));
//        var_dump($request); exit;
        $post = $this->em->getRepository('ModelBundle:Post')->findOneBy(
            array('slug' => $slug)
        );

        if($post === null){
            throw createNotFoundException('Post Was Not Found');
        }

        $comment = new Comment();
        $comment->setPost($post);

        $form = $this->createForm(new CommentType(), $comment);
        $form->handleRequest($request);

        if($form->isValid()){

            $this->em->persist($comment);
            $this->em->flush();

            $this->get('session')->getFlashBag()->add('success', 'Your comment was submitted successfully');

            return $this->redirect($this->generateUrl('blog_core_post_show', array('slug' => $post->getSlug())));
        }

        return array(
            'post' => $post,
            'form' => $form->createView()
        );
    }

}
