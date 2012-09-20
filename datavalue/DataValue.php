<?php

namespace DataValue;

/**
 * Interface for objects that represent a single data value.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @since 0.1
 *
 * @file
 * @ingroup DataValue
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
interface DataValue extends \Hashable, \Comparable, \Serializable, \Immutable {

	/**
	 * Returns the identifier of the datavalues type.
	 * This is not to be confused with the DataType provided by the DataTypes extension.
	 *
	 * @since 0.1
	 *
	 * @return string
	 */
	public function getType();

	/**
	 * Returns a key that can be used to sort the data value with.
	 * It can be either numeric or a string.
	 *
	 * @since 0.1
	 *
	 * @return string|float|int
	 */
	public function getSortKey();

}
