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

class AddZoneReq
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'zone_name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'nodes',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\Nebula\Common\HostAddr',
                ),
        ),
    );

    /**
     * @var string
     */
    public $zone_name = null;
    /**
     * @var \Nebula\Common\HostAddr[]
     */
    public $nodes = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['zone_name'])) {
                $this->zone_name = $vals['zone_name'];
            }
            if (isset($vals['nodes'])) {
                $this->nodes = $vals['nodes'];
            }
        }
    }

    public function getName()
    {
        return 'AddZoneReq';
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
                    if ($ftype == TType::LST) {
                        $this->nodes = array();
                        $_size356 = 0;
                        $_etype359 = 0;
                        $xfer += $input->readListBegin($_etype359, $_size356);
                        for ($_i360 = 0; $_i360 < $_size356; ++$_i360) {
                            $elem361 = null;
                            $elem361 = new \Nebula\Common\HostAddr();
                            $xfer += $elem361->read($input);
                            $this->nodes []= $elem361;
                        }
                        $xfer += $input->readListEnd();
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
        $xfer += $output->writeStructBegin('AddZoneReq');
        if ($this->zone_name !== null) {
            $xfer += $output->writeFieldBegin('zone_name', TType::STRING, 1);
            $xfer += $output->writeString($this->zone_name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->nodes !== null) {
            if (!is_array($this->nodes)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('nodes', TType::LST, 2);
            $output->writeListBegin(TType::STRUCT, count($this->nodes));
            foreach ($this->nodes as $iter362) {
                $xfer += $iter362->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
