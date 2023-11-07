<?php

namespace Pimcore\Model\DataObject\Api;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Api|false current()
 * @method DataObject\Api[] load()
 * @method DataObject\Api[] getData()
 * @method DataObject\Api[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "4";
protected $className = "Api";


/**
* Filter by userId (User Id)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByUserId ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("userId")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by idApi (Id Api)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByIdApi ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("idApi")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by title (Title)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByTitle ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("title")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by completed (Completed)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByCompleted ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("completed")->addListingFilter($this, $data, $operator);
	return $this;
}



}
