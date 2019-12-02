CREATE DEFINER=`root`@`localhost` TRIGGER `dundermifflindb`.`line_AFTER_INSERT` AFTER INSERT ON `line` FOR EACH ROW
BEGIN
    SET @invTotalSum = (SELECT SUM(LNE_PRICE) FROM line WHERE INV_NUMBER = NEW.INV_NUMBER);
    SET @lastID = NEW.INV_NUMBER;
    UPDATE invoice SET invoice.INV_TOTAL = @invTotalSum WHERE INV_NUM = @lastID;
END