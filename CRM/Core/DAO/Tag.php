<?php
/*
+--------------------------------------------------------------------+
| CiviCRM version 4.7                                                |
+--------------------------------------------------------------------+
| Copyright CiviCRM LLC (c) 2004-2017                                |
+--------------------------------------------------------------------+
| This file is a part of CiviCRM.                                    |
|                                                                    |
| CiviCRM is free software; you can copy, modify, and distribute it  |
| under the terms of the GNU Affero General Public License           |
| Version 3, 19 November 2007 and the CiviCRM Licensing Exception.   |
|                                                                    |
| CiviCRM is distributed in the hope that it will be useful, but     |
| WITHOUT ANY WARRANTY; without even the implied warranty of         |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.               |
| See the GNU Affero General Public License for more details.        |
|                                                                    |
| You should have received a copy of the GNU Affero General Public   |
| License and the CiviCRM Licensing Exception along                  |
| with this program; if not, contact CiviCRM LLC                     |
| at info[AT]civicrm[DOT]org. If you have questions about the        |
| GNU Affero General Public License or the licensing of CiviCRM,     |
| see the CiviCRM license FAQ at http://civicrm.org/licensing        |
+--------------------------------------------------------------------+
*/
/**
 * @package CRM
 * @copyright CiviCRM LLC (c) 2004-2017
 *
 * Generated from xml/schema/CRM/Core/Tag.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:d676c3ec724cfc5f8b03e891b148c7ab)
 */
require_once 'CRM/Core/DAO.php';
require_once 'CRM/Utils/Type.php';
/**
 * CRM_Core_DAO_Tag constructor.
 */
class CRM_Core_DAO_Tag extends CRM_Core_DAO {
  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  static $_tableName = 'civicrm_tag';
  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var boolean
   */
  static $_log = true;
  /**
   * Tag ID
   *
   * @var int unsigned
   */
  public $id;
  /**
   * Name of Tag.
   *
   * @var string
   */
  public $name;
  /**
   * Optional verbose description of the tag.
   *
   * @var string
   */
  public $description;
  /**
   * Optional parent id for this tag.
   *
   * @var int unsigned
   */
  public $parent_id;
  /**
   * Is this tag selectable / displayed
   *
   * @var boolean
   */
  public $is_selectable;
  /**
   *
   * @var boolean
   */
  public $is_reserved;
  /**
   *
   * @var boolean
   */
  public $is_tagset;
  /**
   *
   * @var string
   */
  public $used_for;
  /**
   * FK to civicrm_contact, who created this tag
   *
   * @var int unsigned
   */
  public $created_id;
  /**
   * Hex color value e.g. #ffffff
   *
   * @var string
   */
  public $color;
  /**
   * Date and time that tag was created.
   *
   * @var datetime
   */
  public $created_date;
  /**
   * Class constructor.
   */
  function __construct() {
    $this->__table = 'civicrm_tag';
    parent::__construct();
  }
  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static ::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'parent_id', 'civicrm_tag', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName() , 'created_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }
  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = array(
        'id' => array(
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Tag ID') ,
          'description' => 'Tag ID',
          'required' => true,
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
        ) ,
        'name' => array(
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Tag Name') ,
          'description' => 'Name of Tag.',
          'required' => true,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
        ) ,
        'description' => array(
          'name' => 'description',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Description') ,
          'description' => 'Optional verbose description of the tag.',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
        ) ,
        'parent_id' => array(
          'name' => 'parent_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Parent Tag') ,
          'description' => 'Optional parent id for this tag.',
          'default' => 'NULL',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'FKClassName' => 'CRM_Core_DAO_Tag',
        ) ,
        'is_selectable' => array(
          'name' => 'is_selectable',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Display Tag?') ,
          'description' => 'Is this tag selectable / displayed',
          'default' => '1',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
        ) ,
        'is_reserved' => array(
          'name' => 'is_reserved',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Reserved') ,
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
        ) ,
        'is_tagset' => array(
          'name' => 'is_tagset',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => ts('Tagset') ,
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
        ) ,
        'used_for' => array(
          'name' => 'used_for',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Used For') ,
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'default' => 'NULL',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'html' => array(
            'type' => 'Select',
          ) ,
          'pseudoconstant' => array(
            'optionGroupName' => 'tag_used_for',
            'optionEditPath' => 'civicrm/admin/options/tag_used_for',
          )
        ) ,
        'created_id' => array(
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => ts('Tag Created By') ,
          'description' => 'FK to civicrm_contact, who created this tag',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
          'FKClassName' => 'CRM_Contact_DAO_Contact',
        ) ,
        'color' => array(
          'name' => 'color',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => ts('Color') ,
          'description' => 'Hex color value e.g. #ffffff',
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'default' => 'NULL',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
        ) ,
        'created_date' => array(
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => ts('Tag Created Date') ,
          'description' => 'Date and time that tag was created.',
          'table_name' => 'civicrm_tag',
          'entity' => 'Tag',
          'bao' => 'CRM_Core_BAO_Tag',
        ) ,
      );
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }
  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }
  /**
   * Returns the names of this table
   *
   * @return string
   */
  static function getTableName() {
    return self::$_tableName;
  }
  /**
   * Returns if this table needs to be logged
   *
   * @return boolean
   */
  function getLog() {
    return self::$_log;
  }
  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &import($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'tag', $prefix, array());
    return $r;
  }
  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  static function &export($prefix = false) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'tag', $prefix, array());
    return $r;
  }
}