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

class IndexColumnHint
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'column_name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'scan_type',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\Nebula\Storage\ScanType',
        ),
        3 => array(
            'var' => 'begin_value',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Common\Value',
        ),
        4 => array(
            'var' => 'end_value',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\Nebula\Common\Value',
        ),
    );

    /**
     * @var string
     */
    public $column_name = null;
    /**
     * @var int
     */
    public $scan_type = null;
    /**
     * @var \Nebula\Common\Value
     */
    public $begin_value = null;
    /**
     * @var \Nebula\Common\Value
     */
    public $end_value = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['column_name'])) {
                $this->column_name = $vals['column_name'];
            }
            if (isset($vals['scan_type'])) {
                $this->scan_type = $vals['scan_type'];
            }
            if (isset($vals['begin_value'])) {
                $this->begin_value = $vals['begin_value'];
            }
            if (isset($vals['end_value'])) {
                $this->end_value = $vals['end_value'];
            }
        }
    }

    public function getName()
    {
        return 'IndexColumnHint';
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
                        $xfer += $input->readString($this->column_name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->scan_type);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->begin_value = new \Nebula\Common\Value();
                        $xfer += $this->begin_value->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->end_value = new \Nebula\Common\Value();
                        $xfer += $this->end_value->read($input);
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
        $xfer += $output->writeStructBegin('IndexColumnHint');
        if ($this->column_name !== null) {
            $xfer += $output->writeFieldBegin('column_name', TType::STRING, 1);
            $xfer += $output->writeString($this->column_name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->scan_type !== null) {
            $xfer += $output->writeFieldBegin('scan_type', TType::I32, 2);
            $xfer += $output->writeI32($this->scan_type);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->begin_value !== null) {
            if (!is_object($this->begin_value)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('begin_value', TType::STRUCT, 3);
            $xfer += $this->begin_value->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->end_value !== null) {
            if (!is_object($this->end_value)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('end_value', TType::STRUCT, 4);
            $xfer += $this->end_value->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
