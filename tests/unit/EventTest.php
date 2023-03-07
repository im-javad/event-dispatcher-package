<?PhP 
namespace App\Tests\Unit;

use App\Tests\Stubs\EventStub;
use PHPUnit\Framework\TestCase;

class EventTest extends TestCase{
    /**
     * @test
     */
    public function can_get_event_name(){
        $event = new EventStub();

        $this->assertEquals('EventStub' , $event->getName());
    }
}
