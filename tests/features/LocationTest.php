<?php
use App\Modelsgenerals\{ Location, Municipality };

class LocationTest extends FeatureTestCase
{
    
    function test_user_can_see_all_locations()
    {
        //Having
       //When
        $this->visit(route('location.index'))
             ->seeInElement('h1','Localidades')
             ->seeInElement('li','Norte Centro Historico');

        //Then
    }
    function test_user_can_create_a_location()
    {
        //Having
        $municipality = 145;
        //When
        $this->actingAs($this->defaultUser())
             ->visit(route('location.create'))
             ->type($municipality,'municipality_id')
             ->type('Nombre de la localidad','description')
             ->type('Nombre Corto','short_name')
             ->press('Crear Localidad');
        //Then
        $this->seeInDatabase('locations', [
            'description' => 'Localidad1',
            'short_name' => 'Lc',
            'municipality_id' => $municipality,
        ]);
        $this->see('Nombre de la localidad');
    }
}
