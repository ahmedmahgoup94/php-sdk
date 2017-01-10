<?php
/**
 * Wallee SDK
 *
 * This library allows to interact with the Wallee payment service.
 * Wallee SDK: 1.0.0
 * 
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Wallee\Sdk\Model;

use \Wallee\Sdk\ValidationException;

/**
 * SubscriptionProductRetirement model
 *
 * @category    Class
 * @description 
 * @package     Wallee\Sdk
 * @author      customweb GmbH
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/wallee-payment/wallee-php-sdk
 */
class SubscriptionProductRetirement  {

	/**
	 * The original name of the model.
	 *
	 * @var string
	 */
	private static $swaggerModelName = 'SubscriptionProductRetirement';

	/**
	 * An array of property to type mappings. Used for (de)serialization.
	 *
	 * @var string[]
	 */
	private static $swaggerTypes = array(
		'createdOn' => 'string',
		'id' => 'int',
		'linkedSpaceId' => '\Wallee\Sdk\Model\EntityReference',
		'product' => '\Wallee\Sdk\Model\SubscriptionProduct',
		'respectTerminiationPeriodsEnabled' => 'bool',
		'targetProduct' => '\Wallee\Sdk\Model\SubscriptionProduct',
		'version' => 'int'	);

	/**
	 * Returns an array of property to type mappings.
	 *
	 * @return string[]
	 */
	public static function swaggerTypes() {
		return self::$swaggerTypes;
	}

	

	/**
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @var string
	 */
	private $createdOn;

	/**
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @var int
	 */
	private $id;

	/**
	 * @var \Wallee\Sdk\Model\EntityReference
	 */
	private $linkedSpaceId;

	/**
	 * @var \Wallee\Sdk\Model\SubscriptionProduct
	 */
	private $product;

	/**
	 * 
	 *
	 * @var bool
	 */
	private $respectTerminiationPeriodsEnabled;

	/**
	 * @var \Wallee\Sdk\Model\SubscriptionProduct
	 */
	private $targetProduct;

	/**
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @var int
	 */
	private $version;


	/**
	 * Constructor.
	 *
	 * @param mixed[] $data an associated array of property values initializing the model
	 */
	public function __construct(array $data = null) {
		if (isset($data['linkedSpaceId']) && $data['linkedSpaceId'] != null) {
			$this->setLinkedSpaceId($data['linkedSpaceId']);
		}
		if (isset($data['product']) && $data['product'] != null) {
			$this->setProduct($data['product']);
		}
		if (isset($data['targetProduct']) && $data['targetProduct'] != null) {
			$this->setTargetProduct($data['targetProduct']);
		}
	}


	/**
	 * Returns createdOn.
	 *
	 * The created on date indicates the date on which the entity was stored into the database.
	 *
	 * @return string
	 */
	public function getCreatedOn() {
		return $this->createdOn;
	}

	/**
	 * Sets createdOn.
	 *
	 * @param string $createdOn
	 * @return SubscriptionProductRetirement
	 */
	protected function setCreatedOn($createdOn) {
		$this->createdOn = $createdOn;

		return $this;
	}

	/**
	 * Returns id.
	 *
	 * The ID is the primary key of the entity. The ID identifies the entity uniquely.
	 *
	 * @return int
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets id.
	 *
	 * @param int $id
	 * @return SubscriptionProductRetirement
	 */
	protected function setId($id) {
		$this->id = $id;

		return $this;
	}

	/**
	 * Returns linkedSpaceId.
	 *
	 * @return \Wallee\Sdk\Model\EntityReference
	 */
	public function getLinkedSpaceId() {
		return $this->linkedSpaceId;
	}

	/**
	 * Sets linkedSpaceId.
	 *
	 * @param \Wallee\Sdk\Model\EntityReference $linkedSpaceId
	 * @return SubscriptionProductRetirement
	 */
	public function setLinkedSpaceId($linkedSpaceId) {
		$this->linkedSpaceId = $linkedSpaceId;

		return $this;
	}

	/**
	 * Returns product.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProduct
	 */
	public function getProduct() {
		return $this->product;
	}

	/**
	 * Sets product.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProduct $product
	 * @return SubscriptionProductRetirement
	 */
	public function setProduct($product) {
		$this->product = $product;

		return $this;
	}

	/**
	 * Returns respectTerminiationPeriodsEnabled.
	 *
	 * 
	 *
	 * @return bool
	 */
	public function getRespectTerminiationPeriodsEnabled() {
		return $this->respectTerminiationPeriodsEnabled;
	}

	/**
	 * Sets respectTerminiationPeriodsEnabled.
	 *
	 * @param bool $respectTerminiationPeriodsEnabled
	 * @return SubscriptionProductRetirement
	 */
	protected function setRespectTerminiationPeriodsEnabled($respectTerminiationPeriodsEnabled) {
		$this->respectTerminiationPeriodsEnabled = $respectTerminiationPeriodsEnabled;

		return $this;
	}

	/**
	 * Returns targetProduct.
	 *
	 * @return \Wallee\Sdk\Model\SubscriptionProduct
	 */
	public function getTargetProduct() {
		return $this->targetProduct;
	}

	/**
	 * Sets targetProduct.
	 *
	 * @param \Wallee\Sdk\Model\SubscriptionProduct $targetProduct
	 * @return SubscriptionProductRetirement
	 */
	public function setTargetProduct($targetProduct) {
		$this->targetProduct = $targetProduct;

		return $this;
	}

	/**
	 * Returns version.
	 *
	 * The version number indicates the version of the entity. The version is incremented whenever the entity is changed.
	 *
	 * @return int
	 */
	public function getVersion() {
		return $this->version;
	}

	/**
	 * Sets version.
	 *
	 * @param int $version
	 * @return SubscriptionProductRetirement
	 */
	protected function setVersion($version) {
		$this->version = $version;

		return $this;
	}

	/**
	 * Validates the model's properties and throws a ValidationException if the validation fails.
	 *
	 * @throws ValidationException
	 */
	public function validate() {

	}

	/**
	 * Returns true if all the properties in the model are valid.
	 *
	 * @return boolean
	 */
	public function isValid() {
		try {
			$this->validate();
			return true;
		} catch (ValidationException $e) {
			return false;
		}
	}

	/**
	 * Returns the string presentation of the object.
	 *
	 * @return string
	 */
	public function __toString() {
		if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
			return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
		}

		return json_encode(\Wallee\Sdk\ObjectSerializer::sanitizeForSerialization($this));
	}

}

