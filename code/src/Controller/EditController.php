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
	/*
	#[Route('/edit/{id}', name: 'article_edit')]
	 */
	/*
	public function article_edit(Article $article): Response
	{*/
	/*
	$form = $this->createFormBuilder($article)
	    ->add('text', TextType::class)
      	    ->getForm();
	 */
	/*
	$form = $this->createForm(ArticleType::class, $article);
	 *//*
	return $this->render('pages/edit.html.twig', [
		'controller_name' => 'EditController',
		'article' => $article,	
        ]);
	}*/
		 /*
	#[Route('/edit/{id}', name: 'article_edit')]
	public function article_edit(EntityManagerInterface $em, Article $article):Response
	{
		
		$form = $this->createForm(ArticleFormType::class);


		return $this->render('pages/edit.html.twig', [
			'articleForm' => $form->createView(),
			'article' => $article,
		]);
	}*/	
	#[Route('/edit/{id}', name: 'article_edit')]
	public function article_edit(Article $article, Request $request, EntityManagerInterface $em): Response
	{
		$form =$this->createForm(ArticleFormType::class);

		

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()){
			//dd($form->getData());
			$data = $form->getData();
			$article->setTitle($data['title']);
			$article->setText($data['text']);

			$em->persist($article);
			$em->flush();
		}

		return $this->render('pages/edit.html.twig', [
			'articleForm' => $form->createView(),
			'article' => $article,
		]);
	}		
}
