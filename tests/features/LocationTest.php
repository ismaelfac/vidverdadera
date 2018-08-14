<?php
use App\Modelsgenerals\{ Location, Municipality };

class LocationTest extends FeatureTestCase
{
    
    function test_user_can_see_all_locations()
    {
        //Having
        $municipality = 126;
        $locations = Location::getAllLocationsAttribute()->toArray();  
        //When
        $this->get(url('location'))
             ->type('seleccione la localidad','div');

        //Then
    }
    /*
    function test_user_can_see_location_by_municipality()
    {
        //Having
        $municipality = 126;
        $locations = Location::getFindLocationByMunicipalityAttribute($municipality)->toArray();  
        //When
        $this->get(url('location.show'))
             ->type('seleccione la localidad','div');

        //Then
    }*/
}
