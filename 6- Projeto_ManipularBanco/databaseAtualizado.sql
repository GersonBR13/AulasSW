DELETE FROM `orders`;

INSERT INTO `orders`(`ORD_NUM`, `ORD_AMOUNT`, `ADVANCE_AMOUNT`, `ORD_DATE`, `CUST_CODE`, `AGENT_CODE`, `ORD_DESCRIPTION`) VALUES 
(01, 1000.00, 100.00,'20200819','C01','A001',''),
(02, 2000.00, 200.00,'20200819','C02','A002',''),
(03, 3000.00, 300.00,'20200819','C03','A003',''),
(04, 4000.00, 400.00,'20200819','C04','A004',''),
(05, 5000.00, 500.00,'20200819','C05','A005',''),
(06, 6000.00, 600.00,'20200819','C06','A006',''),
(07, 7000.00, 700.00,'20200819','C07','A007',''),
(08, 8000.00, 800.00,'20200819','C08','A008',''),
(09, 9000.00, 900.00,'20200819','C09','A009',''),
(010, 10000.00, 1000.00,'20200819','C010','A0010','');

UPDATE `orders` SET `ORD_DESCRIPTION` = 'ATUALIZADO' WHERE `ORD_DESCRIPTION` = ''