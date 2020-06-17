<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Campsite;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // UK regions
        DB::table('regions')->insert([
            ['region_name' => 'South West'],
            ['region_name' => 'South East'],
            ['region_name' => 'West Midlands'],
            ['region_name' => 'East Midlands'],
            ['region_name' => 'East Anglia'],
            ['region_name' => 'Wales']
        ]);
        
        // South West campsites
        DB::table('campsites')->insert([
            [
                "region_id" => 1,
                "campsite_name" => "Henry's Campsite",
                "price" => 25.50,
                "description" => "We’re situated in a rural area, with a spectacular sea view and sunsets, at the top of caerthillian valley within a couple of minutes walk from the village centre and ten minutes walk to the coastal paths. there are many inland paths to bring you back into the village centre from all directions along the coastal paths and beaches.",
                "address" => "The Lizard",
                "town_city" => "Helston",
                "postcode" => "TR12 7NX",
                "rating" => 5,
                "contact_no" => "01326290596",
                "contact_email" => "info@henryscampsite.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 1,
                "campsite_name" => "Pleasant Streams Farm Camping",
                "price" => 30,
                "description" => "We are tucked away in the countryside in mid Cornwall, a great base to explore the beautiful Cornish coast and attractions from. Our location is very quiet and peaceful, yet we are close to a village and town that provides for all your practical needs. The nearest beach is only a 10-minute drive and we’re at the gateway to the beautiful Roseland peninsular with more stunning beaches and pretty villages to explore. Please see the ‘In the area’ page for more details on local attractions.",
                "address" => "St Ewe",
                "town_city" => "Saint Austell",
                "postcode" => "PL26 7JL",
                "rating" => 4,
                "contact_no" => "0172674837",
                "contact_email" => "info@cornwallfarmcamping.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 1,
                "campsite_name" => "Newberry Valley Touring and Camping Park",
                "price" => 26.80,
                "description" => "We are the guardians of this beautiful valley and the whole team take great pride in the park, which has won a Gold David Bellamy Award for Conservation, Nature and Wildlife for the past eleven consecutive years. The site is abundant with wildlife including rabbits, buzzards, badgers, owls, pheasants, many different garden birds, foxes and occasionally even a deer or two pass through the woods. We all love animals - we have our own rescue chickens as well as four gorgeous alpacas who will provide you with hours entertainment when you watch them from our viewing area.",
                "address" => "Woodlands",
                "town_city" => "Ilfracombe",
                "postcode" => "EX34 0AT",
                "rating" => 3,
                "contact_no" => "01271882334",
                "contact_email" => "relax@newberryvalleypark.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 1,
                "campsite_name" => "Pine Tree Farm Camping & Caravan Park",
                "price" => 19,
                "description" => "Welcome to Pinetree Farm! We are a family run working beef and arable farm with a small camping site situated on the edge of the beautiful somerset levels approx 1.75 miles from the smallest city in England, Wells. Set along a quiet country lane, surrounded by wonderful countryside, hills to one side and clear views of Glastonbury Tor on the other. Great for walking, cycling and wildlife watching.",
                "address" => "Castle Lane",
                "town_city" => "Wells",
                "postcode" => "BA5 1NN",
                "rating" => 2,
                "contact_no" => "01749675247",
                "contact_email" => "pinetreefarmcamping@gmail.com",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],

            // South East campsites
            [
                "region_id" => 2,
                "campsite_name" => "Inwood Camping",
                "price" => 25,
                "description" => "We promise that a visit to Inwood or Kingsmore is exactly what you and your kids and maybe your friends need. Loads of space, beautiful countryside and great facilities. No hassle about tent size or camping 100 metres away from your neighbour. It's your choice! It's all very well starting your fire with cotton wool and a firestick, but even the hardiest outdoor person needs ice for their cocktail and a shower before breakfast. Both sites will feature brand-new, high end toilets and showers (and freezers).",
                "address" => "Farleigh Rd",
                "town_city" => "Basingstoke",
                "postcode" => "RG25 2HP",
                "rating" => 4,
                "contact_no" => "01765982347",
                "contact_email" => "inwoodcamping@gmail.com",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 2,
                "campsite_name" => "Town Farm Campsite",
                "price" => 25,
                "description" => "Town Farm is a working farm run by the Leach family since the early 1930s. We opened a small campsite in the Spring of 2009. Each year since we've made small changes to improve our facilities and guest experience but we're careful to hold onto our roots as a rural and non-commercial campsite.",
                "address" => "Town Farm",
                "town_city" => "Leighton Buzzard",
                "postcode" => "LU7 9EL",
                "rating" => 5,
                "contact_no" => "01296668455",
                "contact_email" => "townfarmcampsite@gmail.com",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 2,
                "campsite_name" => "Cairds Camping and Caravan Site",
                "price" => 40,
                "description" => "Our campsite and B&B are located 5 minutes walk from each other, so individuals within groups can choose the type of accommodation that suits their needs. Our sites are situated in an Area of Outstanding Natural Beauty in the gorgeous East Sussex countryside. In the area, there are plenty of local attractions and things to do, some of which include Bewl Water, Bedgebury National Pinetum and Forest, Dale Hill Golf Course, Bateman's - the home of Rudyard Kipling, Bodiam and Scotney castles, Tunbridge Wells - the spa town, High Rocks National Monument, and Spa Valley Steam Railway.",
                "address" => "Battenhurst Rd",
                "town_city" => "Wadhurst",
                "postcode" => "TN5 7DU",
                "rating" => 3,
                "contact_no" => "07765363546",
                "contact_email" => "enquiries@battenhurstandcairds.com",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 2,
                "campsite_name" => "Hawk Place Campsite",
                "price" => 35,
                "description" => "Hawk place has the best of both worlds, it is situated a stones through from the sea as well as having miles and miles of uninterupted countryside to walk, cycle or horse ride through. As well as there are frequent stunning sunsets - maybe this is why J M W Turner was drawn to the area to create some of his best sunset paintings. Birchington is only 1.5 miles away with a few local shops and restaurants.",
                "address" => "Hawk Place, Dane Road",
                "town_city" => "Birchington",
                "postcode" => "CT7 9QS",
                "rating" => 4,
                "contact_no" => "01843847142",
                "contact_email" => "info@eastkentcamping.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],

            // West Midlands
            [
                "region_id" => 3,
                "campsite_name" => "Burhope Farm Campsite",
                "price" => 32.90,
                "description" => "Burhope Farm Campsite is an idyllic caravan, campervan and camping park in Herefordshire – the perfect setting for your next getaway. Escape the stress and strain of everyday life in the peaceful countryside. Take in the rolling hills, stargaze at night and wake to the stunning views of our lakeside setting. Our caravan and camping site is nestled in the countryside of the beautiful Wye Valley in Herefordshire, near the Welsh border. With the River Wye, Black Mountains, Forest of Dean and Abergavenny nearby, there’s no shortage of things to see and do.",
                "address" => "Orcop",
                "town_city" => "Herefordshire",
                "postcode" => "HR2 8EU",
                "rating" => 2,
                "contact_no" => "01981580275",
                "contact_email" => "info@burhopefarmcampsite.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 3,
                "campsite_name" => "Hereford Camping and Caravanning Club Site",
                "price" => 39.99,
                "description" => "If it’s adventure in the great outdoors you’re seeking, then head to our multi award-winning Hereford Club campsite. The Malvern Hills and Wye Valley, the Black Mountains and the Forest of Dean, all ripe for adventure, are within striking distance of our campsite near the popular county town of the same name. Equally the campsite’s idyllic rural location, next to The Millpond, a stunning three-and-a-half acre fishing lake, makes it perfect for a relaxing break or simply to explore the many attractions of the area at leisure.",
                "address" => "The Millpond",
                "town_city" => "Little Tarrington",
                "postcode" => "HR1 4JA",
                "rating" => 4,
                "contact_no" => "01432890243",
                "contact_email" => "info@campingandcaravaningclub.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 3,
                "campsite_name" => "Wolverley Camping and Caravanning Club Site",
                "price" => 25,
                "description" => "Surrounded by the stunning Worcestershire countryside and with the Staffordshire and Worcestershire Canal just 60 metres from site means you really can enjoy life in the slow lane. The Lock Inn adjacent to the canal and a couple of minutes’ walk from the campsite provides an excellent resting place to enjoy a pint (or frozen cider) and partake in a spot of gongoozling. There are some lovely walks to be enjoyed along the canal towpath especially as there is Springfields Park near the canal where fishing is available and a great play park for the children. Stop off in Kidderminster and, as well as shops and eateries, you’ll find the Severn Valley Railway. Board a steam train and enjoy the 16 mile journey through glorious countryside to Bridgnorth.",
                "address" => "Wolverley",
                "town_city" => "Kidderminster",
                "postcode" => "DY10 3PX",
                "rating" => 3,
                "contact_no" => "01562850909",
                "contact_email" => "info@campingandcaravaningclub.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 3,
                "campsite_name" => "Newland Meadows Malvern Campsite",
                "price" => 16.50,
                "description" => "We are a small, family run camp site set over 4 acres of meadows with some hard standing pitches. We are situated within a mile and a half of Malvern Link, a suburb with facilities including pubs, takeaways, supermarkets, a chemist and a lovely park for young children. The site is within walking distance of The Swan Inn, a real ale pub serving home cooked food. Dogs are welcome at the pub.",
                "address" => "Old Worcester Rd",
                "town_city" => "Malvern",
                "postcode" => "WR13 5AY",
                "rating" => 5,
                "contact_no" => "01886832821",
                "contact_email" => "info@newlandmeadows.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],

            // East Midlands
            [
                "region_id" => 4,
                "campsite_name" => "Mablethorpe Camping and Caravanning Club Site",
                "price" => 32.50,
                "description" => "The seaside is the big draw for our family-friendly Mablethorpe Club campsite. Its location is just a mile from the lovely sandy beach at Mablethorpe. This golden expanse of sand is perfect for bucket and spade fun, while the seafront offers everything you would expect from a British seaside resort – amusement arcades, fairground, donkey rides and cafes. Queens Park next to the beach offers a variety of activities and has a boating lake, paddling pool, miniature railway, tennis courts and putting green. Head further down the coast for Skegness and more traditional seaside fun.",
                "address" => "120 Church Ln",
                "town_city" => "Mablethorpe",
                "postcode" => "LN12 2NU",
                "rating" => 4,
                "contact_no" => "01507472374",
                "contact_email" => "info@campingandcaravaningclub.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 4,
                "campsite_name" => "Sandyford Farm Camping",
                "price" => 32.50,
                "description" => "This is a Certificated Site (CS). These select sites are small, privately run campsites that operate under the Club’s jurisdiction and can only accommodate up to 5 caravans or motorhomes and up to 10 trailer tents or tents, unless express permission has been given by the Club to accommodate more. They range from secluded Hideaways to fully facilitated family-friendly sites, and are often found in locations where larger commercial sites are prohibited so you could be camping close to a beach or in the National Park, for example.",
                "address" => "Lant Ln",
                "town_city" => "Matlock",
                "postcode" => "S45 0JS",
                "rating" => 5,
                "contact_no" => "01586459862",
                "contact_email" => "info@campingandcaravaningclub.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 4,
                "campsite_name" => "Sherwood Forest Holiday Park",
                "price" => 18.90,
                "description" => "Sherwood Forest Holiday Park is a peaceful, picturesque site with an abundance of wildlife and mature trees. We are on the banks of the River Maun and there is also a lake on the site which is home to ducks, swans and all manner of creatures. The site itself is landscaped into several smaller distinct areas, giving it much more of an intimate feel. There are plenty of attractions nearby and you will find all the facilities you need on our site for an enjoyable stay",
                "address" => "Gorsethorpe Ln",
                "town_city" => "Mansfield",
                "postcode" => "NG21 9HW",
                "rating" => 3,
                "contact_no" => "01623823132",
                "contact_email" => "info@sherwoodforestholidaypark.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 4,
                "campsite_name" => "Little Oak Camping",
                "price" => 22.25,
                "description" => "Little Oak Camping is a tranquil and secluded Nottinghamshire campsite. Tucked away near the market town of Retford, deep in the heart of Robin Hood country, enjoy your stay with camping and glamping. You will feel at home in a charming spot surrounded by fields, a wild garden and a brilliant family play space, for hide-and-seek, football and fun. Accommodation at Little Oak Camping can be booked as a whole for groups, parties and weddings, or on quieter weekends, it can act as an intimate romantic space. With the best of Nottinghamshire glamping and camping available, there is something for everyone here!",
                "address" => "Grove Coach Rd",
                "town_city" => "Retford",
                "postcode" => "DN22 0PW",
                "rating" => 2,
                "contact_no" => "07538581476",
                "contact_email" => "info@littleoakcamping.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],

            // East Anglia
            [
                "region_id" => 5,
                "campsite_name" => "Newbourne Woodland Campsite",
                "price" => 45,
                "description" => "You choose – you can find yourself a corner in the shaded woods or in one of the clearings, or pitch your tent in one of the two meadow areas. Choose your own space for your tent when you arrive – there’s a happy place for everyone. Our campsite is for adults only and is dog-friendly. We welcome quiet, well behaved dogs on up to four of our pitches. Dogs must be kept on short leads or tie outs at all times when they are not in the tent with you – you will be sharing your camp with the wildlife who live there; we want you to enjoy the environment, and we want the wildlife to be able to enjoy it too! There are many excellent paths for dog walking in the area, and we provide a doggy bin so you can keep the area clean and hygienic.",
                "address" => "Jackson Rd",
                "town_city" => "Woodbridge",
                "postcode" => "IP12 4NR",
                "rating" => 2,
                "contact_no" => "01473736201",
                "contact_email" => "info@newbournecampsite.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 5,
                "campsite_name" => "Swattesfield Campsite",
                "price" => 12.49,
                "description" => "Set in the heart of East Anglian countryside, we have plenty of camping options for those looking for something uniquely special! Two cosy Pixie Huts, 5 Boutique Bell Tents and a Converted Suffolk Hay Cart are provided as furnished accomodation, unfurnished Pre-Pitched Bell Tents are available alongside unmarked pitches for camping under canvas or campervans! Our suffolk campsite spans over 7 acres which leaves oodles of room for campers to spread out and enjoy themselves!",
                "address" => "Gislingham Road",
                "town_city" => "Thornham Magna",
                "postcode" => "IP23 8HH",
                "rating" => 4,
                "contact_no" => "01432890243",
                "contact_email" => "swattesfield@gmail.com",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 5,
                "campsite_name" => "Spring Farm Campsite",
                "price" => 31.50,
                "description" => "Spring Farm Campsite is a small site in the heart of the Norfolk countryside, perfect for campers wanting a friendly, simple camping experience. Nature lovers will enjoy spotting the local wildlife, falling asleep to the hooting of owls and waking to birdsong. If you enjoy a spot of fishing, bring your rod as we have a small pond freshly stocked with coarse fish. Common sights around the campsite include a moorhen family, Muntjac deer, Barn owls and an array of other bird life. A local pub, convenience store and cafe are all a short walk or drive away in the village of Shipdham.",
                "address" => "Shipdham",
                "town_city" => "Thetford",
                "postcode" => "IP25 7PL",
                "rating" => 3,
                "contact_no" => "01362822109",
                "contact_email" => "springfarmcampsite@yahoo.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 5,
                "campsite_name" => "Hickling Campsite",
                "price" => 20,
                "description" => "At the heart of the largest broad in Norfolk and its outstanding coastline, Hickling Campsite is the perfect base to pitch up and go exploring… a cycle ride away from award winning, secluded, yet vast sandy beaches; and under a mile’s walk to Hickling’s quaint, traditional village pub, The Greyhound, and The Pleasure Boat Inn, which is situated on the impressive Hickling Broad, making it the perfect place to relax while watching boats glide in and out along the tranquil and picturesque broad. Hickling Broad is an absolute haven for wildlife too, being a national nature reserve established by English Nature and in the care of the Norfolk Wildlife Trust, there are plenty of boat trips around the reserve for visitors to explore.",
                "address" => "Heath Rd",
                "town_city" => "Norwich",
                "postcode" => "NR12 0AU",
                "rating" => 5,
                "contact_no" => "07811440280",
                "contact_email" => "bookings@hicklingcampsite.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],


            // Wales
            [
                "region_id" => 6,
                "campsite_name" => "Willow Springs Campsite",
                "price" => 21.50,
                "description" => "Willow Springs is a family run, eco-friendly Campsite. We are situated at Llwyn y Ffynnon Farm in Glyncorrwg, historically a sheep farm dating from the 1700’s, now home to our ducks and 2 Llamas. I have my eye on pygmy goats and some donkeys from the sanctuary too. The campsite is perfectly located to explore the whole of South and Mid Wales, from Cardiff, to The Gower, The Brecon Beacons and West Wales. Our closest beach is only a short drive away. Willow Springs Campsite is ideal for a quiet retreat, or keen mountain and road bikers, ramblers, horse riders, star gazers and families of all ages – with abundant wildlife and panoramic vistas to help you unwind.",
                "address" => "The Lizard",
                "town_city" => "Helston",
                "postcode" => "TR12 7NX",
                "rating" => 5,
                "contact_no" => "07903799793",
                "contact_email" => "hello.willowspringscampsite@gmail.com",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 6,
                "campsite_name" => "Meadow Farm campsite",
                "price" => 19.90,
                "description" => "We are a small family site situated at the top of the Northcliffe, with spectacular panoramic views overlooking the historic town of Tenby, it's Blue Flag Beaches, Harbour and of course the renowned 'Caldey Island' where the Cistercian monks continue a tradition which began back in Celtic times. There are daily boat trips to the Island from Tenby Harbour....well worth a visit.  When you stay with us you will be a mere 5 minutes walk from the beach and 10 minutes from town, where there are pubs, cafe's, restaurants and shops aplenty. Meadow Farm is right on the Pembrokeshire Coastal path, which is well known as one of the best coastal walks in Britain.",
                "address" => "St Ewe",
                "town_city" => "Saint Austell",
                "postcode" => "PL26 7JL",
                "rating" => 4,
                "contact_no" => "1834818500",
                "contact_email" => "meadowfarmtenby@gmail.com",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 6,
                "campsite_name" => "Maes Y Bryn Campsite",
                "price" => 25,
                "description" => "Hello, I'm Beryl and I am the owner of Maes y Bryn Campsite Llanrwst Conwy North Wales. If you are looking for a campsite with a personal touch in a tranquil location, then Maes y Bryn is the place for you. You may bring your own tent, caravan or motor home, or go glamping here in North Wales and hire a tipi which we hire out. I extend a warm welcome to all guests and most visitors return year after year to North Wales Part of the attraction is the rural setting of the site in an area of outstanding natural beauty on the edge of the Snowdonia National Park only six miles from Betws y Coed and only 20 minutes from the major attractions of the North Wales coast. Maes y Bryn is a small working farm, and has all kinds of pets including sheep, chickens, ducks, dogs and a cat.",
                "address" => "Woodlands",
                "town_city" => "Ilfracombe",
                "postcode" => "EX34 0AT",
                "rating" => 3,
                "contact_no" => "07765077248",
                "contact_email" => "info@maesybryncamping.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 6,
                "campsite_name" => "Beddgelert Campsite",
                "price" => 37.50,
                "description" => "Why stay at Beddgelert campsite? Why not? We are at the heart of Snowdonia National Park directly located by the side of Beddgelert Forest with spectacular scenery and in an area brimming with so much to do! It’s an ideal base for visiting castles, waterfalls and lakes as well as hiking, biking, fishing, walking and cycling. We have our own halt on the Welsh Highland Railway which can gently whisk you away as far as Caernarfon, Portmadog and Blaenau Ffestiniog too. Plus, we are a very pet friendly location too and even have a warm dog wash for those muddy paws at our facilities block. There is something for the whole family.",
                "address" => "Castle Lane",
                "town_city" => "Wells",
                "postcode" => "BA5 1NN",
                "rating" => 2,
                "contact_no" => "01766890288",
                "contact_email" => "beddgelert.location@forestholidays.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
        ]);

        DB::table('reviews')->insert([
            [
                'campsite_id' => 1,
                'username' => 'mad4camping',
                'rating' => 4,
                'review_description' => 'Great campsite - beautiful views and good facilities. Staff really friendly too',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'campsite_id' => 1,
                'username' => 'bobthecamper',
                'rating' => 5,
                'review_description' => "Loved this place - beautiful setting, nice and peaceful",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'campsite_id' => 2,
                'username' => 'iliketocamp',
                'rating' => 3,
                'review_description' => "Good facilities but pretty close to a busy road which is a shame. Friendly staff",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);

        DB::table('amenities')->insert([
            ['amenity_name' => 'Drinking water'],
            ['amenity_name' => 'BBQ'],
            ['amenity_name' => 'Showers'],
            ['amenity_name' => 'Laundry'],
            ['amenity_name' => 'Toilets'],
            ['amenity_name' => 'Wifi'],
            ['amenity_name' => 'Kitchen'],
            ['amenity_name' => 'Cutlery and crockery'],
            ['amenity_name' => 'Caravan power'],
            ['amenity_name' => 'Household power'],
            ['amenity_name' => 'Lounge'],
            ['amenity_name' => 'Picnic tables'],
            ['amenity_name' => 'Tent sites'],
            ['amenity_name' => 'Caravan sites'],
            ['amenity_name' => 'Dump station'],
            ['amenity_name' => 'Pets welcome'],
            ['amenity_name' => 'Playground'],
            ['amenity_name' => 'Wheelchair access'],
            ['amenity_name' => 'Cards accepted'],
            ['amenity_name' => 'Firepits'],
            ['amenity_name' => 'Swimming pool']
        ]);

        // DB::table('campsite_amenity')->insert([
        //     [
        //         "campsite_id" => 1,
        //         "amenity_id" => 1
        //     ],
        //     [
        //         "campsite_id" => 1,
        //         "amenity_id" => 2
        //     ],
        //     [
        //         "campsite_id" => 2,
        //         "amenity_id" => 1
        //     ],
        //     [
        //         "campsite_id" => 2,
        //         "amenity_id" => 2
        //     ]
        // ]);

        $campsite = Campsite::find(1);

        $campsite->amenities()->sync([1, 2, 3]);


    }
}
