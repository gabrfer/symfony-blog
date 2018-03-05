<?php

namespace AppBundle\Controller\Frontend;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
    /** @var integer */
    const POST_LIMIT = 5;

    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var \Doctrine\Common\Persistence\ObjectRepository */
    private $userRepository;

    /** @var \Doctrine\Common\Persistence\ObjectRepository */
    private $postRepository;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->postRepository = $entityManager->getRepository('AppBundle:Post');
        $this->userRepository = $entityManager->getRepository('AppBundle:User');
    }

    /**
     * @Route("/", name="homepage")
     * @Route("/entries", name="entries")
     */
    public function entriesAction(Request $request)
    {
        $page = 1;

        if ($request->get('page')) {
            $page = $request->get('page');
        }

        return $this->render('AppBundle:Frontend:entries.html.twig', [
            'blogPosts' => $this->postRepository->getAll($page, self::POST_LIMIT),
            'totalBlogPosts' => $this->postRepository->getCount(),
            'page' => $page,
            'entryLimit' => self::POST_LIMIT
        ]);
    }

    /**
     * @Route("/entry/{id}", name="entry")
     */
    public function entryAction($id)
    {
        $post = $this->postRepository->findOneById($id);

        if (!$post) {
            $this->addFlash('error', 'Unable to find entry!');
        
            return $this->redirectToRoute('entries');
        }

        return $this->render('AppBundle:Frontend:entry.html.twig', array(
            'post' => $post
        ));
    }

    /**
     * @Route("/user/{name}", name="user")
     */
    public function authorAction($name)
    {
        $author = $this->userRepository->findOneByUsername($name);

        if (!$author) {
            $this->addFlash('error', 'Unable to find author!');

            return $this->redirectToRoute('entries');
        }

        return $this->render('AppBundle:Frontend:author.html.twig', [
            'author' => $author
        ]);
    }

}
