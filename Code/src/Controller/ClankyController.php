<?php

namespace App\Controller;

use App\Entity\Clanky;
use App\Form\ClankyType;
use App\Repository\ClankyRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class ClankyController extends AbstractController
{
    #[Route('/', name: 'app_clanky_index', methods: ['GET'])]
    public function index(ClankyRepository $clankyRepository): Response
    {
        return $this->render('clanky/index.html.twig', [
            'clankies' => $clankyRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_clanky_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $clanky = new Clanky();
        $form = $this->createForm(ClankyType::class, $clanky);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($clanky);
            $entityManager->flush();

            return $this->redirectToRoute('app_clanky_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('clanky/new.html.twig', [
            'clanky' => $clanky,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_clanky_show', methods: ['GET'])]
    public function show(Clanky $clanky): Response
    {
        return $this->render('clanky/show.html.twig', [
            'clanky' => $clanky,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_clanky_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Clanky $clanky, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ClankyType::class, $clanky);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_clanky_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('clanky/edit.html.twig', [
            'clanky' => $clanky,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_clanky_delete', methods: ['POST'])]
    public function delete(Request $request, Clanky $clanky, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $clanky->getId(), $request->request->get('_token'))) {
            $entityManager->remove($clanky);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_clanky_index', [], Response::HTTP_SEE_OTHER);
    }
}
