﻿.. ==================================================
.. FOR YOUR INFORMATION
.. --------------------------------------------------
.. -*- coding: utf-8 -*- with BOM.

.. include:: ../Includes.txt

.. _developer:

Developer Corner
================

Target group: **Developers**

The developer part of this documentation

.. _developer-api:

Current Weather (Weather Report)
********************************

How to add a custom api provider
--------------------------------

To add your own api provider you can copy
the 2 Classes 'OpenWeatherMapTask' and 'OpenWeatherMapAdditionalFieldProvider' from 'EXT:weather2/Classes/Task'
into a own extension. Now you can edit the parts you wanna edit.

Structure of the mapping array:
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
.. code-block:: php

  // initialize all items with a default value
  $mappingArray = array(
      'pid' => 0, // storage record
      'name' => '', // name for frontend output
      'temperature_c' => 0, // current temperature in celsius
      'pressure_hpa' => 0, // pressure in hPa
      'humidity_percentage' => 0, // humidity
      'min_temp_c' => 0, // min temperature in celsius
      'max_temp_c' => 0, // max temperature in celsius
      'wind_speed_m_p_s' => 0, // wind speed in meters per second
      'wind_direction_deg' => 0, // wind direction in degrees
      'rain_volume' => 0, // rain volume in mm
      'snow_volume' => 0, // snow volume in mm
      'clouds_percentage' => 0, // cloud percentage
      'serialized_array' => '', // array for additional stuff if you need ;) otherwise empty string
      'measure_timestamp' => 0, // timestamp of measure
      'icon' => '', // name of the weather icon
  );


Get the database connection from TYPO3 $GLOBALS:
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
.. code-block:: php

    /**
     * Returns the TYPO3 database connection from globals
     *
     * @return DatabaseConnection
     */
    protected function getDatabaseConnection()
    {
        return $GLOBALS['TYPO3_DB'];
    }


Execute the query with your array:
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
.. code-block:: php

  $this->dbConnection = $this->getDatabaseConnection();
  $this->dbConnection->exec_INSERTquery($this->dbExtTable, $yourMappingArray);

Weather Alerts
**************

How to add a custom api provider
--------------------------------

You can add your own providers to get weather alerts. The recommended way is to do create an own scheduler task.
You can take a look into 'JWeiland\Weather2\Task\DeutscherWetterdienstTask' and
'JWeiland\Weather2\Task\DeutscherWetterdienstTaskAdditionalFieldProvider' use them as an example. The important
part is the database mapping. To use the frontend plugin without additional changes you have to use the same
database structure as in the DeutscherWetterdienstTask.

Structure of the mapping array
^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
.. code-block:: php

  $mappingArray = array(
      'pid' => $this->recordStoragePage,
      'regions' => (int)$regionUid,
      'level' => 0,
      'type' => 0,
      'title' => '',
      'description' => '',
      'instruction' => '',
      'response_timestamp' => $this->responseTimestamp,
      'starttime' => 0,
      'endtime' => 0,
  );

.. toctree::
   :maxdepth: 2