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
        //dd($user);
        //When
        $this->visit(route('member.create'))
            ->seeInElement('div','Registrar Miembro')
            ->press('crear miembro');

        
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
