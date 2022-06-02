<?php

namespace App\Controller;

use App\Entity\UserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ServiceController extends AbstractController
{
    /**
     * @Route("/service", name="app_service")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ServiceController.php',
        ]);
    }


    /**
     * @Route("/service/create", name="app_service_create")
     */
    public function createAction()
    {
        $entityManager = $this->getDoctrine()->getManager(); //un service Doctrine qui nous permet de manipuler des entités (Entity)

        $userService = new UserService;
        $userService->setNom('Boby');
        echo $userService->getNom();

        $userService->setAge('50');
        echo $userService->getAge();
        // informe Doctrine que l’on veut ajoutercet objet dans la base de donnees 
        $entityManager->persist($userService);
        // Executer la requête et d’envoyer tout ce qui à été persisté avant a la BD
        $entityManager->flush();

        return new Response('Produit ajouté ');
    }
    /**
     * @Route("/service/search", name="app_service_search")
     */
    public function searchAction()
    {
        $repository = $this->getDoctrine()->getRepository(UserService::class); //Récupérer une collection d'objets

        $user['findOneBy'] = $repository->findOneBy(['nom' => 'Albert']); // Rechercher un seul produit par son nom
      

        $user['find'] = $repository->find(1);

        $user['findBy'] =  $repository->findBy( ['nom' => 'Iguane'],
        ['age' => 'ASC'],6,0);

        $user['findAll']= $repository->findAll();

      echo '<pre>',print_r($user,1),'</pre>';

        return new Response('Recherche effectuée ');
    }
}
