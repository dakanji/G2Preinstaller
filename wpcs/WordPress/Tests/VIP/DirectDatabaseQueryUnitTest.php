<?php
/**
 * Unit test class for WordPress Coding Standard.
 *
 * @package WPCS\WordPressCodingStandards
 * @link    https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards
 * @license https://opensource.org/licenses/MIT MIT
 */
namespace WordPress\Tests\VIP;

use PHP_CodeSniffer\Tests\Standards\AbstractSniffUnitTest;

/**
 * Unit test class for the DirectDatabaseQuery sniff.
 *
 * @package WPCS\WordPressCodingStandards
 *
 * @since   0.3.0
 * @since   0.13.0 Class name changed: this class is now namespaced.
 */
class DirectDatabaseQueryUnitTest extends AbstractSniffUnitTest {
	/**
	 * Returns the lines where errors should occur.
	 *
	 * @return array <int line number> => <int number of errors>
	 */
	public function getErrorList() {
		return array(
			6   => 1,
			8   => 1,
			32  => 1,
			34  => 1,
			50  => 1,
			78  => 1,
			79  => 1,
			80  => 1,
			170 => 1,
			178 => 1,
			190 => 1,
			250 => 1,
			257 => 1,
			274 => 1,
		);
	}

	/**
	 * Returns the lines where warnings should occur.
	 *
	 * @return array <int line number> => <int number of warnings>
	 */
	public function getWarningList() {
		return array(
			6   => 1,
			17  => 1,
			38  => 1,
			50  => 1,
			112 => 1,
			250 => 1,
		);
	}
} // End class.
