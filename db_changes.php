## 04-02

DROP TABLE IF EXISTS `city_master`;
CREATE TABLE IF NOT EXISTS `city_master` (
  `i_id` int NOT NULL AUTO_INCREMENT,
  `i_state_id` int NOT NULL,
  `v_city_name` varchar(50) NOT NULL,
  `t_is_active` tinyint NOT NULL DEFAULT '1',
  `t_is_deleted` tinyint NOT NULL DEFAULT '0',
  `dt_created_at` datetime NOT NULL,
  `i_created_id` int NOT NULL,
  `dt_updated_at` datetime DEFAULT NULL,
  `i_updated_id` int DEFAULT NULL,
  `dt_deleted_at` datetime DEFAULT NULL,
  `i_deleted_id` int DEFAULT NULL,
  `v_ip` varchar(20) NOT NULL,
  PRIMARY KEY (`i_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;