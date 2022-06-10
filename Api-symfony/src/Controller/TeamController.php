<?Php

namespace App\Controller;

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
        // echo '<pre>';
        // var_dump( $users);
        // echo '</pre>';
        $equipe = [];

        foreach ($users as $aUser) {
            $aTeam = [];
            $aTeam['id'] = $aUser->getId();
            $aTeam['firstname'] = $aUser->getFirstname();
            $aTeam['lastname'] = $aUser->getLastname();
            $aTeam['supHierarchique'] = $aUser->getSupHierarchique();
            $aTeam['photo'] = $aUser->getPhoto();
            $aTeam['position'] = $aUser->getPositions();

            foreach ($aTeam['position'] as $aLabel) {
                if ($aTeam['id']=$aLabel->getId()) {

                    $aTeam['label'] = $aLabel->getLabel();
                }
            }
            $equipe[] = $aTeam;
        }
        // echo '<pre>';
        // var_dump($equipe);
        // echo '</pre>';

        foreach($equipe as $table) {
        $newTable[]=$table['supHierarchique'];   }
        //var_dump($newTable); echo '<br>';


        $hierarchie=array_unique($newTable);
        $hierarchie=array_values($hierarchie);

        var_dump( $hierarchie);   echo '<br>';

            $users=$equipe;
            $teamOrdonnee = [];
        foreach ( $hierarchie as $newHierarchie) {
            foreach ( $users as $newUsers) {
                if($newUsers['supHierarchique']==$newHierarchie){
                    $teamOrdonnee[$newHierarchie][]= $newUsers;
                }
            }
        }

        // $teamOrdonnee = array_reverse($teamOrdonnee);
            echo '<pre>';
                var_dump($teamOrdonnee[""][0]["firstname"]);
                echo '</pre>';


        return $this->render('team/organigramme.html.twig', compact('positions','hierarchie','users','teamOrdonnee') ) ;
      //  ['positions'=> $positions, 'users' => $equipe, 'hierarchie'=> $hierarchie]); //Envoie la vue sur la page twig

    }
}
