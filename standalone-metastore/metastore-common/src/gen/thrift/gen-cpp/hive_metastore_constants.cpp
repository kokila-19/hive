/**
 * Autogenerated by Thrift Compiler (0.16.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
#include "hive_metastore_constants.h"

namespace Apache { namespace Hadoop { namespace Hive {

const hive_metastoreConstants g_hive_metastore_constants;

hive_metastoreConstants::hive_metastoreConstants() {
  DDL_TIME = "transient_lastDdlTime";

  ACCESSTYPE_NONE = 1;

  ACCESSTYPE_READONLY = 2;

  ACCESSTYPE_WRITEONLY = 4;

  ACCESSTYPE_READWRITE = 8;

  HIVE_FILTER_FIELD_OWNER = "hive_filter_field_owner__";

  HIVE_FILTER_FIELD_PARAMS = "hive_filter_field_params__";

  HIVE_FILTER_FIELD_LAST_ACCESS = "hive_filter_field_last_access__";

  IS_ARCHIVED = "is_archived";

  ORIGINAL_LOCATION = "original_location";

  IS_IMMUTABLE = "immutable";

  META_TABLE_COLUMNS = "columns";

  META_TABLE_COLUMN_TYPES = "columns.types";

  BUCKET_FIELD_NAME = "bucket_field_name";

  BUCKET_COUNT = "bucket_count";

  FIELD_TO_DIMENSION = "field_to_dimension";

  IF_PURGE = "ifPurge";

  META_TABLE_NAME = "name";

  META_TABLE_DB = "db";

  META_TABLE_LOCATION = "location";

  META_TABLE_SERDE = "serde";

  META_TABLE_PARTITION_COLUMNS = "partition_columns";

  META_TABLE_PARTITION_COLUMN_TYPES = "partition_columns.types";

  FILE_INPUT_FORMAT = "file.inputformat";

  FILE_OUTPUT_FORMAT = "file.outputformat";

  META_TABLE_STORAGE = "storage_handler";

  TABLE_IS_TRANSACTIONAL = "transactional";

  NO_AUTO_COMPACT = "no_auto_compaction";

  TABLE_TRANSACTIONAL_PROPERTIES = "transactional_properties";

  TABLE_BUCKETING_VERSION = "bucketing_version";

  DRUID_CONFIG_PREFIX = "druid.";

  JDBC_CONFIG_PREFIX = "hive.sql.";

  TABLE_IS_CTAS = "created_with_ctas";

  TABLE_IS_CTLT = "created_with_ctlt";

  PARTITION_TRANSFORM_SPEC = "partition_transform_spec";

  NO_CLEANUP = "no_cleanup";

  CTAS_LEGACY_CONFIG = "create_table_as_external";

  DEFAULT_TABLE_TYPE = "defaultTableType";

  TXN_ID = "txnId";

  WRITE_ID = "writeId";

  EXPECTED_PARAMETER_KEY = "expected_parameter_key";

  EXPECTED_PARAMETER_VALUE = "expected_parameter_value";

}

}}} // namespace

