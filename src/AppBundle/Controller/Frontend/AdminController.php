<?php

namespace AppBundle\Controller\Frontend;

use AppBundle\Entity\BlogPost;
use AppBundle\Form\EntryFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Form\AuthorFormType;

/**
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var \Doctrine\Common\Persistence\ObjectRepository */
    private $userRepository;

    /** @var \Doctrine\Common\Persistence\ObjectRepository */
    private $blogPostRepository;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->blogPostRepository = $entityManager->getRepository('AppBundle:Post');
        $this->userRepository = $entityManager->getRepository('AppBundle:User');
    }

    /**
     * @Route("/admin/user/create", name="author_create")
     */
    public function createAuthorAction(Request $request)
    {

        // Check whether user already has an author.
        if ($this->userRepository->findOneByName($this->getUser()->getName())) {
            // Redirect to dashboard.
            $this->addFlash('error', 'Unable to create author, author already exists!');
        
            return $this->redirectToRoute('homepage');
        }

        $user = new User();
        $user->setName($this->getUser()->getName());

        $form = $this->createForm(AuthorFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->entityManager->persist($user);
            $this->entityManager->flush($user);

            $request->getSession()->set('user_is_author', true);
            $this->addFlash('success', 'Congratulations! You are now an author.');

            return $this->redirectToRoute('homepage');
        }

        return $this->render('AppBundle:Frontend:Admin:create_author.html.twig', array(
            'form' => $form->createView()
        ));
    }

    /**
     * @Route("/create-entry", name="admin_create_entry")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function createEntryAction(Request $request)
    {
        $blogPost = new Post();

        $user = $this->userRepository->findOneByName($this->getUser()->getName());
        $blogPost->setAuthor($user);

        $form = $this->createForm(EntryFormType::class, $blogPost);
        $form->handleRequest($request);

        // Check is valid
        if ($form->isValid()) {
            $this->entityManager->persist($blogPost);
            $this->entityManager->flush($blogPost);

            $this->addFlash('success', 'Congratulations! Your post is created');

            return $this->redirectToRoute('admin_entries');
        }

        return $this->render('AppBundle:Frontend:Admin:entry_form.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/", name="admin_index")
     * @Route("/entries", name="admin_entries")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function entriesAction()
    {
        $user = $this->userRepository->findOneByName($this->getUser()->getName());

        $blogPosts = [];

        if ($user) {
            $blogPosts = $this->postRepository->findByAuthor($user);
        }

        return $this->render('AppBundle:Frontend:Admin:entries.html.twig', [
            'blogPosts' => $blogPosts
        ]);
    }

    /**
     * @Route("/delete-entry/{entryId}", name="admin_delete_entry")
     *
     * @param $entryId
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteEntryAction($entryId)
    {
        $blogPost = $this->blogPostRepository->findOneById($entryId);
        $user = $this->userRepository->findOneByName($this->getUser()->getName());

        if (!$blogPost || $user !== $blogPost->getAuthor()) {
            $this->addFlash('error', 'Unable to remove entry!');

            return $this->redirectToRoute('admin_entries');
        }

        $this->entityManager->remove($blogPost);
        $this->entityManager->flush();

        $this->addFlash('success', 'Entry was deleted!');

        return $this->redirectToRoute('admin_entries');
    }

}
