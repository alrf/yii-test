CREATE TABLE IF NOT EXISTS `currencies` (
  `id` INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `chg_percent` VARCHAR(20),
  `change` VARCHAR(20),
  `name` VARCHAR(20),
  `price` VARCHAR(20),
  `symbol` VARCHAR(20),
  `ts` VARCHAR(20),
  `type` VARCHAR(20),
  `utctime` VARCHAR(30),
  `volume` VARCHAR(20)
);
