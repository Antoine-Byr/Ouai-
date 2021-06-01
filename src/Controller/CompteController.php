<?php
namespace  App\Controller;
use App\Entity\Post;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class CompteController extends AbstractType
{
	/**
	* @Route("/compte", name="compte")
	*/
	public function buildform(FormBuilderInterface $builder, array $options)
	{
		/*$builder
			-> add ('title')
			-> add ('summary', TextareaType::class)
			-> add ('content', Textareatype::class)
			-> add ('authorEmail', EmailType::class)
			-> add ('publishedAt', DateTimeType::class);*/
	}

	public function configureOptions(OptionsResolver $resolver)
	{
		$resolver->setDefaults([
			'data_class' => Post::class,
		]);
	}
}