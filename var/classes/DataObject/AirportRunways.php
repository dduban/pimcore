<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - id_runways [input]
 * - airport_ref [input]
 * - airport_ident [input]
 * - length_ft [input]
 * - width_ft [input]
 * - surface [input]
 * - lighted [input]
 * - closed [input]
 * - le_ident [input]
 * - le_latitude_deg [input]
 * - le_longitude_deg [input]
 * - le_elevation_ft [input]
 * - le_heading_degT [input]
 * - le_displaced_threshold_ft [input]
 * - he_ident [input]
 * - he_latitude_deg [input]
 * - he_longitude_deg [input]
 * - he_elevation_ft [input]
 * - he_heading_degT [input]
 * - he_displaced_threshold_ft [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getById_runways(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByAirport_ref(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByAirport_ident(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByLength_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByWidth_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getBySurface(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByLighted(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByClosed(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByLe_ident(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByLe_latitude_deg(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByLe_longitude_deg(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByLe_elevation_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByLe_heading_degT(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByLe_displaced_threshold_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByHe_ident(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByHe_latitude_deg(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByHe_longitude_deg(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByHe_elevation_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByHe_heading_degT(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\AirportRunways\Listing|\Pimcore\Model\DataObject\AirportRunways|null getByHe_displaced_threshold_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class AirportRunways extends Concrete
{
public const FIELD_ID_RUNWAYS = 'id_runways';
public const FIELD_AIRPORT_REF = 'airport_ref';
public const FIELD_AIRPORT_IDENT = 'airport_ident';
public const FIELD_LENGTH_FT = 'length_ft';
public const FIELD_WIDTH_FT = 'width_ft';
public const FIELD_SURFACE = 'surface';
public const FIELD_LIGHTED = 'lighted';
public const FIELD_CLOSED = 'closed';
public const FIELD_LE_IDENT = 'le_ident';
public const FIELD_LE_LATITUDE_DEG = 'le_latitude_deg';
public const FIELD_LE_LONGITUDE_DEG = 'le_longitude_deg';
public const FIELD_LE_ELEVATION_FT = 'le_elevation_ft';
public const FIELD_LE_HEADING_DEG_T = 'le_heading_degT';
public const FIELD_LE_DISPLACED_THRESHOLD_FT = 'le_displaced_threshold_ft';
public const FIELD_HE_IDENT = 'he_ident';
public const FIELD_HE_LATITUDE_DEG = 'he_latitude_deg';
public const FIELD_HE_LONGITUDE_DEG = 'he_longitude_deg';
public const FIELD_HE_ELEVATION_FT = 'he_elevation_ft';
public const FIELD_HE_HEADING_DEG_T = 'he_heading_degT';
public const FIELD_HE_DISPLACED_THRESHOLD_FT = 'he_displaced_threshold_ft';

protected $classId = "3";
protected $className = "AirportRunways";
protected $id_runways;
protected $airport_ref;
protected $airport_ident;
protected $length_ft;
protected $width_ft;
protected $surface;
protected $lighted;
protected $closed;
protected $le_ident;
protected $le_latitude_deg;
protected $le_longitude_deg;
protected $le_elevation_ft;
protected $le_heading_degT;
protected $le_displaced_threshold_ft;
protected $he_ident;
protected $he_latitude_deg;
protected $he_longitude_deg;
protected $he_elevation_ft;
protected $he_heading_degT;
protected $he_displaced_threshold_ft;


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
* Get id_runways - Id
* @return string|null
*/
public function getId_runways(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("id_runways");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->id_runways;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set id_runways - Id
* @param string|null $id_runways
* @return $this
*/
public function setId_runways(?string $id_runways): static
{
	$this->markFieldDirty("id_runways", true);

	$this->id_runways = $id_runways;

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
* Get length_ft - Length _ft
* @return string|null
*/
public function getLength_ft(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("length_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->length_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set length_ft - Length _ft
* @param string|null $length_ft
* @return $this
*/
public function setLength_ft(?string $length_ft): static
{
	$this->markFieldDirty("length_ft", true);

	$this->length_ft = $length_ft;

	return $this;
}

/**
* Get width_ft - Width _ft
* @return string|null
*/
public function getWidth_ft(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("width_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->width_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set width_ft - Width _ft
* @param string|null $width_ft
* @return $this
*/
public function setWidth_ft(?string $width_ft): static
{
	$this->markFieldDirty("width_ft", true);

	$this->width_ft = $width_ft;

	return $this;
}

/**
* Get surface - Surface
* @return string|null
*/
public function getSurface(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("surface");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->surface;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set surface - Surface
* @param string|null $surface
* @return $this
*/
public function setSurface(?string $surface): static
{
	$this->markFieldDirty("surface", true);

	$this->surface = $surface;

	return $this;
}

/**
* Get lighted - Lighted
* @return string|null
*/
public function getLighted(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("lighted");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->lighted;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set lighted - Lighted
* @param string|null $lighted
* @return $this
*/
public function setLighted(?string $lighted): static
{
	$this->markFieldDirty("lighted", true);

	$this->lighted = $lighted;

	return $this;
}

/**
* Get closed - Closed
* @return string|null
*/
public function getClosed(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("closed");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->closed;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set closed - Closed
* @param string|null $closed
* @return $this
*/
public function setClosed(?string $closed): static
{
	$this->markFieldDirty("closed", true);

	$this->closed = $closed;

	return $this;
}

/**
* Get le_ident - Le _ident
* @return string|null
*/
public function getLe_ident(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_ident");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_ident;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_ident - Le _ident
* @param string|null $le_ident
* @return $this
*/
public function setLe_ident(?string $le_ident): static
{
	$this->markFieldDirty("le_ident", true);

	$this->le_ident = $le_ident;

	return $this;
}

/**
* Get le_latitude_deg - Le _latitude _deg
* @return string|null
*/
public function getLe_latitude_deg(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_latitude_deg");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_latitude_deg;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_latitude_deg - Le _latitude _deg
* @param string|null $le_latitude_deg
* @return $this
*/
public function setLe_latitude_deg(?string $le_latitude_deg): static
{
	$this->markFieldDirty("le_latitude_deg", true);

	$this->le_latitude_deg = $le_latitude_deg;

	return $this;
}

/**
* Get le_longitude_deg - Le _longitude _deg
* @return string|null
*/
public function getLe_longitude_deg(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_longitude_deg");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_longitude_deg;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_longitude_deg - Le _longitude _deg
* @param string|null $le_longitude_deg
* @return $this
*/
public function setLe_longitude_deg(?string $le_longitude_deg): static
{
	$this->markFieldDirty("le_longitude_deg", true);

	$this->le_longitude_deg = $le_longitude_deg;

	return $this;
}

/**
* Get le_elevation_ft - Le _elevation _ft
* @return string|null
*/
public function getLe_elevation_ft(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_elevation_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_elevation_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_elevation_ft - Le _elevation _ft
* @param string|null $le_elevation_ft
* @return $this
*/
public function setLe_elevation_ft(?string $le_elevation_ft): static
{
	$this->markFieldDirty("le_elevation_ft", true);

	$this->le_elevation_ft = $le_elevation_ft;

	return $this;
}

/**
* Get le_heading_degT - Le _heading _deg T
* @return string|null
*/
public function getLe_heading_degT(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_heading_degT");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_heading_degT;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_heading_degT - Le _heading _deg T
* @param string|null $le_heading_degT
* @return $this
*/
public function setLe_heading_degT(?string $le_heading_degT): static
{
	$this->markFieldDirty("le_heading_degT", true);

	$this->le_heading_degT = $le_heading_degT;

	return $this;
}

/**
* Get le_displaced_threshold_ft - Le _displaced _threshold _ft
* @return string|null
*/
public function getLe_displaced_threshold_ft(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("le_displaced_threshold_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->le_displaced_threshold_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set le_displaced_threshold_ft - Le _displaced _threshold _ft
* @param string|null $le_displaced_threshold_ft
* @return $this
*/
public function setLe_displaced_threshold_ft(?string $le_displaced_threshold_ft): static
{
	$this->markFieldDirty("le_displaced_threshold_ft", true);

	$this->le_displaced_threshold_ft = $le_displaced_threshold_ft;

	return $this;
}

/**
* Get he_ident - He _ident
* @return string|null
*/
public function getHe_ident(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_ident");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_ident;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_ident - He _ident
* @param string|null $he_ident
* @return $this
*/
public function setHe_ident(?string $he_ident): static
{
	$this->markFieldDirty("he_ident", true);

	$this->he_ident = $he_ident;

	return $this;
}

/**
* Get he_latitude_deg - He _latitude _deg
* @return string|null
*/
public function getHe_latitude_deg(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_latitude_deg");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_latitude_deg;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_latitude_deg - He _latitude _deg
* @param string|null $he_latitude_deg
* @return $this
*/
public function setHe_latitude_deg(?string $he_latitude_deg): static
{
	$this->markFieldDirty("he_latitude_deg", true);

	$this->he_latitude_deg = $he_latitude_deg;

	return $this;
}

/**
* Get he_longitude_deg - He _longitude _deg
* @return string|null
*/
public function getHe_longitude_deg(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_longitude_deg");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_longitude_deg;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_longitude_deg - He _longitude _deg
* @param string|null $he_longitude_deg
* @return $this
*/
public function setHe_longitude_deg(?string $he_longitude_deg): static
{
	$this->markFieldDirty("he_longitude_deg", true);

	$this->he_longitude_deg = $he_longitude_deg;

	return $this;
}

/**
* Get he_elevation_ft - He _elevation _ft
* @return string|null
*/
public function getHe_elevation_ft(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_elevation_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_elevation_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_elevation_ft - He _elevation _ft
* @param string|null $he_elevation_ft
* @return $this
*/
public function setHe_elevation_ft(?string $he_elevation_ft): static
{
	$this->markFieldDirty("he_elevation_ft", true);

	$this->he_elevation_ft = $he_elevation_ft;

	return $this;
}

/**
* Get he_heading_degT - He _heading _deg T
* @return string|null
*/
public function getHe_heading_degT(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_heading_degT");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_heading_degT;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_heading_degT - He _heading _deg T
* @param string|null $he_heading_degT
* @return $this
*/
public function setHe_heading_degT(?string $he_heading_degT): static
{
	$this->markFieldDirty("he_heading_degT", true);

	$this->he_heading_degT = $he_heading_degT;

	return $this;
}

/**
* Get he_displaced_threshold_ft - He _displaced _threshold _ft
* @return string|null
*/
public function getHe_displaced_threshold_ft(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("he_displaced_threshold_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->he_displaced_threshold_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set he_displaced_threshold_ft - He _displaced _threshold _ft
* @param string|null $he_displaced_threshold_ft
* @return $this
*/
public function setHe_displaced_threshold_ft(?string $he_displaced_threshold_ft): static
{
	$this->markFieldDirty("he_displaced_threshold_ft", true);

	$this->he_displaced_threshold_ft = $he_displaced_threshold_ft;

	return $this;
}

}

