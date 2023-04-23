<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\ArticleFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class EditController extends AbstractController
{	
	
	#[Route('/edit/{id}', name: 'article_edit')]
	public function article_edit(Article $article, Request $request, EntityManagerInterface $em): Response
	{
		$form =$this->createForm(ArticleFormType::class, $article);

		

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()){
			//dd($form->getData());
			//$data = $form->getData();
			//$article->setTitle($data['title']);
			//$article->setText($data['text']);
			$article->setTitle($form->get('title')->getData());
    			$article->setText($form->get('text')->getData());		

			$em->persist($article);
			$em->flush();
			
			return $this->redirectToRoute('article_view', ['id' => $article->getId()]);
			//return $this->redirectToRoute('home');
		}


		return $this->render('pages/edit.html.twig', [
			'articleForm' => $form->createView(),
			'article' => $article,
		]);
	}		
}
