<?php

namespace ChurchCRM\model\ChurchCRM\Map;

use ChurchCRM\model\ChurchCRM\Event;
use ChurchCRM\model\ChurchCRM\EventQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'events_event' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class EventTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'ChurchCRM.model.ChurchCRM.Map.EventTableMap';

    /**
     * The default database name for this class
     */
    const DATABASE_NAME = 'default';

    /**
     * The table name for this class
     */
    const TABLE_NAME = 'events_event';

    /**
     * The related Propel class for this table
     */
    const OM_CLASS = '\\ChurchCRM\\model\\ChurchCRM\\Event';

    /**
     * A class that can be returned by this tableMap
     */
    const CLASS_DEFAULT = 'ChurchCRM.model.ChurchCRM.Event';

    /**
     * The total number of columns
     */
    const NUM_COLUMNS = 12;

    /**
     * The number of lazy-loaded columns
     */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    const NUM_HYDRATE_COLUMNS = 12;

    /**
     * the column name for the event_id field
     */
    const COL_EVENT_ID = 'events_event.event_id';

    /**
     * the column name for the event_type field
     */
    const COL_EVENT_TYPE = 'events_event.event_type';

    /**
     * the column name for the event_title field
     */
    const COL_EVENT_TITLE = 'events_event.event_title';

    /**
     * the column name for the event_desc field
     */
    const COL_EVENT_DESC = 'events_event.event_desc';

    /**
     * the column name for the event_text field
     */
    const COL_EVENT_TEXT = 'events_event.event_text';

    /**
     * the column name for the event_start field
     */
    const COL_EVENT_START = 'events_event.event_start';

    /**
     * the column name for the event_end field
     */
    const COL_EVENT_END = 'events_event.event_end';

    /**
     * the column name for the inactive field
     */
    const COL_INACTIVE = 'events_event.inactive';

    /**
     * the column name for the location_id field
     */
    const COL_LOCATION_ID = 'events_event.location_id';

    /**
     * the column name for the primary_contact_person_id field
     */
    const COL_PRIMARY_CONTACT_PERSON_ID = 'events_event.primary_contact_person_id';

    /**
     * the column name for the secondary_contact_person_id field
     */
    const COL_SECONDARY_CONTACT_PERSON_ID = 'events_event.secondary_contact_person_id';

    /**
     * the column name for the event_url field
     */
    const COL_EVENT_URL = 'events_event.event_url';

    /**
     * The default string format for model objects of the related table
     */
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        self::TYPE_PHPNAME       => array('Id', 'Type', 'Title', 'Desc', 'Text', 'Start', 'End', 'InActive', 'LocationId', 'PrimaryContactPersonId', 'SecondaryContactPersonId', 'URL', ),
        self::TYPE_CAMELNAME     => array('id', 'type', 'title', 'desc', 'text', 'start', 'end', 'inActive', 'locationId', 'primaryContactPersonId', 'secondaryContactPersonId', 'uRL', ),
        self::TYPE_COLNAME       => array(EventTableMap::COL_EVENT_ID, EventTableMap::COL_EVENT_TYPE, EventTableMap::COL_EVENT_TITLE, EventTableMap::COL_EVENT_DESC, EventTableMap::COL_EVENT_TEXT, EventTableMap::COL_EVENT_START, EventTableMap::COL_EVENT_END, EventTableMap::COL_INACTIVE, EventTableMap::COL_LOCATION_ID, EventTableMap::COL_PRIMARY_CONTACT_PERSON_ID, EventTableMap::COL_SECONDARY_CONTACT_PERSON_ID, EventTableMap::COL_EVENT_URL, ),
        self::TYPE_FIELDNAME     => array('event_id', 'event_type', 'event_title', 'event_desc', 'event_text', 'event_start', 'event_end', 'inactive', 'location_id', 'primary_contact_person_id', 'secondary_contact_person_id', 'event_url', ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        self::TYPE_PHPNAME       => array('Id' => 0, 'Type' => 1, 'Title' => 2, 'Desc' => 3, 'Text' => 4, 'Start' => 5, 'End' => 6, 'InActive' => 7, 'LocationId' => 8, 'PrimaryContactPersonId' => 9, 'SecondaryContactPersonId' => 10, 'URL' => 11, ),
        self::TYPE_CAMELNAME     => array('id' => 0, 'type' => 1, 'title' => 2, 'desc' => 3, 'text' => 4, 'start' => 5, 'end' => 6, 'inActive' => 7, 'locationId' => 8, 'primaryContactPersonId' => 9, 'secondaryContactPersonId' => 10, 'uRL' => 11, ),
        self::TYPE_COLNAME       => array(EventTableMap::COL_EVENT_ID => 0, EventTableMap::COL_EVENT_TYPE => 1, EventTableMap::COL_EVENT_TITLE => 2, EventTableMap::COL_EVENT_DESC => 3, EventTableMap::COL_EVENT_TEXT => 4, EventTableMap::COL_EVENT_START => 5, EventTableMap::COL_EVENT_END => 6, EventTableMap::COL_INACTIVE => 7, EventTableMap::COL_LOCATION_ID => 8, EventTableMap::COL_PRIMARY_CONTACT_PERSON_ID => 9, EventTableMap::COL_SECONDARY_CONTACT_PERSON_ID => 10, EventTableMap::COL_EVENT_URL => 11, ),
        self::TYPE_FIELDNAME     => array('event_id' => 0, 'event_type' => 1, 'event_title' => 2, 'event_desc' => 3, 'event_text' => 4, 'event_start' => 5, 'event_end' => 6, 'inactive' => 7, 'location_id' => 8, 'primary_contact_person_id' => 9, 'secondary_contact_person_id' => 10, 'event_url' => 11, ),
        self::TYPE_NUM           => array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var string[]
     */
    protected $normalizedColumnNameMap = [

        'Id' => 'EVENT_ID',
        'Event.Id' => 'EVENT_ID',
        'id' => 'EVENT_ID',
        'event.id' => 'EVENT_ID',
        'EventTableMap::COL_EVENT_ID' => 'EVENT_ID',
        'COL_EVENT_ID' => 'EVENT_ID',
        'event_id' => 'EVENT_ID',
        'events_event.event_id' => 'EVENT_ID',
        'Type' => 'EVENT_TYPE',
        'Event.Type' => 'EVENT_TYPE',
        'type' => 'EVENT_TYPE',
        'event.type' => 'EVENT_TYPE',
        'EventTableMap::COL_EVENT_TYPE' => 'EVENT_TYPE',
        'COL_EVENT_TYPE' => 'EVENT_TYPE',
        'event_type' => 'EVENT_TYPE',
        'events_event.event_type' => 'EVENT_TYPE',
        'Title' => 'EVENT_TITLE',
        'Event.Title' => 'EVENT_TITLE',
        'title' => 'EVENT_TITLE',
        'event.title' => 'EVENT_TITLE',
        'EventTableMap::COL_EVENT_TITLE' => 'EVENT_TITLE',
        'COL_EVENT_TITLE' => 'EVENT_TITLE',
        'event_title' => 'EVENT_TITLE',
        'events_event.event_title' => 'EVENT_TITLE',
        'Desc' => 'EVENT_DESC',
        'Event.Desc' => 'EVENT_DESC',
        'desc' => 'EVENT_DESC',
        'event.desc' => 'EVENT_DESC',
        'EventTableMap::COL_EVENT_DESC' => 'EVENT_DESC',
        'COL_EVENT_DESC' => 'EVENT_DESC',
        'event_desc' => 'EVENT_DESC',
        'events_event.event_desc' => 'EVENT_DESC',
        'Text' => 'EVENT_TEXT',
        'Event.Text' => 'EVENT_TEXT',
        'text' => 'EVENT_TEXT',
        'event.text' => 'EVENT_TEXT',
        'EventTableMap::COL_EVENT_TEXT' => 'EVENT_TEXT',
        'COL_EVENT_TEXT' => 'EVENT_TEXT',
        'event_text' => 'EVENT_TEXT',
        'events_event.event_text' => 'EVENT_TEXT',
        'Start' => 'EVENT_START',
        'Event.Start' => 'EVENT_START',
        'start' => 'EVENT_START',
        'event.start' => 'EVENT_START',
        'EventTableMap::COL_EVENT_START' => 'EVENT_START',
        'COL_EVENT_START' => 'EVENT_START',
        'event_start' => 'EVENT_START',
        'events_event.event_start' => 'EVENT_START',
        'End' => 'EVENT_END',
        'Event.End' => 'EVENT_END',
        'end' => 'EVENT_END',
        'event.end' => 'EVENT_END',
        'EventTableMap::COL_EVENT_END' => 'EVENT_END',
        'COL_EVENT_END' => 'EVENT_END',
        'event_end' => 'EVENT_END',
        'events_event.event_end' => 'EVENT_END',
        'InActive' => 'INACTIVE',
        'Event.InActive' => 'INACTIVE',
        'inActive' => 'INACTIVE',
        'event.inActive' => 'INACTIVE',
        'EventTableMap::COL_INACTIVE' => 'INACTIVE',
        'COL_INACTIVE' => 'INACTIVE',
        'inactive' => 'INACTIVE',
        'events_event.inactive' => 'INACTIVE',
        'LocationId' => 'LOCATION_ID',
        'Event.LocationId' => 'LOCATION_ID',
        'locationId' => 'LOCATION_ID',
        'event.locationId' => 'LOCATION_ID',
        'EventTableMap::COL_LOCATION_ID' => 'LOCATION_ID',
        'COL_LOCATION_ID' => 'LOCATION_ID',
        'location_id' => 'LOCATION_ID',
        'events_event.location_id' => 'LOCATION_ID',
        'PrimaryContactPersonId' => 'PRIMARY_CONTACT_PERSON_ID',
        'Event.PrimaryContactPersonId' => 'PRIMARY_CONTACT_PERSON_ID',
        'primaryContactPersonId' => 'PRIMARY_CONTACT_PERSON_ID',
        'event.primaryContactPersonId' => 'PRIMARY_CONTACT_PERSON_ID',
        'EventTableMap::COL_PRIMARY_CONTACT_PERSON_ID' => 'PRIMARY_CONTACT_PERSON_ID',
        'COL_PRIMARY_CONTACT_PERSON_ID' => 'PRIMARY_CONTACT_PERSON_ID',
        'primary_contact_person_id' => 'PRIMARY_CONTACT_PERSON_ID',
        'events_event.primary_contact_person_id' => 'PRIMARY_CONTACT_PERSON_ID',
        'SecondaryContactPersonId' => 'SECONDARY_CONTACT_PERSON_ID',
        'Event.SecondaryContactPersonId' => 'SECONDARY_CONTACT_PERSON_ID',
        'secondaryContactPersonId' => 'SECONDARY_CONTACT_PERSON_ID',
        'event.secondaryContactPersonId' => 'SECONDARY_CONTACT_PERSON_ID',
        'EventTableMap::COL_SECONDARY_CONTACT_PERSON_ID' => 'SECONDARY_CONTACT_PERSON_ID',
        'COL_SECONDARY_CONTACT_PERSON_ID' => 'SECONDARY_CONTACT_PERSON_ID',
        'secondary_contact_person_id' => 'SECONDARY_CONTACT_PERSON_ID',
        'events_event.secondary_contact_person_id' => 'SECONDARY_CONTACT_PERSON_ID',
        'URL' => 'EVENT_URL',
        'Event.URL' => 'EVENT_URL',
        'uRL' => 'EVENT_URL',
        'event.uRL' => 'EVENT_URL',
        'EventTableMap::COL_EVENT_URL' => 'EVENT_URL',
        'COL_EVENT_URL' => 'EVENT_URL',
        'event_url' => 'EVENT_URL',
        'events_event.event_url' => 'EVENT_URL',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('events_event');
        $this->setPhpName('Event');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\ChurchCRM\\model\\ChurchCRM\\Event');
        $this->setPackage('ChurchCRM.model.ChurchCRM');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('event_id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('event_type', 'Type', 'INTEGER', 'event_types', 'type_id', true, null, 0);
        $this->addForeignKey('event_type', 'Type', 'INTEGER', 'person_per', 'per_ID', true, null, 0);
        $this->addColumn('event_title', 'Title', 'VARCHAR', true, 255, '');
        $this->addColumn('event_desc', 'Desc', 'VARCHAR', false, 255, null);
        $this->addColumn('event_text', 'Text', 'LONGVARCHAR', false, null, null);
        $this->addColumn('event_start', 'Start', 'TIMESTAMP', true, null, null);
        $this->addColumn('event_end', 'End', 'TIMESTAMP', true, null, null);
        $this->addColumn('inactive', 'InActive', 'INTEGER', true, 1, 0);
        $this->addForeignKey('location_id', 'LocationId', 'INTEGER', 'locations', 'location_id', true, null, 0);
        $this->addColumn('primary_contact_person_id', 'PrimaryContactPersonId', 'INTEGER', true, null, 0);
        $this->addForeignKey('secondary_contact_person_id', 'SecondaryContactPersonId', 'INTEGER', 'person_per', 'per_ID', true, null, 0);
        $this->addColumn('event_url', 'URL', 'LONGVARCHAR', false, null, null);
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('EventType', '\\ChurchCRM\\model\\ChurchCRM\\EventType', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':event_type',
    1 => ':type_id',
  ),
), null, null, null, false);
        $this->addRelation('PersonRelatedByType', '\\ChurchCRM\\model\\ChurchCRM\\Person', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':event_type',
    1 => ':per_ID',
  ),
), null, null, null, false);
        $this->addRelation('PersonRelatedBySecondaryContactPersonId', '\\ChurchCRM\\model\\ChurchCRM\\Person', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':secondary_contact_person_id',
    1 => ':per_ID',
  ),
), null, null, null, false);
        $this->addRelation('Location', '\\ChurchCRM\\model\\ChurchCRM\\Location', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':location_id',
    1 => ':location_id',
  ),
), null, null, null, false);
        $this->addRelation('EventAttend', '\\ChurchCRM\\model\\ChurchCRM\\EventAttend', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':event_id',
    1 => ':event_id',
  ),
), null, null, 'EventAttends', false);
        $this->addRelation('KioskAssignment', '\\ChurchCRM\\model\\ChurchCRM\\KioskAssignment', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':kasm_EventId',
    1 => ':event_id',
  ),
), null, null, 'KioskAssignments', false);
        $this->addRelation('EventAudience', '\\ChurchCRM\\model\\ChurchCRM\\EventAudience', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':event_id',
    1 => ':event_id',
  ),
), null, null, 'EventAudiences', false);
        $this->addRelation('CalendarEvent', '\\ChurchCRM\\model\\ChurchCRM\\CalendarEvent', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':event_id',
    1 => ':event_id',
  ),
), null, null, 'CalendarEvents', false);
        $this->addRelation('Group', '\\ChurchCRM\\model\\ChurchCRM\\Group', RelationMap::MANY_TO_MANY, array(), null, null, 'Groups');
        $this->addRelation('Calendar', '\\ChurchCRM\\model\\ChurchCRM\\Calendar', RelationMap::MANY_TO_MANY, array(), null, null, 'Calendars');
    } // buildRelations()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array  $row       resultset row.
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('Id', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param boolean $withPrefix Whether or not to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? EventTableMap::CLASS_DEFAULT : EventTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array  $row       row returned by DataFetcher->fetch().
     * @param int    $offset    The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array           (Event object, last column rank)
     */
    public static function populateObject($row, $offset = 0, $indexType = TableMap::TYPE_NUM)
    {
        $key = EventTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = EventTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + EventTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = EventTableMap::OM_CLASS;
            /** @var Event $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            EventTableMap::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher)
    {
        $results = array();

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = EventTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = EventTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var Event $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                EventTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria object containing the columns to add.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(EventTableMap::COL_EVENT_ID);
            $criteria->addSelectColumn(EventTableMap::COL_EVENT_TYPE);
            $criteria->addSelectColumn(EventTableMap::COL_EVENT_TITLE);
            $criteria->addSelectColumn(EventTableMap::COL_EVENT_DESC);
            $criteria->addSelectColumn(EventTableMap::COL_EVENT_TEXT);
            $criteria->addSelectColumn(EventTableMap::COL_EVENT_START);
            $criteria->addSelectColumn(EventTableMap::COL_EVENT_END);
            $criteria->addSelectColumn(EventTableMap::COL_INACTIVE);
            $criteria->addSelectColumn(EventTableMap::COL_LOCATION_ID);
            $criteria->addSelectColumn(EventTableMap::COL_PRIMARY_CONTACT_PERSON_ID);
            $criteria->addSelectColumn(EventTableMap::COL_SECONDARY_CONTACT_PERSON_ID);
            $criteria->addSelectColumn(EventTableMap::COL_EVENT_URL);
        } else {
            $criteria->addSelectColumn($alias . '.event_id');
            $criteria->addSelectColumn($alias . '.event_type');
            $criteria->addSelectColumn($alias . '.event_title');
            $criteria->addSelectColumn($alias . '.event_desc');
            $criteria->addSelectColumn($alias . '.event_text');
            $criteria->addSelectColumn($alias . '.event_start');
            $criteria->addSelectColumn($alias . '.event_end');
            $criteria->addSelectColumn($alias . '.inactive');
            $criteria->addSelectColumn($alias . '.location_id');
            $criteria->addSelectColumn($alias . '.primary_contact_person_id');
            $criteria->addSelectColumn($alias . '.secondary_contact_person_id');
            $criteria->addSelectColumn($alias . '.event_url');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria object containing the columns to remove.
     * @param string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function removeSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(EventTableMap::COL_EVENT_ID);
            $criteria->removeSelectColumn(EventTableMap::COL_EVENT_TYPE);
            $criteria->removeSelectColumn(EventTableMap::COL_EVENT_TITLE);
            $criteria->removeSelectColumn(EventTableMap::COL_EVENT_DESC);
            $criteria->removeSelectColumn(EventTableMap::COL_EVENT_TEXT);
            $criteria->removeSelectColumn(EventTableMap::COL_EVENT_START);
            $criteria->removeSelectColumn(EventTableMap::COL_EVENT_END);
            $criteria->removeSelectColumn(EventTableMap::COL_INACTIVE);
            $criteria->removeSelectColumn(EventTableMap::COL_LOCATION_ID);
            $criteria->removeSelectColumn(EventTableMap::COL_PRIMARY_CONTACT_PERSON_ID);
            $criteria->removeSelectColumn(EventTableMap::COL_SECONDARY_CONTACT_PERSON_ID);
            $criteria->removeSelectColumn(EventTableMap::COL_EVENT_URL);
        } else {
            $criteria->removeSelectColumn($alias . '.event_id');
            $criteria->removeSelectColumn($alias . '.event_type');
            $criteria->removeSelectColumn($alias . '.event_title');
            $criteria->removeSelectColumn($alias . '.event_desc');
            $criteria->removeSelectColumn($alias . '.event_text');
            $criteria->removeSelectColumn($alias . '.event_start');
            $criteria->removeSelectColumn($alias . '.event_end');
            $criteria->removeSelectColumn($alias . '.inactive');
            $criteria->removeSelectColumn($alias . '.location_id');
            $criteria->removeSelectColumn($alias . '.primary_contact_person_id');
            $criteria->removeSelectColumn($alias . '.secondary_contact_person_id');
            $criteria->removeSelectColumn($alias . '.event_url');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getServiceContainer()->getDatabaseMap(EventTableMap::DATABASE_NAME)->getTable(EventTableMap::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this tableMap class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getServiceContainer()->getDatabaseMap(EventTableMap::DATABASE_NAME);
        if (!$dbMap->hasTable(EventTableMap::TABLE_NAME)) {
            $dbMap->addTableObject(new EventTableMap());
        }
    }

    /**
     * Performs a DELETE on the database, given a Event or Criteria object OR a primary key value.
     *
     * @param mixed               $values Criteria or Event object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param  ConnectionInterface $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ConnectionInterface $con = null)
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(EventTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \ChurchCRM\model\ChurchCRM\Event) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(EventTableMap::DATABASE_NAME);
            $criteria->add(EventTableMap::COL_EVENT_ID, (array) $values, Criteria::IN);
        }

        $query = EventQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            EventTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                EventTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the events_event table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(ConnectionInterface $con = null)
    {
        return EventQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a Event or Criteria object.
     *
     * @param mixed               $criteria Criteria or Event object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(EventTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from Event object
        }

        if ($criteria->containsKey(EventTableMap::COL_EVENT_ID) && $criteria->keyContainsValue(EventTableMap::COL_EVENT_ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.EventTableMap::COL_EVENT_ID.')');
        }


        // Set the correct dbName
        $query = EventQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

} // EventTableMap
// This is the static code needed to register the TableMap for this table with the main Propel class.
//
EventTableMap::buildTableMap();
