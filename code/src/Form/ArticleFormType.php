<?php
namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /** @var Article|null $article */
        $article = $options['data'] ?? null;

	$textLength = strlen($article ? $article->getText() : '');
        $rows = max(ceil($textLength / 150), 5); // at least 5 rows

        $builder
            ->add('title', TextType::class, [
                'data' => $article ? $article->getTitle() : null
            ])
            ->add('text', TextareaType::class, [
                'data' => $article ? $article->getText() : null,
		'attr' => [
		'rows' => $rows,
            	'cols' => 100,
        	],
            ])
	    ->add('image', FileType::class, [
                'label' => 'Article Image',
                'mapped' => false,
                'required' => false,
            ])
	    ->add('image', TextType::class, [
                'data' => $article ? $article->getImage() : null,
		'label' => 'Image URL'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}

