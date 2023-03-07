<?PhP 
namespace App\Tests\Stubs;

use App\Core\Event;

class EventStub extends Event{
    public function getName(){
        return 'UserLogOut';
    }
}
