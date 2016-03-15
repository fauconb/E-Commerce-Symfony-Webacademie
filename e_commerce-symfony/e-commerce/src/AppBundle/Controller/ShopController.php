<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Article;
use AppBundle\Form\ArticleType;

/**
 * Article controller.
 *
 * @Route("/shop")
 */
class ShopController extends Controller
{
    /**
     * Lists all Article entities.
     *
     * @Route("/{id}", name="article_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('AppBundle:Article')->findAll();
dump($articles);
        return $this->render('shop/index.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * Finds and displays a Article entity.
     *
     * @Route("/article/{id}", name="article_show")
     * @Method("GET")
     */
    public function showAction(Article $article)
    {
        return $this->render('shop/show.html.twig', array(
            'article' => $article,
        ));
    }
}