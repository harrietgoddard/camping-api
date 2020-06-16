<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Campsite;
use App\Region;

class CampsiteTest extends TestCase
{
    use RefreshDatabase;

    private $campsite;

    public function setUp() : void
    {
        parent::setUp();
        $this->campsite = new Campsite(
            [
                'region_id' => '2',
                'campsite_name' => "Hawk Place Campsite",
                'price' => '26.80',
                'description' => "Hawk place has the best of both worlds, it is situated a stones through from the sea as well as having miles and miles of uninterupted countryside to walk, cycle or horse ride through. As well as there are frequent stunning sunsets - maybe this is why J M W Turner was drawn to the area to create some of his best sunset paintings. Birchington is only 1.5 miles away with a few local shops and restaurants.",
                'address' => "Dane Road",
                'town_city' => "Birchington",
                'postcode' => "CT7 9QS",
                'amenities' => "Toilets, showers, cafe",
                'rating' => 3,
                'contact_no' => "01843847142",
                'contact_email' => "info@eastkentcamping.co.uk",
                'img' => "https://source.unsplash.com/300x300/?camping"
            ]
        );
    }

    //test formatAmenities method
    public function testFormatAmenities()
    {
        $this->assertSame(['Toilets', 'showers', 'cafe'], $this->campsite->formatAmenities());
    }

    //test formatPrice method
    public function testFormatPrice()
    {
        $this->assertSame('£26.80', $this->campsite->formatPrice());
    }

    //test database
    public function testDatabase()
    {
        
        Region::create(
            [
                'region_name' => 'Scotland',
            ]
        );
        
        $regionFromDb = Region::all()->first();

        $this->assertSame('Scotland', $regionFromDb->region_name);
    }

    //     $campsite = new Campsite(
    //         [
    //             'region_id' => '2',
    //             'campsite_name' => "Hawk Place Campsite",
    //             'price' => '26.80',
    //             'description' => "Hawk place has the best of both worlds, it is situated a stones through from the sea as well as having miles and miles of uninterupted countryside to walk, cycle or horse ride through. As well as there are frequent stunning sunsets - maybe this is why J M W Turner was drawn to the area to create some of his best sunset paintings. Birchington is only 1.5 miles away with a few local shops and restaurants.",
    //             'address' => "Dane Road",
    //             'town_city' => "Birchington",
    //             'postcode' => "CT7 9QS",
    //             'amenities' => "Toilets, showers, cafe",
    //             'rating' => 3,
    //             'contact_no' => "01843847142",
    //             'contact_email' => "info@eastkentcamping.co.uk",
    //             'img' => "https://source.unsplash.com/300x300/?camping"
    //         ]
    //     );
        
    //     $region->campsites()->save($campsite);
    // }
}
