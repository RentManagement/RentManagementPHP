CREATE DATABASE rentmanagement_db;
USE rentmanagement_db;
CREATE Table IF NOT EXISTS rents (
  id int NOT NULL AUTO_INCREMENT,
  personName VARCHAR(100),
  startTime TIME NOT NULL,
  startDate DATE NOT NULL,
  endTime TIME NULL,
  endDate DATE NULL,
  paymentAmount INTEGER NULL,
  PRIMARY KEY (id)
);
INSERT INTO
  rents(
    personName,
    startTime,
    startDate,
    endTime,
    endDate,
    paymentAmount
  )
VALUES
  (
    "Pepe",
    "12:10:25",
    "2022:10:25",
    "14:02:26",
    "2022:10:25",
    800
  );
INSERT INTO
  rents(
    personName,
    startTime,
    startDate,
    endTime,
    endDate,
    paymentAmount
  )
VALUES
  (
    "Carlos",
    "04:10:25",
    "2022:10:26",
    "05:07:01",
    "2022:10:26",
    900
  );
INSERT INTO
  rents(
    personName,
    startTime,
    startDate,
    endTime,
    endDate,
    paymentAmount
  )
VALUES
  (
    "Marlon",
    "11:10:25",
    "2022:02:25",
    "14:02:26",
    "2022:02:25",
    1800
  );
INSERT INTO
  rents(
    personName,
    startTime,
    startDate,
    endTime,
    endDate,
    paymentAmount
  )
VALUES
  (
    "Ana",
    "14:00:25",
    "2022:10:25",
    "14:00:46",
    "2022:10:26",
    1800
  );
INSERT INTO
  rents(
    personName,
    startTime,
    startDate,
    endTime,
    endDate,
    paymentAmount
  )
VALUES
  (
    "Raul",
    "12:10:25",
    "2022:10:25",
    "14:02:26",
    "2022:10:25",
    300
  );
INSERT INTO
  rents(
    personName,
    startTime,
    startDate,
    endTime,
    endDate,
    paymentAmount
  )
VALUES
  (
    "Juan",
    "12:10:25",
    "2022:10:25",
    "14:02:26",
    "2022:10:25",
    700
  );