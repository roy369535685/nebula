<?php
namespace Nebula\Meta;

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

class DropZoneFromGroupReq
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'zone_name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'group_name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $zone_name = null;
    /**
     * @var string
     */
    public $group_name = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['zone_name'])) {
                $this->zone_name = $vals['zone_name'];
            }
            if (isset($vals['group_name'])) {
                $this->group_name = $vals['group_name'];
            }
        }
    }

    public function getName()
    {
        return 'DropZoneFromGroupReq';
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
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->zone_name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->group_name);
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
        $xfer += $output->writeStructBegin('DropZoneFromGroupReq');
        if ($this->zone_name !== null) {
            $xfer += $output->writeFieldBegin('zone_name', TType::STRING, 1);
            $xfer += $output->writeString($this->zone_name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->group_name !== null) {
            $xfer += $output->writeFieldBegin('group_name', TType::STRING, 2);
            $xfer += $output->writeString($this->group_name);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
