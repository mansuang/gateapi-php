<?php
/**
 * Position
 *
 * PHP version 7
 *
 * @category Class
 * @package  GateApi
 * @author   GateIO
 * @link     https://www.gate.io
 */

/**
 * Gate API v4
 *
 * APIv4 provides spot, margin and futures trading operations. There are public APIs to retrieve the real-time market statistics, and private APIs which needs authentication to trade on user's behalf.
 *
 * Contact: support@mail.gate.io
 * Generated by: https://openapi-generator.tech
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * Do not edit the class manually.
 */

namespace GateApi\Model;

use \ArrayAccess;
use \GateApi\ObjectSerializer;

/**
 * Position Class Doc Comment
 *
 * @category    Class
 * @description Futures position details
 * @package     GateApi
 * @author      GateIO
 * @link        https://www.gate.io
 */
class Position implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Position';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'user' => 'int',
        'contract' => 'string',
        'size' => 'int',
        'leverage' => 'string',
        'risk_limit' => 'string',
        'leverage_max' => 'string',
        'maintenance_rate' => 'string',
        'value' => 'string',
        'margin' => 'string',
        'entry_price' => 'string',
        'liq_price' => 'string',
        'mark_price' => 'string',
        'unrealised_pnl' => 'string',
        'realised_pnl' => 'string',
        'history_pnl' => 'string',
        'last_close_pnl' => 'string',
        'realised_point' => 'string',
        'history_point' => 'string',
        'adl_ranking' => 'int',
        'pending_orders' => 'int',
        'close_order' => '\GateApi\Model\PositionCloseOrder',
        'mode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'user' => 'int64',
        'contract' => null,
        'size' => 'int64',
        'leverage' => null,
        'risk_limit' => null,
        'leverage_max' => null,
        'maintenance_rate' => null,
        'value' => null,
        'margin' => null,
        'entry_price' => null,
        'liq_price' => null,
        'mark_price' => null,
        'unrealised_pnl' => null,
        'realised_pnl' => null,
        'history_pnl' => null,
        'last_close_pnl' => null,
        'realised_point' => null,
        'history_point' => null,
        'adl_ranking' => null,
        'pending_orders' => null,
        'close_order' => null,
        'mode' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'user' => 'user',
        'contract' => 'contract',
        'size' => 'size',
        'leverage' => 'leverage',
        'risk_limit' => 'risk_limit',
        'leverage_max' => 'leverage_max',
        'maintenance_rate' => 'maintenance_rate',
        'value' => 'value',
        'margin' => 'margin',
        'entry_price' => 'entry_price',
        'liq_price' => 'liq_price',
        'mark_price' => 'mark_price',
        'unrealised_pnl' => 'unrealised_pnl',
        'realised_pnl' => 'realised_pnl',
        'history_pnl' => 'history_pnl',
        'last_close_pnl' => 'last_close_pnl',
        'realised_point' => 'realised_point',
        'history_point' => 'history_point',
        'adl_ranking' => 'adl_ranking',
        'pending_orders' => 'pending_orders',
        'close_order' => 'close_order',
        'mode' => 'mode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'user' => 'setUser',
        'contract' => 'setContract',
        'size' => 'setSize',
        'leverage' => 'setLeverage',
        'risk_limit' => 'setRiskLimit',
        'leverage_max' => 'setLeverageMax',
        'maintenance_rate' => 'setMaintenanceRate',
        'value' => 'setValue',
        'margin' => 'setMargin',
        'entry_price' => 'setEntryPrice',
        'liq_price' => 'setLiqPrice',
        'mark_price' => 'setMarkPrice',
        'unrealised_pnl' => 'setUnrealisedPnl',
        'realised_pnl' => 'setRealisedPnl',
        'history_pnl' => 'setHistoryPnl',
        'last_close_pnl' => 'setLastClosePnl',
        'realised_point' => 'setRealisedPoint',
        'history_point' => 'setHistoryPoint',
        'adl_ranking' => 'setAdlRanking',
        'pending_orders' => 'setPendingOrders',
        'close_order' => 'setCloseOrder',
        'mode' => 'setMode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'user' => 'getUser',
        'contract' => 'getContract',
        'size' => 'getSize',
        'leverage' => 'getLeverage',
        'risk_limit' => 'getRiskLimit',
        'leverage_max' => 'getLeverageMax',
        'maintenance_rate' => 'getMaintenanceRate',
        'value' => 'getValue',
        'margin' => 'getMargin',
        'entry_price' => 'getEntryPrice',
        'liq_price' => 'getLiqPrice',
        'mark_price' => 'getMarkPrice',
        'unrealised_pnl' => 'getUnrealisedPnl',
        'realised_pnl' => 'getRealisedPnl',
        'history_pnl' => 'getHistoryPnl',
        'last_close_pnl' => 'getLastClosePnl',
        'realised_point' => 'getRealisedPoint',
        'history_point' => 'getHistoryPoint',
        'adl_ranking' => 'getAdlRanking',
        'pending_orders' => 'getPendingOrders',
        'close_order' => 'getCloseOrder',
        'mode' => 'getMode'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const MODE_SINGLE = 'single';
    const MODE_DUAL_LONG = 'dual_long';
    const MODE_DUAL_SHORT = 'dual_short';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModeAllowableValues()
    {
        return [
            self::MODE_SINGLE,
            self::MODE_DUAL_LONG,
            self::MODE_DUAL_SHORT,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['leverage'] = isset($data['leverage']) ? $data['leverage'] : null;
        $this->container['risk_limit'] = isset($data['risk_limit']) ? $data['risk_limit'] : null;
        $this->container['leverage_max'] = isset($data['leverage_max']) ? $data['leverage_max'] : null;
        $this->container['maintenance_rate'] = isset($data['maintenance_rate']) ? $data['maintenance_rate'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['margin'] = isset($data['margin']) ? $data['margin'] : null;
        $this->container['entry_price'] = isset($data['entry_price']) ? $data['entry_price'] : null;
        $this->container['liq_price'] = isset($data['liq_price']) ? $data['liq_price'] : null;
        $this->container['mark_price'] = isset($data['mark_price']) ? $data['mark_price'] : null;
        $this->container['unrealised_pnl'] = isset($data['unrealised_pnl']) ? $data['unrealised_pnl'] : null;
        $this->container['realised_pnl'] = isset($data['realised_pnl']) ? $data['realised_pnl'] : null;
        $this->container['history_pnl'] = isset($data['history_pnl']) ? $data['history_pnl'] : null;
        $this->container['last_close_pnl'] = isset($data['last_close_pnl']) ? $data['last_close_pnl'] : null;
        $this->container['realised_point'] = isset($data['realised_point']) ? $data['realised_point'] : null;
        $this->container['history_point'] = isset($data['history_point']) ? $data['history_point'] : null;
        $this->container['adl_ranking'] = isset($data['adl_ranking']) ? $data['adl_ranking'] : null;
        $this->container['pending_orders'] = isset($data['pending_orders']) ? $data['pending_orders'] : null;
        $this->container['close_order'] = isset($data['close_order']) ? $data['close_order'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($this->container['mode']) && !in_array($this->container['mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets user
     *
     * @return int|null
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param int|null $user User ID
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets contract
     *
     * @return string|null
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param string|null $contract Futures contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size Position size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets leverage
     *
     * @return string|null
     */
    public function getLeverage()
    {
        return $this->container['leverage'];
    }

    /**
     * Sets leverage
     *
     * @param string|null $leverage Position leverage. 0 means cross margin; positive number means isolated margin
     *
     * @return $this
     */
    public function setLeverage($leverage)
    {
        $this->container['leverage'] = $leverage;

        return $this;
    }

    /**
     * Gets risk_limit
     *
     * @return string|null
     */
    public function getRiskLimit()
    {
        return $this->container['risk_limit'];
    }

    /**
     * Sets risk_limit
     *
     * @param string|null $risk_limit Position risk limit
     *
     * @return $this
     */
    public function setRiskLimit($risk_limit)
    {
        $this->container['risk_limit'] = $risk_limit;

        return $this;
    }

    /**
     * Gets leverage_max
     *
     * @return string|null
     */
    public function getLeverageMax()
    {
        return $this->container['leverage_max'];
    }

    /**
     * Sets leverage_max
     *
     * @param string|null $leverage_max Maximum leverage under current risk limit
     *
     * @return $this
     */
    public function setLeverageMax($leverage_max)
    {
        $this->container['leverage_max'] = $leverage_max;

        return $this;
    }

    /**
     * Gets maintenance_rate
     *
     * @return string|null
     */
    public function getMaintenanceRate()
    {
        return $this->container['maintenance_rate'];
    }

    /**
     * Sets maintenance_rate
     *
     * @param string|null $maintenance_rate Maintenance rate under current risk limit
     *
     * @return $this
     */
    public function setMaintenanceRate($maintenance_rate)
    {
        $this->container['maintenance_rate'] = $maintenance_rate;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value Position value calculated in settlement currency
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets margin
     *
     * @return string|null
     */
    public function getMargin()
    {
        return $this->container['margin'];
    }

    /**
     * Sets margin
     *
     * @param string|null $margin Position margin
     *
     * @return $this
     */
    public function setMargin($margin)
    {
        $this->container['margin'] = $margin;

        return $this;
    }

    /**
     * Gets entry_price
     *
     * @return string|null
     */
    public function getEntryPrice()
    {
        return $this->container['entry_price'];
    }

    /**
     * Sets entry_price
     *
     * @param string|null $entry_price Entry price
     *
     * @return $this
     */
    public function setEntryPrice($entry_price)
    {
        $this->container['entry_price'] = $entry_price;

        return $this;
    }

    /**
     * Gets liq_price
     *
     * @return string|null
     */
    public function getLiqPrice()
    {
        return $this->container['liq_price'];
    }

    /**
     * Sets liq_price
     *
     * @param string|null $liq_price Liquidation price
     *
     * @return $this
     */
    public function setLiqPrice($liq_price)
    {
        $this->container['liq_price'] = $liq_price;

        return $this;
    }

    /**
     * Gets mark_price
     *
     * @return string|null
     */
    public function getMarkPrice()
    {
        return $this->container['mark_price'];
    }

    /**
     * Sets mark_price
     *
     * @param string|null $mark_price Current mark price
     *
     * @return $this
     */
    public function setMarkPrice($mark_price)
    {
        $this->container['mark_price'] = $mark_price;

        return $this;
    }

    /**
     * Gets unrealised_pnl
     *
     * @return string|null
     */
    public function getUnrealisedPnl()
    {
        return $this->container['unrealised_pnl'];
    }

    /**
     * Sets unrealised_pnl
     *
     * @param string|null $unrealised_pnl Unrealized PNL
     *
     * @return $this
     */
    public function setUnrealisedPnl($unrealised_pnl)
    {
        $this->container['unrealised_pnl'] = $unrealised_pnl;

        return $this;
    }

    /**
     * Gets realised_pnl
     *
     * @return string|null
     */
    public function getRealisedPnl()
    {
        return $this->container['realised_pnl'];
    }

    /**
     * Sets realised_pnl
     *
     * @param string|null $realised_pnl Realized PNL
     *
     * @return $this
     */
    public function setRealisedPnl($realised_pnl)
    {
        $this->container['realised_pnl'] = $realised_pnl;

        return $this;
    }

    /**
     * Gets history_pnl
     *
     * @return string|null
     */
    public function getHistoryPnl()
    {
        return $this->container['history_pnl'];
    }

    /**
     * Sets history_pnl
     *
     * @param string|null $history_pnl History realized PNL
     *
     * @return $this
     */
    public function setHistoryPnl($history_pnl)
    {
        $this->container['history_pnl'] = $history_pnl;

        return $this;
    }

    /**
     * Gets last_close_pnl
     *
     * @return string|null
     */
    public function getLastClosePnl()
    {
        return $this->container['last_close_pnl'];
    }

    /**
     * Sets last_close_pnl
     *
     * @param string|null $last_close_pnl PNL of last position close
     *
     * @return $this
     */
    public function setLastClosePnl($last_close_pnl)
    {
        $this->container['last_close_pnl'] = $last_close_pnl;

        return $this;
    }

    /**
     * Gets realised_point
     *
     * @return string|null
     */
    public function getRealisedPoint()
    {
        return $this->container['realised_point'];
    }

    /**
     * Sets realised_point
     *
     * @param string|null $realised_point Realized POINT PNL
     *
     * @return $this
     */
    public function setRealisedPoint($realised_point)
    {
        $this->container['realised_point'] = $realised_point;

        return $this;
    }

    /**
     * Gets history_point
     *
     * @return string|null
     */
    public function getHistoryPoint()
    {
        return $this->container['history_point'];
    }

    /**
     * Sets history_point
     *
     * @param string|null $history_point History realized POINT PNL
     *
     * @return $this
     */
    public function setHistoryPoint($history_point)
    {
        $this->container['history_point'] = $history_point;

        return $this;
    }

    /**
     * Gets adl_ranking
     *
     * @return int|null
     */
    public function getAdlRanking()
    {
        return $this->container['adl_ranking'];
    }

    /**
     * Sets adl_ranking
     *
     * @param int|null $adl_ranking ADL ranking, range from 1 to 5
     *
     * @return $this
     */
    public function setAdlRanking($adl_ranking)
    {
        $this->container['adl_ranking'] = $adl_ranking;

        return $this;
    }

    /**
     * Gets pending_orders
     *
     * @return int|null
     */
    public function getPendingOrders()
    {
        return $this->container['pending_orders'];
    }

    /**
     * Sets pending_orders
     *
     * @param int|null $pending_orders Current open orders
     *
     * @return $this
     */
    public function setPendingOrders($pending_orders)
    {
        $this->container['pending_orders'] = $pending_orders;

        return $this;
    }

    /**
     * Gets close_order
     *
     * @return \GateApi\Model\PositionCloseOrder|null
     */
    public function getCloseOrder()
    {
        return $this->container['close_order'];
    }

    /**
     * Sets close_order
     *
     * @param \GateApi\Model\PositionCloseOrder|null $close_order close_order
     *
     * @return $this
     */
    public function setCloseOrder($close_order)
    {
        $this->container['close_order'] = $close_order;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode Position mode, including:  - `single`: dual mode is not enabled- `dual_long`: long position in dual mode- `dual_short`: short position in dual mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $allowedValues = $this->getModeAllowableValues();
        if (!is_null($mode) && !in_array($mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mode'] = $mode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


