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

class ConfigItem
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'ConfigModule',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\Nebula\Meta\ConfigModule',
        ),
        2 => array(
            'var' => 'name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'mode',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\Nebula\Meta\ConfigMode',
        ),
        4 => array(
            'var' => 'value',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Common\Value',
        ),
    );

    /**
     * @var int
     */
    public $ConfigModule = null;
    /**
     * @var string
     */
    public $name = null;
    /**
     * @var int
     */
    public $mode = null;
    /**
     * @var \Nebula\Common\Value
     */
    public $value = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['ConfigModule'])) {
                $this->ConfigModule = $vals['ConfigModule'];
            }
            if (isset($vals['name'])) {
                $this->name = $vals['name'];
            }
            if (isset($vals['mode'])) {
                $this->mode = $vals['mode'];
            }
            if (isset($vals['value'])) {
                $this->value = $vals['value'];
            }
        }
    }

    public function getName()
    {
        return 'ConfigItem';
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
                        $xfer += $input->readI32($this->ConfigModule);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->mode);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->value = new \Nebula\Common\Value();
                        $xfer += $this->value->read($input);
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
        $xfer += $output->writeStructBegin('ConfigItem');
        if ($this->ConfigModule !== null) {
            $xfer += $output->writeFieldBegin('ConfigModule', TType::I32, 1);
            $xfer += $output->writeI32($this->ConfigModule);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->name !== null) {
            $xfer += $output->writeFieldBegin('name', TType::STRING, 2);
            $xfer += $output->writeString($this->name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->mode !== null) {
            $xfer += $output->writeFieldBegin('mode', TType::I32, 3);
            $xfer += $output->writeI32($this->mode);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->value !== null) {
            if (!is_object($this->value)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('value', TType::STRUCT, 4);
            $xfer += $this->value->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
