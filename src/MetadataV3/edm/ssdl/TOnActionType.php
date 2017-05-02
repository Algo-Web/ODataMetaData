<?php

namespace AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl;

use AlgoWeb\ODataMetadata\IsOK;
use AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\IsOKTraits\TActionTrait;

/**
 * Class representing TOnActionType
 *
 *
 * XSD Type: TOnAction
 */
class TOnActionType extends IsOK
{
    use TActionTrait;
    /**
     * @property string $action
     */
    private $action = null;

    /**
     * @property \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType $documentation
     */
    private $documentation = null;

    /**
     * Gets as action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * @param string $action
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as documentation
     *
     * @return \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Sets a new documentation
     *
     * @param \AlgoWeb\ODataMetadata\MetadataV3\edm\ssdl\TDocumentationType $documentation
     * @return self
     */
    public function setDocumentation(TDocumentationType $documentation)
    {
        $this->documentation = $documentation;
        return $this;
    }

    /**
     * @param null $msg
     * @return bool
     */
    public function isOK(&$msg = null)
    {
        if (!$this->isStringNotNullOrEmpty($this->action)) {
            $msg = "Action cannot be null or empty";
            return false;
        }
        if (!$this->isTActionValid($this->action)) {
            $msg = "Action must be valid TAction";
            return false;
        }
        if (!$this->isObjectNullOrOK($this->documentation, $msg)) {
            return false;
        }
        return true;
    }
}
