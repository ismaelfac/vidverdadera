<?php

class MembersAssignedTest extends FeatureTestCase
{
    function test_list_members_assigned_to()
    {
        //Having
        $this->actingAs($user = $this->defaultUser());
        $members = $this->getMembersAssigned();

        //When

        //Then

    }
}
