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
            'name' => 'From Software',
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
            'spec_id' => 1
        ]);

    }
}