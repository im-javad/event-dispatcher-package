<?PhP 
namespace App\Core;

class Dispatcher{
    protected $listeners = [];

    public function getListeners()
    {
        return $this->listeners;
    }

    public function addListener(string $eventName , Listener $listener)
    {
        $this->listeners[$eventName][] = $listener;
    }

    public function getListenersByEvent(string $eventName)
    {
        return $this->hasListener($eventName) ? $this->listeners[$eventName] : null;
    }

    public function hasListener(string $eventName){
        return isset($this->listeners[$eventName]);
    }
}
