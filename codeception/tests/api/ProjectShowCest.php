<?php


class ProjectShowCest
{
    public function _before(ApiTester $I)
    {
    }

    public function showTest(\ApiTester $I)
    {
        for ($i = 1; $i < 5; ++$i) {
            //$I->amHttpAuthenticated('service_user', '123456');
            //$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
            $I->sendGet('/projects/' . $i);
            $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
            $I->seeResponseIsJson();
            $I->seeResponseMatchesJsonType([
                'id' => 'integer',
                'name' => 'string',
                'description' => 'string|null',
                'created_by' => 'integer',
                'created_at' => 'string:datetime_json',
                'updated_at' => 'string:datetime_json',
            ]);
        }
    }

    public function showTestNonExists(\ApiTester $I)
    {
        $I->sendGet('/projects/99999');
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::NOT_FOUND);
    }
}