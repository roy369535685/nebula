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

class StopAdminTaskRequest
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'job_id',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'task_id',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var int
     */
    public $job_id = null;
    /**
     * @var int
     */
    public $task_id = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['job_id'])) {
                $this->job_id = $vals['job_id'];
            }
            if (isset($vals['task_id'])) {
                $this->task_id = $vals['task_id'];
            }
        }
    }

    public function getName()
    {
        return 'StopAdminTaskRequest';
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
                        $xfer += $input->readI32($this->job_id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->task_id);
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
        $xfer += $output->writeStructBegin('StopAdminTaskRequest');
        if ($this->job_id !== null) {
            $xfer += $output->writeFieldBegin('job_id', TType::I32, 1);
            $xfer += $output->writeI32($this->job_id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->task_id !== null) {
            $xfer += $output->writeFieldBegin('task_id', TType::I32, 2);
            $xfer += $output->writeI32($this->task_id);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}