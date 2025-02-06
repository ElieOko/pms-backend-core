<?php

namespace Database\Seeders;

use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        DB::table('devises')->insert(
            [
            "nom" => "dollar",
            'code' => "USD",
            'symbole' => "$",
            "taux" => 2800,
            'symbole' => "$",
            'created_at' => (Carbon::now())->toDateTimeString(),
            'updated_at' => (Carbon::now())->toDateTimeString()
            ]
        );

        DB::table('type_plats')->insert([
            [
                "nom" => "Plats principaux",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Desserts",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Boissons et Cocktails",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Collation",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Déjeuners et brunchs",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Accompagnements",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Bouchées et entrées",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Crêpes et Galettes",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Soupes",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
        ]);


        DB::table('type_cuisines')->insert([
            [
                "nom" => "Congolaise",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Ouest Africaine",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Française",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Japonaise",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Italienne",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
        ]);

        DB::table('type_bed_rooms')->insert([
            [
                "nom" => "Chambre simple",
                "decription"=> "Une chambre simple est destinée à accueillir une seule personne et est équipée soit d'un lit double, soit d'un lit jumeau. Le prix pratiqué par les hôteliers pour une chambre simple équipée d'un lit jumeau ou d'un lit double est souvent différent, et ce même si leur nombre de couchages est identique.",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Chambre double",
                "decription"=> "Une chambre double est destinée à accueillir deux personnes. Elle est équipée soit d'un lit double, soit de deux lits jumeaux. Ces chambres sont très prisées des voyageurs en raison de leur polyvalence. Une chambre double peut être partagée par des amis qui voyagent ensemble ou des collègues de travail qui ne souhaitent ni dormir dans le même lit ni payer pour deux chambres séparées. Il s'agit donc d'une option de choix pour les hôtels.",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Chambre triple",
                "decription"=> "Une chambre triple est destinée à accueillir trois personnes. Elle peut être équipée soit d'un lit simple et d'un lit double, soit de trois lits simples. Les lits peuvent être arrangés de plusieurs façons afin de répondre aux différents besoins des groupes de trois personnes.",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Chambre quadruple",
                "decription"=> "Une chambre quadruple est destinée à accueillir quatre personnes et est généralement équipée de deux lits doubles. Elles peuvent quelquefois être équipées de quatre lits simples, notamment dans un hébergement en zone rurale, par exemple, une auberge.",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Chambre familiale",
                "decription"=> "On y trouve des chambres communicantes ou des pièces suffisamment spacieuses pour accueillir un berceau ou un lit pour bébé. Ces chambres peuvent également être équipées de commodités spécialement destinées aux enfants, par exemple, une chaise haute, une baignoire ou encore des jouets.",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Chambre standard",
                "decription"=> "Ces chambres disposent des commodités les plus élémentaires, à savoir un lit, une salle de bains, une chaise, un bureau et une télévision. Elles sont prisées des voyageurs qui recherchent avant tout une bonne nuit de sommeil au meilleur prix et qui ne se soucient pas de la simplicité de leur design.",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Chambre avec vue sur jardin",
                "decription"=> "Ce type de chambres offre des vues rafraîchissantes sur les jardins et espaces verts environnants.",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
        ]);
        DB::table('categorie_type_tools')->insert([
            [
                "nom" => "Essentiels",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Salle de Bains",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Sécurité et Praticité",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "nom" => "Modernes et Connectés",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ]
        ]);

        DB::table('type_tools')->insert([
            [
                "categorie_type_tool_id" => 1,
                "nom" => "Literie et Confort",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "categorie_type_tool_id" => 1,
                "nom" => "Électronique et Multimédia",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "categorie_type_tool_id" => 1,
                "nom" => "Équipements de Base",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "categorie_type_tool_id" => 2,
                "nom" => "Équipements Principaux",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "categorie_type_tool_id" => 2,
                "nom" => "Accessoires",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "categorie_type_tool_id" => 3,
                "nom" => "Équipements de Sécurité",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "categorie_type_tool_id" => 3,
                "nom" => "Équipements Pratiques",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "categorie_type_tool_id" => 4,
                "nom" => "Technologie",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "categorie_type_tool_id" => 4,
                "nom" => "Services Intégrés",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
        ]);

        DB::table('tools')->insert([
            [
                "type_tools_id" =>1,
                "nom" => "Lits larges",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>1,
                "nom" => "Lits moyennes",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>1,
                "nom" => "Oreillers",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>1,
                "nom" => "Oreillers",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>1,
                "nom" => "Chaise",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>2,
                "nom" => "Télévision grand écran",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>2,
                "nom" => "Connexion Wi-Fi gratuite",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>2,
                "nom" => "Téléphone avec accès direct à la réception",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>2,
                "nom" => "Prises électriques multiples",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>2,
                "nom" => "Projecteur",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>2,
                "nom" => "Micro",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>2,
                "nom" => "Bafle",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>2,
                "nom" => "Ampoule Économique",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>3,
                "nom" => "Climatisation réglable",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>4,
                "nom" => "Douche",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>4,
                "nom" => "Baignoire",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>4,
                "nom" => "Peignoirs et chaussons",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>5,
                "nom" => "Serviettes",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>5,
                "nom" => "Sèche-serviettes",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>5,
                "nom" => "Articles de toilette",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>6,
                "nom" => "Serrure électronique sécurisée",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>6,
                "nom" => "Porte renforcée",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>6,
                "nom" => "Fenêtres à double vitrage",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>6,
                "nom" => "Fauteuil et table basse",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
            [
                "type_tools_id" =>6,
                "nom" => "Armoire avec cintres",
                'created_at' => (Carbon::now())->toDateTimeString(),
                'updated_at' => (Carbon::now())->toDateTimeString()
            ],
        ]);
    }
}
