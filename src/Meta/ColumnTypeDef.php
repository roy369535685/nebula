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

class ColumnTypeDef
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'type',
            'isRequired' => true,
            'type' => TType::I32,
            'class' => '\Nebula\Common\PropertyType',
        ),
        2 => array(
            'var' => 'type_length',
            'isRequired' => false,
            'type' => TType::I16,
        ),
        3 => array(
            'var' => 'geo_shape',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\Nebula\Meta\GeoShape',
        ),
    );

    /**
     * @var int
     */
    public $type = null;
    /**
     * @var int
     */
    public $type_length = 0;
    /**
     * @var int
     */
    public $geo_shape = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['type'])) {
                $this->type = $vals['type'];
            }
            if (isset($vals['type_length'])) {
                $this->type_length = $vals['type_length'];
            }
            if (isset($vals['geo_shape'])) {
                $this->geo_shape = $vals['geo_shape'];
            }
        }
    }

    public function getName()
    {
        return 'ColumnTypeDef';
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
                        $xfer += $input->readI32($this->type);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I16) {
                        $xfer += $input->readI16($this->type_length);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->geo_shape);
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
        $xfer += $output->writeStructBegin('ColumnTypeDef');
        if ($this->type !== null) {
            $xfer += $output->writeFieldBegin('type', TType::I32, 1);
            $xfer += $output->writeI32($this->type);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->type_length !== null) {
            $xfer += $output->writeFieldBegin('type_length', TType::I16, 2);
            $xfer += $output->writeI16($this->type_length);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->geo_shape !== null) {
            $xfer += $output->writeFieldBegin('geo_shape', TType::I32, 3);
            $xfer += $output->writeI32($this->geo_shape);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}