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
                if ($aTeam['id'] = $aLabel->getId()) {

                    $aTeam['label'] = $aLabel->getLabel();
                }
            }
            $equipe[] = $aTeam;
        }
        // echo '<pre>';
        // var_dump($equipe);
        // echo '</pre>';

        foreach ($equipe as $table) {
            $newTable[] = $table['supHierarchique'];
        }
        //var_dump($newTable); echo '<br>';


        $hierarchie = array_unique($newTable);
        $hierarchie = array_values($hierarchie);

        var_dump($hierarchie);
        echo '<br>';
        // $i=0;
        $users = $equipe;
        $teamOrdonnee = [];
        foreach ($hierarchie as $newHierarchie) {
            foreach ($users as $newUsers) {
                if ($newUsers['supHierarchique'] == $newHierarchie) {
                    $teamOrdonnee[$newHierarchie][] = $newUsers['lastname'] . " " . $newUsers['firstname'];
                    //    var_dump( $newUsers['supHierarchique']);
                    //    var_dump( $newUsers['lastname']);
                }
                //  var_dump($teamOrdonnee[$newHierarchie]);
            }
            // $i++;
        }


        echo '<pre>';
        foreach ($teamOrdonnee as $team) {

            foreach ($team as $members) {

                // var_dump($members["firstname"]);

            }
        }
        echo '</pre>';

        // $teamOrdonnee = array_reverse($teamOrdonnee);
        // echo '<pre>';
        //     var_dump($teamOrdonnee[3][0]["firstname"]);
        //     echo '</pre>';


        return $this->render('team/organigramme.html.twig', compact('positions', 'hierarchie', 'users', 'teamOrdonnee'));
        //  ['positions'=> $positions, 'users' => $equipe, 'hierarchie'=> $hierarchie]); //Envoie la vue sur la page twig

    }

    /**
     * @Route("/team/recursive", name="app_team_recursive")
     */
    public function recursive()
    {
        $element = ["A", "B", "C", "D", "E"];
        $t = ["A" => null, "B" => "A", "C" => "A", "D" => "B", "E" => "B"];
        // var_dump($t);


        function hierarchie($t, $elt, $croll, &$level)

        {
            if ($t[$croll] == null) {
                $level[$croll] = 0;
                return 0;
            }

            if (!isset($level[$elt])) {
                $level[$elt] = 1;
            } else {
                $level[$elt]++;
                // error_log(print_r($level,1));
            }
            hierarchie($t, $elt, $t[$croll], $level);
        }
        $level = [];

        foreach ($t as $key => $data) {

            hierarchie($t, $key, $key, $level);
        //   error_log(print_r($level,1));
        }

        $keys = array_keys($t);
        $values = array_values($t);
        $leaves = array_diff($keys, $values);

        // var_dump($level);

        function order($t, $leaves, $prf, $level, &$order)
        {
            //error_log("prf :" . $prf . " order : " . print_r($order, 1));
            if ($prf == 0) {
                // error_log("--------------");
                return;
            }

            foreach ($leaves as  $leaf) {

                if ($level[$leaf] == $prf) {
                    $order[] = [$leaf];
                    // error_log("ok");
                }
            }

            error_log("prf :" . $prf . " order : " . print_r($order, 1));
            foreach ($order as $id => $chaine) {
                array_unshift($chaine, $t[$chaine[0]]);
                $order[$id] = $chaine;
                // error_log($order, $t[$order]);
                // error_log(print_r(array_unshift($chaine, $t[$chaine[0]]),1));
            }
            error_log(print_r($order,1));
            order($t, $leaves, $prf - 1, $level, $order);
        }
        $order = [];
        order($t, $leaves, max($level), $level, $order);
        // var_dump($level);


        // error_log("order : " . print_r($order, 1));

        $result = [];
        foreach ($order as $ordre) {

            $result = array_merge($result, $ordre);
        }

        $result = array_values(array_unique($result));

        // error_log(print_r($result, 1));

        // var_dump($ordre);
var_dump($level);
 $valeur=[];
$key=[];
        foreach ($level as $key=>$value) {
            //  $level['value']=$value;
            //  $level['key']=$value;
            // var_dump($key);
            $valeur[]=$value;
            $keys[]=$key;
           
        // }
         var_dump($keys);
         var_dump($valeur);
        // var_dump($element); 

        return $this->render('team/recursive.html.twig', [
            'result' => $result,
             'element' => $element,
            'level' => $level 
            
        ]);
    }
}}
