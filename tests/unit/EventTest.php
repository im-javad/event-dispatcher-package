<?PhP 
namespace App\Tests\Unit;

use App\Tests\Stubs\EventStub;
use App\Tests\Stubs\EventStubNoName;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase{
    /**
     * @test
     */
    public function can_get_event_name(){
        $event = new EventStub();

        $this->assertEquals('UserLogOut' , $event->getName());
    }

    /**
     * @test
     */
    public function if_default_to_an_event_name_of_the_class_name(){
        $event = new EventStubNoName;

        $this->assertEquals('EventStubNoName' , $event->getName());
    }
}
