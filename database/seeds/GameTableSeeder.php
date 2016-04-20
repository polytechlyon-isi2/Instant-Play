<?php
/**
 * Created by PhpStorm.
 * User: Nicolas
 * Date: 23/03/2016
 * Time: 09:12
 */

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder {

    public function run()
    {
        DB::table('game')->delete();

        DB::table('game')->insert([
            'id' => 1,
            'name' => 'Dark Souls 2',
            'release_date' => '2014-03-14',
            'price' => 15,
            'stock' => 123,
            'description' => 'Développé par FROM SOFTWARE, DARK SOULS™ II est la suite tant attendue du redoutable Dark Souls™, qui a connu un succès fracassant en 2011. Les terribles défis et les émotions intenses de cet action-rpg au caractère unique et old school ont enflammé l\'imagination de nombreux joueurs à travers le monde.

Dans DARK SOULS™ II, la difficulté et les innovations désormais marque de fabrique de la franchise sont de retour, à la fois en solo et en multijoueur.
Prenez part à ce sombre périple, affrontez de redoutables ennemis, bravez tous les dangers, et relevez les innombrables défis dont FROM SOFTWARE a le secret.
Allez au-delà de la mort : aventurez-vous dans un monde immense et intense, et jouissez de graphismes et d\'effets sonores immersifs propulsés par un tout nouveau moteur

Une avalanche de monstres et de boss : au cœur d\'environnements époustouflants, affrontez des boss redoutables et découvrez de nouveaux monstres sanguinaires tout droit sortis de l\'imaginaire de From software

un raz-de-marée de sensations : les nombreuses menaces qui vous attendent vont retourner contre vous vos peurs les plus intimes - hallucinations auditives, vertige, phobie des hauteurs...

Une personnalisation plus poussée : façonnez vos armes et vos armures à votre image grâce aux nombreuses options de personnalisation du style de jeu

Un multijoueur nouvelle génération : le système de rencontres multijoueur inédit vous offre de meilleures interactions en ligne pour enrichir vos expériences coopératives et compétitives

Un gameplay amélioré : DARK SOULS™ II inclut des animations fluides basées sur la capture de mouvement, un système de combat amélioré, un éventail de personnages optimisé, des options de personnalisation plus détaillées, de nouvelles armes et capacités d\'armures, ainsi qu\'un système de progression équilibré...',
            'video' => 'https://youtu.be/mbDmI_2IVQ8',
            'platform_id' => 1,
            'studio_id' => 1,
            'spec_id' => 1,
            'category_id' => 1
        ]);

        DB::table('game')->insert([
            'id' => 2,
            'name' => 'Battlefield 3',
            'release_date' => '2011-10-25',
            'price' => 23,
            'stock' => 189,
            'description' => 'Battlefield 3 prend une bonne longueur d\'avance sur ses concurrents grâce à la puissance du Frostbite 2, le moteur nouvelle génération du studio DICE. Cette technologie innovante est à la base de Battlefield 3, et permet d\'offrir une qualité graphique sans précédent, des environnements gigantesques, un niveau de destruction ahurissant, une ambiance sonore dynamique et des animations d\'un réalisme époustouflant. Les balles sifflent à vos oreilles, les murs s\'écroulent, les explosions vous projettent au sol, et le champ de bataille prend vie devant vos yeux comme jamais auparavant. Dans Battlefield 3, les joueurs vont pouvoir incarner les fameux Marines américains et découvrir des missions en solo incroyablement palpitantes ainsi qu\'un mode multijoueur compétitif, tout en voyageant aux quatre coins de la planète, et notamment à Paris, Téhéran et New York.

    Frostbite 2 - Battlefield 3 utilise le moteur Frostbite 2, une technologie de pointe qui permet d\'obtenir des animations, un niveau de destruction, des effets de lumière, des environnements et une ambiance sonore inégalés. Grâce à ce moteur de jeu incroyablement puissant, Battlefield 3 plonge les joueurs dans le monde qui les entoure comme jamais auparavant.
    Une expérience intense - Ressentez les impacts de balles et les explosions comme si vous y étiez, traînez vos coéquipiers blessés en lieu sûr et fixez vos armes quasiment où vous voulez. Les animations ultra réalistes de Battlefield 3, ainsi que ses graphismes spectaculaires et son gameplay criant de vérité s\'attaquent littéralement à vos sens pour vous faire vivre l\'expérience de combat la plus impressionnante jamais vue dans un FPS.
    Des combats en véhicules hors pair - La meilleure expérience de combat à bord de véhicules franchit une nouvelle étape en vous laissant piloter des avions de chasse, en plus de nombreux autres véhicules sur terre, en mer ou dans les airs.
    Combat urbain - Combattez dans différents lieux des États-Unis, du Moyen Orient et d\'Europe, et frayez-vous un chemin dans des ruelles étroites, des centres-villes et des zones dégagées permettant la progression de véhicules. Bienvenue dans la guerre moderne !',
            'video' => 'https://www.youtube.com/embed/9DM7NsxOS0Q',
            'platform_id' => 2,
            'studio_id' => 2,
            'spec_id' => 2,
            'category_id' => 2
        ]);

    }
}