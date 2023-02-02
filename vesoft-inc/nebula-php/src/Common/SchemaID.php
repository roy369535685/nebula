<?php
namespace Nebula\Common;

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

class SchemaID
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'tag_id',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'edge_type',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var int
     */
    public $tag_id = null;
    /**
     * @var int
     */
    public $edge_type = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['tag_id'])) {
                $this->tag_id = $vals['tag_id'];
            }
            if (isset($vals['edge_type'])) {
                $this->edge_type = $vals['edge_type'];
            }
        }
    }

    public function getName()
    {
        return 'SchemaID';
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
                        $xfer += $input->readI32($this->tag_id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->edge_type);
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
        $xfer += $output->writeStructBegin('SchemaID');
        if ($this->tag_id !== null) {
            $xfer += $output->writeFieldBegin('tag_id', TType::I32, 1);
            $xfer += $output->writeI32($this->tag_id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->edge_type !== null) {
            $xfer += $output->writeFieldBegin('edge_type', TType::I32, 2);
            $xfer += $output->writeI32($this->edge_type);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}