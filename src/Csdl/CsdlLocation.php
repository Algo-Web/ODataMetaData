<?php


namespace AlgoWeb\ODataMetadata\Csdl;


use AlgoWeb\ODataMetadata\Interfaces\ILocation;

class CsdlLocation implements ILocation
{
    private $lineNumber;
    private $position;
    public function __construct(int $lineNumber, int $position)
    {
        $this->lineNumber = $lineNumber;
        $this->position = $position;
    }

    /**
     * @return int Gets the line number in the file.
     */
    public function getLineNumber():int{
        return $this->lineNumber;
    }

    /**
     * @return int Gets the position in the line.
     */
    public function getLinePosition():int {
        return $this->lineNumber;
    }

    /**
     * Gets a string representation of the location.
     *
     * @return string A string representation of the location.
     */
    public function __toString(): string
    {
        return "(" . strval($this->lineNumber) . ", " . strval($this->position) . ")";
    }
}