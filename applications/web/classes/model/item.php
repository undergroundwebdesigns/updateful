<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Item extends RDFORM {
	
	protected $namespaces = array(
		'main' => 'dev.foundaround.me/data#',
		'unspsc' => 'http://www.ksl.stanford.edu/projects/DAML/UNSPSC.daml#',
		'geo' => 'http://www.w3.org/2003/01/geo/wgs84_pos#',
		'rdfs' => 'http://www.w3.org/2000/01/rdf-schema#',
		'image' => 'http://xmlns.com/foaf/0.1/',
	);

	protected $validation_rules = array(
		'rdfs:label' => 'required',
		'user_id' => 'required',
		'geo:lat' => 'required',
		'geo:long' => 'required',
		'image:image' => 'optional',
		'color' => 'optional',
		'madeOf' => 'optional',
		'isAntique' => 'optional',
		'condition' => 'optional',
	);
}