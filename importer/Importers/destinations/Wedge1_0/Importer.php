<?php
/**
 * @name      OpenImporter
 * @copyright OpenImporter contributors
 * @license   BSD http://opensource.org/licenses/BSD-3-Clause
 *
 * @version 2.0 Alpha
 *
 * This file contains code based on:
 *
 * Simple Machines Forum (SMF)
 * copyright:	2011 Simple Machines (http://www.simplemachines.org)
 * license:	BSD, See included LICENSE.TXT for terms and conditions.
 *
 * Copyright (c) 2014, Thorsten Eurich and René-Gilles Deberdt
 * All rights reserved.
 */

namespace OpenImporter\Importers\destinations\Wedge1_0;

/**
 * The class contains code that allows the Importer to obtain settings
 * from the Wedge installation.
 */
class Importer extends \OpenImporter\Importers\destinations\SmfCommonOrigin
{
	public $attach_extension = 'ext';

	public function getName()
	{
		return 'Wedge 1.0';
	}

	public function __construct()
	{
		$this->scriptname = $this->getName();
	}
}