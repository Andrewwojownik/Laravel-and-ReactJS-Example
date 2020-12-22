<?php 

class ProjectIndexCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
    }
	
	public function indexTest(\ApiTester $I)
    {
        //$I->amHttpAuthenticated('service_user', '123456');
        //$I->haveHttpHeader('Content-Type', 'application/x-www-form-urlencoded');
		$I->sendGet('/projects');
        $I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK); // 200
        $I->seeResponseIsJson();        
    }
}
