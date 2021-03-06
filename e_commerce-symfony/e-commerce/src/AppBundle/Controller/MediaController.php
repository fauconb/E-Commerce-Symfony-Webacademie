<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Media;
use AppBundle\Form\MediaType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Media controller.
 *
 * @Route("/admin/media")
 */
class MediaController extends Controller
{
    /**
     * Lists all Media entities.
     *
     * @Route("/", name="admin_media_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $media = $em->getRepository('AppBundle:Media')->findAll();

        return $this->render('media/index.html.twig', array(
            'media' => $media,
        ));
    }

    /**
     * Creates a new Media entity.
     *
     * @Route("/new", name="admin_media_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $medium = new Media();
        $form = $this->createForm('AppBundle\Form\MediaType', $medium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($medium);
            $em->flush();

            return $this->redirectToRoute('admin_media_show', array('id' => $media->getId()));
        }

        return $this->render('media/new.html.twig', array(
            'medium' => $medium,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Media entity.
     *
     * @Route("/{id}", name="admin_media_show")
     * @Method("GET")
     */
    public function showAction(Media $medium)
    {
        $deleteForm = $this->createDeleteForm($medium);

        return $this->render('media/show.html.twig', array(
            'medium' => $medium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Media entity.
     *
     * @Route("/{id}/edit", name="admin_media_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Media $medium)
    {
        $deleteForm = $this->createDeleteForm($medium);
        $editForm = $this->createForm('AppBundle\Form\MediaType', $medium);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($medium);
            $em->flush();

            return $this->redirectToRoute('admin_media_edit', array('id' => $medium->getId()));
        }

        return $this->render('media/edit.html.twig', array(
            'medium' => $medium,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Upload Media
     *
     * @Route("/upload", name="admin_media_upload")
     * @Method("POST")
     */
    public function uploadMediaAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $path = $this->container->getParameter('kernel.root_dir').'/../web/uploads/';
        $files = $request->files;
        foreach($files as $key => $value)
        {
            $media = new Media();
            $filename = uniqid() .'.'. $value->guessExtension();
            $media->setType($value->getMimeType());
            $media->setName($value->getClientOriginalName());
            $media->setSize($value->getSize());
            $media->setPath('/uploads/'.$filename);
            $media->setPathVirtuel('/');
            $media->setCreatedAt(new \DateTime());
            $value->move($path, $filename);
            $em->persist($media);
            $em->flush();
        }

        $response = new Response(json_encode(["success" => true, "error" => null]));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * List media
     *
     * @Route("/list", name="admin_media_list")
     * @Method("POST")
     */
    public function listMediaAction()
    {
        $em = $this->getDoctrine()->getManager();
        $medias = $em->getRepository('AppBundle:Media')->findAll();

        $array = [];

        foreach($medias as $key => $value)
        {
            $array_content = [];
            $array_content['name'] = $value->getName();
            $array_content['rights'] = '-rw-r--r--';
            $array_content['size'] = $value->getSize();
            $array_content['date'] = "2015-04-29 09:04:24";
            $array_content['type'] = "file";
            array_push($array, $array_content);
        }

        $response = new Response(json_encode(["result" => $array]));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Deletes a Media entity.
     *
     * @Route("/{id}", name="admin_media_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Media $medium)
    {
        $form = $this->createDeleteForm($medium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($medium);
            $em->flush();
        }

        return $this->redirectToRoute('admin_media_index');
    }

    /**
     * Creates a form to delete a Media entity.
     *
     * @param Media $medium The Media entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Media $medium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_media_delete', array('id' => $medium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
