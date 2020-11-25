<?php

class LinkedList implements Iterator {
    private $_currentNode = NULL;
    private $_currentPosition = 0;


    public function current()
    {
        // TODO: Implement current() method.
        return $this->_currentNode->data;
    }

    public function next()
    {
        // TODO: Implement next() method.
        $this->_currentPosition++;
        $this->_currentNode = $this->_currentNode->next;
    }

    public function key()
    {
        // TODO: Implement key() method.
        return $this->_currentPosition;
    }

    public function valid()
    {
        // TODO: Implement valid() method.
        $this->_currentPosition = 0;
        $this->_currentNode = $this->_firstNode;
    }

    public function rewind()
    {
        // TODO: Implement rewind() method.
        return $this->_currentNode !== NULL;
    }
}
