<?php
namespace metastore;

/**
 * Autogenerated by Thrift Compiler (0.16.0)
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

class CompactionInfoStruct
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'id',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'dbname',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'tablename',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'partitionname',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'type',
            'isRequired' => true,
            'type' => TType::I32,
            'class' => '\metastore\CompactionType',
        ),
        6 => array(
            'var' => 'runas',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'properties',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        8 => array(
            'var' => 'toomanyaborts',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        9 => array(
            'var' => 'state',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        10 => array(
            'var' => 'workerId',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        11 => array(
            'var' => 'start',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        12 => array(
            'var' => 'highestWriteId',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        13 => array(
            'var' => 'errorMessage',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        14 => array(
            'var' => 'hasoldabort',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        15 => array(
            'var' => 'enqueueTime',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        16 => array(
            'var' => 'retryRetention',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        17 => array(
            'var' => 'poolname',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        18 => array(
            'var' => 'numberOfBuckets',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var int
     */
    public $id = null;
    /**
     * @var string
     */
    public $dbname = null;
    /**
     * @var string
     */
    public $tablename = null;
    /**
     * @var string
     */
    public $partitionname = null;
    /**
     * @var int
     */
    public $type = null;
    /**
     * @var string
     */
    public $runas = null;
    /**
     * @var string
     */
    public $properties = null;
    /**
     * @var bool
     */
    public $toomanyaborts = null;
    /**
     * @var string
     */
    public $state = null;
    /**
     * @var string
     */
    public $workerId = null;
    /**
     * @var int
     */
    public $start = null;
    /**
     * @var int
     */
    public $highestWriteId = null;
    /**
     * @var string
     */
    public $errorMessage = null;
    /**
     * @var bool
     */
    public $hasoldabort = null;
    /**
     * @var int
     */
    public $enqueueTime = null;
    /**
     * @var int
     */
    public $retryRetention = null;
    /**
     * @var string
     */
    public $poolname = null;
    /**
     * @var int
     */
    public $numberOfBuckets = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['id'])) {
                $this->id = $vals['id'];
            }
            if (isset($vals['dbname'])) {
                $this->dbname = $vals['dbname'];
            }
            if (isset($vals['tablename'])) {
                $this->tablename = $vals['tablename'];
            }
            if (isset($vals['partitionname'])) {
                $this->partitionname = $vals['partitionname'];
            }
            if (isset($vals['type'])) {
                $this->type = $vals['type'];
            }
            if (isset($vals['runas'])) {
                $this->runas = $vals['runas'];
            }
            if (isset($vals['properties'])) {
                $this->properties = $vals['properties'];
            }
            if (isset($vals['toomanyaborts'])) {
                $this->toomanyaborts = $vals['toomanyaborts'];
            }
            if (isset($vals['state'])) {
                $this->state = $vals['state'];
            }
            if (isset($vals['workerId'])) {
                $this->workerId = $vals['workerId'];
            }
            if (isset($vals['start'])) {
                $this->start = $vals['start'];
            }
            if (isset($vals['highestWriteId'])) {
                $this->highestWriteId = $vals['highestWriteId'];
            }
            if (isset($vals['errorMessage'])) {
                $this->errorMessage = $vals['errorMessage'];
            }
            if (isset($vals['hasoldabort'])) {
                $this->hasoldabort = $vals['hasoldabort'];
            }
            if (isset($vals['enqueueTime'])) {
                $this->enqueueTime = $vals['enqueueTime'];
            }
            if (isset($vals['retryRetention'])) {
                $this->retryRetention = $vals['retryRetention'];
            }
            if (isset($vals['poolname'])) {
                $this->poolname = $vals['poolname'];
            }
            if (isset($vals['numberOfBuckets'])) {
                $this->numberOfBuckets = $vals['numberOfBuckets'];
            }
        }
    }

    public function getName()
    {
        return 'CompactionInfoStruct';
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
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->dbname);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->tablename);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->partitionname);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->type);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->runas);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->properties);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->toomanyaborts);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->state);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->workerId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->start);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->highestWriteId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 13:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->errorMessage);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 14:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->hasoldabort);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 15:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->enqueueTime);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 16:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->retryRetention);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 17:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->poolname);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 18:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->numberOfBuckets);
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
        $xfer += $output->writeStructBegin('CompactionInfoStruct');
        if ($this->id !== null) {
            $xfer += $output->writeFieldBegin('id', TType::I64, 1);
            $xfer += $output->writeI64($this->id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->dbname !== null) {
            $xfer += $output->writeFieldBegin('dbname', TType::STRING, 2);
            $xfer += $output->writeString($this->dbname);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tablename !== null) {
            $xfer += $output->writeFieldBegin('tablename', TType::STRING, 3);
            $xfer += $output->writeString($this->tablename);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->partitionname !== null) {
            $xfer += $output->writeFieldBegin('partitionname', TType::STRING, 4);
            $xfer += $output->writeString($this->partitionname);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->type !== null) {
            $xfer += $output->writeFieldBegin('type', TType::I32, 5);
            $xfer += $output->writeI32($this->type);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->runas !== null) {
            $xfer += $output->writeFieldBegin('runas', TType::STRING, 6);
            $xfer += $output->writeString($this->runas);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->properties !== null) {
            $xfer += $output->writeFieldBegin('properties', TType::STRING, 7);
            $xfer += $output->writeString($this->properties);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->toomanyaborts !== null) {
            $xfer += $output->writeFieldBegin('toomanyaborts', TType::BOOL, 8);
            $xfer += $output->writeBool($this->toomanyaborts);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->state !== null) {
            $xfer += $output->writeFieldBegin('state', TType::STRING, 9);
            $xfer += $output->writeString($this->state);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->workerId !== null) {
            $xfer += $output->writeFieldBegin('workerId', TType::STRING, 10);
            $xfer += $output->writeString($this->workerId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->start !== null) {
            $xfer += $output->writeFieldBegin('start', TType::I64, 11);
            $xfer += $output->writeI64($this->start);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->highestWriteId !== null) {
            $xfer += $output->writeFieldBegin('highestWriteId', TType::I64, 12);
            $xfer += $output->writeI64($this->highestWriteId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->errorMessage !== null) {
            $xfer += $output->writeFieldBegin('errorMessage', TType::STRING, 13);
            $xfer += $output->writeString($this->errorMessage);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->hasoldabort !== null) {
            $xfer += $output->writeFieldBegin('hasoldabort', TType::BOOL, 14);
            $xfer += $output->writeBool($this->hasoldabort);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->enqueueTime !== null) {
            $xfer += $output->writeFieldBegin('enqueueTime', TType::I64, 15);
            $xfer += $output->writeI64($this->enqueueTime);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->retryRetention !== null) {
            $xfer += $output->writeFieldBegin('retryRetention', TType::I64, 16);
            $xfer += $output->writeI64($this->retryRetention);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->poolname !== null) {
            $xfer += $output->writeFieldBegin('poolname', TType::STRING, 17);
            $xfer += $output->writeString($this->poolname);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->numberOfBuckets !== null) {
            $xfer += $output->writeFieldBegin('numberOfBuckets', TType::I32, 18);
            $xfer += $output->writeI32($this->numberOfBuckets);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
