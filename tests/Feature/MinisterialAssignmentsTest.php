<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MinisterialAssignmentsTest extends TestCase
{
    function test_user_can_create_a_ministerial_assignments()
    {
        //Having
        $this->actingAs($user = $this->defaultUser());
        $member = $this->createMembers();
        $leader = $this->createLeaders([
            'member_id' => $member->id
        ]);
        //dd($user);
        //When
        $this->visit(route('ministerial_assignments.create'))
            ->seeInElement('div','Asignación Ministerial')
            ->press('crear asignación ministerial');

        
        //Then
        $this->seeInDatabase('members', [

        ]);
        $this->seePageIs($member->url);
    }
}
