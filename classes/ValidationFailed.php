<?php
/**
 * Fuel is a fast, lightweight, community driven PHP 5.4+ framework.
 *
 * @package    Fuel
 * @version    develop
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2018 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Orm;

/**
 *  Exception to throw when validation failed
 */
class ValidationFailed extends \FuelException
{
	/**
	 * @var  Fieldset the fieldset causing this exception
	 */
	protected $fieldset;

	/**
	 * Overridden \FuelException construct to add a Fieldset instance into the exception
	 *
	 * @param  string  the error message
	 * @param  int  the error code
	 * @param  \Exception any previous exception
	 * @param  \Fieldset  the fieldset on which this exception was triggered
	 */
	public function __construct($message = null, $code = 0, \Exception $previous = null, \Fieldset $fieldset = null)
	{
		parent::__construct($message, $code, $previous);

		$this->fieldset = $fieldset;
	}

	/**
	 * Gets the Fieldset from this exception
	 *
	 * @return Fieldset
	 */
	public function get_fieldset()
	{
		return $this->fieldset;
	}
}
