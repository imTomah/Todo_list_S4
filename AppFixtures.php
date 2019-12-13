<?php
namespace App\DataFixtures;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // liste pour mon selecteur de categories
        $categories = ['Professionnel','Personnel', 'Important'];
        //Tableau pour enregistrer chaque objet de type Category
        $tabObjetsCategory = [];
        // Boucle pour créer autant d'objet que de catégories dans la liste
        foreach($categories as $cat) {
            $category = new Category();
            $category->setName($cat);
            $manager->persist($category);
            array_push($tabCategory, $category);
        }
        #instance de type Todo
        $uneTodo = new Todo();
        $uneTodo 
            ->setTitle('Initialiser la todo')
            ->setContent('Alimenter la base de dnnées avec un 1er enregistrement')
            ->setTodoFor(new \DateTime('Europe/paris'))
            ->setCategory($tabObjetsCategory[0]);
        
        #Enregistrement de l'objet
        $manager->persist($uneTodo);
        #On finalise la fin des requêtes
        $manager->flush();
    }
}