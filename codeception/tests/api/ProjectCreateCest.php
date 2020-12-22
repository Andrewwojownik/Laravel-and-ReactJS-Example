<?php

class ProjectCreateCest
{
    public function _before(ApiTester $I)
    {
    }

    public function createTest(\ApiTester $I)
    {
        //$I->amHttpAuthenticated('service_user', '123456');
        //$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
        $I->sendPost('/projects', [
            'name' => 'test',
            'description' => 'test desc',
            'created_by' => 1,
        ]);
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::CREATED);
        $I->seeResponseIsJson();
    }

    public function createWithBadDataTest(\ApiTester $I)
    {
        //$I->amHttpAuthenticated('service_user', '123456');
        //$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
        $I->sendPost('/projects', [
            'name' => 'test',
            'description' => 'test desc',
            'created_by' => 999999,
        ]);
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::UNPROCESSABLE_ENTITY);
        $I->seeResponseIsJson();
    }

    public function createWithEmptyDataTest(\ApiTester $I)
    {
        //$I->amHttpAuthenticated('service_user', '123456');
        //$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
        $I->sendPost('/projects', [
            'name' => '',
            'description' => '',
            'created_by' => null,
        ]);
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::UNPROCESSABLE_ENTITY);
        $I->seeResponseIsJson();
    }

    public function createWithNotSetTest(\ApiTester $I)
    {
        //$I->amHttpAuthenticated('service_user', '123456');
        //$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
        $I->sendPost('/projects', []);
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::UNPROCESSABLE_ENTITY);
        $I->seeResponseIsJson();
    }
}