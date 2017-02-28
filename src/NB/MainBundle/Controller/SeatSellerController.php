<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/24/17
 * Time: 7:56 PM
 */

namespace NB\MainBundle\Controller;


use NB\MainBundle\Entity\Income;
use NB\MainBundle\Entity\Seatseller;
use NB\MainBundle\Form\SeatsellerType;
use NB\MainBundle\Form\SeatsellerUsersType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class SeatSellerController extends Controller {

    public function listAction(){

        $em = $this->getDoctrine()->getManager();
        $list = $em->getRepository('NBMainBundle:Seatseller')->findAll();

        return $this->render('NBMainBundle:Seatseller:list.html.twig', array(
            'list' => $list
        ));
    }

    public function addAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $count = $em->getRepository('NBMainBundle:Seatseller')->getTotal();

        $seatseller = new Seatseller();

        $form = $this->get('form.factory')->create(new SeatsellerType(), $seatseller);

        if($form->handleRequest($request)->isValid()){



            $code = strtoupper(substr($form->get('quartier')->getData()->getNom(), 0, 3).substr($form->get('ville')->getData()->getNom(), 0, 3).substr($form->get('nom')->getData(), 0, 2).substr($form->get('prenom')->getData(), 0, 2).($count->getId() +1));
           // dump($code); exit;
            $seatseller->setCode($code);
            $seatseller->setCreatedAt(new \datetime);
            $seatseller->setUpdatedAt(new \datetime);

            $em->persist($seatseller);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Le seatseller a bien ete modifiée.');

            return $this->redirect($this->generateUrl('nb_main_liste_seatseller'));
        }


        return $this->render('NBMainBundle:Seatseller:add.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function editAction($id, Request $request){

        $em = $this->getDoctrine()->getManager();
        $seatseller = $em->getRepository('NBMainBundle:Seatseller')->find($id);

        $form = $this->get('form.factory')->create(new SeatsellerType(), $seatseller);

        if($form->handleRequest($request)->isValid()){
            $seatseller->setUpdatedAt(new \datetime);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Le seatseller a bien ete modifiée.');

            return $this->redirect($this->generateUrl('nb_main_liste_seatseller'));
        }


        return $this->render('NBMainBundle:Seatseller:edit.html.twig', [
            'form' => $form->createView(),
            'seatseller' => $seatseller
        ]);
    }

    public function usersAction($seatseller_id){

        $em = $this->getDoctrine()->getManager();

        $seatseller = $em->getRepository('NBMainBundle:Seatseller')->find($seatseller_id);



        return$this->render('NBMainBundle:Seatseller:users.html.twig', [
            'seatseller' => $seatseller,
        ]);

    }
    public function usersAddAction($seatseller_id, Request $request){

        $em = $this->getDoctrine()->getManager();

        $seatseller = $em->getRepository('NBMainBundle:Seatseller')->find($seatseller_id);
        $form = $this->get('form.factory')->create(new SeatsellerUsersType(), $seatseller);

        if ($form->handleRequest($request)->isValid()) {

            $seatseller->setUpdatedAt(new \datetime);

            foreach ($seatseller->getUsers() as $users) {
                $users->setRoles(array('ROLE_SEATSELLER'));
                $users->setEnabled(true);
            }

            $em->persist($seatseller);
            $em->flush();


            $request->getSession()->getFlashBag()->add('notice', 'Le seatseller bien enregistrée.');
            return $this->redirect($this->generateUrl('nb_main_liste_utilisateur_seatseller', ['seatseller_id' => $seatseller_id]));
        }

        return$this->render('NBMainBundle:Seatseller:addusers.html.twig', [
            'seatseller' => $seatseller,
            'form' => $form->createView()
        ]);

    }

    public function accountAction( $seatseller_id, Request $request){

        $em = $this->getDoctrine()->getManager();
        $seatseller = $em->getRepository('NBMainBundle:Seatseller')->find($seatseller_id);

        $solde =  $this->get('doctrine.orm.entity_manager')->getRepository('NBMainBundle:Income') ->getStatus($seatseller_id);

        $income = new Income();

        if($request->isMethod('post')){
            $income->setMontant($request->get('montant'));
            $income->setSeatseller($seatseller);
            $income->setDateRecharge(new \datetime);
            $income->setCreatedAt(new \datetime);

            $em->persist($income);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Votre solde a bien été enregistrée.');
            return $this->redirect($this->generateUrl('nb_main_seatseller_solde_compte',['seatseller_id' => $seatseller_id]));
        }


        return$this->render('NBMainBundle:Seatseller:account.html.twig', [
            'seatseller' => $seatseller,
            'solde' => $solde
        ]);
    }


}