<?php
namespace Nebula\Storage;

/**
 * Autogenerated by Thrift Compiler (0.15.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class GetUUIDReq
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'space_id',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'part_id',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        3 => array(
            'var' => 'name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'common',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Storage\RequestCommon',
        ),
    );

    /**
     * @var int
     */
    public $space_id = null;
    /**
     * @var int
     */
    public $part_id = null;
    /**
     * @var string
     */
    public $name = null;
    /**
     * @var \Nebula\Storage\RequestCommon
     */
    public $common = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['space_id'])) {
                $this->space_id = $vals['space_id'];
            }
            if (isset($vals['part_id'])) {
                $this->part_id = $vals['part_id'];
            }
            if (isset($vals['name'])) {
                $this->name = $vals['name'];
            }
            if (isset($vals['common'])) {
                $this->common = $vals['common'];
            }
        }
    }

    public function getName()
    {
        return 'GetUUIDReq';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->space_id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->part_id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->common = new \Nebula\Storage\RequestCommon();
                        $xfer += $this->common->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('GetUUIDReq');
        if ($this->space_id !== null) {
            $xfer += $output->writeFieldBegin('space_id', TType::I32, 1);
            $xfer += $output->writeI32($this->space_id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->part_id !== null) {
            $xfer += $output->writeFieldBegin('part_id', TType::I32, 2);
            $xfer += $output->writeI32($this->part_id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->name !== null) {
            $xfer += $output->writeFieldBegin('name', TType::STRING, 3);
            $xfer += $output->writeString($this->name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->common !== null) {
            if (!is_object($this->common)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('common', TType::STRUCT, 4);
            $xfer += $this->common->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}