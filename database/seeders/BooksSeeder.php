<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            [
                "book_id"=>"B001",
                "publisher_id"=>"P002",
                "title"=>"Classroom of the Elite",
                "author"=>"Shogo Kinugasa",
                "year"=>"2015",
                "synopsis"=>"It focuses on everyday life of the highest-level high school and there are highly intelligent students in the school including the protagonist Kiyotaka Ayanokoji. Each class fights with others with a variety of mind games. The following story, which started from 2020, begins after Kiyotaka and his classmates go to the second grade.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Classroom-of-the-Elite.jpg"
            ],
            [
                "book_id"=>"B002",
                "publisher_id"=>"P001",
                "title"=>"My Youth Romantic Comedy Is Wrong, As I Expected",
                "author"=>"Wataru Watari",
                "year"=>"2011",
                "synopsis"=>"It depicts the high school life of the pessimistic boy Hachiman Hikigaya and his school service club members including the heroine Yukino Yukinoshita.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/My-Youth-Romantic-Comedy-Is-Wrong-As-I-Expected.jpg"
            ],
            [
                "book_id"=>"B003",
                "publisher_id"=>"P003",
                "title"=>"Overlord",
                "author"=>"Kugane Maruyama",
                "year"=>"2012",
                "synopsis"=>"Shosetsuka ni Naro from 2012. Momonga, the player of VRMMORPG (Virtual Reality Massively Multiplayer Online Role Playing Game) named YGGDRASIL, finds out he is transported to the different world from YGGDRASIL as the game character called Ainz Ooal Gown.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Overlord.jpg"
            ],
            [
                "book_id"=>"B004",
                "publisher_id"=>"P001",
                "title"=>"Goblin Slayer",
                "author"=>"Kumo Kagyu",
                "year"=>"2016",
                "synopsis"=>"The main character Goblin Slayer is the soldier who takes his life on hunting goblins. The manga and anime adaptions have been made for its popularity.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Goblin-Slayer.jpg"
            ],
            [
                "book_id"=>"B005",
                "publisher_id"=>"P002",
                "title"=>"Didnt I Say To Make My Abilities Average In The Next Life?!",
                "author"=>"FUNA",
                "year"=>"2016",
                "synopsis"=>"A high school girl Misato is killed in a traffic accident and is born again in the parallel world as a teenage girl named Adele. She finds out that she has a much more powerful abilities than average while she asks to make her abilities just average.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Didn%E2%80%99t-I-Say-To-Make-My-Abilities-Average-In-The-Next-Life.jpg"
            ],
            [
                "book_id"=>"B006",
                "publisher_id"=>"P003",
                "title"=>"Katanagatari (Sword Tale)",
                "author"=>"Nisio Isin",
                "year"=>"2007",
                "synopsis"=>"The historical story is set in the fictional Japan around the Edo period. The protagonist Shichika Yasuri begins his journey to collect the 12 legendary swords fighting the owners and other enemies.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Katanagatari.jpg"
            ],
            [
                "book_id"=>"B007",
                "publisher_id"=>"P003",
                "title"=>"The Rising of the Shield Hero",
                "author"=>"Aneko Yusagi",
                "year"=>"2012",
                "synopsis"=>"The university student Naofumi Iwatani is suddenly transported to the fantasy world and given a role as the Shield Hero. There are three other heroes in the same situation, but they have offensive weapons such as sword, lance and arrow. The Shield Hero manages to fight enemies with the defensive shield.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/The-Rising-of-the-Shield-Hero.jpg"
            ],
            [
                "book_id"=>"B008",
                "publisher_id"=>"P001",
                "title"=>"Arifureta: From Commonplace to Worlds Strongest",
                "author"=>"Ryo Shirakome",
                "year"=>"2013",
                "synopsis"=>"A nerdy high school boy Hajime Nagumo is summoned to the fantasy world with his classmates. He is represented as an antihero or dark hero in the story.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Arifureta-From-Commonplace-to-World%E2%80%99s-Strongest.jpg"
            ],
            [
                "book_id"=>"B009",
                "publisher_id"=>"P002",
                "title"=>"Spice and Wolf",
                "author"=>"Isuna Hasekura",
                "year"=>"2006",
                "synopsis"=>"The setting is the fictional world that is inspired by the medieval Europe and the story focuses on the two main characters. A traveling merchant Kraft Lawrence encounters various incidents on his trip with the wolf personified Holo who looks like a human-wolf hybrid.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Spice-and-Wolf.jpg"
            ],
            [
                "book_id"=>"B010",
                "publisher_id"=>"P001",
                "title"=>"Death March to the Parallel World Rhapsody",
                "author"=>"Hiro Ainana",
                "year"=>"2013",
                "synopsis"=>"A 29 years old gaming programmer named Ichiro Suzuki works too hard and has a nap in the office. He wakes up to become aware that he is in the of the role-playing game that he is making.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Death-March-to-the-Parallel-World-Rhapsody.jpg"
            ],
            [
                "book_id"=>"B011",
                "publisher_id"=>"P002",
                "title"=>"That Time I Got Reincarnated as a Slime",
                "author"=>"Fuse",
                "year"=>"2014",
                "synopsis"=>"Main characters are reborn in the different fictional world as a human, but the protagonist of That Time I Got Reincarnated as a Slime is Reincarnated as a slime named Rimuru.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/That-Time-I-Got-Reincarnated-as-a-Slime.jpg"
            ],
            [
                "book_id"=>"B012",
                "publisher_id"=>"P003",
                "title"=>"Is It Wrong to Try to Pick Up Girls in a Dungeon?",
                "author"=>"Fujino Omori",
                "year"=>"2013",
                "synopsis"=>"The setting is the fantasy world Orario where there are lots of underground labyrinth known as Dungeon. The main character Bell visits Dungeons to live from day to day and get stronger, and then he falls in love with the powerful swordswoman Ais.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Is-It-Wrong-to-Try-to-Pick-Up-Girls-in-a-Dungeon.jpg"
            ],
            [
                "book_id"=>"B013",
                "publisher_id"=>"P001",
                "title"=>"The Irregular at Magic High School",
                "author"=>"Kana Ishida",
                "year"=>"2008",
                "synopsis"=>"The ongoing sci-fi novel has the theme of magic in the fictional Japan. The story centers on the two students in First High School: the brother Tatsuya and his little sister Miyuki.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/The-Irregular-at-Magic-High-School.jpg"
            ],
            [
                "book_id"=>"B014",
                "publisher_id"=>"P001",
                "title"=>"Zaregoto Series",
                "author"=>"Nisio Isin",
                "year"=>"2002",
                "synopsis"=>"The main character “I” and his friend Timo Kunagiza meet a variety of unique characters and get involved in lots of incidents.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Decapitation-Kubikiri-Cycle.jpg"
            ],
            [
                "book_id"=>"B015",
                "publisher_id"=>"P003",
                "title"=>"Konosuba: Gods Blessing on This Wonderful World!",
                "author"=>"Natsume Akatsuki",
                "year"=>"2012",
                "synopsis"=>"The Isekai comedy light novel, which can be also looked on as the Naro genre, features the 4 main characters: Kazuma, Aqua, Darkness and Megumin. Kazuma, who dies in an accident when he is a high schooler, is sent to the fantasy world with the goddess Aqua.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Konosuba-God%E2%80%99s-Blessing-on-This-Wonderful-World.jpg"
            ],
            [
                "book_id"=>"B016",
                "publisher_id"=>"P003",
                "title"=>"Toradora!",
                "author"=>"Yuyuko Takemiya",
                "year"=>"2006",
                "synopsis"=>"In the story, everyday and romance of the high schoolers Ryuji, Taiga and their friends with comedy. On the other hand, they have lots of problems in their lives such as family problems of the heroine Taiga.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Toradora.jpg"
            ],
            [
                "book_id"=>"B017",
                "publisher_id"=>"P001",
                "title"=>"Kinos Journey -the Beautiful World-",
                "author"=>"Keiichi Sigsawa",
                "year"=>"2000",
                "synopsis"=>"The adventure novel focuses on a teen girl named Kino who travels around the world with a talking motorcycle named Hermes. She visits a variety of fictional counties that have unique customs and social systems. Each episode stands alone, which has a kind of allegoricalness.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Kino%E2%80%99s-Journey-the-Beautiful-World-.jpg"
            ],
            [
                "book_id"=>"B018",
                "publisher_id"=>"P002",
                "title"=>"No Game No Life",
                "author"=>"Yu Kamiya",
                "year"=>"2012",
                "synopsis"=>"It follows 18-year-old boy named Sora and his 11 years old sister-in-law named Shiro, who are undefeated gamers with high intelligence. They are transported to Isekai (another world) and fight various unique games there.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/No-Game-No-Life.jpg"
            ],
            [
                "book_id"=>"B019",
                "publisher_id"=>"P001",
                "title"=>"Rascal Does Not Dream of Bunny Girl Senpai",
                "author"=>"Hajime Kamoshida",
                "year"=>"2014",
                "synopsis"=>"the first title of the recent popular light novel series published from 2014. In the story, lots of strange supernatural events happen around the main character Sakuta and people around him including his family and classmates. Those things are often caused by their psychological problems.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Rascal-Does-Not-Dream-of-Bunny-Girl-Senpai.jpg"
            ],
            [
                "book_id"=>"B020",
                "publisher_id"=>"P003",
                "title"=>"Re:ZERO -Starting Life in Another World-",
                "author"=>"Tappei Nagatsuki",
                "year"=>"2012",
                "synopsis"=>"Re:Zero -Starting Life in Another World- is set in the parallel world where the main character Subaru Natsuki is sent for any reason. He is transported to another world but is not granted any powerful ability while a main character of many Isekai light novels gets something special.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Re-ZERO-Starting-Life-in-Another-World-.jpg"
            ],
            [
                "book_id"=>"B021",
                "publisher_id"=>"P002",
                "title"=>"Spice and Wolf",
                "author"=>"Isuna Hasekura",
                "year"=>"2006",
                "synopsis"=>"The setting is the fictional world that is inspired by the medieval Europe and the story focuses on the two main characters. A traveling merchant Kraft Lawrence encounters various incidents on his trip with the wolf personified Holo who looks like a human-wolf hybrid.",
                "image"=>"https://jw-webmagazine.com/wp-content/uploads/2020/07/Spice-and-Wolf.jpg"
            ]
        ]);
    }
}
