<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Install_actor extends CI_Migration {

	private $tables = 'actor';

	public function __construct() {
		parent::__construct();
		$this->load->dbforge();
	}

	public function up() {

		// Drop table 'actor' if it exists
		$this->dbforge->drop_table($this->tables, TRUE);

		// Table structure for table 'actor'
		$this->dbforge->add_field([
			'actor_id' => [
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'fullname' => [
				'type'       => 'VARCHAR',
				'constraint' => '250',
			],
			'last_update' => [
				'type'       => 'timestamp',
			],
			'info' => [
				'type'       => 'TEXT',
			]
		]);
		$this->dbforge->add_key('actor_id', TRUE);
		$this->dbforge->create_table($this->tables);

		// Dumping data for table 'actor'
		$data = [
			[
				'actor_id' => 1,
				'fullname'        => 'GUINESS PENELOPE',
				'last_update' => '2011-04-24 19:27:25'
			]
		];
		$this->db->insert_batch($this->tables, $data);

	}

}
