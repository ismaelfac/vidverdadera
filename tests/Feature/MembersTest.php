<?php

class MembersTest extends TestCase
{
    //Inserta informacion de los miembros de la vid central
    //Asignacion automatica de los miembros a los pastores zonales segun su asignacion geografica.
    function test_user_can_insert_members()
    {
        //Having
        $this->actingAs($user = $this->defaultUser());
        $member = $this->createMembers();
        //dd($member);
        //When
        $this->visit(route('member.create'))
            ->seeInElement('div','Registrar Miembro')
            ->type('Nombres', 'first_name')
            ->type('Apellidos', 'last_name')
            ->type('Tipo de Identificación', 'type_dni')
            ->type('Dni', 'dni')
            ->type('Celular', 'phone')
            ->type('Telefono fijo', 'landline')
            ->type('Email', 'email')
            ->type('address', 'address')
            ->type('Pais', 'country_id')
            ->type('Departamento', 'departament_id')
            ->type('Municipio', 'municipality_id')
            ->type('Barrio', 'neighborhood_id')
            ->type('Fecha de Nacimiento', 'birthdate')
            ->type('Estado Civil', 'civilStatus_id')
            ->type('Fecha de Aniversario', 'wedding_anniversary')
            ->type('Es Lider?', 'is_leaders')
            ->type('Miembro de: ', 'church_id')
            ->press('crear miembro');
        
        //$this->validationMember($members);
        
        //Then
        $this->seeInDatabase('members', [

        ]);
        $this->seePageIs($member->url);

        
    }
    function test_user_can_modify_members()
    {
        
    }

    function test_user_can_deactivate_members()
    {

    }

    function test_user_can_assign_members_to_zonal_pastors()
    {

    }
}
