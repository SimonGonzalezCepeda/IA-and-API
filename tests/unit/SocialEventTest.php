<?php

use App\SocialEvent;
use App\StandardDialog;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SocialEventTest extends TestCase
{
    /** @test
     */
    public function a_social_event_starts_without_condition()
    {
        $starter = $this->newSocialEvent();
        $startable = $this->newStartable();
        $starter->start($startable);
    }

    /**
     * @param string $name
     * @param string $initialDate
     * @param string $finalDate
     * @param \App\StandardDialog $startable
     * @return \App\SocialEvent
     * @internal param $this
     */
    protected function newSocialEvent($name = "Big Social Event", $initialDate = "2016-02-13",
                                      $finalDate = "2016-02-13", $startable = null)
    {
        return new SocialEvent($name, $initialDate, $finalDate, $startable = $this->newStartable());
    }

    protected function newStartable()
    {
        return new StandardDialog();
    }

}
