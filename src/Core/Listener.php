<?PhP 
namespace App\Core;

abstract class Listener{
    abstract public function handle(Event $event);
}