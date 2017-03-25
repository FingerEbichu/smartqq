<?php
/**
 * SmartQQ Library
 * @author Tao <taosikai@yeah.net>
 */
namespace Slince\SmartQQ\Entity;

class Group
{
    /**
     * gid
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var int
     */
    protected $flag;

    /**
     * @var string
     */
    protected $markName;

    /**
     * @var GroupDetail
     */
    protected $detail;

    public function __construct($id = 0, $name = '', $code = '', $flag = 0, $markName = '')
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->flag = $flag;
        $this->markName = $markName;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param int $flag
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }

    /**
     * @return int
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param string $markName
     */
    public function setMarkName($markName)
    {
        $this->markName = $markName;
    }

    /**
     * @return string
     */
    public function getMarkName()
    {
        return $this->markName;
    }

    /**
     * @param GroupDetail $detail
     */
    public function setDetail(GroupDetail $detail)
    {
        $this->detail = $detail;
    }

    /**
     * @return GroupDetail
     */
    public function getDetail()
    {
        return $this->detail;
    }
}