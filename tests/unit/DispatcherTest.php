<?PhP 
namespace App\Tests\Unit;

use App\Core\Dispatcher as CoreDispatcher;
use App\Tests\Stubs\ListenerStub;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertCount;
use function PHPUnit\Framework\assertFalse;

class DispatcherTest extends TestCase{
    /**
     * @test
     */
    public function test_listeners_property_holds_listeners_in_array()
    {
        $dispatcher = new CoreDispatcher();

        $listeners = $dispatcher->getListeners();
        
        $this->assertIsArray($listeners);

        $this->assertEmpty($listeners);
    }

    /**
     * @test
     */
    public function it_can_add_listener()
    {
        $dispatcher = new CoreDispatcher();

        $dispatcher->addListener('UserLogOut' , new ListenerStub);

        $this->assertCount(1 , $dispatcher->getListeners()['UserLogOut']);
    }

    /**
     * @test
     */
    public function it_can_get_listeners_by_event_name(){
        $dispatcher = new CoreDispatcher();

        $dispatcher->addListener('UserLogOut' , new ListenerStub);

        $this->assertCount(1 , $dispatcher->getListenersByEvent('UserLogOut'));
    }

    /**
     * @test
     */
    public function it_return_empty_array_if_no_listeners_set_for_event()
    {
        $dispatcher = new CoreDispatcher();

        $this->assertEmpty($dispatcher->getListenersByEvent('UserRegistered'));
    }

    /**
     * @test
     */
    public function it_can_checking_listener_registered_or_not()
    {
        $dispatcher = new CoreDispatcher();

        $this->assertFalse($dispatcher->hasListener('UserSignedUp'));
    }
}
