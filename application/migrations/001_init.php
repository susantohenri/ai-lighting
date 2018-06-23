<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Migration_init extends CI_Migration {

  function up () {
    $this->db->query("
      CREATE TABLE `product` (
        `uuid` varchar(255) NOT NULL,
        `item` varchar(255) NOT NULL,
        `image` varchar(255) NOT NULL,
        `installed_payback_price` int(11) NOT NULL,
        `availability` varchar(255) NOT NULL,
        `spec_sheet` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

    $this->db->query("
      CREATE TABLE `company` (
        `uuid` varchar(255) NOT NULL,
        `user` varchar(255) NOT NULL,
        `name` varchar(255) NOT NULL,
        `abn` varchar(255) NOT NULL,
        `address` varchar(255) NOT NULL,
        `suburb` varchar(255) NOT NULL,
        `postcode` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `phone` varchar(255) NOT NULL,
        `a_class_lic_no` varchar(255) NOT NULL,
        `rec_no` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");

    $this->db->query("
      CREATE TABLE `user` (
        `uuid` varchar(255) NOT NULL,
        `email` varchar(255) NOT NULL,
        `password` varchar(255) NOT NULL,
        `role` varchar(255) NOT NULL,
        `firstname` varchar(255) NOT NULL,
        `lastname` varchar(255) NOT NULL,
        PRIMARY KEY (`uuid`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8
    ");
  }

  function down () {
    foreach (array(
      'product',
      'setting',
      'user'
    ) as $table) $this->db->query("DROP TABLE `{$table}`");
  }

}