<?php

namespace AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AdminBundle\Entity\Tax;
use AdminBundle\Form\TaxType;

/**
 * Tax controller.
 *
 * @Route("/admin/tax")
 */
class TaxController extends Controller
{
    /**
     * Lists all Tax entities.
     *
     * @Route("/", name="admin_tax_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $taxes = $em->getRepository('AdminBundle:Tax')->findAll();

        return $this->render('tax/index.html.twig', array(
            'taxes' => $taxes,
        ));
    }

    /**
     * Creates a new Tax entity.
     *
     * @Route("/new", name="admin_tax_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tax = new Tax();
        $form = $this->createForm('AdminBundle\Form\TaxType', $tax);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tax);
            $em->flush();

            return $this->redirectToRoute('admin_tax_show', array('id' => $tax->getId()));
        }

        return $this->render('AdminBundle:Tax:new.html.twig', array(
            'tax' => $tax,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Tax entity.
     *
     * @Route("/{id}", name="admin_tax_show")
     * @Method("GET")
     */
    public function showAction(Tax $tax)
    {
        $deleteForm = $this->createDeleteForm($tax);

        return $this->render('tax/show.html.twig', array(
            'tax' => $tax,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tax entity.
     *
     * @Route("/{id}/edit", name="admin_tax_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tax $tax)
    {
        $deleteForm = $this->createDeleteForm($tax);
        $editForm = $this->createForm('AdminBundle\Form\TaxType', $tax);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tax);
            $em->flush();

            return $this->redirectToRoute('admin_tax_edit', array('id' => $tax->getId()));
        }

        return $this->render('tax/edit.html.twig', array(
            'tax' => $tax,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Tax entity.
     *
     * @Route("/{id}", name="admin_tax_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tax $tax)
    {
        $form = $this->createDeleteForm($tax);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tax);
            $em->flush();
        }

        return $this->redirectToRoute('admin_tax_index');
    }

    /**
     * Creates a form to delete a Tax entity.
     *
     * @param Tax $tax The Tax entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tax $tax)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admin_tax_delete', array('id' => $tax->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
