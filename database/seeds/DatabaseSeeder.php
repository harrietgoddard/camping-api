<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('regions')->insert([
            ['region_name' => 'South West'],
            ['region_name' => 'South East']
        ]);

        DB::table('campsites')->insert([
            [
                "region_id" => 1,
                "campsite_name" => "Henry's Campsite",
                "price" => 25.50,
                "description" => "We’re situated in a rural area, with a spectacular sea view and sunsets, at the top of caerthillian valley within a couple of minutes walk from the village centre and ten minutes walk to the coastal paths. there are many inland paths to bring you back into the village centre from all directions along the coastal paths and beaches.",
                "address" => "The Lizard",
                "town_city" => "Helston",
                "postcode" => "TR12 7NX",
                "amenities" => "Showers, toilets, cafe",
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
                "amenities" => "Toilets, firepits, picnic tables",
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
                "amenities" => "Showers, toilets, picnic tables",
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
                "amenities" => "Toilets",
                "rating" => 2,
                "contact_no" => "01749675247",
                "contact_email" => "pinetreefarmcamping@gmail.com",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
            [
                "region_id" => 2,
                "campsite_name" => "Inwood Camping",
                "price" => 25,
                "description" => "We promise that a visit to Inwood or Kingsmore is exactly what you and your kids and maybe your friends need. Loads of space, beautiful countryside and great facilities. No hassle about tent size or camping 100 metres away from your neighbour. It's your choice! It's all very well starting your fire with cotton wool and a firestick, but even the hardiest outdoor person needs ice for their cocktail and a shower before breakfast. Both sites will feature brand-new, high end toilets and showers (and freezers).",
                "address" => "Farleigh Rd",
                "town_city" => "Basingstoke",
                "postcode" => "RG25 2HP",
                "amenities" => "showers, toilets, drinking water, wifi",
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
                "amenities" => "showers, toilets, cold water, hard standing, electricity points, onsite shop",
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
                "amenities" => "toilets, cold water, laundry, pets welcome",
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
                "amenities" => "showers, lounge, household power, barbeque",
                "rating" => 4,
                "contact_no" => "01843847142",
                "contact_email" => "info@eastkentcamping.co.uk",
                "img" => "https://source.unsplash.com/300x300/?camping"
            ],
        ]);

    }
}
