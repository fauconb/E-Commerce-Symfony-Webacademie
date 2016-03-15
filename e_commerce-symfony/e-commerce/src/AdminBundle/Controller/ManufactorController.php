<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Manufactor;
use AdminBundle\Form\ManufactorType;

/**
 * Manufactor controller.
 *
 * @Route("/admin/manufactor")
 */
class ManufactorController extends Controller
{
    /**
     * Lists all Manufactor entities.
     *
     * @Route("/", name="admin_manufactor_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $manufactors = $em->getRepository('AdminBundle:Manufactor')->findAll();

        return $this->render('manufactor/index.html.twig', array(
            'manufactors' => $manufactors,
        ));
    }

    /**
     * Creates a new Manufactor entity.
     *
     * @Route("/new", name="admin_manufactor_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $manufactor = new Manufactor();
        $form = $this->createForm('AdminBundle\Form\ManufactorType', $manufactor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($manufactor);
            $em->flush();

            return $this->redirectToRoute('admin_manufactor_show', array('id' => $manufactor->getId()));
        }

        return $this->render('AdminBundle:Manufactor:new.html.twig', array(
            'manufactor' => $manufactor,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Manufactor entity.
     *
     * @Route("/{id}", name="admin_manufactor_show")
     * @Method("GET")
     */
    public function showAction(Manufactor $manufactor)
    {
        $deleteForm = $this->createDeleteForm($manufactor);

        return $this->render('manufactor/show.html.twig', array(
            'manufactor' => $manufactor,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Manufactor entity.
     *
     * @Route("/{id}/edit", name="admin_manufactor_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Manufactor $manufactor)
    {
        $deleteForm = $this->createDeleteForm($manufactor);
        $editForm = $this->createForm('AdminBundle\Form\ManufactorType', $manufactor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($manufactor);
            $em->flush();

            return $this->redirectToRoute('admin_manufactor_edit', array('id' => $manufactor->getId()));
        }

        return $this->render('manufactor/edit.html.twig', array(
            'manufactor' => $manufactor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Manufactor entity.
     *
     * @Route("/{id}", name="admin_manufactor_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Manufactor $manufactor)
    {
        $form = $this->createDeleteForm($manufactor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($manufactor);
            $em->flush();
        }

        return $this->redirectToRoute('admin_manufactor_index');
    }

    /**
     * Creates a form to delete a Manufactor entity.
     *
     * @param Manufactor $manufactor The Manufactor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Manufactor $manufactor)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_manufactor_delete', array('id' => $manufactor->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
