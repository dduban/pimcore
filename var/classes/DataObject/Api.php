<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - userId [input]
 * - idApi [input]
 * - title [input]
 * - completed [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Api\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Api\Listing|\Pimcore\Model\DataObject\Api|null getByUserId(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Api\Listing|\Pimcore\Model\DataObject\Api|null getByIdApi(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Api\Listing|\Pimcore\Model\DataObject\Api|null getByTitle(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Api\Listing|\Pimcore\Model\DataObject\Api|null getByCompleted(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Api extends Concrete
{
public const FIELD_USER_ID = 'userId';
public const FIELD_ID_API = 'idApi';
public const FIELD_TITLE = 'title';
public const FIELD_COMPLETED = 'completed';

protected $classId = "4";
protected $className = "Api";
protected $userId;
protected $idApi;
protected $title;
protected $completed;


/**
* @param array $values
* @return static
*/
public static function create(array $values = []): static
{
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get userId - User Id
* @return string|null
*/
public function getUserId(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("userId");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->userId;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set userId - User Id
* @param string|null $userId
* @return $this
*/
public function setUserId(?string $userId): static
{
	$this->markFieldDirty("userId", true);

	$this->userId = $userId;

	return $this;
}

/**
* Get idApi - Id Api
* @return string|null
*/
public function getIdApi(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("idApi");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->idApi;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set idApi - Id Api
* @param string|null $idApi
* @return $this
*/
public function setIdApi(?string $idApi): static
{
	$this->markFieldDirty("idApi", true);

	$this->idApi = $idApi;

	return $this;
}

/**
* Get title - Title
* @return string|null
*/
public function getTitle(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("title");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->title;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set title - Title
* @param string|null $title
* @return $this
*/
public function setTitle(?string $title): static
{
	$this->markFieldDirty("title", true);

	$this->title = $title;

	return $this;
}

/**
* Get completed - Completed
* @return string|null
*/
public function getCompleted(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("completed");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->completed;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set completed - Completed
* @param string|null $completed
* @return $this
*/
public function setCompleted(?string $completed): static
{
	$this->markFieldDirty("completed", true);

	$this->completed = $completed;

	return $this;
}

}

