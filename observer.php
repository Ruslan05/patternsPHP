<?php

abstract class ObserverAbstract
{
    abstract public function update(ObserverSubject $subj);
}

abstract class ObserverSubject
{
    abstract public function detach(ObserverAbstract $obs);
    abstract public function attach(ObserverAbstract $obs);
    abstract public function notify();
}

class PatternObserver extends ObserverAbstract
{
    public function update(ObserverSubject $subj)
    {
        echo "IN pattern observer update";
        var_dump($subj);
    }
}

class PatternSubject extends ObserverSubject
{
    protected $_observers = array();

    public function attach(ObserverAbstract $obs)
    {
        $this->_observers[] = $obs;
    }

    public function detach(ObserverAbstract $obs)
    {
        foreach ($this->_observers as $observer => $value)
        {
            unset($this->_observers[$observer]);
        }
    }

    public function notify()
    {
        foreach ($this->_observers as $obs)
        {
            $obs->update($this);
        }
    }
}

$observer = new PatternObserver();
$subject = new PatternSubject();

$subject->attach($observer);
$subject->notify();

