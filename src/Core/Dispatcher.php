<?PhP 
namespace App\Core;

class Dispatcher{
    protected $listeners = [];

    public function getListeners()
    {
        return $this->listeners;
    }

    public function addListener(string $listenerName , Event $event)
    {
        $this->listeners[$listenerName][] = $event;
    }
}
