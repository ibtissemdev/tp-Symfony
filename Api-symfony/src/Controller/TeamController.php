<?Php namespace App\Controller;

use App\Entity\Position;
use App\Repository\TeamRepository;
use App\Entity\Team;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class TeamController extends AbstractController
{
    /**
     * @Route("/team", name="app_team")
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig', [
            'users' => 'Voici mon api en symfony',
        ]);
    }


     /**
     * @Route("/team/organigramme", name="app_team_organigramme")
     */
    public function organigramme()
    {

            $users = $this->getDoctrine()->getRepository(Team::class)->findAll();; //Récupérer une collection d'objets
            $positions = $this->getDoctrine()->getRepository(Position::class)->findAll();
    
            // $user['findOneBy'] = $repository->findOneBy(['nom' => 'Albert']); // Rechercher un seul produit par son nom
          
    
         //$users['find'] = $repository->find(1);
    
            // $users['findBy'] =  $repository->findBy( ['nom' => 'Iguane'],
            // ['age' => 'ASC'],6,0);


//var_dump($label);
           //error_log(print_r($message,1));
    
        // echo '<pre>',print_r($message,1),'</pre>';

        // foreach($label as $position) {
         

        // }
    
        return $this->render('team/organigramme.html.twig',  ['positions'
    =>$positions, 'users'=>$users]); //Envoie la vue sur la page twig
      
    }


}
