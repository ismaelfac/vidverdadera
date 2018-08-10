<?php

class PolitiesLeadersTest extends FeatureTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_when_the_leader_is_a_is_districtPastor()
    {
        //having
        $leader = $this->createLeader();
        $polities = $this->GetPolities([
            'leader_id' => $leader->id
        ]);
        $DistrictPastors = $this->createGrazingGroup([
            'polity_id' => $polities->id
        ]);

        //when
        $this->visit(route('polities.show'))
            ->seeInElement('h4', 'Politicas del Pastor Distrital')
            ->seeInElement('ul', 'Politica default');
    }
}
