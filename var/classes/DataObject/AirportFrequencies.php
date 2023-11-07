<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - id_frequencies [input]
 * - airport_ref [input]
 * - airport_ident [input]
 * - frequencies_type [input]
 * - description [input]
 * - frequency_mhz [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\AirportFrequencies\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\AirportFrequencies\Listing|\Pimcore\Model\DataObject\AirportFrequencies|null getById_frequencies(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportFrequencies\Listing|\Pimcore\Model\DataObject\AirportFrequencies|null getByAirport_ref(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportFrequencies\Listing|\Pimcore\Model\DataObject\AirportFrequencies|null getByAirport_ident(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportFrequencies\Listing|\Pimcore\Model\DataObject\AirportFrequencies|null getByFrequencies_type(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportFrequencies\Listing|\Pimcore\Model\DataObject\AirportFrequencies|null getByDescription(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportFrequencies\Listing|\Pimcore\Model\DataObject\AirportFrequencies|null getByFrequency_mhz(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class AirportFrequencies extends Concrete
{
public const FIELD_ID_FREQUENCIES = 'id_frequencies';
public const FIELD_AIRPORT_REF = 'airport_ref';
public const FIELD_AIRPORT_IDENT = 'airport_ident';
public const FIELD_FREQUENCIES_TYPE = 'frequencies_type';
public const FIELD_DESCRIPTION = 'description';
public const FIELD_FREQUENCY_MHZ = 'frequency_mhz';

protected $classId = "5";
protected $className = "AirportFrequencies";
protected $id_frequencies;
protected $airport_ref;
protected $airport_ident;
protected $frequencies_type;
protected $description;
protected $frequency_mhz;


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
* Get id_frequencies - 
* @return string|null
*/
public function getId_frequencies(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("id_frequencies");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->id_frequencies;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set id_frequencies - 
* @param string|null $id_frequencies
* @return $this
*/
public function setId_frequencies(?string $id_frequencies): static
{
	$this->markFieldDirty("id_frequencies", true);

	$this->id_frequencies = $id_frequencies;

	return $this;
}

/**
* Get airport_ref - Airport _ref
* @return string|null
*/
public function getAirport_ref(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("airport_ref");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->airport_ref;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set airport_ref - Airport _ref
* @param string|null $airport_ref
* @return $this
*/
public function setAirport_ref(?string $airport_ref): static
{
	$this->markFieldDirty("airport_ref", true);

	$this->airport_ref = $airport_ref;

	return $this;
}

/**
* Get airport_ident - Airport _ident
* @return string|null
*/
public function getAirport_ident(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("airport_ident");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->airport_ident;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set airport_ident - Airport _ident
* @param string|null $airport_ident
* @return $this
*/
public function setAirport_ident(?string $airport_ident): static
{
	$this->markFieldDirty("airport_ident", true);

	$this->airport_ident = $airport_ident;

	return $this;
}

/**
* Get frequencies_type - Frequencies _type
* @return string|null
*/
public function getFrequencies_type(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("frequencies_type");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->frequencies_type;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set frequencies_type - Frequencies _type
* @param string|null $frequencies_type
* @return $this
*/
public function setFrequencies_type(?string $frequencies_type): static
{
	$this->markFieldDirty("frequencies_type", true);

	$this->frequencies_type = $frequencies_type;

	return $this;
}

/**
* Get description - Description
* @return string|null
*/
public function getDescription(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("description");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->description;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set description - Description
* @param string|null $description
* @return $this
*/
public function setDescription(?string $description): static
{
	$this->markFieldDirty("description", true);

	$this->description = $description;

	return $this;
}

/**
* Get frequency_mhz - Frequency _mhz
* @return string|null
*/
public function getFrequency_mhz(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("frequency_mhz");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->frequency_mhz;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set frequency_mhz - Frequency _mhz
* @param string|null $frequency_mhz
* @return $this
*/
public function setFrequency_mhz(?string $frequency_mhz): static
{
	$this->markFieldDirty("frequency_mhz", true);

	$this->frequency_mhz = $frequency_mhz;

	return $this;
}

}

