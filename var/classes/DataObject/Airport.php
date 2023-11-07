<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - id_airport [numeric]
 * - ident [input]
 * - type_airport [input]
 * - name [input]
 * - latitude_deg [input]
 * - longitude_deg [input]
 * - elevation_ft [input]
 * - continent [input]
 * - iso_country [input]
 * - iso_region [input]
 * - municipality [input]
 * - scheduled_service [input]
 * - gps_code [input]
 * - iata_code [input]
 * - local_code [input]
 * - home_link [input]
 * - wikipedia_link [input]
 * - keywords [input]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Airport\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getById_airport(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByIdent(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByType_airport(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByName(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByLatitude_deg(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByLongitude_deg(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByElevation_ft(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByContinent(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByIso_country(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByIso_region(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByMunicipality(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByScheduled_service(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByGps_code(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByIata_code(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByLocal_code(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByHome_link(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByWikipedia_link(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Airport\Listing|\Pimcore\Model\DataObject\Airport|null getByKeywords(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Airport extends Concrete
{
public const FIELD_ID_AIRPORT = 'id_airport';
public const FIELD_IDENT = 'ident';
public const FIELD_TYPE_AIRPORT = 'type_airport';
public const FIELD_NAME = 'name';
public const FIELD_LATITUDE_DEG = 'latitude_deg';
public const FIELD_LONGITUDE_DEG = 'longitude_deg';
public const FIELD_ELEVATION_FT = 'elevation_ft';
public const FIELD_CONTINENT = 'continent';
public const FIELD_ISO_COUNTRY = 'iso_country';
public const FIELD_ISO_REGION = 'iso_region';
public const FIELD_MUNICIPALITY = 'municipality';
public const FIELD_SCHEDULED_SERVICE = 'scheduled_service';
public const FIELD_GPS_CODE = 'gps_code';
public const FIELD_IATA_CODE = 'iata_code';
public const FIELD_LOCAL_CODE = 'local_code';
public const FIELD_HOME_LINK = 'home_link';
public const FIELD_WIKIPEDIA_LINK = 'wikipedia_link';
public const FIELD_KEYWORDS = 'keywords';

protected $classId = "1";
protected $className = "Airport";
protected $id_airport;
protected $ident;
protected $type_airport;
protected $name;
protected $latitude_deg;
protected $longitude_deg;
protected $elevation_ft;
protected $continent;
protected $iso_country;
protected $iso_region;
protected $municipality;
protected $scheduled_service;
protected $gps_code;
protected $iata_code;
protected $local_code;
protected $home_link;
protected $wikipedia_link;
protected $keywords;


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
* Get id_airport - Id_airport
* @return float|null
*/
public function getId_airport(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("id_airport");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->id_airport;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set id_airport - Id_airport
* @param float|null $id_airport
* @return $this
*/
public function setId_airport(?float $id_airport): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("id_airport");
	$this->id_airport = $fd->preSetData($this, $id_airport);
	return $this;
}

/**
* Get ident - Ident
* @return string|null
*/
public function getIdent(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("ident");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->ident;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set ident - Ident
* @param string|null $ident
* @return $this
*/
public function setIdent(?string $ident): static
{
	$this->markFieldDirty("ident", true);

	$this->ident = $ident;

	return $this;
}

/**
* Get type_airport - Type_airport
* @return string|null
*/
public function getType_airport(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("type_airport");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->type_airport;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set type_airport - Type_airport
* @param string|null $type_airport
* @return $this
*/
public function setType_airport(?string $type_airport): static
{
	$this->markFieldDirty("type_airport", true);

	$this->type_airport = $type_airport;

	return $this;
}

/**
* Get name - Name
* @return string|null
*/
public function getName(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("name");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->name;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set name - Name
* @param string|null $name
* @return $this
*/
public function setName(?string $name): static
{
	$this->markFieldDirty("name", true);

	$this->name = $name;

	return $this;
}

/**
* Get latitude_deg - Latitude _deg
* @return string|null
*/
public function getLatitude_deg(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("latitude_deg");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->latitude_deg;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set latitude_deg - Latitude _deg
* @param string|null $latitude_deg
* @return $this
*/
public function setLatitude_deg(?string $latitude_deg): static
{
	$this->markFieldDirty("latitude_deg", true);

	$this->latitude_deg = $latitude_deg;

	return $this;
}

/**
* Get longitude_deg - Longitude _deg
* @return string|null
*/
public function getLongitude_deg(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("longitude_deg");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->longitude_deg;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set longitude_deg - Longitude _deg
* @param string|null $longitude_deg
* @return $this
*/
public function setLongitude_deg(?string $longitude_deg): static
{
	$this->markFieldDirty("longitude_deg", true);

	$this->longitude_deg = $longitude_deg;

	return $this;
}

/**
* Get elevation_ft - Elevation _ft
* @return string|null
*/
public function getElevation_ft(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("elevation_ft");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->elevation_ft;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set elevation_ft - Elevation _ft
* @param string|null $elevation_ft
* @return $this
*/
public function setElevation_ft(?string $elevation_ft): static
{
	$this->markFieldDirty("elevation_ft", true);

	$this->elevation_ft = $elevation_ft;

	return $this;
}

/**
* Get continent - Continent
* @return string|null
*/
public function getContinent(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("continent");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->continent;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set continent - Continent
* @param string|null $continent
* @return $this
*/
public function setContinent(?string $continent): static
{
	$this->markFieldDirty("continent", true);

	$this->continent = $continent;

	return $this;
}

/**
* Get iso_country - Iso _country
* @return string|null
*/
public function getIso_country(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("iso_country");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->iso_country;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set iso_country - Iso _country
* @param string|null $iso_country
* @return $this
*/
public function setIso_country(?string $iso_country): static
{
	$this->markFieldDirty("iso_country", true);

	$this->iso_country = $iso_country;

	return $this;
}

/**
* Get iso_region - Iso _region
* @return string|null
*/
public function getIso_region(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("iso_region");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->iso_region;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set iso_region - Iso _region
* @param string|null $iso_region
* @return $this
*/
public function setIso_region(?string $iso_region): static
{
	$this->markFieldDirty("iso_region", true);

	$this->iso_region = $iso_region;

	return $this;
}

/**
* Get municipality - Municipality
* @return string|null
*/
public function getMunicipality(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("municipality");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->municipality;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set municipality - Municipality
* @param string|null $municipality
* @return $this
*/
public function setMunicipality(?string $municipality): static
{
	$this->markFieldDirty("municipality", true);

	$this->municipality = $municipality;

	return $this;
}

/**
* Get scheduled_service - Scheduled _service
* @return string|null
*/
public function getScheduled_service(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("scheduled_service");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->scheduled_service;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set scheduled_service - Scheduled _service
* @param string|null $scheduled_service
* @return $this
*/
public function setScheduled_service(?string $scheduled_service): static
{
	$this->markFieldDirty("scheduled_service", true);

	$this->scheduled_service = $scheduled_service;

	return $this;
}

/**
* Get gps_code - Gps _code
* @return string|null
*/
public function getGps_code(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("gps_code");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->gps_code;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set gps_code - Gps _code
* @param string|null $gps_code
* @return $this
*/
public function setGps_code(?string $gps_code): static
{
	$this->markFieldDirty("gps_code", true);

	$this->gps_code = $gps_code;

	return $this;
}

/**
* Get iata_code - Iata _code
* @return string|null
*/
public function getIata_code(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("iata_code");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->iata_code;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set iata_code - Iata _code
* @param string|null $iata_code
* @return $this
*/
public function setIata_code(?string $iata_code): static
{
	$this->markFieldDirty("iata_code", true);

	$this->iata_code = $iata_code;

	return $this;
}

/**
* Get local_code - Local _code
* @return string|null
*/
public function getLocal_code(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("local_code");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->local_code;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set local_code - Local _code
* @param string|null $local_code
* @return $this
*/
public function setLocal_code(?string $local_code): static
{
	$this->markFieldDirty("local_code", true);

	$this->local_code = $local_code;

	return $this;
}

/**
* Get home_link - Home _link
* @return string|null
*/
public function getHome_link(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("home_link");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->home_link;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set home_link - Home _link
* @param string|null $home_link
* @return $this
*/
public function setHome_link(?string $home_link): static
{
	$this->markFieldDirty("home_link", true);

	$this->home_link = $home_link;

	return $this;
}

/**
* Get wikipedia_link - Wikipedia _link
* @return string|null
*/
public function getWikipedia_link(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("wikipedia_link");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->wikipedia_link;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set wikipedia_link - Wikipedia _link
* @param string|null $wikipedia_link
* @return $this
*/
public function setWikipedia_link(?string $wikipedia_link): static
{
	$this->markFieldDirty("wikipedia_link", true);

	$this->wikipedia_link = $wikipedia_link;

	return $this;
}

/**
* Get keywords - Keywords
* @return string|null
*/
public function getKeywords(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("keywords");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->keywords;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set keywords - Keywords
* @param string|null $keywords
* @return $this
*/
public function setKeywords(?string $keywords): static
{
	$this->markFieldDirty("keywords", true);

	$this->keywords = $keywords;

	return $this;
}

}

