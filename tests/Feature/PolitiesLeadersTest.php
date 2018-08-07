<?php

class PolitiesLeadersTest extends TestCase
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
        $polities = $this->GetPolitiesDistrictPastor([
            'leader_id' => $leader->id
        ]);
        $DistrictPastors = $this->factory(App\Districtpastor::class)->create([
            'polity_id' => $polities->id
        ]);

        //when
        $this->visit(route('polities.show'))
            ->seeInElement('h4', 'Politicas del Pastor Distrital')
            ->seeInElement('ul', 'Politica default')
    }
}
